<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submitNewsletter">
        <div class="form-group">
            <input type="email" wire:model="email" placeholder="Enter your email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>
