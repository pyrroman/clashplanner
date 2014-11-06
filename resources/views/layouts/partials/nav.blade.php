<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <div class="container">
    <div class="row">
      <div class="col-sm-6 navbar-header">
        <a class="navbar-brand" href="/"><img src="/images/logo-small.png" class="img-responsive" alt="logo brand"/></a>
      </div>

      <div class="col-sm-6">

        <div class="signin-toggle pull-right" style="bottom: green;">

        @if (Auth::check())
        
          <img src="{{ Auth::user()->avatar }}" class="user-avatar img-circle hidden-xs" alt="user avatar"/>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ \App\Helpers::displayName() }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Contact Leaders</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('logout_path') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </li>
          </ul>

        @else

          <a class="btn btn-success" id="btn-signin" href="/auth/login"><img src="/images/facebook-24.png" alt="facebook icon"/> Sign in with Facebook</a>

        @endif

        </div>

      </div>

    </div>
  </div>

  @if(Auth::check())
  <nav class="main-navigation">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed navbar-inverse" data-toggle="collapse" data-target="#main-nav-links">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <ul class="nav nav-pills navbar-collapse collapse pull-right" id="main-nav-links">
          <li class="active"><a href="{{ route('home_path') }}">Home</a></li>
          <li><a href="/wars">Wars</a></li>
          <li><a href="/guides">Guides</a></li>
          <li><a href="/feed">Facebook Feed</a></li>
        </ul>
    </div>
  </nav>

  @else

  <nav class="logout-banner">
    <div class="container text-center">
      <img src="/images/banner.png" class="hidden-xs" alt="logout banner"/>
    </div>
  </nav>

  @endif

</div>

@if ($errors)
  @include('layouts.partials.errors')
@endif