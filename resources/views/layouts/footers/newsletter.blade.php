<div class="footer-newsletter">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                <form id="newsletter-form" class="php-email-form">
                    @csrf
                    <div class="newsletter-form">
                        <input type="email" name="email" required>
                        <input type="submit" value="Subscribe">
                    </div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>
        </div>
    </div>
</div>
