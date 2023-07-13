<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    <input wire:model.lazy="name" type="text" style="border:1px">
    <input wire:model="loud" type="checkbox" >

    <select wire:model="greeting" id="" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    <br>
    <hr>
    {{ implode(', ',$greeting) }}: {{ $name }} @if($loud) !    @endif

    <hr>
    {{--  <button wire:click="resetName('New Name')">Reset name</button>  --}}
    {{--  <form action="#" wire:submit = "resetName('New Name')">  --}}
    {{--  <form action="#" wire:submit.prevent = "resetName('New Name')">  --}}
    <form action="#" wire:submit.prevent = "$set('name','Short Name')">
        <button>Reset name</button>

    </form>


</div>
