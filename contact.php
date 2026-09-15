<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Machinery</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

<?php
include 'header.php';
?>


<section class="contact-hero">

    <div class="container">

        <div class="contact-hero-content text-center">

            <h1 class="fw-bold">
                Our Contact
            </h1>

            <p>
                Reliable Machinery Solutions for Your Business
            </p>

        </div>

    </div>

</section>

<!-- ================= CONTACT SECTION ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Contact Us
            </h2>

            <p class="h-center">
                Get in touch with us for machinery enquiries, quotations,
                and support.
            </p>

        </div>


        <div class="row g-5">


            <!-- ================= CONTACT INFORMATION ================= -->

            <div class="col-md-5 ">

                <div class="card shadow h-100 contact-card">

                    <div class="card-body p-4 text-center h-text">

                        <h3 class="fw-bold mb-5">
                            Get In Touch
                        </h3>

                        <p class="text-muted">
                            We are happy to help you choose the right
                            machinery for your business requirements.
                        </p>


                        <div class="mb-5">

                            <h5 class="fw-bold">
                                📍 Address
                            </h5>

                            <p class="text-muted">
                                Machinery Solutions,<br>
                                Industrial Area,<br>
                                Gujarat, India.
                            </p>

                        </div>


                        <div class="mb-4">

                            <h5 class="fw-bold">
                                📞 Phone
                            </h5>

                            <p class="text-muted">
                                +91 98765 43210
                            </p>

                        </div>


                        <div class="mb-4">

                            <h5 class="fw-bold">
                                ✉️ Email
                            </h5>

                            <p class="text-muted">
                                info@machinery.com
                            </p>

                        </div>


                        <div>

                            <h5 class="fw-bold">
                                🕒 Business Hours
                            </h5>

                            <p class="text-muted">
                                Monday - Saturday<br>
                                9:00 AM - 6:00 PM
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= CONTACT FORM ================= -->

            <div class="col-md-7">

                <div class="card shadow contact-card">

                    <div class="card-body p-4 h-text">  

                        <h3 class="fw-bold mb-4 text-center">
                            Send Us a Message
                        </h3>
                        <form method="POST" action="contact.php">


                            <!-- Name -->

                            <div class="mb-3">

                                <label
                                    for="name"
                                    class="form-label">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    required>

                            </div>


                            <!-- Email -->

                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email" 
                                    required>

                            </div>  


                            <!-- Phone -->

                            <div class="mb-3">

                                <label
                                    for="phone"
                                    class="form-label">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    placeholder="Enter your phone number">

                            </div>
                            


                            <!-- Subject -->

                            <div class="mb-3">

                                <label
                                    for="subject"
                                    class="form-label">
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    name="subject"
                                    placeholder="Enter subject"
                                    required>

                            </div>


                            <!-- Message -->

                            <div class="mb-3">

                                <label
                                    for="message"
                                    class="form-label">
                                    Message
                                </label>

                                <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Write your message here..."
                                    required></textarea>

                            </div>


                            <!-- Submit -->

                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                Send Message

                            </button>

                            <button
                                type="reset"
                                class="btn btn-danger px-4">

                                Reset

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<?php
    include 'footer.php';
?>

</body>

</html>         