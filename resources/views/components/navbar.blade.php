    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light borderbottom p-2 d-flex justify-content-around ">
        <a class="navbar-brand" href="{{route('home')}}">home</a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        
        <div 
        {{-- class="collapse navbar-collapse"  --}}
        
        id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Appartamenti
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="{{route('galleria.alba')}}">Appartamento Alba</a>
                        <a class="nav-link" href="{{route('galleria.index')}}">Appartamento Tramonto</a>
                      
                    </div>
                  </li>
                
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="{{route('galleria.index')}}">Appartamento Alba</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('galleria.index')}}">Appartamento Tramonto</a>
                </li> --}}


                <li class="nav-item active">
                    <a class="nav-link" href="{{route('article.index')}}">scopri Termoli</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('contatti')}}">Scrivici</a>
                </li>
                
            </ul>
            
        </div>
    </nav>
    
    <!-- fine navbar -->
    