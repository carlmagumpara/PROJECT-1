@extends('app')
@section('title')
  E-Lawyers Online - Our Services
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Our Services</strong>
          </h3>
          <div class="row">
            <div class="col-md-3">
              <img src="{{ asset('img/ourservices_pic.jpg') }}" class="img-responsive" />
            </div>
            <div class="col-md-9">
              <h4 class="margin-bottom-20">
                <strong>
                  The following are our services that we can provide to our clients, to wit:
                </strong>
              </h4>
              <p class="lead"><strong>PERSONAL &amp; FAMILY LAW:</strong></p>
              <ul>
              <li>Annulment of marriage</li>
              <li>Legal separation</li>
              <li>Separation of properties</li>
              <li>Recognition of foreign divorce</li>
              <li>Child custody and Guardianship cases</li>
              <li>Filiations and Paternity Cases</li>
              <li>Adoption (local &amp; inter-country)</li>
              <li>Correction of Entries in Birth Certificates, etc., Change of Name;</li>
              <li>Estate Planning</li>
              <li>Extrajudicial Settlement of Estate</li>
              <li>Probate of the will</li>
              <li>Judicial partition</li>
              </ul>
              <p class="lead"><strong>CIVIL LAW:</strong></p>
              <ul>
              <li>Registration and Transfer of Title (Real &amp; Personal)</li>
              <li>Recovery of Property (Ejectment and Replevin)</li>
              <li>Subdivision and Condominium cases</li>
              <li>Torts &amp; Damages</li>
              <li>Rescission of contracts, actions for specific performance</li>
              <li>Collection cases, Foreclosure of Mortgage</li>
              <li>Annulment of contract and title</li>
              </ul>
              <p class="lead"><strong>COMMERCIAL LAW:</strong></p>
              <ul>
              <li>Registration of corporations, partnership and joint ventures</li>
              <li>Registration and processing of permits and licenses</li>
              <li>PEZA and BOI registrations, licenses and permits</li>
              <li>E-Commerce Law consultations, projects and violations</li>
              <li>Corporate Litigation</li>
              <li>Corporate Rehabilitation, Merger &amp; Consolidation, Dissolution</li>
              <li>Insurance Claim and Litigation</li>
              <li>Drafting of contracts and other commercial documents facilitation and assistance on importation and exportation (Maritime Law)</li>
              <li>Registration of Patents, Design, Trademarks, Tradename and Service Marks including infringement litigation</li>
              </ul>
              <p class="lead"><strong>LABOR LAW:</strong></p>
              <ul>
              <li>Litigation of Labor Cases</li>
              <li>Labor Union Registration</li>
              <li>Collective Bargaining and Negotiations</li>
              <li>Labor and Management Consultancy</li>
              </ul>
              <p class="lead"><strong>IMMIGRATION LAW:</strong></p>
              <ul>
              <li>Processing of all kinds of Philippine Visa with the Bureau of Immigration/Philippine Retirement Authority</li>
              <li>Litigation of Philippine Immigration Law violations</li>
              <li>Naturalization proceedings</li>
              <li>Processing of dual citizenship</li>
              </ul>
              <p class="lead"><strong>CRIMINAL LAW:</strong></p>
              <ul>
              <li>Intellectual property rights violations and Unfair Competition including application for search warrants or quashal of search warrant issued against.</li>
              <li>Violation of special laws such as B.P. 33 (LPG Law) and P.D. 957 (Subdivision and Condominium Law)</li>
              <li>Murder, Homicide and Physical Injuries</li>
              <li>Bigamy, Adultery and Concubinage</li>
              <li>Human trafficking</li>
              <li>Robbery and Theft</li>
              <li>Illegal recruitment</li>
              <li>Estafa and BP 22 (Special law)</li>
              <li>Falsification</li>
              <li>Libel and Slander</li>
              <li>Hacking or violation of E-Commerce Law</li>
              <li>Credit card fraud</li>
              <li>Bank fraud</li>
              <li>Pawnshop fraud</li>
              <li>Criminal Negligence/Reckless Imprudence</li>
              <li>Private prosecution of other criminal cases</li>
              </ul>
              <p class="lead"><strong>TAXATION LAW:</strong></p>
              <ul>
              <li>Corporate Taxation</li>
              <li>Individual Taxation</li>
              <li>Estate Taxation</li>
              <li>Real Estate Taxation</li>
              <li>BIR and Court of Tax Appeals Litigation</li>
              </ul>
              <p class="lead"><strong>SPECIAL SERVICES:</strong></p>
              <ul>
              <li>Preparation, Coordination, Negotiation &amp; Implementation of Special Contracts in Government and Private Sector (EPC, Construction Contract, Joint Venture Agreement, etc.)</li>
              <li>Construction Arbitration (Construction Industry Arbitration Cases)</li>
              </ul>            
            </div>
          </div>
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