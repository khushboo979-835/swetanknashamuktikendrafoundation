<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ===================================== -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Book Now</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Book Now</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <section class="book-now py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm p-4">
                        <h3 class="mb-4 text-center title">Book an Appointment</h3>
                        <form id="appointmentForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter your name"
                                        required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <!-- Mobile -->
                                <div class="col-md-6">
                                    <label for="number" class="form-label">Mobile Number <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" id="number" class="form-control" placeholder="Enter mobile number"
                                        pattern="[0-9]{10}" required>
                                    <div class="invalid-feedback">Enter a valid 10-digit number.</div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <!-- Address -->
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" id="address" class="form-control"
                                        placeholder="Enter your address">
                                </div>
                                <!-- Service -->
                                <div class="col-md-6">
                                    <label for="service" class="form-label">Service <span
                                            class="text-danger">*</span></label>
                                    <select id="service" class="form-select" required>
                                        <option value="" disabled selected>Select a service</option>
                                        <option value="Alcohol Addiction Treatment">Alcohol Addiction Treatment</option>
                                        <option value="Drugs Addiction Treatment">Drugs Addiction Treatment</option>
                                        <option value="Marijuana Addiction Treatment">Marijuana Addiction Treatment
                                        </option>
                                        <option value="Whitener Addiction Treatment">Whitener Addiction Treatment
                                        </option>
                                        <option value="Heroin Addiction Treatment">Heroin Addiction Treatment</option>
                                        <option value="Cocaine Addiction Treatment">Cocaine Addiction Treatment</option>
                                        <option value="Detoxification">Detoxification</option>
                                        <option value="Depression Treatment">Depression Treatment</option>
                                        <option value="Mental Health Treatment">Mental Health Treatment</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a service.</div>
                                </div>
                                <!-- Date -->
                                <div class="col-md-3">
                                    <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                                    <input type="date" id="date" class="form-control" required>
                                    <div class="invalid-feedback">Please select a date.</div>
                                </div>
                                <!-- Time -->
                                <div class="col-md-3">
                                    <label for="time" class="form-label">Time <span class="text-danger">*</span></label>
                                    <input type="time" id="time" class="form-control" required>
                                    <div class="invalid-feedback">Please select a time.</div>
                                </div>
                                <!-- Message -->
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" class="form-control" rows="3"
                                        placeholder="Additional details"></textarea>
                                </div>
                                <!-- Submit -->
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn-pro">Schedule Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function () {
            'use strict';
            var form = document.getElementById('appointmentForm');

            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    event.preventDefault();

                    // Get form values
                    var name = document.getElementById('name').value;
                    var number = document.getElementById('number').value;
                    var email = document.getElementById('email').value || 'N/A';
                    var address = document.getElementById('address').value || 'N/A';
                    var service = document.getElementById('service').value;
                    var date = document.getElementById('date').value;
                    var time = document.getElementById('time').value;
                    var message = document.getElementById('message').value || 'N/A';

                    // WhatsApp number (replace with your number, country code without +)
                    var whatsappNumber = '919798354410';

                    // Construct message
                    var whatsappMessage = `*New Appointment Request*\n\n*Name:* ${name}\n*Mobile:* ${number}\n*Email:* ${email}\n*Address:* ${address}\n*Service:* ${service}\n*Date:* ${date}\n*Time:* ${time}\n*Message:* ${message}`;

                    var encodedMessage = encodeURIComponent(whatsappMessage);

                    // Open WhatsApp
                    window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
                }

                form.classList.add('was-validated');
            }, false);
        })();
    </script>

    <!-- ===================================== -->
    <?php include("common/footer.php"); ?>
</body>

</html>