

<div>

    <label for="search">Cerca</label>
    <input type="text" wire:model.live="search" id="search">
    

    @foreach ($users as $user)

        <div wire:key="{{$user->id}}">

            {{$user->name}}

        </div>
        
    @endforeach


</div>