<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse;}
    </style>
    <![endif]-->
</head>
<body style="background-color:#f3ebe5; width:100%; margin: 0 !important; padding: 0; font-family: Arial, Helvetica, sans-serif;">
    <center style="width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
        <div style="max-width: 600px; margin: 0 auto;">
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center">
            <tr>
            <td>
            <![endif]-->
            <table style="margin: 0 auto; width: 100%; max-width: 600px;" align="center">
                <tr>
                    <td>
                        <div style="width: 100%; background-color: #f3ebe5; font-family: Arial, Helvetica, sans-serif; margin: 0 auto;">
                            <div align="center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('') center; background-size: cover; width: 100%; height: auto;">
                                <img src="{{ asset('img/logo.png') }}" alt="User" style="padding: 20px 0px; width: 30%; height: auto;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <td style="padding: 10px; text-align: left;">
                                    <p style="font-size: 14px; margin-bottom: 10px; font-size: 21px; font-weight: bold; margin-bottom: 18px;">Dear {!! $name !!},</p>
                                    <p style="font-size: 14px; margin-bottom: 10px;">Congratulations! Your account has been successfully created.</p>
                                    <p style="font-size: 14px; margin-bottom: 10px;">To complete the sign-up process and verify your account, please click here:</p>
                                    <center>
                                        <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td>
                                                        <a href="{!! $link !!}" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; background-color: #EB7035; border-top: 12px solid #EB7035; border-bottom: 12px solid #EB7035; border-right: 18px solid #EB7035; border-left: 18px solid #EB7035; display: inline-block;">Activate my account &rarr;</a>
                                                    </td>
                                                </tr>
                                        </table>
                                    </center>
                                    <p style="font-size: 14px; margin-bottom: 10px;">After verification of account, you can now proceed with the online legal consultation by following these steps (Maaari na po kayo magkonsulta sa pamamagitan ng pagsunod sa mga hakbang na ito): </p>
                                    <ol>
                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Click the "SUBMIT LEGAL QUERY" or "TRY OUR ONLINE LEGAL CONSULTATION" button in the main page (Pindutin ang "Online Legal Consultation Page" o "Try Our Online Legal Consultation" na nasa paunang pahina ng website);
                                            </p>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                            You will be asked to LOGIN your email address and password for purposes of security and confidentiality. If you do not have this yet, please register first and create an account in the Main Page. (Kayo po ay kailangang maglagay ng email address at password para po sa seguridad at pagka konpidensiyal ng pangsangguning legal. Kung wala po kayo nito, kayo po muna ay magpatala o gumawa ng account. Ito po ang link <a href="{{ route('register') }}">https://e-lawyersonline.com/register</a> );
                                            </p>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Upon reaching the Online Legal Consultation Page, click "AVAIL LEGAL SERVICE" button (Kayo po ay pupunta sa Online Consultation Page at may makikita kayo na button na "AVAIL LEGAL SERVICE", ito po ay pindutin nyo);
                                            </p>
                                        </li>


                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Select the button from the 5 types of services such as (Pumili po sa mga sumusunod na serbisyong legal na gusto niyo):
                                            </p>
                                            <ol type="A">
                                                <li>
                                                    "PER QUERY" if you want a written/email legal consultation (Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email); or
                                                </li>
                                                <li>
                                                    "VIDEO CONFERENCE" if you want a written and videoconference consultation (Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email at magkaroon ng pag-uusap sa abogado sa iba pang katanungan sa pamamagitan ng webcam); or
                                                </li>
                                                <li>
                                                    "OFFICE CONFERENCE" if you want a written and personal consultation(Kung gusto niyo po ng konsultang legal at mga kasagutan sa inyong tanong na ipapadala sa inyong email at magkaroon ng personal na pakikipag-uusap sa abogado sa iba pang katanungan); or
                                                </li>
                                                <li>
                                                    "PER CASE/PROJECT RETAINER" if you want us to handle your case/project (Kung gusto niyo po na hawakan naming ang inyong kaso/proyekto); or
                                                </li>
                                                <li>
                                                    "MONTHLY RETAINER" if you want us to be your lawyer for monthly services (Kung gusto niyo po na mayroon kayong sariling abogado para sa konsultang legal sa buong buwan).
                                                </li>
                                            </ol>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Click "SUBMIT button in Client’s Letter of Intent (Pindutin po ang “SUBMIT”);
                                            </p>
                                        </li>


                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Select the type of legal problem in "MY LEGAL PROBLEM IS" (Pumili ng isang problemang legal sa "MY LEGAL PROBLEM IS");
                                            </p>
                                        </li>


                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Type or Cut and Paste the facts of your legal problem in MY LEGAL PROBLEM IS and/or attach documents, pictures or videos, if any (Ilagay po ang buong kuwento ng mga pangyayari ng iyong problemang legal at kung meron po kayong dokumento o larawan o video ay isama niyo dito);
                                            </p>
                                        </li>


                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Type or Cut and Paste the list of LIST OF OBJECTIVES and LIST OF QUESTIONS, and SUBMIT it (Ilagay po ang lahat ng inyong gustong mangyari o kagustuhan at lahat ng inyong mga tanong);
                                            </p>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Then, ACCEPT the Online Legal Consultation Agreement (Tanggapin po ang Online Legal Consultation Agreement);
                                            </p>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                                Select the method of payment in the Payment Page (Pumili ng paraan ng pagbabayad).
                                            </p>
                                        </li>

                                        <li>
                                            <p style="font-size: 14px; margin-bottom: 10px;">
                                            Upon completion of the payment form, we will send to you by email our legal advice and answers. For clients who obtained videoconference or office conference, the conference will be held after the receipt of our intial legal advice (Pagnatapos na po ang pagbabayad, ipapadala po namin ang aming mga kasagutan at legal na hakbang para inyong problemang legal. (Para sa mga kumuha ng videoconference or office conference, ang konperensiya ay gaganapin pagkatapos po matanggap ang aming mga kasagutan at legal na hakbang para inyong problemang legal).
                                            </p>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; text-align: left;">
                                    <p style="font-size: 14px; margin-bottom: 10px;">Thank you. If you have any question, please feel free to email us at attyvalderama@e-lawyersonline.com.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; text-align: left;">
                                    <p style="font-size: 14px; margin-bottom: 10px;">Best Regards,</p>
                                    <br/>
                                    <p style="font-size: 14px; margin-bottom: 10px;">E-Lawyers Online Team</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="background-color:#333333; color:#fff; padding:30px;" align="center">
                            <small>
                                Copyright &copy; 2016 e-lawyersonline.com
                            </small>
                        </div>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>
    </center>
</body>
