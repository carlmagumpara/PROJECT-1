@extends('app')
@section('title')
  E-Lawyers Online - Case Studies
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 margin-bottom-20">
      <div class="card">
        <div class="card-body">
          <h2 class="margin-bottom-20">
            <strong>Case Studies</strong>
          </h2>
          <div style="float:left; padding:0 25px 50px 5px;"><img src="{{ asset('img/casestudy_pic.jpg') }}" width="250" height="150" border="0" /></div>
          <h3>&#8220;Swipe Your Credit Card Tears Away: The Case of Reduced Credit Card Interest Rate and Penalty Charge&#8221;</h3>
          <p>It has been a common conversation among credit card holders the harsh interest rate as well as the penalty charge being imposed against them by credit card companies. With the recent ruling of the Supreme Court in the case entitled <em><strong>&quot;Ilenea Dr. Macalinao, petitioner, vs. Bank of Philippine Islands, respondent&quot;</strong></em>, docketed as G.R. No. 174590 and promulgated on September 17, 2009, it is now settled that an imposition by credit companies of 3% interest rate per month and a 3% penalty charge per month is invalid for being unconscionable or <em>&quot;</em>unreasonably excessive.<em>&quot;</em> This is the gist of the Supreme Court decision:</p>
          <blockquote>
            <blockquote>
              <p>&quot;In  its Complaint, respondent BPI originally imposed the interest and penalty  charges at the rate of 9.25% per month or 111% per annum. This was declared as  unconscionable by the lower courts for being clearly excessive, and was thus  reduced to 2% per month or 24% per annum. On appeal, the CA modified the rate  of interest and penalty charge and increased them to 3% per month or 36% per  annum based on the Terms and Conditions Governing the Issuance and Use of the  BPI Credit Card, which governs the transaction between petitioner Macalinao and  respondent BPI.</p>
              <p>In  the instant petition, Macalinao claims that the interest rate and penalty  charge of 3% per month imposed by the CA is iniquitous as the same translates  to 36% per annum or thrice the legal rate of interest. On the other hand,  respondent BPI asserts that said interest rate and penalty charge are  reasonable as the same are based on the Terms and Conditions Governing the  Issuance and Use of the BPI Credit Card.</p>
              <p>We  find for petitioner. We are of the opinion that the interest rate and penalty  charge of 3% per month should be equitably reduced to 2% per month or 24% per  annum.</p>
              <p>Indeed,  in the Terms and Conditions Governing the Issuance and Use of the BPI Credit  Card, there was a stipulation on the 3% interest rate. Nevertheless, it should  be noted that this is not the first time that this Court has considered the  interest rate of 36% per annum as excessive and unconscionable. We held in <em>Chua  vs. Timan</em>:</p>
              <p>The  stipulated interest rates of 7% and 5% per month imposed on respondents’ loans  must be equitably reduced to 1% per month or 12% <em>per annum</em>. <strong>We need  not unsettle the principle we had affirmed in a plethora of cases that  stipulated interest rates of 3% per month and higher are excessive, iniquitous,  unconscionable and exorbitant. Such stipulations are void for being contrary to  morals, if not against the law.</strong> While C.B. Circular No. 905-82, which took  effect on January 1, 1983, effectively removed the ceiling on interest rates  for both secured and unsecured loans, regardless of maturity, nothing in the  said circular could possibly be read as granting <em>carte blanche</em> authority  to lenders to raise interest rates to levels which would either enslave their  borrowers or lead to a hemorrhaging of their assets. (Emphasis supplied.)</p>
              <p>Since  the stipulation on the interest rate is void, it is as if there was no express  contract thereon. Hence, courts may reduce the interest rate as reason and  equity demand.</p>
              <p>The  same is true with respect to the penalty charge. Notably, under the Terms and  Conditions Governing the Issuance and Use of the BPI Credit Card, it was also  stated therein that respondent BPI shall impose an additional penalty charge of  3% per month. Pertinently, Article 1229 of the Civil Code states: </p>
              <p>Art.  1229. The judge shall equitably reduce the penalty when the principal  obligation has been partly or irregularly complied with by the debtor. Even if  there has been no performance, the penalty may also be reduced by the courts if  it is iniquitous or unconscionable.</p>
              <p>In  exercising this power to determine what is iniquitous and unconscionable,  courts must consider the circumstances of each case since what may be  iniquitous and unconscionable in one may be totally just and equitable in  another.</p>
              <p>In  the instant case, the records would reveal that petitioner Macalinao made  partial payments to respondent BPI, as indicated in her Billing Statements.  Further, the stipulated penalty charge of 3% per month or 36% per annum, in  addition to regular interests, is indeed iniquitous and unconscionable. </p>
              <p>Thus,  under the circumstances, the Court finds it equitable to reduce the interest  rate pegged by the CA at 1.5% monthly to 1% monthly and penalty charge fixed by  the CA at 1.5% monthly to 1% monthly or a total of 2% per month or 24% per  annum in line with the prevailing jurisprudence and in accordance with Art.  1229 of the Civil Code.</p>
            </blockquote>
          </blockquote>
          <p>Once again, the Supreme Court has  come to the rescue of ordinary people suffering from unreasonable imposition of  credit card companies. This Supreme Court ruling is a welcome respite to credit  card holders being hounded by over eager collection agencies. It should be  noted that while the Supreme Court have considered the partial payments made by  Macalinao in the above cited case as one of the reason for the reduction of the  penalty under Article 1229 of the New Civil Code, it decided that the said 3%  penalty imposed is also unconscionable. We could impliedly deduce from the said  ruling that even without any partial payments made by Macalinao, the penalty  charge of 3% could still be struck down for being excessive. </p>
          <p>However, this Supreme Court  should be taken with caution, as it does not give license to credit card  holders not to pay the credit card companies of their obligation. Under this  ruling, present credit card holders are entitled to question the billing of  credit card companies if the interest rate and penalty charge per month against  them is 3% or more. Credit card holders could not take the law on their own  hand by refusing payment of their obligation. This is not the essence of the  Supreme Court decision under discussion. They should first inform in writing  the credit card company of their protest against the invalid billing pursuant  to the Supreme Court case of Macalinao vs. BPI and request for a correct  computation. Better yet, credit card holders should seek the advice of a lawyer  for a better appreciation of the facts and the law applicable in their  particular case.</p>
        </div>
      </div>
      @include('ads.big')
    </div>
    <div class="col-md-4">
      @if (Auth::check())
        @include('auth.user-info-partial')
      @else
        @include('auth.login-partial')
      @endif
      @include('layouts.side-navigator')
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
  </script>
@endsection