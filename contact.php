<!-- Contact Section -->
<section class="contact-section py-5 ">
    <div class="container">
        <div class="row g-4 align-items-center">

            <!-- Left Side: Contact Info + Map -->
            <div class="col-md-5">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="head-title">
                        <h2 class="mb-1 fw-bold">Contact <span>Us</span></h2>

                    </div>
                    <!-- Google Map -->
                    <div class="map-container mt-4">
                        <iframe
                            title="Google Maps Location for Swetank Nasha Mukti Kendra"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2844.6817795451743!2d84.99088607539387!3d25.564945877475992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDMzJzUzLjgiTiA4NMKwNTknMzYuNSJF!5e1!3m2!1sen!2sin!4v1762261166366!5m2!1sen!2sin"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-7">
                <div class="card contact-card border-0 shadow p-4">
                    <div class="head-title">
                        <h2 class="mb-3 fw-bold">Send Us a <span>Message</span></h2>
                        <p class="mb-4">Reach out to <strong>Swetank Nasha Mukti Kendra</strong> for support and
                            guidance
                            on recovery.</p>
                    </div>
                    <form id="mainContactForm" class="needs-validation" novalidate>
                        <div class="row">
                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cname" placeholder="Enter Your Name"
                                    name="name" required>
                                <div class="invalid-feedback">Valid Name is required.</div>
                            </div>
                            <!-- Number -->
                            <div class="col-md-6 mb-3">
                                <label for="number" class="form-label">Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="cnumber" placeholder="Enter Your Number"
                                    name="number" pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Valid 10 Digit Number is required.</div>
                            </div>
                            <!-- Address -->
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="caddress" placeholder="Enter Your Address"
                                    name="address" required>
                                <div class="invalid-feedback">Valid Address is required.</div>
                            </div>
                            <!-- Services -->
                            <div class="col-md-6 mb-3">
                                <label for="services" class="form-label">Service <span
                                        class="text-danger">*</span></label>
                                <select name="services" id="cservices" class="form-select" required>
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="Alcohol Addiction Treatment">Alcohol Addiction Treatment</option>
                                    <option value="Drugs Addiction Treatment">Drugs Addiction Treatment</option>
                                    <option value="Marijuana Addiction Treatment">Marijuana Addiction Treatment</option>
                                    <option value="Whitener Addiction Treatment">Whitener Addiction Treatment</option>
                                    <option value="Heroin Addiction Treatment">Heroin Addiction Treatment</option>
                                    <option value="Cocaine Addiction Treatment">Cocaine Addiction Treatment</option>
                                    <option value="Detoxification">Detoxification</option>
                                    <option value="Depression Treatment">Depression Treatment</option>
                                    <option value="Mental Health Treatment">Mental Health Treatment</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <!-- Message -->
                            <div class="col-md-12 mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="cmessage" placeholder="Enter Your Message" rows="3"
                                    name="message"></textarea>
                            </div>
                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn-pro px-4">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CSS -->
<style>
    .contact-section {
        background: linear-gradient(rgba(255, 255, 255, 0.9),
                rgba(255, 255, 255, 0.9)), url('assets/images/background/4.jpg') no-repeat center center/cover;
        background-attachment: fixed;
    }

    .map-container {
        border-radius: 10px;
        overflow: hidden;
    }

    .contact-section .form-control,
    .contact-section .form-select {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid var(--primary-color);
        border-radius: 8px;
        color: #333;
        padding: 10px 15px;
    }
    
    .contact-section .form-control::placeholder {
        color: #6c757d;
    }

    .contact-section .form-control:focus,
    .contact-section .form-select:focus {
        background: #ffffff;
        color: #000000;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        border-color: #86b7fe;
    }

    .contact-section .card a {
        text-decoration: none;
        color: var(--primary-color);
    }



</style>

<script>
    (function () {
        'use strict';

        var form = document.getElementById('mainContactForm');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault(); // Prevent default form submit

                // Get form values
                var name = document.getElementById('cname').value;
                var number = document.getElementById('cnumber').value;
                var address = document.getElementById('caddress').value;
                var service = document.getElementById('cservices').value;
                var message = document.getElementById('cmessage').value;

                // WhatsApp number (replace with your number, include country code without +)
                var whatsappNumber = '917856893645';

                // Construct WhatsApp message
                var whatsappMessage = `*New Contact Form Submission*\n\n*Name:* ${name}\n*Number:* ${number}\n*Address:* ${address}\n*Service:* ${service}\n*Message:* ${message}`;

                // Encode message
                var encodedMessage = encodeURIComponent(whatsappMessage);

                // Open WhatsApp
                window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
            }

            form.classList.add('was-validated');
        }, false);
    })();
</script>