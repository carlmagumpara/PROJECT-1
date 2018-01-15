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
                <p>
                  You selected Bank Deposit payment option for online legal consultation. Please carefully READ and TAKE NOTE of the following payment instructions:
                </p>
                <ol>
                  <li>E-Lawyers Online assumes that you deposited or will deposit the fee to the designated bank to complete the online legal consultation process within the agreed time.</li>
                  <li>You shall deposit the online legal consultation fee <strong>IN CASH</strong> as payment for your requested online legal services. Payment or deposit in check or other mercantile document shall be accepted only upon clearing and crediting to the bank account of E-Lawyers Online.</li>
                  <li>You may deposit your payment to any of the four (4) Savings Account of E-Lawyers Online under the name of &ldquo;Marlon P. Valderama:
                    <ul>
                      <li>Allied Bank Account No. 3210-05759-9</li>
                      <li>Banco De Oro  Account No. 490225721 (local) / 000490225721 (abroad)</li>
                      <li>BPI Family Savings Bank Account No.&nbsp;<span>6796-2979-89</span></li>
                      <li>Metrobank Account No. 631-3-63118106-7</li>
                    </ul>
                  </li>
                  <li>Upon deposit of the abovesaid amount, we will confirm your payment with the bank you selected. Please give us 2-3 days for this confirmation. To expedite confirmation of payment, you can log in to E-Lawyers Online after your deposit and click in your Dashboard <strong>&ldquo;PAYMENT SECTION&rdquo;</strong> and the Website shall guide you through the payment confirmation process.</li>
                  <li>You will receive an email from E-Lawyers Online upon confirmation of your payment and subsequently the legal services requested.</li>
                  <li>In case of failure to deposit the online legal consultation fee on the agreed timeframe, E-Lawyers Online reserves its right to delete the information you supplied and in such a case, the filling-up of the forms shall not be construed as a lawyer-client relationship.</li>
                </ol>
              </div>
            </div>
            <div class="tab-pane fade card border-0" id="paypal">
              <div class="card-body">
                <p>You selected PayPal* payment option for online legal consultation, please carefully READ and TAKE NOTE of the following instructions:</p>
                <ol>
                  <li>By selecting PayPal payment option, we assume that you have a <strong>REGISTERED PAYPAL ACCOUNT</strong>. Please proceed to the Paypal Payment Process of E-Lawyers Online Website by clicking <strong>&ldquo;CONTINUE&rdquo;</strong>. </li>
                  <li>You will be directed to PayPal Payment Page showing the Summary of the legal service that you intend to obtain from E-Lawyers Online and the corresponding fee for it and you will be asked to submit the form. </li>
                  <li>Fill-up the PayPal Shopping Cart and PayPal Check-out page to complete the PayPal Payment Process. Send your payment to E-Lawyers Online for the requested legal service to:
                  <p><br /> To Email: attyvalderama@yahoo.com<br /> Amount: (Amount of Money to be Paid in Phil. Peso)<br /> Online Purchase: Services</p>
                  <p>You will be directed to Paypal &ldquo;Review Your Payment&rdquo; section, and fill-up &ldquo;Email to Recipient&rdquo; in the SUBJECT: Your Complete Name and E-Mail Address, then click &ldquo;SEND MONEY&rdquo;.</p>
                  </li>
                  <li>You will receive e-mail from Paypal &ldquo;Your Payment Has Been Initiated&rdquo; with the payment details. Please wait for our acceptance of your PayPal payment, which will be automatically sent through PayPal system.</li>
                  <li>After our acceptance of payment, you will also receive an email from E-Lawyers Online of the confirmation of your payment and subsequently the legal services requested.</li>
                  <li>If you do not have a PAYPAL ACCOUNT, please click <a style="color: blue;" href="#" target="_blank">here</a> to know more about creating a PayPal Account.</li>
                </ol>
              </div>
            </div>
            <div class="tab-pane fade card border-0" id="gcash">
              <div class="card-body">
                <p>You selected G-CASH payment option for online legal consultation; please carefully READ and TAKE NOTE of the following instructions:</p>
                <ol>
                  <li>By selecting G-CASH payment option, we assume that you are a GLOBE OR TOUCH MOBILE SUBSCRIBER and REGISTERED G-CASH USER. If you have a ready and sufficient amount of G-Cash load, please proceed to the G-CASH Payment Process of E-Lawyers Online Website by clicking &ldquo;CONTINUE&rdquo;.</li>
                  <li>You will be directed to G-CASH Payment Page and you will be asked to select from the three (3) kinds of G-Cash Type of transaction (GCash Mobile, GCash Online or GCash Remit) for the payment of your requested online legal services.</li>
                  <li>Then, a Summary of the legal service that you intend to obtain from E-Lawyers Online and the corresponding fee will appear and you will be asked to send the G-CASH money to <strong>2882+(09279845404)</strong>: (Amount to be Sent) (M-PIN) (Name of Client and Email Address). You will receive a text message from G-Cash confirming the sending of your G-Cash to E-Lawyers Online.</li>
                  <li>Finally, you will be shown the Confirmation of Payment Form of E-Lawyers Online Website and you will required to fill-up the <strong>Name of Client</strong> and <strong>E-mail Address</strong>, <strong>Mobile Phone Number</strong> (used in sending payment) <strong>Reference Number</strong> (Confirmation from Globe). After completing the form, please click "SUBMIT" and you will be directed to the Home Page.</li>
                  <li>You will receive an email from E-Lawyers Online upon confirmation of your payment and subsequently the legal services requested.</li>
                  <li>If you are new or not familiar to G-CASH, please click <a style="color: blue;" href="#" target="_blank">here</a> to know more about G-CASH.</li>
                </ol>
              </div>
            </div>
            <div class="tab-pane fade card border-0" id="smartmoney">
              <div class="card-body">
                <p>You selected SMART MONEY payment option for online legal consultation; please carefully READ and TAKE NOTE of the following instructions:</p>
                <ol>
                  <li>By selecting SMART MONEY payment option, we assume that you are a SMART SUBSCRIBER and REGISTERED SMART MONEY USER. If you have a ready and sufficient amount of Smart Money load, you can then, <strong>SEND PAYMENT</strong> to E-Lawyers Online:   <br /><br /> <ol type="i">
                  <li><strong>By Over the Counter:</strong> please send the Smart Money to <strong><em>09498443880</em></strong>. You will receive a text message from Smart Money confirming the sending of your Smart Money to E-Lawyers Online.</li>
                  <li><strong>By Wallet to Wallet:</strong> Please follow this instructions:   <ol type="A">
                  <li>Go to Smart Menu of your mobile phone;</li>
                  <li>Select SMART MONEY, then;</li>
                  <li>Select TRANSFER, then;</li>
                  <li>Select OTHERS and press OK;</li>
                  <li>Type E-Lawyers Online 16-digit Smart Money Card No. <strong><em>5299671942865104</em></strong>, then;</li>
                  <li>TRANSFER FROM will appear, press OK and then;</li>
                  <li>Select from the list of your Smart Money Card names, then press OK;</li>
                  <li>Type the desired Amount for transfer;</li>
                  <li>CONFIRMATION REQUEST of transfer of Smart Money will appear, press OK; and</li>
                  <li>Enter W-PIN;</li>
                  </ol> </li>
                  </ol> </li>
                  <li>You will receive a text message from Smart confirming the transfer to E-Lawyers Online account with the transaction Reference Number;</li>
                  <li>After receiving the text message from Smart, please proceed to the Smart Money Payment Process of E-Lawyers Online Website by clicking &ldquo;CONTINUE.&rdquo; </li>
                  <li>You will be directed to Smart Money Payment Page and you will be asked to select from the three (3) kinds of Smart Money Type of transaction (Smart Money Over the Counter, Smart Money Wallet to Wallet Transfer or Smart Money Padala) of the payment of your requested online legal services.</li>
                  <li>After choosing from the three (3) kinds of Smart Money Type of transaction, a Summary of the legal service that you intend to obtain from E-Lawyers Online and the corresponding fee will appear and you will be asked to submit the same.</li>
                  <li>Finally, you will be shown the Confirmation of Payment Form of E-Lawyers Online Website and you will required to fill-up the <strong>Name of Client</strong> and <strong>E-mail Address</strong>, <strong>Mobile Phone Number</strong> (used in sending payment) and/or 16-digit Smart Money Card Number (used in sending payment), whichever is applicable, and the <strong>Reference Number</strong> (Confirmation from Smart). After completing the form, please click &ldquo;SUBMIT&rdquo; and you will be directed to the Home Page.</li>
                  <li>You will receive an email from E-Lawyers Online upon confirmation of your payment and subsequently the legal services requested.</li>
                  <li>If you are new or not familiar to SMART MONEY, please click <a style="color: blue;" href="#" target="_blank">here</a> to know more about SMART MONEY.</li>
                </ol>
              </div>
            </div>
            <div class="tab-pane fade card border-0" id="cashsense">
              <div class="card-body">
                <p>You selected Cashsense payment option. Please carefully READ and TAKE NOTE of the following payment instructions:</p>
                <ol>
                  <li>Client may choose to pay cash over the counter (OTC) at convenience stores in the Philippines, which requires no registration. E-Lawyers Online client can pay cash over-the-counter at any 7-Eleven or MLhuillier Pawnshop branch nationwide and other partner establishments.</li>
                  <li>Client may also opt to pay using eWallet. Anyone inside or outside of the Philippines like OFW and foreigners can register as a remitter at <a href="http://remit.cashsense.com/" target="_blank">http://remit.cashsense.com/</a> and obtain an eWallet. This may be funded by bank deposit or via pay-in outlets and may then be used for making payments to E-Lawyers Online and other billers.</li>
                  <li>Client who selected to pay over-the-counter at any 7-Eleven stores or MLhullier will given a reference number displayed at online checkout and will be carried to the cashier at the convenience store. This identifier will form the basis of the data exchange/transaction and will include the "Customer name", "Reference number" and "Total amount to pay".</li>
                  <li>After payment either OTC or through eWallet, proceed to your Dashboard and click "Pay Now" for the Confirmation of Payment Form of E-Lawyers Online Website and you will be required to fill-up the <strong>Name of Client</strong> and <strong>E-mail Address, Reference Number, Amount Paid</strong>. After completing the form, please click &ldquo;SUBMIT&rdquo; and you will be directed to the Home Page.</li>
                  <li>You will receive an email from E-Lawyers Online upon confirmation of your payment and subsequently the legal services requested.</li>
                  <li>If you are new or not familiar with Cashsense, please click here (<a href="http://www.cashsense.com/pages/faq">http://www.cashsense.com/pages/faq</a>) to know more about Cashsense.</li>
                </ol>
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