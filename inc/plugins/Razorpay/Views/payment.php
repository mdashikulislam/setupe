 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 
    <script>
     
            var options = {
                key:'<?= $publishableKey; ?>', // Your Razorpay Publishable Key
                amount:<?= $amount; ?>,
                currency:'<?= $currency; ?>',
                description:'<?= $description; ?>',
                order_id:'<?= $checkout_session_id; ?>',
                image:"https://wha.udwpl.com/assets/img/logo-color.svg",
                prefill: {
                    name: '<?= $name; ?>',
                    email: '<?= $email; ?>',
                    contact: "+919828507566"
                    // Add other pre-filled information if required
                },
                theme: {
        color: "#6BC610",
    },
    "handler": function (response){
       var url='<?= $success_url; ?>';
   var form = document.createElement('form');
  form.style.display = 'none';
  form.method = 'post';
  form.action = url;

  // Append the data as hidden input fields
  function appendInputField(name, value) {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = name;
    input.value = value;
    form.appendChild(input);
  }

  appendInputField('razorpay_payment_id', response.razorpay_payment_id);
  appendInputField('razorpay_order_id', response.razorpay_order_id);
  appendInputField('razorpay_signature', response.razorpay_signature);

  // Append the form to the document body and submit it
  document.body.appendChild(form);
  form.submit();


    },
    "modal": {
      "ondismiss": function () {
      
          
       var url3 = '<?= $cancel_url; ?>';
            window.open(url3, "_self");
        
      }
    }
            };

            var rzp = new Razorpay(options);
            rzp.on('payment.failed', function (response){
        var url2='<?= $success_url; ?>';
        window.open(url2, "_self");
});
            rzp.open();
    
    </script>

 
 
 

    





