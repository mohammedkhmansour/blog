<x-news-layout>

        <!-- main-area -->
        <main>

            <!-- search-popup -->
		<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content search-popup">
					<div class="text-center">
						<a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
					</div>
					<div class="row search-outer">
						<div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
						<div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /search-popup -->
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>
                                    <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

             <!-- services-area -->
            <section id="services" class="services-area pt-90 pb-60 fix">
                <div class="container">

                    <div class="row">
                         <div class="col-lg-4 col-md-12">

                          <div class="services-box mt-0 mb-30 text-center">
                              <div class="services-icon">
                                   <img src="{{asset('front/img/icon/cn-icon1.png')}}" alt="icon01">
                                </div>
                               <div class="services-content2">
                                    <h5>Email Address</h5>
                                    <p>{{config('app.email')}}</p>
                                </div>
                            </div>
                              <div class="services-box mt-0 mb-30 text-center">
                              <div class="services-icon">
                                   <img src="{{asset('front/img/icon/cn-icon2.png')}}" alt="icon01">
                                </div>
                               <div class="services-content2">
                                    <h5>Phone Number</h5>
                                     <p>{{config('app.phone')}}</p>

                                </div>
                            </div>
                               <div class="services-box mt-0 mb-30 text-center">
                              <div class="services-icon">
                                   <img src="{{asset('front/img/icon/cn-icon3.png')}}" alt="icon01">
                                </div>
                               <div class="services-content2">
                                    <h5>Office Address</h5>
                                    <p>{{config('app.address')}}</p>

                                </div>
                            </div>


                        </div>
                        <div class="col-lg-8 col-md-12">
                            <x-error-alert />

                         <form action="{{route('contact.store')}}" method="post" class="contact-form ">
                            @csrf
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-20">
                                    <input type="text" id="lastn" name="lastn" placeholder="Last Name" required>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="email" name="email" placeholder="Eamil" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">
                                            <button class="btn ss-btn" type="submit" data-animation="fadeInRight" data-delay=".8s">Submint Now</button>
                                        </div>
                            </div>
                            </div>

                    </form>

                        </div>


                    </div>
                </div>
            </section>
            <!-- services-area-end -->

              <!-- services-area -->
            <section id="map" class="map fix">
                <div class="container-fulid">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425345.01307524694!2d-112.40523132230999!3d33.60509911295008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b12ed50a179cb%3A0x8c69c7f8354a1bac!2sPhoenix%2C%20AZ%2C%20USA!5e0!3m2!1sen!2sin!4v1616492655751!5m2!1sen!2sin" width="100" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>


        </main>
        <!-- main-area-end -->

</x-news-layout>
