<div>
    <div class="row">
        <div class="col-md-6 mx-auto">

            <form wire:submit.prevent="register()">
                <div>
                    Email
                    <input type="text" wire:model="email" name="email" id="">
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    password
                    <input type="password" wire:model="password" name="password" id="">
                    @error('password')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    Confirm Passoword
                    <input type="password" wire:model="passowrdConfirmation" name="passowrdConfirmation" id="">

                </div>

                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
    {{-- Do your work, then step back. --}}
</div>
