
<form wire:submit.prevent="updateitems"  class="todoform">
    <input type="text" wire:model="firstname" placeholder="First Name">
    <input type="text" wire:model="lastname" placeholder="Lastname">
    <input type="text" wire:model="email" placeholder="email">
<select wire:model="class">
    <option>class a</option>
    <option>class b</option>
    <option>class c</option>

</select>
    <input type="file" wire:model="imageupdate">

        <button>Create</button>
   </form>
