<form wire:submit.prevent="submitNewsletter" class="php-email-form">
    <div class="newsletter-form">
        <input type="email" wire:model="email" class="form-control" placeholder="Enter your email" required>
        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Subscribe</button>
    </div>

    @if (session()->has('message'))
        <div class="sent-message">
            {{ session('message') }}
        </div>
    @endif

    <div class="loading" wire:loading>Loading...</div>
</form>
