<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/payment.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/payment.css">
  <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
</head>
<body>
  <div class="container">
    <div class="payment-methods center">
      <ul class="tabs">
        <li class="active">
          <a href="#credit-card">
            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
            <p>Credit Card</p>
          </a>
        </li>
        <li>
          <a href="#bank">
            <i class="fa fa-university fa-4x" aria-hidden="true"></i>
            <p>Bank</p>
          </a>
        </li>
        <li>
          <a href="#paypal">
            <i class="fa fa-cc-paypal fa-4x" aria-hidden="true"></i>
            <p>PayPal</p>
          </a>
        </li>
        <li>
          <a href="#money_remittance">
            <i class="fa fa-exchange fa-4x" aria-hidden="true"></i>
            <p>Money Remittance</p>
          </a>
        </li>
        <li>
          <a href="#debit">
            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
            <p>Debit Card</p>
          </a>
        </li>
      </ul>


    </div>

    <div class="tab-content">
      <div id="credit-card" class="tab active">
        <h3>Credit Card</h3>
        <div class="form-row">
          <form>
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </form>
        </div>
      </div>
      <div id="bank" class="tab">
        <h3>Bank</h3>
        <div class="form-row">
          <form>
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </form>
        </div>
      </div>
      <div id="paypal" class="tab">
        <h3>PayPal</h3>
        <button type="button" name="button"></button>
      </div>
      <div id="money_remittance" class="tab">
        <div class="form-row">
          <form>
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </form>
        </div>
      </div>
      <div id="debit" class="tab">
        <div class="form-row">
          <form>
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
