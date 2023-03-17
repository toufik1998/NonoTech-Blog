<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Boostsrap cdn -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="./sass/style.css"> --}}
        {{-- <link rel="stylesheet" href={{url('css/sass/main.css')}}> --}}
        <link rel="stylesheet" href={{url('css/sass/sign.css')}}>
        <link rel="stylesheet" href={{url('css/sass/article.css')}}>
        <link rel="stylesheet" href={{url('css/sass/search.css')}}>
        <link rel="stylesheet" href={{url('css/sass/style.css')}}>


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>


    </head>
    <body>

        





        @yield('content')




        <!--start section footer-->

        {{-- <footer id="contact">
            <div class="contact-us">
            <p class="sections-title text-center">Contact</p>
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="social footer-columns">
                    <p class="title">Social media</p>
                    <ul>
                        <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook fa-1x"></i>
                            Facebook
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin fa-1x"></i>
                            LinkedIn
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter fa-1x"></i>
                            Twitter
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="social footer-columns">
                    <p class="title">Emails</p>
                    <ul>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-envelope"></i>
                            toufikshima98@gmail.com</a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-envelope"></i>
                            nouhi073@gmail.com</a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-envelope"></i>
                            nntech@gmail.com
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="social footer-columns">
                    <p class="title">Phones</p>
                    <ul>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            +212 54135741</a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            +212 6413..</a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa-solid fa-phone"></i>
                            +212 61..</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="copyright text-center">
            <p class="text-white">All right reserved &copy; NanoTech <span style="color: red;">&hearts;</span> Toufik Shima <span style="color: red;">&hearts;</span></p>
            </div>


        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="#"></script> --}}


        <footer>

            <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <h4 class="footer-title">
                        Who are we
                    </h4>
                    <ul class="list-unstyled">
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Who are we</a>
                      </li>
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Privacy policy</a>
                      </li>
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Terms and conditions</a>
                      </li>
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">About the platform</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <h4 class="footer-title">
                        Contact Us
                    </h4>
                    <ul class="list-unstyled">
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Advertise with us</a>
                      </li>
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Contact Us</a>
                      </li>
                      <li class="mt-3">
                        <a href="#" class="link-unstyled">Work with us</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <h4 class="footer-title">
                        Call us now
                    </h4>
                    <ul class="list-unstyled">
                      <li class="mt-3">
                        <i class="fa-solid fa-location-dot"></i>
                        Morocco, Marrakech, Youssoufia
                      </li>
                      <li class="mt-3">
                        <i class="fa-solid fa-phone"></i>
                        0 341 02251144
                      </li>
                      <li class="mt-3">
                        <i class="fa-solid fa-envelope"></i>
                        info@mynews.com
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <h4 class="footer-title">
                      Follow us On
                    </h4>
                    <ul class="social-media">
                      <li class="social-media-icon">
                        <a href="#">
                          <img src="./images/social_media/Facebook.png" alt="Facebook">
                        </a>
                      </li>
                      <li class="social-media-icon">
                        <a href="#">
                          <img src="./images/social_media/Instagram.png" alt="Instagram">
                        </a>
                      </li>
                      <li class="social-media-icon">
                        <a href="#">
                          <img src="./images/social_media/Twitter.png" alt="Twitter">
                        </a>
                      </li>
                      <li class="social-media-icon">
                        <a href="#">
                          <img src="./images/social_media/YouTube.png" alt="YouTube">
                        </a>
                      </li>
                    </ul>
                    <div class="text-center mt-3">
                      <a href="index.html" class="footer-brand">NanoTech</a>
                    </div>
                    <div class="copyright text-center mt-3">
                      All right reserved NanoTech <span id="year"></span> <span class="text-danger">&hearts;</span> Toufik Shima <span class="text-danger">&hearts;</span>
                    </div>
                  </div>
                </div>
              </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        {{-- <script src="js/swiper.js"></script> --}}
        <script src={{url('js/swiper.js')}}></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        {{-- <script src="js/index.js"></script> --}}
        <script src={{url('js/index.js')}}></script>

    </body>
</html>



