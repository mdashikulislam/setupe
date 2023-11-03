<?php
namespace Plugins\Razorpay\Controllers;

class Razorpay extends \CodeIgniter\Controller
{
    public function __construct(){
        $reflect = new \ReflectionClass(get_called_class());
        $this->module = strtolower( $reflect->getShortName() );
        $this->config = include realpath( __DIR__."/../Config.php" );
        include get_module_dir( __DIR__ , 'Libraries/vendor/autoload.php');

        $this->publishable_key = get_option("razorpay_publishable_key", "");
        $this->secret_key = get_option("razorpay_secret_key", "");
        $this->plan = get_payment_plan( uri("segment", 3), uri("segment", 4) );

        if( !get_option("razorpay_one_time_status", 0) || empty($this->plan) || $this->publishable_key == "" || $this->secret_key == "" ){
            redirect_to( base_url() );
        }
    }
    
   

    public function index($ids = "")
    {
        try {
            if(!get_user("id")){
                redirect_to( base_url("login"), true);
            }

            if(get_user_data("is_subscription", 0)){
                $error = __("You are using the monthly payment plan. Cancel it if you want to change the package or change your payment method.");
                redirect_to( base_url( "profile/index/plan?error=".urlencode($error) ) );
            }

            $iszdc = isZeroDecimalCurrency( get_option('payment_currency','USD') );
            $keyId=get_option("razorpay_publishable_key", "");
            
            $keySecret=get_option("razorpay_secret_key", "");
            
              $api = new \Razorpay\Api\Api($keyId, $keySecret);
            $order = $api->order->create([
                'receipt' => 'order_receipt_' . time(),
                'amount' =>  round( !$iszdc ? $this->plan->amount : ($this->plan->amount / 100), 2)*100,
                'currency' => get_option('payment_currency', 'USD'),
                'payment_capture' => 1, // Auto capture payment
            ]);
            
             if(!get_session("razorpay_check")){
                  set_session(["razorpay_check" => $order->id]);
             }else{
                  remove_session(["razorpay_check"]);
                   set_session(["razorpay_check" => $order->id]);
             }
          
             return view("Plugins\Razorpay\Views\payment", [ "checkout_session_id" => $order->id, 'orderId' => $order->id,
            'amount' =>  round( !$iszdc ? $this->plan->amount : ($this->plan->amount / 100), 2)*100,
            'currency' => get_option('payment_currency', 'USD'),
            'publishableKey' => $keyId,
           'name' =>  $this->plan->name,
        'description' => $this->plan->desc,
                    'email' => get_user("email"),
        'name' => get_user("fullname"),  
      'success_url' => base_url("razorpay/complete/".$ids."/".$this->plan->by), 
       'cancel_url' => base_url("payment/failed"), ]);

        }catch  (\Exception $e) {
            $error = [
                "status" => "error",
                "message" => $e->getMessage()
            ];

            redirect_to( base_url("payment/failed?".http_build_query($error) ) );
        }
        
    }

    public function complete($ids = ""){
        if(!post("razorpay_payment_id")||!post("razorpay_order_id")||!post("razorpay_signature")){
                 remove_session(["razorpay_check"]);
             redirect_to( base_url("payment/failed") );
            }
        try {
            
             $paymentId = post("razorpay_payment_id");
        $orderId = post("razorpay_order_id");
        $signature = post("razorpay_signature");

            if(!get_session("razorpay_check")) redirect_to( get_module_url("index/".$ids."/".$this->plan->by) );

         if($orderId != get_session("razorpay_check")){
              remove_session(["razorpay_check"]);
             redirect_to( base_url("payment/failed") );
         }

          $keyId=get_option("razorpay_publishable_key", "");
            
            $keySecret=get_option("razorpay_secret_key", "");
        // Verify the payment signature to ensure the payment is valid and not tampered with
        // You can use the Razorpay PHP SDK's utility function for signature verification
        $api = new \Razorpay\Api\Api($keyId, $keySecret);
        $isValidSignature =$api->payment->fetch($paymentId);
         remove_session(["razorpay_check"]);
if($isValidSignature->status='captured'){
                $data = [
                    'type' => 'razorpay',
                    'plan' => $this->plan->id,
                    'by' => $this->plan->by,
                    'transaction_id' =>$paymentId,
                    'amount'=>$isValidSignature->amount/100,
                ];
 
                payment_save($data);
            }else{
               redirect_to( base_url("payment/failed") );
            } 


        } catch (Exception $e) {
            echo $e->getMessage();
            exit(0);
        }

    }
}
