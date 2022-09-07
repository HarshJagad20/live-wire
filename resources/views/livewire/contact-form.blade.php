<div class="container">

    <div>
        <h1>Contact Form</h1>
    </div>

    <div class="form-group" wire:poll>
        Current time: {{ now() }}
    </div>

    <div class="form-group">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <form wire:submit.prevent="saveContact">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter name" wire:model.lazy="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Enter email" wire:model.lazy="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" placeholder="Enter phone number" wire:model.lazy="phone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" placeholder="Enter message" wire:model.lazy="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>