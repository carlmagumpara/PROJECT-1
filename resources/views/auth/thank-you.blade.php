@extends('app')
@section('title')
  E-Lawyers Online - Thank You
@endsection
@section('content')
<div class="container min-height-100-vh">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="animated bounceInDown">
        <div class="text-center margin-top-30 margin-bottom-30">
          <a href="{{ route('app.index') }}">
            <img src="{{ asset('img/logo.png') }}" class="" alt="e-lawyers online logo">
          </a>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="lead">
              Thank you for registering at E-Lawyers Online. Please check our e-mail verification sent to your e-mail address for confirmation of your e-mail address and password. 
            </p>
            <p class="lead">
              Upon verification of account, you can now proceed with the online legal consultation by following these steps (Maaari na po kayo magkonsulta sa pamamagitan ng pagsunod sa mga hakbang na ito):
            </p>
            <p>
              <ol>
                <li>Click the <b>"ONLINE LEGAL CONSULTATION"</b> or <b>"TRY OUR ONLINE LEGAL CONSULTATION"</b> button in the main page (Pindutin ang <b>"Online Legal Consultation Page"</b> o <b>"Try Our Online Legal Consultation"</b> na nasa paunang pahina ng website);</li>
                <li>You will be asked to <b>LOGIN</b> your email address and password for purposes of security and confidentiality. If you do not have this yet, please register first and create an account in the Main Page. (Kayo po ay kailangang maglagay ng email address at password para po sa seguridad at pagka konpidensiyal ng pangsangguning legal. Kung wala po kayo nito, kayo po muna ay magpatala o gumawa ng account. Ito po ang link <a href="{{ route('register') }}">https://e-lawyersonline.com/register</a>);</li>
                <li>Upon reaching the Online Legal Consultation Page, click <b>"AVAIL LEGAL SERVICE"</b> button (Kayo po ay pupunta sa Online Consultation Page at may makikita kayo na button na <b>"AVAIL LEGAL SERVICE"</b>, ito po ay pindutin nyo);</li>
                <li>Select the button from the 5 types of services such as (Pumili po sa mga sumusunod na serbisyong legal na gusto niyo):
                  <ol style="list-style-type:upper-alpha;">
                    <li><b>"PER QUERY"</b> if you want a written/email legal consultation (Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email); or</li>
                    <li><b>“VIDEO CONFERENCE”</b> if you want a written and videoconference consultation (Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email at magkaroon ng pag-uusap sa abogado sa iba pang katanungan sa pamamagitan ng webcam); or</li>
                    <li><b>“OFFICE CONFERENCE”</b> if you want a written and personal consultation(Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email at magkaroon ng personal na pakikipag-uusap sa abogado sa iba pang katanungan); or</li>
                    <li><b>"PER CASE/PROJECT RETAINER"</b> if you want us to handle your case/project (Kung gusto niyo po na hawakan naming ang inyong kaso/proyekto); or</li>
                    <li><b>MONTHLY RETAINER</b> if you want us to be your lawyer for monthly services (Kung gusto niyo po na mayroon kayong sariling abogado para sa konsultang legal sa buong buwan).</li>
                  </ol>
                </li>
                <li>Click <b>"SUBMIT</b> button in Client’s Letter of Intent (Pindutin po ang “SUBMIT”);</li>
                <li>Fill-up the <b>PERSONAL</b> information forms, <b>SPOUSE</b> and <b>CHILDREN</b> forms, if applicable. (Punan ang mga Personal na Impormasyon, Asawa at Anak, kung naaangkop);</li>
                <li>Select the type of legal problem in <b>"MY LEGAL PROBLEM IS"</b> (Pumili ng isang problemang legal sa <b>"MY LEGAL PROBLEM IS"</b>);</li>
                <li>Type or Cut and Paste the facts of your legal problem in <b>MY LEGAL PROBLEM IS</b> and/or attach documents, pictures or videos, if any (Ilagay po ang buong kuwento ng mga pangyayari ng iyong problemang legal at kung meron po kayong dokumento o larawan o video ay isama niyo dito);</li>
                <li>Type or Cut and Paste the list of <b>LIST OF OBJECTIVES</b> and </b>LIST OF QUESTIONS</b>, and <b>SUBMIT</b> it (Ilagay po ang lahat ng inyong gustong mangyari o kagustuhan at lahat ng inyong mga tanong);</li>
                <li>Then, <b>ACCEPT</b> the <b>Online Legal Consultation Agreement</b> (Tanggapin po ang Online Legal Consultation Agreement);</li>
                <li>Select the method of payment in the Payment Page (Pumili ng paraan ng pagbabayad).</li>
                <li>Upon completion of the payment form, we will send to you by email our legal advice and answers. For clients who obtained videoconference or office conference, the conference will be held after the receipt of our intial legal advice (Pagnatapos na po ang pagbabayad, ipapadala po namin ang aming mga kasagutan at legal na hakbang para inyong problemang legal. (Para sa mga kumuha ng videoconference or office conference, ang konperensiya ay gaganapin pagkatapos po matanggap ang aming mga kasagutan at legal na hakbang para inyong problemang legal).</li>
              </ol>
              <br />
              Thank you. If you have any question, please feel free to email us at <b>attyvalderama@e-lawyersonline.com</b>.
            </p>
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

    });
  </script>
@endsection