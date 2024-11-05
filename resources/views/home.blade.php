<x-layout.app>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex align-items-center"
                            style="background-image:url({{ asset('images/placeholder-tent-1.jpg') }})">
                            <div class="container col-9">
                                <div class="col-sm-7 text-center text-sm-start">
                                    <h1>Tenta angāri Jūsu saimniecībai vai uzņēmumam!</h1>
                                    <p>Uzticamība un augsta kvalitāte</p>
                                    <button class="btn btn-primary">Uz produkciju</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/placeholder-tent-1.jpg') }}" alt="placeholder tent"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/placeholder-tent-1.jpg') }}" alt="placeholder tent"
                                class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
        </div>
    </div>

</x-layout.app>