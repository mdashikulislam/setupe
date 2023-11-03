<?php
namespace Plugins\Upindian\Controllers;

class Upindian extends \CodeIgniter\Controller
{
    public function __construct(){
        $reflect = new \ReflectionClass(get_called_class());
        $this->module = strtolower( $reflect->getShortName() );
        $this->config = include realpath( __DIR__."/../Config.php" );
        $this->publishable_key = get_option("upindian_publishable_key", "");
        $this->secret_key = get_option("upindian_secret_key", "");
        $this->plan = get_payment_plan( uri("segment", 3), uri("segment", 4) );

        if( !get_option("upindian_one_time_status", 0)|| $this->publishable_key == "" || $this->secret_key == "" ){
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

            $iszdc = isZeroDecimalCurrency( get_option('payment_currency','INR') );
            
            $keyId=get_option("upindian_publishable_key", "");
            
            $keySecret=get_option("upindian_secret_key", "");
            $call_back=base_url("upindian/call_back/".$ids."/".$this->plan->by)."?access_token=$keySecret&instance_id=$keyId";
            
            
            $upindian_reciver_upi=get_option("upindian_reciver_upi", "");
            $findurltest="https://ocmws.com/apiv1/create_payment?access_token=".$keySecret."&instance_id=".$keyId."&type=upi&amount=".$this->plan->amount."&reciver_upi=".$upindian_reciver_upi."&sender_upi=$upindian_reciver_upi&call_back=".urlencode($call_back);
            
          $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$findurltest);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $response =curl_exec($ch);
  curl_close($ch); // Close the connection
  
  
  $result=json_decode($response);
  $new=$result->status;
  if($new =="success")
  {
   
   if(!get_session("razorpay_check")){
                  set_session(["razorpay_check" => $result->transction_id]);
             }else{
                  remove_session(["razorpay_check"]);
                   set_session(["razorpay_check" =>$result->transction_id]);
             }
       
      $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" =>view("Plugins\Upindian\Views\payment",[ 
            'orderId' =>$result->transction_id,
             'qr_code' =>$result->qr_base64_PNG,
             'upi_link' =>$result->upi_link,
       'success_url' =>base_url("upindian/complete/".$ids."/".$this->plan->by), 
       'cancel_url' =>base_url("upindian/cancel/".$ids."/".$this->plan->by) ])
        ];

        return view('Plugins\Upindian\Views\index', $data);  
  }
  else 
  {
   $error = [
                "status" => "error",
                "message" => $response 
            ];

            redirect_to( base_url("payment/failed?".http_build_query($error) ) );
  }
              }catch  (\Exception $e) {
            $error = [
                "status" => "error",
                "message" => $e->getMessage()
            ];

            redirect_to( base_url("payment/failed?".http_build_query($error) ) );
        }
        
    }
    
    public function cancel($ids = ""){
        
       $transction_id=get_session("razorpay_check");
       $keyId=get_option("upindian_publishable_key", "");
       $keySecret=get_option("upindian_secret_key", "");
       
       
        $findurltest="https://ocmws.com/apiv1/cancel_payment?access_token=".$keySecret."&instance_id=".$keyId."&transction_id=$transction_id";
            
          $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$findurltest);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $response = curl_exec($ch);
  $result = json_decode($response);
  curl_close($ch); // Close the connection
    if($result->status=='success'){
        
        remove_session(["razorpay_check"]);
             redirect_to( base_url("payment/failed") );
    }
        
    }

    public function complete($ids = ""){
        if(!post("upi_ref_id")){
                 remove_session(["razorpay_check"]);
             redirect_to( base_url("payment/failed") );
            }
        try {
            
             $paymentId=post("upi_ref_id");
       

            if(!get_session("razorpay_check")) redirect_to( base_url() );

          $keyId=get_option("upindian_publishable_key", "");
       $keySecret=get_option("upindian_secret_key", "");
        $transction_id=get_session("razorpay_check");
        
            $upindian_reciver_upi=get_option("upindian_reciver_upi", "");
            $findurltest="https://ocmws.com/apiv1/post_upi_ref_id?access_token=".$keySecret."&instance_id=".$keyId."&upi_ref_id=".$paymentId."&transction_id=$transction_id";
            
          $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$findurltest);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $response = curl_exec($ch);
  $result = json_decode($response);
  curl_close($ch); // Close the connection



if($result->status=='captured'){
                $data = [
                    'type' => 'upindian',
                    'plan' => $this->plan->id,
                    'by' => $this->plan->by,
                    'transaction_id' =>$transction_id,
                    'amount'=>$this->plan->amount,
                ];
                    remove_session(["razorpay_check"]);
                    payment_save($data);
              
                 redirect_to( base_url("payment/successful") );
                  
                   
            }else{
               redirect_to( base_url("payment/failed") );
            } 


        } catch (Exception $e) {
            echo $e->getMessage();
            exit(0);
        }

    }
    
    public function call_back($ids = ""){
             $instance_id=post("instance_id");
             $access_token=post("access_token");
             $keyId=get_option("upindian_publishable_key", "");
             $keySecret=get_option("upindian_secret_key", "");
             if($instance_id==$keyId&&$access_token==$keySecret){
                 $status=post("status");
                 $transction_id=post("transction_id");
                 
if($status=='captured'){
                $data = [
                    'type' => 'upindian',
                    'plan' => $this->plan->id,
                    'by' => $this->plan->by,
                    'transaction_id' =>$transction_id,
                    'amount'=>$this->plan->amount,
                ];
                    payment_save1($data);
              }
}
}
    
    
}
