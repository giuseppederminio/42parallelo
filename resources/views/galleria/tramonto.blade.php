
<x-layout>
    <div class="bg-dark">
        <div class="container">
            <div class="row justify-content-center mt-5">
                
                <x-verdebig></x-verdebig>
                
                <x-verdeSmall></x-verdeSmall>
                
                {{-- <div class="col-6">
                    <x-card></x-card>
                </div> --}}
                <x-footerVerde></x-footerVerde>

                {{-- bottone schermi piccoli --}}
                
                <button type="button" class="btn btn-primary btn-floating" data-toggle="modal" data-target="#exampleModal">
                  {{ __('messages.cliccaQuiVerde') }} 
                  </button>
                  
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">{{ __('messages.CasaVerde') }} </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body b">
                          {{ __('messages.LAppartamentoVerde') }} 

                        </div>
                        <div class="modal-footer ">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.chiudi') }} </button>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
        
        
        
    </x-layout>
    