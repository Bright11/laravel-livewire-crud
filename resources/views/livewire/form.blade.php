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

@if($update==false)
@include('livewire.adddataform')
@else
@include('livewire.updateform')

@endif
   {{--  --}}

   <table class="table">
    <thead>
      <tr>

        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">email</th>
        <th scope="col">image</th>
        <th scope="col">class</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

     @forelse ($getstudent as $s )
     <tr>
        <th >{{ $s->firstname }}</th>
        <td >{{ $s->lastname }}</td>
        <td>{{ $s->email }}</td>
        <td class="img"><img src="{{ Storage::url($s->image) }}" alt=""></td>
        <td>{{ $s->class }}</td>
        <td><a style="cursor: pointer"wire:click="updateitem({{ $s->id }})">Update</a></td>
        <td><a style="cursor: pointer" wire:click="deletedata({{ $s->id }})">Delete</a></td>
      </tr>
     @empty

     @endforelse
    </tbody>
  </table>
   {{--  --}}
</div>
