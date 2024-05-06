<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <div class="container">
    <div class="row">
      <div class="col-3">
        
        <a class="navbar-brand" href="{{route('home')}}">42° parallelo</a>
      </div>
      <div class="col-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Appartamenti
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="{{route('galleria.alba')}}">Appartamento Alba</a>
                <a class="nav-link" href="{{route('galleria.index')}}">Appartamento Tramonto</a>
                
              </div>
            </li> --}}
            
            {{-- a seguire scopri termoli e contattaci da aggiungere, vedi se riesci a inserire anche dove siamo con mappa --}}
            
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{route('article.index')}}">scopri Termoli</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('contatti')}}">Scrivici</a>
            </li> --}}
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('galleria.alba')}}">appartamento alba</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('galleria.tramonto')}}">appartamento tramonto</a>
            </li>
          </ul>
          
        </div>
        
      </div>
      
      <div class="col-3">
        
        <button id="english-btn">English</button>
        <button id="italian-btn">Italiano</button>
      </div>
    </div>
  </div>
</nav>