<div class="col-lg-12">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
            <div class="col-md-12">
                <input type="text" wire:model="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-12">
                <input type="email" wire:model="email" class="form-control" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
                <input type="text" wire:model="subject" class="form-control" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
                <textarea wire:model="message" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading" wire:loading>Loading...</div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </form>
</div>
