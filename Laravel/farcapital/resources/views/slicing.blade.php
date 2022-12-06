<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NTFX</title>

    <!-- custom link css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('./assets/favicon.svg') }} ">

</head>

<body>

    @include("components.navbar")

    <section id="hero">
        <div class="container">

            <div class="content">
                <p>
                    Using basic skills you can improve your business stuff with Around
                </p>
                <h1>
                    One Dashboard to Manage all Your businesses
                </h1>

                <div class="getting-started">
                    <form action="">
                        <input type="text" name="email" placeholder="Input your email...">
                        <button type="submit">
                            Try for Free
                        </button>
                    </form>
                </div>

                <img src="{{ asset('assets/images/hero-banner.png') }}" alt="">

            </div>

        </div>
    </section>

    @include('components.customers')

    <section id="work">
        <div class="container">

            <div class="content">
                <h1>How Does It Work?</h1>
                <p>
                    Using basic skills you can improve your business stuff with Around
                </p>
            </div>

        </div>
        <div class="container">


            <div class="card" style="background-image: url('assets/images/card-image.png'); background-repeat: no-repeat;">

                <h4 class="title">
                    <span>1.</span>
                    <p> Target youur audience effectively</p>
                </h4>
                <p>
                    Using basic skills you can improve your business stuff with Around Using basic skills
                </p>

            </div>

            <div class="card" style="background-image: url('assets/images/card-image.png'); background-repeat: no-repeat;">

                <h4 class="title">
                    <span>2.</span>
                    <p> Target youur audience effectively</p>
                </h4>
                <p>
                    Using basic skills you can improve your business stuff with Around Using basic skills
                </p>

            </div>

            <div class="card" style="background-image: url('assets/images/card-image.png'); background-repeat: no-repeat;">

                <h4 class="title">
                    <span>3.</span>
                    <p> Target youur audience effectively</p>
                </h4>
                <p>
                    Using basic skills you can improve your business stuff with Around Using basic skills
                </p>

            </div>

            <div class="card" style="background-image: url('assets/images/card-image.png'); background-repeat: no-repeat;">

                <h4 class="title">
                    <span>4.</span>
                    <p> Target youur audience effectively</p>
                </h4>
                <p>
                    Using basic skills you can improve your business stuff with Around Using basic skills
                </p>

            </div>

        </div>
    </section>

    <section id="analysist">
        <div class="container">

            <div class="badges">
                <div class="item">
                    <img src="{{ asset('assets/images/badge1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/badge2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/badge3.png') }}" alt="">
                </div>
            </div>

            <div class="details">
                <h2>The robust and highly customizable data analysis tool</h2>
                <p>
                    Using basic skills you can improve your business stuff with Around Using basic skills you can improve your business stuff with Around Using basic skills
                </p>
            </div>

        </div>
    </section>

    <section id="analysist-2">
        <div class="container">

            <div class="col-6 content">
                <span class="span">Analytise</span>
                <h1>Analyze our data in a few clicks without too many stteings</h1>
                <ul>
                    <li>
                        <p>
                            Using basic skills you can improve your business
                        </p>
                    </li>
                    <li>
                        <p>
                            Using basic skills you can improve your business
                        </p>
                    </li>
                    <li>
                        <p>
                            Using basic skills you can improve your business
                        </p>
                    </li>
                    <li>
                        <p>
                            Using basic skills you can improve your business
                        </p>
                    </li>
                    <li>
                        <p>
                            Using basic skills you can improve your business
                        </p>
                    </li>
                </ul>
            </div>

            <div class="col-6 image">
                <img src="{{ asset('assets/images/statistic.png') }}" alt="">
            </div>

        </div>
    </section>

    <section id="pricing">
        <div class="container">

            <div class="col-4">
                <h1 class="section-title">Pricing</h1>
            </div>

            <div class="content">
                <p class="section-subtitle">
                    Using basic skills you can improve your business stuff with Around
                </p>
            </div>

            <div class="card">
                <div class="item col-4">
                    <div class="info">
                        <img src="{{ asset('assets/images/package1.png') }}" alt="package1">
                        <div class="price">
                            <p>Starter</p>
                            <div>
                                <h2>$ <span class="text-lg">15</span> <i>Per Month</i> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="details-list">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can impr
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can improve
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/approve.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="button">
                        <button>Get Started</button>
                    </div>
                </div>
                <div class="item col-4" style="background-image: url('{{ asset(`assets/images/images/icons/flower.svg`) }}'); background-repeat: no-repeat;">
                    <div class="info">
                        <img src="{{ asset('assets/') }}images/package2.png" alt="package1">
                        <div class="price">
                            <p>Business</p>
                            <div>
                                <h2>$ <span class="text-lg">75</span> <i>Per Month</i> </h2>
                            </div>
                        </div>
                        <span class="badge">
                            Recommended
                        </span>
                    </div>
                    <div class="details-list">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can impr
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can improve
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/blueapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="button">
                        <button>Get Started</button>
                    </div>
                </div>
                <div class="item col-4">
                    <div class="info">
                        <img src="{{ asset('assets/images/package3.png') }}" alt="package1">
                        <div class="price">
                            <p>Premium</p>
                            <div>
                                <h2>$ <span class="text-lg">15</span> <i>Per Month</i> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="details-list">
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can impr
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can improve
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icons/greenapprove.svg') }}" alt="">
                                <p>
                                    Using basic skills you can
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="button">
                        <button>Get Started</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="testimonial">
        <div class="container">

            <div class="title">
                <h2>Testimonial</h2>
                <p>
                    Using basic skills you can improve your business stuff with Around
                </p>
            </div>

            <div class="testi-content">

                <div class="testi-lists">

                    <div class="testi-item">
                        <figure class="testi-img">
                            <img src="{{ asset('assets/images/testi-user.png') }}" alt="">
                        </figure>
                        <div class="testi-details">
                            <div class="testi-profile">
                                <h1>Leslie Alexander</h1>
                                <span>CEO, Digital PT</span>
                            </div>
                            <p>
                                Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat. Etiam non erat volutpat, consectetur nunc vitae, posuere diam. <br><br>
                                Sed nisl nisi, rhoncus nec orci at, convallis ullamcorper purus. Suspendisse placerat tortor vitae neque iaculis efficitur. Nulla sed consectetur mi, nec tempor lorem. Aenean nec aliquet leo.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="banner">
        <div class="container">

            <div class="banner-content">

                <div class="banner-details col-4">
                    <h1>The best flows on the planet, at your fingertips.</h1>
                    <p>
                        Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat.
                    </p>
                    <button class="btn btn-primary">
                        start free 14 trial
                        <img src="{{ asset('assets/images/icons/right_arrow.svg') }}" alt="">
                    </button>
                </div>
                <div class="banner-image">
                    <img src="{{ asset('assets/images/hero-banner.png') }}" alt="" class="img-cover">
                </div>

            </div>

        </div>
    </section>

    @include("components.footer")

</body>

</html>