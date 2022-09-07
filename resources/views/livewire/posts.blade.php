<div style="text-align: center">
    <h1>Save Posts</h1>

    <form wire:submit.prevent="savePosts">
        <input type="text" wire:model="title" placeholder="Enter title!">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <br>
        <br>

        <input type="body" wire:model="body" placeholder="Enter body!">
        @error('body') <span class="error">{{ $message }}</span> @enderror

        <br>
        <br>

        <button type="submit">Submit</button>
    </form>
</div>

<div>
    @livewire('show-posts', ['posts' => $posts])
</div>