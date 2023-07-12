<div class="submitpage">
   {{ $form }}
   <h1>{{ $name }}</h1>
   @php
       $g="good name";
   @endphp

   {{-- <form action="#" wire:submit.prevent="resetname('{{ $g }}')"> --}}
    <form action="#" wire:submit.prevent="resetname('Nwazuo')">
    <button>Reset name</button>
   </form>
</div>
