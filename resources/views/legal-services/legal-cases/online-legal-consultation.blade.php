@extends('app')
@section('title')
  E-Lawyers Online - Online Legal Consultation
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Online Legal Consultation</strong>
          </h3>
          <p class="lead margin-bottom-30">
          	The Online Legal Consultation Service offers you the most convenient way to start an attorney-client relationship by discussing all your legal problems online and choosing from the five (5) types of online legal service most preferable to 
          </p>
        	<div class="margin-bottom-30 margin-top-30 text-center">
	          <form action="{{ route('legal-services.legal-cases.online-legal-consultation.new') }}" method="POST">
	          	{{ csrf_field() }}
	          	<div class="margin-bottom-30 margin-top-30 text-center" id="legal-services">
								@for ($i = 0; $i < count(config('enum.legal_services')); $i++)
									<label class="custom-control custom-radio">
									  <input value="{{ config('enum.legal_services')[$i]['type'] }}" data-type="{{ config('enum.legal_services')[$i]['data-type'] }}" name="legal-case-type" type="radio" class="custom-control-input">
									  <span class="custom-control-indicator"></span>
									  <span class="custom-control-description">{{ config('enum.legal_services')[$i]['type'] }}</span>
									</label>
								@endfor
	          	</div>
		          <input type="submit" class="btn btn-primary text-light" href="#" id="submit-legal-query" value="NEXT">
	          </form>
        	</div>
					<ul class="nav nav-tabs" id="online-legal-consultation-tab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#per_query">Per Query</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#video_conference">Video Conference</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#office_conference">Office Conference</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#monthly_retainer">Monthly Retainer</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#case_project_retainer">Case/Project Retainer</a>
					  </li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane fade in active show card border-0" id="per_query">
						  <div class="card-body">
						    <p><strong>Online Legal Consultation By E-Mail/Written Query</strong> &ndash; this legal service is best suited for clients that need initial evaluation of his/her case or legal problem.  The client can discuss the legal problem by providing the facts/details, objectives, and questions through our online form. Upon payment of the Online legal consultation fee of P1,500.00, E-Lawyers Online will send the legal advice through e-mail based on the given information.</p>
								<p>Tips:</p>
								<ul>
								<li>It will be useful for the client to write the complete facts, objectives, and questions regarding his/her legal problem using any word processor program (like Microsoft Word, Wordpad, or Notepad) for an easy cut-and-paste process. </li>
								<li>For any documents which can be valuable for the case, clients can upload any Microsoft Word, Portable Document Format (PDF), or a scanned image (in JPEG format) for a more comprehensive legal advice from E-Lawyers Online.</li>
								</ul>
						  </div>
					  </div>
					  <div class="tab-pane fade card border-0" id="video_conference">
					    <div class="card-body">
								<p><strong>Online Legal Consultation By Video Conference</strong> &ndash; this legal service is suitable for clients, mostly abroad or have time and distance contraint,  who require an in-depth discussion of his/her case or legal problem through video conference (and/or chat) using Skype or Yahoo Messenger. Through our online form, the client can select a preferred date and time and provide in advance the necessary facts/details, objectives, and questions relevant to the legal problem. The video conference is rated at Php 2,000/hour, E-Lawyers Online will send the initial legal advice through e-mail based on the given information and during the conference, the client can explore more on the chances or probability of winning his/her case by asking follow-up questions from the lawyer.</p>
								<p>Tips:</p>
								<ul>
								<li>It will be useful for the client to write the complete facts, objectives, and questions regarding his/her legal problem using any word processor program (like Microsoft Word, Wordpad, or Notepad) for an easy cut-and-paste process. </li>
								<li>For any documents which can be valuable for the case, clients can upload any Microsoft Word, Portable Document Format (PDF), or a scanned image (in JPEG format) for a more comprehensive legal advice from E-Lawyers Online.</li>
								<li>Make sure you have the following: built-in or separate headset with microphone and webcam. Before the video conference, test if your headset, microphone, and webcam are working properly. Prepare a copy of the facts and details for reference during the conference.</li>
								</ul>
					    </div>
					  </div>
					  <div class="tab-pane fade card border-0" id="office_conference">
					    <div class="card-body">
								<p><strong>Online Legal Consultation By Office Conference</strong> &ndash; this legal service is suitable for clients who require an in-depth discussion of his/her case or legal problem through office conference. Through our online form, the client can select a preferred date and time of office conference and provide in advance the necessary facts/details, objectives, and questions relevant to the legal problem. The office conference is rated at Php 2,000/hour and will be held at Suite 10-G Strata 100 Condominium, 100 F. Ortigas Jr. Road, Ortigas Center, Pasig City, Metro Manila. E-Lawyers Online will send the initial legal advice through e-mail based on the given information and during the conference the client can explore more on the chances or probability of winning his/her case by asking follow-up questions from the lawyer.</p>
								<p>Tips:</p>
								<ul>
								<li>It will be useful for the client to write the complete facts, objectives, and questions regarding his/her legal problem using any word processor program (like Microsoft Word, Wordpad, or Notepad) for an easy cut-and-paste process. </li>
								<li>For any documents which can be valuable for the case, clients can upload any Microsoft Word, Portable Document Format (PDF), or a scanned image (in JPEG format) for a more comprehensive legal advice from E-Lawyers Online.</li>
								<li>We advised you to be at our office 30 minutes before the set schedule of office conference for purposes of preparation of documents and initial interview.</li>
								</ul> 
					    </div>
					  </div>
					  <div class="tab-pane fade card border-0" id="monthly_retainer">
					    <div class="card-body">
								<p><strong>Online/Offline Legal Consultation under a Monthly Retainer Agreement</strong> &ndash; this legal service is tailored for clients who require a dedicated lawyer to attend to the legal requirements of their business and/or projects on a monthly basis. Clients can choose from a scope of a monthly service through our website and E-Lawyers Online will send a proposed Monthly Retainer Agreement. Upon signing the agreement and payment of the retainer fee, E-Lawyers Online will provide online legal service through video, chat, or phone, and through personal meeting at the convenience of the client.</p> 
					    </div>
					  </div>
					  <div class="tab-pane fade card border-0" id="case_project_retainer">
					    <div class="card-body">
								<p><strong>Online/Offline Legal Consultation Per Case/Project</strong> &ndash; this legal service is for clients who need a lawyer to handle a particular case or a particular project. The client can discuss the legal problem by providing the facts/details, objectives, and questions through our online form. After assessment and review of the relevant information, E-Lawyers Online will send a proposed Per Case/Project Retainer Agreement. Upon signing of the agreement and payment of the acceptance fee, E-Lawyers Online shall provide the legal advice, services, and representation to the client on a per case or per project basis.</p>
								<p>Tips:</p>
								<ul>
								<li>It will be useful for the client to write the complete facts, objectives, and questions regarding his/her legal problem using any word processor program (like Microsoft Word, Wordpad, or Notepad) for an easy cut-and-paste process. </li>
								<li>For any documents which can be valuable for the case, clients can upload any Microsoft Word, Portable Document Format (PDF), or a scanned image (in JPEG format) for a more comprehensive legal advice from E-Lawyers Online.</li>
								</ul>
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
    	$('#legal-services [type=radio]').each(function(k, v){
    		$(v).click(function(e){
    			$('#online-legal-consultation-tab a[href="#'+$(this).attr('data-type')+'"]').tab('show');
    		})
    	});
    });
  </script>
@endsection