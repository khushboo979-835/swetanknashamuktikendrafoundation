<style>
    .sidebar .form-control{
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid var(--primary-color);
        border-radius: 0px;
    }
</style>

<section class="sidebar">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card shadow border-0 p-3 mb-4">
                <h4 class="mb-3 title">Contact Us</h4>
                <form id="sidebarContactForm" class="needs-validation" novalidate>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <!-- Mobile Number -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your mobile number"
                            pattern="[0-9]{10}" required>
                        <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                        <div class="invalid-feedback">Please enter a valid address.</div>
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your message" required></textarea>
                        <div class="invalid-feedback">Please enter your message.</div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Bootstrap 5 validation + WhatsApp send
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    event.preventDefault(); // Prevent actual form submit

                    // Get form values
                    var name = document.getElementById('name').value;
                    var phone = document.getElementById('phone').value;
                    var email = document.getElementById('email').value;
                    var address = document.getElementById('address').value;
                    var message = document.getElementById('message').value;

                    // WhatsApp number (replace with your number, include country code without +)
                    var whatsappNumber = '917856893645';

                    // Construct WhatsApp message
                    var whatsappMessage = `*New Contact Form Submission*\n\n*Name:* ${name}\n*Mobile:* ${phone}\n*Email:* ${email}\n*Address:* ${address}\n*Message:* ${message}`;

                    // Encode message
                    var encodedMessage = encodeURIComponent(whatsappMessage);

                    // Open WhatsApp
                    window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
