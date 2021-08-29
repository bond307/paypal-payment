<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="col-md-6 offset-md-3">
<div class="alert alert-danger">
  <strong>You need to pay <span class="font-20">$20.00 </span> </strong> 
</div>
    <div class="card card-body">


        <!----------###################################################################################
        #######################  if you want your can add more fild form here and save data into your databas  #################################----->
            <input type="text" readonly class="form-control" id="amount" value="Amount:$20.00">
           <small>You should need to pay <b>$20.00</b></small>
            <div id="smart-button-container " class="mt-5">
        <div style="text-align: center;">
        <div id="paypal-button-container" ></div>
      </div>

    </div>

    <!----- apypal api ---->
  <script src="https://www.paypal.com/sdk/js?client-id=sb&disable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

  <script>

    function initPayPalButton() {
        
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
                "amount":{"currency_code":"USD","value": 20 }
                }]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            actions.redirect('pay-info.php');
            
          });
        },
//if payment is cancel
        onError: function(err) {
            element.innerHTML = '<h3>Payment Clance!</h3>';
        }
      }).render('#paypal-button-container');

    }
    initPayPalButton();

  </script>
    </div>
</div>
    
    
</body>
</html>