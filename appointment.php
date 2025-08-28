<?php
require_once("header.html");
?>

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
            <a href="index" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Appointment</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h4 class="displat-6 text-white mb-2">Trusted, Certified, and Award-Winning Eye Hospital for Exceptional Vision Care</h4>
                    <h4 class="text-body fst-italic mb-4">Schedule Your Appointment for Expert Vision Care</h4>
                    <p class="text-white mb-0">Our eye hospital is recognized for its excellence in vision treatment, offering certified care through experienced specialists. Whether you need a routine eye exam or advanced treatment, our team is here to ensure you receive the best possible care. Book an appointment today to take the first step toward clearer, healthier vision.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-4 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Comprehensive Eye Exams</option>
                                    <option value="2">Cataract Surgery</option>
                                    <option value="3">LASIK & Refractive Surgery</option>
                                    <option value="4">Glaucoma Treatment</option>
                                    <option value="5">Dry Eye Management</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Dr. Anil Mehra</option>
                                    <option value="2">Dr. Priya Sharma</option>
                                    <option value="3">Dr. Ravi Khanna</option>
                                    <option value="4">Dr. Kavita Gupta</option>
                                    <option value="5">Dr. Amar Patel</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3 book_appo" type="submit">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("footer.html");
?>