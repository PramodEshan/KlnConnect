<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Contact Us</title>
</head>
<body>
<div class="content">

    <div class="container">
        <div class="row justify-content-center">
            <div class="flex-column" style="text-align: center;">
            <h3 class="thin-heading" >Contact Info</h3>
            <p>Tel: +94 (77) 123 4567 <br> Email: klnconnect.ask@gmail.com</p>
                <a href="https://twitter.com/" style="color: black;"><span class="bi bi-twitter"></span></a>
                <a href="https://www.facebook.com/" style="color: black;"><span class="bi bi-facebook"></span></a>
                <a href="https://www.instagram.com/" style="color: black;"><span class="bi bi-instagram"></span></a>
                <a href="https://lk.linkedin.com/" style="color: black;"><span class="bi bi-linkedin"></span></a>
            </div>
        </div>
        <!--Section: Contact v.2-->
        <section class="mb-4">
            <div class="row justify-content-center">
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5"><br>Do you have any questions? Please do not hesitate to contact<br>us directly. Our team will come back to you within
                a matter<br>of hours to help you.</p>
            </div>
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-info" onclick="document.getElementById('contact-form').submit();">Send</button><span>.</span>
                        <a href="./index.php"> <button type="button" class="btn btn-info" >Home</button></a>
                    </div>

                </div>
                <!--Grid column-->
            </div>
        </section>
    </div>
</div>
