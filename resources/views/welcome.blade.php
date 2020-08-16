<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta charSet="utf-8"/>

    <title>LoFo</title>
    <meta name="next-head-count" content="7"/>

    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

</head>
<body>

<main>
    <section class="hero-home" style="background-image:url({{ asset
    ('images/bg/searching1.gif') }});">

        <div class="text-white z-index-20 container">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    <div class="search-bar p-3 p-lg-1 pl-lg-4">
                        <form class="">
                            <div class="row z-index-4">
                                <div class="d-flex align-items-center form-group col-lg-4">
                                    <input type="text"
                                           name="search"
                                           placeholder="What are you searching for?"
                                           class="border-0 shadow-0 form-control"/>
                                </div>
                                <div class="d-flex align-items-center form-group col-md-12 col-lg-3">
                                    <input
                                        type="text"
                                        name="location"
                                        placeholder="Location"
                                        id="location"
                                        class="border-0 shadow-0 form-control"/>
                                </div>
                                <div class="d-flex align-items-center form-group no-divider col-md-12 col-lg-3">

                                    <style>
                                        .select2-container--default .select2-selection--single  {
                                            background-color: #fff;
                                            border: 1px solid #fff;
                                            border-radius: 0;
                                        }
                                        .select2-dropdown {
                                            border: 1px solid #fff;
                                        }

                                        span {
                                            border-color: white;
                                        }
                                    </style>

                                    <select name="category" id="category" class="border-0 shadow-0 form-control">
                                        <option disabled selected>Category</option>
                                        <option>Tanzania</option>
                                        <option>Kenya</option>
                                        <option>Rwanda</option>
                                        <option>Uganda</option>
                                        <option>Burundi</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn-block h-100 rounded-xl btn btn-primary">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-gray-100">
        <div class="container">
            <div class="mb-3 row col-md-8">
                <p class="subtitle">Lost &amp; Found Items</p>
            </div>
            <div class="row">
                <div class="mb-4 hover-animate col-sm-6 col-lg-4">
                    <div class="border-0 h-100 shadow card">
                        <a href="blog/escape-city-today.html">
                            <img src="{{ asset('images/iphone11.jpg') }}"
                                 alt="..."class="card-img-top"/>
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-uppercase text-muted text-sm letter-spacing-1">
                                Electronic/Phone
                            </a>
                            <h5 class="my-2">
                                <a class="text-dark" href="#">
                                    iPhone XR
                                </a>
                            </h5>
                            <p class="text-gray-500 text-sm my-3">
                                <i class="far fa-clock mr-2"></i>
                                August 16, 2020
                            </p>
                            <p class="my-2 text-muted text-sm">
                                The phone was miss-placed at Samaki Samaki Masaki,
                                around 23:17, Saturday, August 15, 2020
                            </p>
                            <a
                                class="btn btn-link"
                                href="blog/escape-city-today.html">
                                Check more details
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mb-4 hover-animate col-sm-6 col-lg-4">
                    <div class="border-0 h-100 shadow card">
                        <a href="blog/escape-city-today.html">
                            <img src="{{ asset('images/portfolio-2.jpg') }}"
                                 alt="..."class="card-img-top"/>
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-uppercase text-muted text-sm letter-spacing-1">
                                Electronic/Tv
                            </a>
                            <h5 class="my-2">
                                <a class="text-dark" href="#">
                                    LG 43" TV
                                </a>
                            </h5>
                            <p class="text-gray-500 text-sm my-3">
                                <i class="far fa-clock mr-2"></i>
                                August 01, 2020
                            </p>
                            <p class="my-2 text-muted text-sm">
                                The Tv was stolen at Ubungo - Maji
                                around 15:33, Saturday, July 28, 2020
                            </p>
                            <a
                                class="btn btn-link"
                                href="blog/escape-city-today.html">
                                Check more details
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mb-4 hover-animate col-sm-6 col-lg-4">
                    <div class="border-0 h-100 shadow card">
                        <a href="#">
                            <img src="{{ asset('images/id.jpg') }}"
                                 alt="..."class="card-img-top"/>
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-uppercase text-muted text-sm letter-spacing-1">
                                ID Cards
                            </a>
                            <h5 class="my-2">
                                <a class="text-dark" href="#">
                                    Ghanaian ID Card
                                </a>
                            </h5>
                            <p class="text-gray-500 text-sm my-3">
                                <i class="far fa-clock mr-2"></i>
                                August 01, 2020
                            </p>
                            <p class="my-2 text-muted text-sm">
                                Ghanaian ID Card was found the night of
                                Tuesday, July 28, 2020, at CoCo Beach
                            </p>
                            <a
                                class="btn btn-link"
                                href="blog/escape-city-today.html">
                                Check more details
                                <i class="fa fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="position-relative z-index-10 d-print-none">
    <div class="py-6 bg-gray-200 text-muted">
        <div class="container">
            <div class="row">
                <div class="mb-5 mb-lg-0 col-md-6 col-lg-6">
                    <div class="font-weight-bold text-uppercase text-dark mb-3">Pages</div>
                    <ul class="list-unstyled">
                        <li><a class="text-muted"
                               href="#">Team<span class="ml-1 badge badge-info-light">New</span></a>
                        </li>
                        <li><a class="text-muted" href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="mb-5 mb-lg-0 col-md-6 col-lg-6">
                    <div class="font-weight-bold text-uppercase text-dark mb-3">
                        Daily Offers &amp; Discounts
                    </div>
                    <p class="mb-3">
                        Sign up for an account to be able tp post your lost item,
                        our fellow Tanzanian will help find it for you...
                    </p>
                    <form id="newsletter-form" class="">
                        <div class="input-group mb-3">
                            <input type="email"
                                 placeholder="Your Email Address"
                                 aria-label="Your Email Address"
                                 class="bg-transparent border-dark border-right-0 form-control"/>
                            <div class="input-group-append">
                                <button class="btn-outline-dark border-left-0 btn btn-deoco">
                                    <i class="fa fa-paper-plane text-lg"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
            <div class="align-items-center row">
                <div class="text-center text-md-left col-md-6">
                    <p class="text-sm mb-md-0">
                        © {{ date('Y') }}, LoFo. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                        <li class="list-inline-item">
                            Lost &amp; Found
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/select2.full.min.js') }}"></script>

<script>

    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#category').select2();
    });
</script>

</body>
</html>
