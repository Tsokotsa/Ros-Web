<footer id="footer" class="overflow-hidden border-0 m-0" style="background-image: url(assets/media/construction/backgrounds/background-2.jpg); background-repeat: no-repeat; background-position: center bottom;">
    <div class="container pt-5">
        <div class="row pt-4 mb-5 gy-4">
            <div class="col-lg-2 align-self-center">
                <a href="demo-construction.html">
                    <img alt="Porto" class="img-fluid logo" width="123" height="48" src="assets/media/construction/ros-croped.png">
                </a>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
                <ul class="list list-unstyled columns-lg-2">
                    <li>
                        <a href="/" class="text-color-hover-primary">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('whoweare') }}" class="text-color-hover-primary">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="/services" class="text-color-hover-primary">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="/projects" class="text-color-hover-primary">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="/blog" class="text-color-hover-primary">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="text-color-hover-primary">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Newsletter</h4>
                <div class="newsletter">
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsForm" action="/news" method="POST" class="mb-4-5">
                        @csrf
                        <div class="input-group">
                            <input class="form-control border-0" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="email">
                            <button class="btn btn-primary px-3" id="submit-news">
                                <img width="27" height="27" src="assets/media/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" style="width: 27px;" />
                            </button>
                        </div>
                    </form>
                </div>
                <ul class="list list-unstyled list-inline">
                    <li class="list-inline-item d-inline-flex align-items-center">
                        <img width="23" height="23" src="assets/media/construction/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                        <a href="tel:843892378" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">(84) 389-2378</a>
                    </li>
                    <li class="list-inline-item d-inline-flex align-items-center ms-0 ms-sm-4 ms-lg-1 ms-xl-4">
                        <img width="23" height="23" src="assets/media/construction/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                        <a href="/cdn-cgi/l/email-protection#2919181b1a1d1c1f1e1110" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2"><span class="__cf_email__" data-cfemail="f989968b8d96b99a96978a8d8b8c9a8d909697d79a9694">results.lda@gmail.com</span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr>

        <div class="footer-copyright bg-transparent pb-5 mt-5-5">
            <div class="row pb-5">
                <div class="col text-center mb-5">
                    <p class="text-color-grey text-3 mb-3">ROS © 2024. All Rights Reserved by Tsk. </p>
                    <ul class="footer-social-icons social-icons social-icons-clean social-icons-medium mb-5">
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram text-4"></i></a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-x-twitter text-4"></i></a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-4"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="position-absolute left-100pct transform3dx-n50 top-0 d-none d-lg-block">
        <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-appear-animation-duration="1500ms">
            <div class="custom-square-1 custom-square-1-big bg-dark mt-0 mb-5 me-5"></div>
        </div>
    </div>
</footer>
