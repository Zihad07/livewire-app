<div>
    <form wire:submit.prevent = "updateProfile">
        <div class="form-group">
            {{ $name }}
          <label for="exampleInputEmail1">Name</label>
          <input type="text" wire:model="name" class="form-control"aria-describedby="emailHelp" >
          {{--  <input type="text" wire:model="name" wire:keydown="checkName" class="form-control"aria-describedby="emailHelp" >  --}}
          @error('name')
              <span>{{ $message }}</span>
          @enderror

          {{--  <button wire:click="checkName">Check name</button>  --}}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" wire:model="email" class="form-control"  >
          @error('email')
              <span>{{ $message }}</span>
          @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

        @if ($status)
            <div class="alert alert-success" role="alert">
                Updated Successfull
            </div>
        @endif
      </form>

      {{--  <button wire:click="$set('message_show','true')">Show Message</button>  --}}
      <button wire:click="$toggle('message_show')">Show Message</button>
      @if ($message_show)
          <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias modi totam, illum ipsam minima dignissimos explicabo. Sit, minima aperiam id ratione, distinctio temporibus ex et eum sint facere cupiditate omnis.</p>
            </div>
          </div>
      @endif
</div>
