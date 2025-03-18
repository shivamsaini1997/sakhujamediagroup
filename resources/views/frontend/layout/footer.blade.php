
<footer>

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 about-footer footer-text mb-lg-0 mb-3">
                        @if($globalSetting)
                        <a href="{{url('/')}}">
                            <img class="footer-logo mb-2" src="{{asset($globalSetting?$globalSetting->footerlogo : '')}}" alt="">
                        </a>
                        @endif
                        <p>One-stop solution for all your Entertainment needs!!</p>
                        <p>We offer you premium regional and exciting content based on your taste and your mood. </p>
                    </div>
                    <div class="col-xl-3 col-lg-4 offset-xl-2 quick-link footer-text mb-lg-0 mb-3">
                        <h5>QUICK LINKS</h5>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('about-us')}}">About us</a>
                            </li>
                            <li>
                                <a href="{{route('digital-assets')}}">Digital Assets </a>
                            </li>
                            <li>
                                <a href="{{route('catalogue')}}">Catalogue</a>
                            </li>
                            <li>
                                <a href="{{route('careers')}}">Careers</a>
                            </li>
                            <li>
                                <a href="{{route('production')}}">Production</a>
                            </li>
                            <li>
                                <a href="{{route('join-us')}}">Join Us</a>
                            </li>
                            <li>
                                <a href="{{route('contact-us')}}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-4 offset-xl-1 contact-col footer-text mb-5">
                        <h5>CONTACT US</h5>
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <a href="https://maps.app.goo.gl/eVVRVbmW7qLMP2Wc7" target="_blanck">{{$globalSetting->address_office}}</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{$globalSetting->email}}" target="_blank">{{$globalSetting->email}}</a>
                            </li>

                        </ul>
                        <div class="followus-col">
                            <h5 class="MT-4">FOLLOW US</h5>
                            <ul class="d-flex gap-2">
                                <li>
                                    <a href="{{$globalSetting->facebooklink}}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{$globalSetting->instagramlink}}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{$globalSetting->twitter_link}}" target="_blank">
                                        <svg  viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.0442532 0.0703888C0.0702845 0.112039 1.21045 1.77023 2.5771 3.76163C3.94374 5.75302 5.06309 7.39299 5.06309 7.40601C5.06309 7.42163 3.94114 8.73881 2.56669 10.3371C1.19484 11.9328 0.0546657 13.2604 0.0338407 13.2839C0 13.3255 0.0364438 13.3281 0.570085 13.3281H1.14277L3.35283 10.7588C4.56849 9.34794 5.5759 8.18694 5.58892 8.18434C5.60454 8.17914 6.41151 9.33493 7.38247 10.751L9.15 13.3281H11.0867C12.9219 13.3281 13.0209 13.3255 12.9974 13.2813C12.9844 13.2578 11.8 11.532 10.3683 9.44946C8.93654 7.36696 7.76253 5.6567 7.76253 5.64889C7.76253 5.63848 8.85064 4.36815 10.1808 2.8245L12.5965 0.0131197L12.0369 0.00531101C11.5761 0.000104904 11.4694 0.00531101 11.4355 0.0365486C11.4121 0.057373 10.462 1.1585 9.32441 2.48089C8.18684 3.80588 7.24711 4.88357 7.2367 4.87837C7.22629 4.87056 6.46617 3.77204 5.54727 2.43403L3.87606 0.000104904H1.93673H0L0.0442532 0.0703888ZM7.37206 6.6537C9.59774 9.83993 11.4251 12.4561 11.4277 12.4717C11.4355 12.4873 11.1206 12.4925 10.5583 12.4899L9.67843 12.4821L5.62276 6.68234C3.39188 3.4909 1.56708 0.874756 1.56708 0.86955C1.56708 0.864344 1.96276 0.859137 2.44694 0.859137L3.3242 0.86174L7.37206 6.6537Z" ></path>
                                            </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$globalSetting->linkedinlink}}" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-footer">
                <p><i class="fa-regular fa-copyright"></i> All Rights Reserved | <a href="{{url('/')}}">SAKHUJA MEDIA GROUP</a>
                </p>
            </div>

</footer>
  <!-- All JS Files -->
  <script src="{{asset('frontend/js/jquery-3.6.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/anime.js')}}"></script>
  <script src="{{asset('frontend/js/lottie-player.js')}}"></script>
  <script src="{{asset('frontend/js/wow.min.js')}}"></script>
  <script src="{{asset('frontend/js/gsap.min.js')}}"></script>
  <script src="{{asset('frontend/js/slick.min.js')}}"></script>
  <script src="{{asset('frontend/js/ScrollTrigger.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/js/counter.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{asset('frontend/js/progressbar.js')}}"></script>
  <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>
  <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>

  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script>
    new WOW().init();


    @if(session('success'))
    toastr.success('{{ session('success') }}');
    @endif

     // Display error message --}}
    @if(session('error'))
        toastr.error('{{ session('error') }}');
    @endif
</script>


</body>

</html>
