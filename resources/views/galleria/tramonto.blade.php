
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
                    Clicca qui per maggiori info sulla casa verde
                  </button>
                  
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Casa Verde</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            L'appartamento, di recentissima costruzione e caratterizzato da colori caldi, offre un ambiente accogliente e confortevole. La cucina è completamente attrezzata con piano cottura ad induzione e dispone di tutti gli utensili necessari (pentole, bicchieri, piatti, bollitore, macchinetta del caffè e moka, ecc.), oltre a un frigorifero con congelatore. La cucina si fonde armoniosamente con il soggiorno, creando uno spazio unico. Nel soggiorno, troverai un televisore su un mobile, dotato di una cassetta di sicurezza e spazio aggiuntivo per riporre le tue cose. Accanto al televisore, c'è un comodo divano che, di sera, può essere trasformato in un pratico divano letto matrimoniale. Un tavolo da pranzo poco distante dalla finestra, che offre una vista sul belvedere dove le persone passeggiano, mentre sotto si trova un condizionatore per mantenere un clima piacevole. La zona giorno è separata dalla stanza da letto insonorizzata, che dispone di un letto matrimoniale con doppio cuscino (memory e uno più sottile, per soddisfare qualsiasi esigenza), un bagno privato e una finestra, anch'essa dotata di condizionatore per un comfort ottimale.

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
        
        
        
    </x-layout>
    