@extends('app')
@section('title')
  E-Lawyers Online - Initial Legal Assessment
@endsection
@section('content')
<div class="container">
  @if(!Auth::check())
    <div class="alert alert-info">
      <a href="{{ route('register') }}">Sign up</a> or <a href="#" class="focus-login">Login</a> to avail our legal services
    </div>
  @endif
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Initial Legal Assessment</strong>
          </h3>
          <div>
          <p>This initial legal assessment/study page is only for a general knowledge of the law and limited assessment of your legal problem/question FREE OF CHARGE based on the general and incomplete facts given to E-Lawyers Online. You agree not to copy, reproduce or otherwise publish our initial assessment without E-Lawyers Online consent. This assessment shall not be construed as lawyer-client relationship between you and E-Lawyers Online and the same is for personal information purposes only. If you want a complete and extensive assessment of your legal problem/question or complete and extensive legal advice, please select from any of our five (5) kinds of online legal services.</p>
          <p>(Itong paunang pantantiya o pag-aaral na pahina ay para lang sa malawak na kaalaman sa batas at limitadong pantantiya at pagsusuri ng iyong problemang legal o katanungan na WALANG BAYAD base sa hindi detalyadong paglalahad ng mga pangyayari na iyong binigay sa E-Lawyers Online. Ikaw ay pumapayag na ang paunang pagsusuri na ito ay hindi kokopyahin o ilalathala kaninuman ng walang nakasulat na pahintulot ng E-Lawyers Online. Ang paunang pagsusuri na ito ay hindi nangangahulugan ng pagkakaroon ng relasyon bilang abogado at kliyente sa pagitan mo at ng E-Lawyers Online at ang mga ito ay para sa iyong kaalaman lamang. Kung gusto mo ng kumpleto at malawakang pagsusuri o pag-aaral ng iyong probleman legal o kumpleto at malawakang paying legal, maaring pumili ka sa mga limang (5) online serbisyo namin.)</p>
          <p class="lead">Our Online Legal Services</p>
          <ul>
          <li>Legal Advice by E-Mail</li>
          <li>Video Conference with Lawyer</li>
          <li>Office Conference with Lawyer</li>
          <li>Monthly Retainer</li>
          <li>Case/Project Retainer</li>
          </ul>
          </div>
          @if(Auth::check())
            <div class="card">
              <div class="card-body">
                <h4 class="margin-bottom-20">
                  <strong>Initial Legal Assessment Form</strong>
                </h4>
                <form>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" name="details" rows="6"></textarea>
                  </div>
                  <div class="clearfix">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary float-right">
                        SUBMIT
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          @endif
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
@endsection