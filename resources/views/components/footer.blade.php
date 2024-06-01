
<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col-12 m-0">
            
            <div class="footerhome">
                <div class="container-fluid ">
                    
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-6 mt-2 ">       
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
                                    <i class="fa-solid fa-phone m-1" style="color: #4D869C;"></i>
                                    <div class="ml-2 b">+39 3314931556</div>
                                </div>
                                <div class="d-flex align-items-center p-2 contact-item">
                                    <i class="fa-solid fa-house m-1" style="color: #4D869C;"></i>
                                    <div class="ml-2 b">Via dei Bastioni 13, 86039 Termoli, Italia</div>
                                </div>
                                <div class="d-flex align-items-center p-2 contact-item">
                                    <i class="fa-regular fa-envelope m-1" style="color: #4D869C;"></i>
                                    <div class="ml-2 b">giuliam170297@gmail.com</div>
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
                        
                        <div class="col-12 col-md-6 d-flex justify-content-around align-items-center p-3">
                            
                            <!-- Botone per i servizi -->
                            <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#serviziModal">{{ __('messages.serv') }}</button>
                            
                            <!-- Botone per il regolamento -->
                            <button type="button" class="btn btn-secondary m-1" data-toggle="modal" data-target="#regolamentoModal">{{ __('messages.reg') }}</button>
                            
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
                                                <li>{{ __('messages.vm') }}</li>
                                                <li>{{ __('messages.as') }}</li>
                                                <li>{{ __('messages.cam') }}</li>
                                                <li>{{ __('messages.pa') }}</li>
                                            



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
                                          
                                            <p>{{ __('messages.or') }}</p>
                                            <p>{{ __('messages.r2') }}</p>
                                            <p>{{ __('messages.r3') }}</p>
                                            <p>{{ __('messages.r4') }}</p>
                                            <p>{{ __('messages.r5') }}</p>
                                            <p>{{ __('messages.r6') }}</p>
                                            <p>{{ __('messages.r7') }}</p>
                                            <p>{{ __('messages.r8') }}</p>
                                            <p>{{ __('messages.r9') }}</p>
                                            <p>{{ __('messages.r10') }}</p>
                                            <p>{{ __('messages.r11') }}</p>
                                            <p>{{ __('messages.r12') }}</p>
                                            <p>{{ __('messages.r13') }}</p>
                                            <p>{{ __('messages.r14') }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.chiudi') }} </button>
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