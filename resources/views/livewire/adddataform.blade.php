
<form wire:submit.prevent="savedata"  class="todoform">
    <h3>Add Users</h3>
    <input type="text" wire:model="firstname" placeholder="First Name">
    <input type="text" wire:model="lastname" placeholder="Lastname">
    <input type="text" wire:model="email" placeholder="email">
<select wire:model="class">
    <option>class a</option>
    <option>class b</option>
    <option>class c</option>

</select>
    <input type="file" wire:model="image" placeholder="First Name">
    <input type="checkbox" wire:model="agree">
    @if($agree)
    <label>You have agreed on out terms and condiction</label>
    @else
    <label>Agree on our terms</label>

    @endif
    @if($agree)
        <button>Create</button>
    @endif
   </form>
