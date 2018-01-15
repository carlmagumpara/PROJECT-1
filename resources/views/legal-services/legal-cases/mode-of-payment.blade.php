@extends('app')
@section('title')
  E-Lawyers Online - Mode Of Payment
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Mode Of Payment</strong>
          </h3>
          <p>
            Welcome to E-Lawyers Online Payments Page. We find ways on how to make payments convenient for our customers in the Philippines and abroad. You can choose from the different channels through which you can pay your online legal consultation service. Please read the instructions provided on the different payment options.
          </p>
          <div class="text-center">
            <p>
              <strong>Please select your preferred payment option below:</strong>
            </p>
            <div class="margin-bottom-20 margin-top-20" id="mode-of-payment">
              @for ($i = 0; $i < count(config('enum.mode-of-payment.options')); $i++)
                <label class="custom-control custom-radio">
                  <input value="{{ config('enum.mode-of-payment.options')[$i]['type'] }}" data-type="{{ config('enum.mode-of-payment.options')[$i]['data-type'] }}" name="legal-case-type" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">{{ config('enum.mode-of-payment.options')[$i]['type'] }}</span>
                </label>
              @endfor
            </div>
            <button class="btn btn-primary text-light">
              NEXT
            </button>
          </div>
          <h4>Payment Instructions:</h4>

          <ul class="nav nav-tabs" id="mode-of-payment-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#bank_deposit">Bank Deposit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#paypal">Paypal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#gcash">GCash</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#smartmoney">SmartMoney</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#cashsense">Cashsense</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active show card border-0" id="bank_deposit">
              <div class="card-body">

              </div>
            </div>
            <div class="tab-pane fade card border-0" id="paypal">
              <div class="card-body">

              </div>
            </div>
            <div class="tab-pane fade card border-0" id="gcash">
              <div class="card-body">

              </div>
            </div>
            <div class="tab-pane fade card border-0" id="smartmoney">
              <div class="card-body">

              </div>
            </div>
            <div class="tab-pane fade card border-0" id="cashsense">
              <div class="card-body">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

      $('#mode-of-payment [type=radio]').each(function(k, v){
        $(v).click(function(e){
          $('#mode-of-payment-tab a[href="#'+$(this).attr('data-type')+'"]').tab('show');
        });
      });
    
    });
  </script>
@endsection