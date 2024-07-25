@extends('layouts.app')

@section('content')

@include('blocks.main-back')
<div class="container">
    <h3 class="text-center fw-bold pt-4 home-main-title">{{ __('home.Why choose us') }}</h3>
    {{-- <h5 class="text-center pt-3 pb-5">{{ __('home.Quick! Cheap! Quality!') }}</h5> --}}
    @include('blocks/main-icon')

    <div class="row py-5 align-items-center">
        <div class="col-lg-6 py-3">
            <h2 class="pb-5 home-about-title">
                Kto sme
            </h2>
            <div class="home-about-text">
                Firma WEBKVALITA je lídrom v poskytovaní servisu notebookov a počítačov v Košiciach. Ako prvý v Košickom kraji sme začali poskytovať servis notebookov všetkých značiek.
            </div>
            <a href="{{ localized_route('firm') }}" class="mt-5 btn btn-primary">Cklick</a>
        </div>
        <div class="col-lg-6 py-3">
            <img class="image" src="{{ asset('home/aboutus.jpg') }}" alt="">
        </div>
    </div>

    <h2 class="text-center">Naše služby</h2>

    <div class="home-services-text">
        Opravy vykonávame najmodernejšími technológiami a používame najmodernejšie postupy. Naši technici sú vyškolení a majú bohaté skúsenosti s opravou notebookov a počítačov.
    </div>

    <div class="row">
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-01.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-02.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-03.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-04.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-05.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-06.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="mt-5 btn btn-primary">Click</a>
        </div>
    </div>
</div>

<div class="home-background-result py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center">
                <div class="home-result-logo">
                    <i class="bi bi-emoji-smile-fill"></i>
                </div>
                <div class="home-result-num py-3">
                    2000
                </div>
                <div class="home-result-text">
                    SPOKOJNÝCH ZÁKAZNÍKOV
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="home-result-logo">
                    <i class="bi bi-laptop"></i>
                </div>
                <div class="home-result-num py-3">
                    29000
                </div>
                <div class="home-result-text">
                    OPRAVENÝCH NOTEBOOKOV
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="home-result-logo">
                    <i class="bi bi-pc-display"></i>
                </div>
                <div class="home-result-num py-3">
                    13000
                </div>
                <div class="home-result-text">
                    OPRAVENÝCH POČÍTAČOV
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="home-result-logo">
                    <i class="bi bi-microsoft"></i>
                </div>
                <div class="home-result-num py-3">
                    9900
                </div>
                <div class="home-result-text">
                    PREINŠTALOVANÝCH OS
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-background-comments py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="home-comments-title py-2">Čo hovoria naši zákazníci?</h2>
                <div class="home-comments-text">
                    Tu sú nejaké recenzie, ktoré nám napísali naši zákazníci
                    their opinion about the process and the results.
                </div>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="home-carousel-comment-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, aspernatur illo quaerat perferendis, quo velit ex eius enim modi officia dolorem adipisci provident. Ducimus nesciunt sit cumque quibusdam hic voluptas.
                        </div>
                        <div class="home-carousel-customer pb-5 row">
                            <div class="home-carousel-customer-img col-lg-2">
                                <img class="image" src="{{asset('customers/customer1.jpg')}}" alt="">
                            </div>
                            <div class="home-carousel-customer-info col-lg-10">
                                <span class="d-block">
                                    Name Sername
                                </span>
                                <span>
                                    work position
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="home-carousel-comment-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, aspernatur illo quaerat perferendis, quo velit ex eius enim modi officia dolorem adipisci provident. Ducimus nesciunt sit cumque quibusdam hic voluptas.
                        </div>
                        <div class="home-carousel-customer pb-5 row">
                            <div class="home-carousel-customer-img col-lg-2">
                                <img class="image" src="{{asset('customers/customer2.jpg')}}" alt="">
                            </div>
                            <div class="home-carousel-customer-info col-lg-10">
                                <span class="d-block">
                                    Name Sername
                                </span>
                                <span>
                                    work position
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="home-carousel-comment-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, aspernatur illo quaerat perferendis, quo velit ex eius enim modi officia dolorem adipisci provident. Ducimus nesciunt sit cumque quibusdam hic voluptas.
                        </div>
                        <div class="home-carousel-customer pb-5 row">
                            <div class="home-carousel-customer-img col-lg-2">
                                <img class="image" src="{{asset('customers/customer3.jpg')}}" alt="">
                            </div>
                            <div class="home-carousel-customer-info col-lg-10">
                                <span class="d-block">
                                    Name Sername
                                </span>
                                <span>
                                    work position
                                </span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev carousel-link-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-link-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="gallery-section pt-5">
        <h2 class="text-center">Naši partneři</h2>
        <div class="owl-home owl-carousel owl-theme py-5">
            <div class="item"><img src="{{ asset('partners/client-01.jpg') }}" alt="Image 1"></div>
            <div class="item"><img src="{{ asset('partners/client-02.jpg') }}" alt="Image 2"></div>
            <div class="item"><img src="{{ asset('partners/client-03.jpg') }}" alt="Image 3"></div>
            <div class="item"><img src="{{ asset('partners/client-04.jpg') }}" alt="Image 4"></div>
            <div class="item"><img src="{{ asset('partners/client-05.jpg') }}" alt="Image 5"></div>
            <div class="item"><img src="{{ asset('partners/client-06.jpg') }}" alt="Image 6"></div>
            <div class="item"><img src="{{ asset('partners/client-07.jpg') }}" alt="Image 7"></div>
            <div class="item"><img src="{{ asset('partners/client-08.jpg') }}" alt="Image 8"></div>
            <div class="item"><img src="{{ asset('partners/client-09.jpg') }}" alt="Image 9"></div>
            <div class="item"><img src="{{ asset('partners/client-10.jpg') }}" alt="Image10"></div>
        </div>
    </div>
</div>

<div class="home-background-contact-form py-5">
    <div class="container">
        <form class="row">
            <div class="col-lg-6">
                <div class="home-contact-form-text-wrap">
                    <div class="text-center py-2 home-contact-form-title-text">Garancia spokojnosti</div>
                    <div class="text-center py-2 home-contact-form-subtitle-text">Rýchlo, Lacno, Kvalitne</div>
                    <p class="py-3 home-contact-form-text">
                        Opravy vykonávame najmodernejšími technológiami a používame najmodernejšie postupy. Naši technici sú vyškolení a majú bohaté skúsenosti s opravou notebookov a počítačov. Spolupracujeme s výrobcami náhradných dielov a preto Vám vždy poskytneme najlepšiu cenu.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-contact-form-wrap">
                    <div class="home-contact-form-block">
                        <div class="home-contact-form-title mb-3">
                            <h4 class="text-center">Opýtajte sa na cenu</h4>
                        </div>
                        <input type="text" name="" class="form-control mb-3" placeholder="Vaše meno">
                        <input type="text" name="" class="form-control mb-3" placeholder="Váš e-mail">
                        <textarea name="" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Popíšte svoj problém"></textarea>
                        <button class="btn btn-primary" type="submit">Poslať požiadavku</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

