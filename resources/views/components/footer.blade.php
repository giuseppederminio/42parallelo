
<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col-12 m-0">
            
            <div class="footerhome">
                <div class="container-fluid ">
                    
                    <div class="row justify-content-between">
                        
                        {{-- <div class="col-4 col-md-2 mt-2 d-flex text-center align-items-center">
                            <div class="">
                                <a href="https://www.booking.com" target="_blank" class="btn btn-primary">
                                    <i class="fa-brands fa-booking m-1" style="color: white;"></i>
                                    Clicca qui per prenotare
                                </a>
                            </div>
                        </div> --}}
                        
                        
                        
                        <div class="col-8 col-md-4 mt-2 ">       
                            {{-- <div class="h1cam d-flex p-3">
                                
                                <div class="d-flex justify-content-start p-2">      
                                    <div class="d-flex">
                                        <i class="fa-solid fa-phone m-1" style="color: #FFD43B;"></i>
                                    </div>
                                    <div style="color: black;"> +39 3314931556</div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="d-flex">
                                        <i class="fa-solid fa-house m-1" style="color: #FFD43B;"></i>
                                    </div>
                                    <span style="color: black;">Via dei Bastioni 13, 86039 Termoli, Italia</span>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="d-flex">
                                        <i class="fa-regular fa-envelope m-1" style="color: #FFD43B;"></i>
                                    </div>
                                    <div style="color: black;">Giuliam170297@gmail.com</div>
                                </div>
                                
                            </div> --}}
                            
                            <div class="contact-container d-flex flex-column align-items-start p-3">
                                <div class="d-flex align-items-center p-2 contact-item">
                                    <i class="fa-solid fa-phone m-1" style="color: #FFD43B;"></i>
                                    <div class="ml-2">+39 3314931556</div>
                                </div>
                                <div class="d-flex align-items-center p-2 contact-item">
                                    <i class="fa-solid fa-house m-1" style="color: #FFD43B;"></i>
                                    <div class="ml-2">Via dei Bastioni 13, 86039 Termoli, Italia</div>
                                </div>
                                <div class="d-flex align-items-center p-2 contact-item">
                                    <i class="fa-regular fa-envelope m-1" style="color: #FFD43B;"></i>
                                    <div class="ml-2">Giuliam170297@gmail.com</div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            {{--                             
                                icone facebook linkedin,ecc..
                                
                                <div class="d-flex justify-content-center align-items-center p-2">
                                    
                                    <span>
                                        <a href="">
                                            <i class="fa-brands fa-facebook fa-lg p-2"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="">
                                            <i class="fa-brands fa-instagram fa-lg p-2"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin fa-lg p-2"></i>
                                        </a>
                                    </span>
                                    
                                    
                                    
                                </div> --}}
                            </div>
                            {{-- <div class="col-4 col-md-2 mt-2 d-flex text-center align-items-center">
                                <div class="btn-sfizioso">
                                    <a href="https://www.booking.com/hotel/it/42deg-parallelo-termoli.it.html" target="_blank" class="btn btn-secondary btn-block">
                                        <i class="fa-brands fa-booking m-1" style="color: white;"></i>
                                        Prenota ora
                                    </a>
                                </div>
                            </div> --}}
                            
                            
                            
                            <div class="col-12 col-md-6 d-flex flex-column justify-content-around align-items-center p-3">
                                <div class="btn-sfizioso">
                                    <!-- Botone per i servizi -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviziModal">{{ __('messages.serv') }}</button>
                                </div>
                                <div class="btn-sfizioso">
                                    <!-- Botone per il regolamento -->
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#regolamentoModal">{{ __('messages.reg') }}</button>
                                </div>
                                <!-- Modal per i servizi -->
                                <div class="modal fade" id="serviziModal" tabindex="-1" role="dialog" aria-labelledby="serviziModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="serviziModalLabel">{{ __('messages.serv') }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="listaservizi">
                                                    <li>{{ __('messages.bi') }}</li>
                                                    <li>{{ __('messages.wi') }}</li>
                                                    <li>{{ __('messages.fri') }}</li>
                                                    <li>{{ __('messages.ma') }}</li>
                                                    <li>{{ __('messages.vi') }}</li>
                                                    <li>{{ __('messages.as') }}</li>
                                                    <li>{{ __('messages.cam') }}</li>
                                                    <li>{{ __('messages.pa') }}</li>
                                                    <li>{{ __('messages.vm') }}</li>
                                                    
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Modal per il regolamento -->
                                <div class="modal fade" id="regolamentoModal" tabindex="-1" role="dialog" aria-labelledby="regolamentoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="regolamentoModalLabel">{{ __('messages.reg') }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body listaservizi">
                                                
                                                <p>...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>