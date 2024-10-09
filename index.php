<?php include('header.php'); ?>
<?php include('db_connection.php'); ?>

<?php 
$query="SELECT * FROM `protofolio`";
$result=mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result)){
?>
<div class="box">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 50px; margin-left: 94%; ">Add Data</button>
</div>
<section class="about-sec" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="images/about-sec-1.png" alt="" class="main-img wow fadeInRight"
                                data-wow-duration="2s" />
                            <img src="images/about-sec-2.png" alt="" class="card-img wow fadeInLeft"
                                data-wow-duration="2s" data-wow-delay=".5s" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-box wow text-focus-in" data-wow-duration="2s">
                            <div class="text-h">
                                <p class="subtitle">about us</p>
                                <h1 class="title mt-3"><?php echo $row['about_title']; ?></h1>
                            </div>
                            <p class="p mt-3 ">
                                <?php echo $row['about_description']; ?>
                            </p>
                            <a href="#" class="more-btn mt-4 d-block" data-toggle="modal"
                                data-target="#contentModal"><img src="images/icons/right-arrow.svg" alt=""
                                    class="icon" /> Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pattern1.png" alt="" class="pattern wow fadeInRight" data-wow-duration="2s">
        </section>

<?php
}
?>
<form action="">
<!-- Start Modal Form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" name="logo">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title">
                    <label for="subtitle">subtitle</label>
                    <input type="text" class="form-control" name="subtitle">
                    <label for="description">description</label>
                    <input type="text" class="form-control" name="description">
                    <label for="client_image">client_image</label>
                    <input type="file" class="form-control" name="client_image">
                    <label for="about_title">about_title</label>
                    <input type="text" class="form-control" name="about_title">
                    <label for="about_description">about_description</label>
                    <input type="text" class="form-control" name="about_description">
                    <label for="about_image">about_image</label>
                    <input type="file" class="form-control" name="about_image">
                    <label for="about_goals_title">about_goals_title</label>
                    <input type="text" class="form-control" name="about_goals_title">
                    <label for="about_goals_description">about_goals_description</label>
                    <input type="text" class="form-control" name="about_goals_description">
                    <label for="service_image">service_image</label>
                    <input type="file" class="form-control" name="service_image">
                    <label for="service_title">service_title</label>
                    <input type="text" class="form-control" name="service_title">
                    <label for="service_description">service_description</label>
                    <input type="text" class="form-control" name="service_description">
                    <label for="latest_images">latest_images</label>
                    <input type="file" class="form-control" name="latest_images">
                    <label for="our_partners_images">our_partners_images</label>
                    <input type="file" class="form-control" name="our_partners_images">
                    <label for="address">address</label>
                    <input type="text" class="form-control" name="address">
                    <label for="phone">phone</label>
                    <input type="text" class="form-control" name="phone">
                    <label for="email">email</label>
                    <input type="text" class="form-control" name="email">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="add_data">ADD</button>
        </div>
        </div>
    </div>
    </div>
</form>

<!-- End Modal Form -->



        <!--Start clients-sec -->
        <!-- <section class="clients-sec">
            <div class="container">
                <div class="swiper-container clients-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/clients-1.png" alt="" class="partner-img wow zoomIn"
                                data-wow-duration="2s" />
                        </div>
                    </div>
                </div>
            </div>
        </section>   -->
        <!--Start about-sec -->
        
        <!--Start about-goals -->
        <section class="about-goals">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card wow swing-in-top-bck" data-wow-duration="1.5s">
                            <div class="content">
                                <span class="icon-t"><img src="images/icons/about-goals-1.svg" alt=""></span>
                                <h5 class="title mt-4">Goals</h5>
                                <p class="p">
                                    The definition of business is an occupation or trade and the purchase and sale of
                                    products or
                                </p>
                                <!-- <a href="#" class="more-btn mt-4 d-block"><img src="images/icons/right-arrow.svg" alt="" class="icon"/> Learn more</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Start services-sec -->
        <section class="services-sec" data-scroll-index="2">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our Services</p>
                    <h1 class="title mt-3">Enjoy more Services</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="serv_card wow fadeInUp" data-wow-duration="2s">
                            <div class="content">
                                <img src="images/icons/service-1.svg" alt="" class="icon mb-4">
                                <h5 class="title">App Design</h5>
                                <p class="p">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                    eos
                                </p>
                                <a href="#" class="more-btn" data-toggle="modal" data-target="#contentModal">Learn More
                                    <img src="images/icons/right-arrow.svg" alt="" class="right-arrow-icon"></a>
                            </div>
                            <img src="images/pattern2.png" alt="" class="pattern">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Start portfolio-sec -->
        <section class="portfolio-sec" data-scroll-index="3">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our Portfolio</p>
                    <h1 class="title mt-3">Our Latest Work</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="tab-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="images/portfolio-1.png" data-fancybox="images">
                                <img src="images/portfolio-1.png" alt="" class="port_img sm" />
                            </a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--Start partners-sec -->
        <section class="partners-sec">
            <div class="container">
                <div class="text-center text-h mb-5 wow fadeInUp" data-wow-duration="2s">
                    <p class="subtitle">Our clients</p>
                    <h1 class="title mt-3">Our Partners</h1>
                    <p class="p mt-3">The definition of business is an occupation</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <img src="images/partners-1.png" alt="" class="partner-img wow zoomIn" data-wow-duration="2s" />
                    </div>
                </div>
            </div>
        </section>
        <!--Start contact-sec -->
        <section class="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-box wow text-focus-in">
                            <div class="text-h mb-4">
                                <p class="subtitle">contact</p>
                                <h1 class="title mt-3">Contact Us </h1>
                                <p class="p mt-3">Transport heavy products over long distances when speed is not an
                                    issue.</p>
                            </div>
                            <div class="links pt-2">
                                <a href="#"><img src="images/icons/contact-1.svg" alt="" class="icon" /> 292 St.
                                    Jeddah,KSA ,BOX 44035</a>
                                <a href="#"><img src="images/icons/contact-2.svg" alt="" class="icon" /> +966 485 6789
                                    012</a>
                                <a href="#"><img src="images/icons/contact-3.svg" alt="" class="icon" />
                                    info@notcrash.com</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/line1.png" alt="" class="line">
        </section>
        
    <?php include('fotter.php'); ?>