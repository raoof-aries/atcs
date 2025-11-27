<?php include('header.php'); ?>
<section class="wrapper image-wrapper bg-overlay bg-overlay-400 text-white innerPageBannerContainer">
    <div class="container pt-17 pb-17 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3 text-white">Contact Us</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb text-white">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<section class="wrapper bg-light angled upper-end">
    <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
            <div class="col-xl-10 mx-auto mt-n19">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.033642757081!2d51.483356474833194!3d25.066848836969044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e442d00317c9773%3A0x3e62aa0c2fa95fe8!2sAries%20Energy%20Wearhouse%20Birkat!5e0!3m2!1sen!2sin!4v1763627808253!5m2!1sen!2sin" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                            </div>
                            <!-- /.map -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-14">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div class="align-self-start justify-content-start">
                                        <h5 class="mb-1">Address</h5>
                                        <address>
                                            Building no. 42,Zone: 91,Street : 3016
                                            Birkat Al Awamer,Doha, Qatar
                                        </address>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <a href="tel:00974 44174897">
                                            <p>
                                                00974 44174897
                                            </p>
                                        </a>

                                    </div>
                                </div>
                                <!--/div -->
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-print"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Fax</h5>
                                        <p>
                                            00974 44982656
                                        </p>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:repairs.qa@ariesmar.com" class="link-body">
                                                repairs.qa@ariesmar.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!--/div -->
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
                <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
                <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                <label for="form_name">First Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your first name. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                <label for="form_lastname">Last Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your last name. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                <label for="form_email">Email *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid email address. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="123 456 7890" required>
                                <label for="form_email">Contact Number *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid contact number. </div>
                            </div>
                        </div>
                        <!-- /column -->

                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="form_message">Message *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your messsage. </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">

        <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                <h3 class="display-4 mb-7 px-lg-19 px-xl-18">
                    Key Personnel
                </h3>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 mb-md-10 justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                    <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Ajith V.S</h4>
                            <p class="mb-0">Manager</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                    <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Ananthu MR</h4>
                            <p class="mb-0">Corrosion Control Services</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                    <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">Aswin Asokan</h4>
                            <p class="mb-0">OCTG Services</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /div -->
            </div>

        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>


<?php include('footer.php'); ?>