<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LoFo') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom Fonts -->
    {{--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">--}}

    <!-- Custom CSS -->
    {{--<!--link href="css/stylish-portfolio.min.css" rel="stylesheet">-->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">--}}
    <!-- Scripts -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylish-portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">LoFo</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#lost_items">Recent Items</a>
        </li>
    </ul>
</nav>


<!-- About -->
<section class="content-section d-flex bg-primary" id="masthead">

    <div class="container text-center my-auto">

        <h3 style="color: white; margin-top: -70px">LoFo</h3>
        <p style="font-style: italic; color: white;">(Lost & Found)</p>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search"
                                   placeholder="Search lost item...">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg bg-primary" style="color: white;" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
            <!--end of col-->
        </div>

        <!--      Search results-->

        <div class="content-section-heading text-center">
            <br>
            <h3 class="text-secondary mb-0">
                <span style="color: white;">Search results</span>
            </h3>
            <br>
        </div>


        <!--<div class="card-deck mb-3">
          <div class="card">
            <img src="{{ asset('images//portfolio-1.jpg') }}" class="card-img-top" alt="iPhone">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card">
            <img src="{{ asset('images//portfolio-2.jpg') }}" class="card-img-top" alt="iPhone">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card">
            <img src="{{ asset('images//portfolio-1.jpg') }}" class="card-img-top" alt="iPhone">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card bg-light">
            <img src="{{ asset('images//portfolio-2.jpg') }}" class="card-img-top" alt="iPhone">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>-->

        <!--      <style>
                .span-item {
                  color: white;
                  background: rgba(12,12,15,1);
                }
              </style>-->


        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone Xr</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images/portfolio-1.jpg') }}" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <!--      /Search results-->

    </div>

</section>



<!-- About -->
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>A place where lost items are found!</h2>
                <p class="lead mb-5">
                    Following info. will be used to search your lost item; Name of the item, where and when have you lost it,
                    your contact info.
                    <br>
                    <br>
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="#lost_items">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- lost_items -->
<section class="content-section bg-primary" id="lost_items">
    <div class="container">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0">Lost Items</h3>
            <h2 class="mb-5">Recent Uploaded Items..</h2>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <div class="row no-gutters mt-1">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>iPhone X</h2>
                <p class="">iPhone X was found at Samaki Samaki Masaki on March 30th,2020</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a class="portfolio-item" href="#">
            <span class="caption pl-3 pr-3 pt-2" style="color: white; background: rgba(12,12,15,0.5);">
              <span class="">
                <h2>LG 43" Tv</h2>
                <p class="mb-0">LG 43" Tv was stolen at Ubungo Maji..</p>
              </span>
            </span>
                    <img class="img-fluid" src="{{ asset('images//portfolio-2.jpg') }}" alt="">
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; LoFo 2020</p>

        <a href="/login">Login</a>
        &nbsp;
        <a href="/register">Register</a>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/stylish-portfolio.js') }}" defer></script>

{{--<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/stylish-portfolio.min.js"></script>--}}

</body>

</html>
