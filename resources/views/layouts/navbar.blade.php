<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ url('home') }}"><img src="{{ asset('images/logo.png') }}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active homelink"><a href="{{ url('home') }}" class="nav-link">Home</a></li>
        <li class="nav-item bushfireslink"><a href="{{ url('bushfires') }}" class="nav-link">Explore Bushfire Regions</a></li>
        <li class="nav-item ruleslink"><a href="{{ url('local-rules') }}" class="nav-link">Local Rules</a></li>
        <li class="nav-item ruleslink"><a href="{{ url('explore-information') }}" class="nav-link">Explore your area</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Link</a></li> -->
      </ul>
    </div>
  </div>
</nav>