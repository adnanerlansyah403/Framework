<section id="customer">

    <div class="container">

        <h1 class="col col-8 title">Customers have consistently rated Around 4.7/5 stars</h1>

    </div>
    <div class="container">
        <div class="card">
            <div class="star-container">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
            </div>
            <p>
                Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.
            </p>
            <img src="{{ asset('assets/images/google.png') }}" alt="image customer" class="img-customer">

        </div>

        <div class="card">

            <div class="star-container">
                @for($i = 0; $i < 4; $i++) <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                    @endfor
            </div>
            <p>
                Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.
            </p>
            <img src="{{ asset('assets/images/amazon.png') }}" alt="image customer" class="img-customer">

        </div>

        <div class="card">
            <div class="star-container">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
                <img src="{{ asset('assets/images/star.png') }}" class="img-star" alt="Stars">
            </div>
            <p>
                Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.
            </p>
            <img src="{{ asset('assets/images/spotify.png') }}" alt="image customer" class="img-customer">
        </div>
    </div>

</section>