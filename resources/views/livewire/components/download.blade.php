<div class="containerbuttons">
    <button wire:click="download" 
    wire:loading.attr="disabled" 
    class="btn load-btn">
    <span wire:loading.remove>
        Download 
        {{$count}}
    </span>
        {{-- Load do careegamento --}}
    <div wire:loading class="load"></div>
    <span wire:loading>
        Processando...
    </span>
    
   </button>
    <button class="btn">Partilhar</button>
</div>
