@extends('app')
@section('title')
  E-Lawyers Online - E-Legal News
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>E-Legal News</strong>
          </h3>
          <div style="float:left; padding:0 25px 25px 0;"><img src="/img/lawupdates.jpg" width="250" height="172" border="1" align="texttop" /></div>
          <h4 class="margin-bottom-20">
            <strong>&#8220;Can your text message or e-mail message be used as evidence in court? &#8221;</strong>
          </h4>
          <p>Before  the advent of computer age, we have been familiar with the use of documentary  evidence in court such as contracts, agreements, letters and other writings.  These writings printed in papers or paper-based documents are popularly known  then as our documentary evidence. At that time, text message or e-mail message,  as it was not yet widely used and known in the Philippines, are not considered  as documentary evidence by our courts of law.</p>
          <p>Now, in today's  Internet age, our interactions are now through electronic communications using  our cell phones, laptops, PC tablets and the likes. These interactions in the  Internet using these electronic gadgets have spawned legal controversies as to  the use of the electronic writings and its admissibility in court. With the  ever-growing demand to regulate transactions in the Internet, our lawmakers,  thus, passed Republic Act No.  8792, otherwise known as the &quot;E-Commerce Law&quot;. This law was subsequently  followed by the issuance of the Supreme Court of A.M.  No. 01-7-01-SC, otherwise known as the &quot;Rules on Electronic Evidence&quot;.</p>
          <p>With these two  laws, e-mail message can now be used as evidence in court. E-mail message is  called &quot;electronic document&quot;. Even our telephone  conversations, text messages, chatroom sessions, streaming audio, streaming  video, and other electronic forms of communication the evidence of which is not  recorded or retained, can now also be used as evidence in court. These are  called &quot;ephemeral electronic communication&quot;.</p>
          <p>An e-mail message of a businessman admitting receipt of the notice  of dishonor of his check can be used as evidence against him in court in the  case of violation of B.P. 22 (Bouncing Checks Law). A libelous text message  sent by a person against the other can be admitted in court in the case of  libel filed against the former by the latter. This electronic evidence, as the  law called it, is considered equivalent to paper-based documents with the same  function and use of documentary evidence.</p>
          <h4 class="margin-bottom-20">
            <strong>
              &#8220;Can your text message or e-mail message to you lawyer be used as evidence in court?  &#8221;
            </strong>
          </h4>
          <p>The answer would be no. Even if electronic documents are now admissible as evidence in court, still, &quot;the confidential character of a privileged communication is not lost solely on the ground that it is in the form of an electronic document.&quot; In short, the Rule on Electronic Evidence still respects the sanctity of privilege communications such as those of lawyer-client communications, doctor-patient communications, and priest-penitent communications, among others. By way of an example, all electronic documents revealed by a client to a lawyer through online legal consultation or chatting or video conferencing remains to be confidential. Being a privileged communication, it cannot be used as evidence by any person for any purpose in any courts of law.</p>
          <p>E-Lawyers Online took further steps in securing the communication of its clients as well as their personal and financial information supplied during online legal consultation by obtaining and installing its Website of Socket Layer (SSL) Certificate. It is a protocol, which is responsible for creating secure communication between client and E-Lawyers Online by having both server and client authentication and the negotiation of an encryption algorithm and cryptographic keys. In short, all personal and financial information of E-Lawyers Online’s client are secured and protected.</p>
          <p>Electronic signature is also now admissible in court as evidence of the owner's consent or approval of the electronic document. Under the &quot;Rules on Electronic Evidence&quot;, &quot;<em>electronic signature</em>&quot; refers to any distinctive mark, characteristic and/or sound in electronic form, representing the identity of a person and attached to or logically associated with the electronic data message or electronic document or any methodology or procedure employed or adopted by a person and executed or adopted by such person with the intention of authenticating, signing or approving an electronic data message or electronic document. For purposes of these Rules, an electronic signature includes digital signatures. Although there is no implementing rules yet in the recognition of electronic signature for the transfer of land title, once a person affix his/her electronic signature to an electronic copy of a deed of sale, the same shall be considered as duly signed for all legal intents and purposes just like a paper-based deed of sale.</p>
          <p>People should always be reminded to be careful in transacting in the Internet because for every electronic document sent or for every use of your electronic or digital signature comes with corresponding legal effects. It is thus best to first consult a lawyer well versed in E-commerce law for guidance in delicate transactions in the Internet.</p>
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