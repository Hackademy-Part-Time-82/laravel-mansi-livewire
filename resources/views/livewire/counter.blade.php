 <div>
     <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
         <button wire:click="showHide();" class="btn btn-info">Mostra/Nascondi</button>
     </div>
     <hr>
     @if ($isVisible)
         <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
             <button class="btn btn-danger" wire:click="decrement();">-</button>

             <span>{{ $counter }}</span>

             <button class="btn btn-success" wire:click="increment();">+</button>
         </div>
     @endif
     <hr>
     <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
         <input wire:model.live="testo" type="text" class="form-control" name="" id="">
     </div>
     <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
         @if (strlen($testo))
             <span>Ciao mi chiamo {{ $testo }}</span>
         @else
             <div class="alert alert-danger" role="alert">
                 Hai lasciato il campo vuoto!
             </div>
         @endif
     </div>
     <hr>
     <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
         @if (strlen($testo))
             <span>Il valore da te inserito "{{ $testo }}" ha esattamente {{ strlen($testo) }} caratteri</span>
         @else
             <div class="alert alert-danger" role="alert">
                 Non posso calcolare i caratteri!
             </div>
         @endif
     </div>
     <hr>
     <div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
         <ul>
             @foreach ($users as $user)
                 <li>{{ $user->email }}</li>
             @endforeach
         </ul>
     </div>
 </div>
 </div>
