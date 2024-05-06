<x-layout1>

<div style="height: 100vh">
  <div style="height: 30vh"></div>

<div class="container-fluid ">
    <row class="justify-content-center">
        <div class="d-flex justify-content-center">
            <form style="width: 50%">
            
              <div class="form-group">
                <label for="exampleFormControlInput1">inserisci il tuo indirizzo email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              {{-- <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>inserisci nome</option>
                  <option>provenienza</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div> --}}
              {{-- <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div> --}}
              <div class="form-group">
                <label for="exampleFormControlTextarea1">scrivi il tuo messaggio</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
            </form>

        </div>
    </row>
</div>

<div style="height: 15vh"></div>


<x-footer></x-footer>
</div>


</x-layout1>


