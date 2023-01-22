@extends('homepage.layouts.app')
 
{{--@section('title', 'Page Title')--}}
 
@section('content')

       @include('homepage.includes.nav')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">Cha'ah Bubble Tea</div>
                <div class="masthead-subheading ">"Great coffee will make your meal tastier"</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Dine me In!</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img class="img-fluid" src="assets/img/service/dine-in.jpg" alt="...">
                        </span>
                        <h3 class="my-3">Dine-in</h3>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img class="img-fluid" src="assets/img/service/delivery.png" alt="...">
                        </span>
                        <h3 class="my-3">Costumer Pickup</h3><br>
                        <h6>Payment Method:</h6>
                            <p class="text-muted">
                            Accepts Cash <br> Visa <br> Mastercard <br> Credit Cards <br> GCash
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                           <img class="img-fluid" src="assets/img/service/take-out.jpg" alt="...">
                        </span>
                        <h3 class="my-3">Delivery area 5km</h3>
                    </div>
                </div>
            </div>
           
        </section>
        <!-- menu Grid-->
        <section class="page-section bg-light" id="menu">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">menu</h2>
                    <h3 class="section-subheading text-muted">Highlights for Dining</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- menu item 1-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal1">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/11.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">Pad Thai</div>
                                <div class="menu-caption-subheading text-muted">Menu#1</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- menu item 2-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal2">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/12.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">Chicken Burger</div>
                                <div class="menu-caption-subheading text-muted">Menu#2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- menu item 3-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal3">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/13.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">Tapsilog</div>
                                <div class="menu-caption-subheading text-muted">Menu#3</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- menu item 4-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal4">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/14.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">Pork Satay</div>
                                <div class="menu-caption-subheading text-muted">Menu#4</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- menu item 5-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal5">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/15.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">CheeseCake</div>
                                <div class="menu-caption-subheading text-muted">Menu#5</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- menu item 6-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal6">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/16.jpg" alt="..." />
                            </a>
                            <div class="menu-caption">
                                <div class="menu-caption-heading">Thai Pork Rib Soup</div>
                                <div class="menu-caption-subheading text-muted">Menu#6</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><br>
                    <a class="btn btn-primary btn-xl text-uppercase" href="https://www.facebook.com/chaahbyjuyens1/posts/pfbid0Qxyp2sv7wiMAW22HLXMrTMyXL6w1U4tgcKFDEixQKh3pPfrkDpaS19LTDMBe5cQ9l"  rel="noopener noreferrer" target="_blank" >
                    Menu</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Location</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Jose Abad St corner, Capitol Dr, Butuan City, Agusan Del Norte, Butuan City, Philippines</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/6.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Open Hours</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/7.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Contact Number</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">09190075586<br>juyen052416@yahoo.com</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/8.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Facebook Page</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Cha'ah by: Juyens<br>https://www.facebook.com/chaahbyjuyens1/</p></div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </section>
        <!-- Team-->
        <!-- ======= team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

            <div class="section-title">
            <h2>Reviews</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="team-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fun place, awesome setting, good food! The curry beef was delicious, very tender and a lot of beef. But the pineapple fried rice not so tasty. And way too much! This should be a smaller side dish. Loved the setting but menu needs a little work.                  
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/team/tes1.png" class="testimonial-img" alt="">
                    <h3>Jeff Sharpton</h3>
                    <h4>Local Guide</h4>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I recommend this place! The place is nice at night because of the lights outside. The tables are lovely since they are made of wood. Server are kind and big food portions. For foreigners with big appetite this place is best.. For Filipinos, one dish is good for two.                  
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/team/tes2.png" class="testimonial-img" alt="">
                    <h3>Marivic Yacapin</h3>
                    <h4>Local Guide</h4>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Nice cozy place to listen to live music, food is lovely affordable. Not recommended for heavy drinkers, because its quite pricey. Overall, dining in is great.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/team/tes3.png" class="testimonial-img" alt="">
                    <h3>Emmy Mordz</h3>
                    <h4>Local Guide</h4>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Food is good, price a little pricey but expected from the output. Relaxing atmosphere and good for nightography. Restroom could be better.                  
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/team/tes5.png" class="testimonial-img" alt="">
                    <h3>Papapau Papapau</h3>
                    <h4>Local Guide</h4>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Service was superb, great ambiance and crews were approachable. Food and drinks are reasonably priced. Live singers were awesome.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/team/tes4.png" class="testimonial-img" alt="">
                    <h3>nova lumactod</h3>
                    <h4>Local Guide</h4>
                </div>
                </div><!-- End testimonial item -->

            </div>
                <div class="swiper-pagination"></div>
            </div>

      </div>
    </section><!-- End team Section -->
    
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.google.com/maps/place/Cha'ah+Bubble+Tea/@8.9415709,125.5353307,17z/data=!4m5!3m4!1s0x3301c157d206cca7:0xf997725934505929!8m2!3d8.9415942!4d125.535392" rel="noopener noreferrer" target="_blank">
                        <img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/Googlemap.jpg" alt="..." aria-label="GoogleMap Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.facebook.com/chaahbyjuyens1" rel="noopener noreferrer" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.jpg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.instagram.com/chaahbyjuyens/?hl=en" rel="noopener noreferrer" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/logo-instagram.webp" alt="..." aria-label="Instagram Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://mobile.twitter.com/chaahbyjuyens" rel="noopener noreferrer" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/twitterlogo.png" alt="..." aria-label="Twitter Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <br>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="FullName" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email is required</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="PhoneNumber" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">PhoneNUmber is required</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message:" data-sb-validations="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a href="https://www.facebook.com/chaahbyjuyens1" class="btn btn-dark btn-social mx-2" rel="noopener noreferrer" target="_blank" aria-laber="Facebook">
                        <i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/chaahbyjuyens/?hl=en" class="btn btn-dark btn-social mx-2" rel="noopener noreferrer" target="_blank" aria-laber="Instagram">
                        <i class="fab fa-instagram"></i></a>
                        <a href="https://mobile.twitter.com/chaahbyjuyens" class="btn btn-dark btn-social mx-2" rel="noopener noreferrer" target="_blank" aria-laber="Twitter">
                        <i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- menu Modals-->
        <!-- menu item 1 modal popup-->
        <div class="menu-modal modal fade" id="menuModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pad Thai</h2>
                                    <p class="item-intro text-muted">A stir-fried rice noodle dish commonly served as a street food.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/11.jpg" alt="..." />
                                    <p>It is typically made with rice noodles, shrimp, peanuts, a scrambled egg, and bean sprouts, among other vegetables. 
                                        The ingredients are fried in a wok.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu item 2 modal popup-->
        <div class="menu-modal modal fade" id="menuModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chicken Burger</h2>
                                    <p class="item-intro text-muted">Bread crumbs and milk keep these chicken burgers unbelievably moist and flavourful.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/12.jpg" alt="..." />
                                    <p>These burgers are loaded with tender & succulent chicken patties, dressed with a simple sauce.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu item 3 modal popup-->
        <div class="menu-modal modal fade" id="menuModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tapsilog</h2><br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/13.jpg" alt="..." />
                                    <p>Tapsilog, a popular Filipino meal, is a portmanteau of the dish's three components:beef, sinangag, and itlog.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu item 4 modal popup-->
        <div class="menu-modal modal fade" id="menuModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pork Satay</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.Throughout Southeast Asia, 
                                        little skewers of marinated meat, grilled over coals, are sold as street snacks.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/14.jpg" alt="..." />
                                    <p>Sweetly fragrant with coconut milk and spices, they are perfect for barbecue parties served with steamed rice, 
                                        or on their own with drinks, whether grilled indoors or out.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- menu item 5 modal popup-->
        <div class="menu-modal modal fade" id="menuModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CheeseCake</h2>
                                    <p class="item-intro text-muted">A sweet dessert consisting of one or more layers.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/15.jpg" alt="..." />
                                    <p>The main, and thickest, layer consists of a mixture of a soft, fresh cheese, eggs, and sugar. If there is a bottom layer,
                                     it most often consists of a crust or base made from crushed cookies, graham crackers, pastry, or sometimes sponge cake.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu item 6 modal popup-->
        <div class="menu-modal modal fade" id="menuModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Thai Pork Rib Soup</h2>
                                    <p class="item-intro text-muted">This Thai Spicy Pork Rib Soup boasts a delicious hot and sour broth that is infused 
                                        with plenty of fragrant aromatics and herbs.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/16.jpg" alt="..." />
                                    <p>It's full of juicy and tender pork spare ribs, and super warming and comforting on a chilly fall or winter day!</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 