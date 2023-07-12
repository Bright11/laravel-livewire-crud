<div>
   {{ $name }}
<form class="myform" action="">
    <input type="text" wire:model="name"/>
    <input type="checkbox" wire:model='checkme'>
    @if($checkme)
    <button>Submit</button>

    @endif
    <select wire:model="talk">
        <option >Goodbye</option>
        <option >See you again</option>
        <option >Have a nice day</option>
    </select>
    @if($talk)
        <p>{{ $talk }}</p>
    @endif
</form>
</div>
