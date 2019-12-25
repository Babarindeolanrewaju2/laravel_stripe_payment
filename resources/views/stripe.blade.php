<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">

<div class="row">
    <div class="col-lg-12 mt40">
        <div class="text-center">
            <h2>Pay for Event</h2>
            <br>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-md-3">

    </div>
<div class="col-md-6">
<form accept-charset="UTF-8" action="{{url('store')}}" class="require-validation"
    data-cc-on-file="false"
    data-stripe-publishable-key="test_public_key"
    id="payment-stripe" method="post">
    {{ csrf_field() }}
    <div class='row'>
        <div class='col-xs-12 form-group'>
            <label class='control-label'>Name on Card</label> <input
                class='form-control' size='4' type='text'>
        </div>
    </div>
    <div class='row'>
        <div class='col-xs-12 form-group'>
            <label class='control-label'>Card Number</label> <input
                autocomplete='off' class='form-control' size='20'
                type='text' name="card_no">
        </div>
    </div>
    <div class='row'>
        <div class='col-xs-4 form-group'>
            <label class='control-label'>CVC</label> <input autocomplete='off'
                class='form-control' placeholder='ex. 311' size='3'
                type='text' name="cvv">
        </div>
        <div class='col-xs-4 form-group'>
            <label class='control-label'>Expiration</label> <input
                class='form-control' placeholder='MM' size='2'
                type='text' name="expiry_month">
        </div>
        <div class='col-xs-4 form-group'>
            <label class='control-label'> </label> <input
                class='form-control' placeholder='YYYY' size='4'
                type='text' name="expiry_year">
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12'>
            <div class='form-control total btn btn-info'>
                Total: <span class='amount'>$50</span>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12 form-group'>
            <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;">Pay »</button>
        </div>
    </div>

</form>
</div>
</div>

</body>
</html>
