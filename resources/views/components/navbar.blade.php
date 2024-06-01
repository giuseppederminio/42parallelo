<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 m-0 fixed-top">
    <a class="navbar-brand" href="{{route('home')}}"><h1 class="tn">42esimo Parallelo</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        {{-- <a class="nav-item nav-link active" href="#">Home  --}}
            {{-- <span class="sr-only">(current)</span></a> --}}
        <a class="nav-item nav-link active" href="{{route('galleria.alba')}}">{{ __('messages.CasaRosa') }}</a>
        <a class="nav-item nav-link active" href="{{route('galleria.tramonto')}}">{{ __('messages.CasaVerde') }}</a>
        <a href="https://www.booking.com/hotel/it/42deg-parallelo-termoli.it.html" class="text-primary nav-item nav-link active">{{ __('messages.po') }}</a>

        {{-- <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
      </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <a class="bottleng bg-light" href="{{ route('setlocale', ['locale' => 'en']) }}">En</a>
        <button class="bottleng bg-light">|</button>
        <a class="bottleng bg-light" href="{{ route('setlocale', ['locale' => 'it']) }}">It</a>
      </form>
  </nav>