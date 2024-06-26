
				<section class="section section-height-3 border-0 m-0">
				    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
				        <div class="row justify-content-end pt-1 mt-lg-5">
				            <div class="col-7 col-md-5 position-relative">
				                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
									<li><a href="demo-construction.html">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
				                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
				                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Contact Us</span>
				                    <span class="custom-svg-position-1 custom-svg-position-1-variation">
				                        <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
				                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
				                        </svg>
				                    </span>
				                </h1>
				            </div>
				        </div>
				    </div>
				</section>

				<div class="container pt-4 pb-5 pb-sm-0 my-5">
					<div class="row pb-2 mb-5">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
							<div class="row">
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">CALL US</h3>
									<a href="tel:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/demos/construction/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										(84) 389-2378
									</a>
								</div>
								<div class="col-auto">
									<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">SEND AN EMAIL</h3>
									<a href="mailto:0123456789" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
										<img width="23" height="23" src="img/demos/construction/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
										results.lda@gmail.com
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600">
							<h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">FIND US</h3>
							<span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
								<img width="23" height="23" src="img/demos/construction/icons/location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
								Bairro Matola Rio, Q3 Celula C nº 10
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Send Us a Message</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Send us a message and we will call you back!</p>
							<form id="contact-form" class="contact-formaa form-style-3" action="contact-form" method="POST">
								@csrf
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-3-5" name="name" placeholder="Your Name">
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-3-5" name="email" placeholder="Your E-mail Address">
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-3-5" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-3-5">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-3-5" name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="custom-view-more d-inline-flex align-items-center btn btn-primary font-weight-semibold rounded-0 text-3-5 btn-px-4 btn-py-2" data-loading-text="Loading...">
											Submit
											<img width="27" height="27" src="img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light ms-2'}" />
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1800">
							<h2 class="font-weight-bold text-color-dark text-6 mb-0">Corporate Headquarters</h2>
							<p class="text-3-5 font-weight-light mb-5-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<div id="googlemaps" class="google-map m-0" style="min-height: 450px;"></div>
						</div>
					</div>
				</div>

				<div class="position-relative pb-5 d-none d-xl-block">
					<div class="position-absolute transform3dy-n50 left-0">
						<div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
							<div class="custom-square-1 bg-primary mt-0 mb-5"></div>
						</div>
					</div>
				</div>