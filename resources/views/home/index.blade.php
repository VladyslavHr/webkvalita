@extends('layouts.app')

@section('content')

@include('blocks.main-back')
<div class="container">
    <h2 class="text-center pt-3">{{ __('home.Why choose us') }}</h2>
    <h5 class="text-center pt-3 pb-5">{{ __('home.Quick! Cheap! Quality!') }}</h5>
    <div class="row py-5">
        <div class="col-lg-4 pb-5">
            <div class="home-icon-wrap text-center">
                <i class="fs-1 bi bi-cash-stack"></i>
                <div class="home-icon-text">
                    <h4>Diagn</h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aspernatur optio ipsam impedit repellendus recusandae. Voluptate reiciendis sit optio molestias ipsum possimus consequuntur neque quae, voluptas accusamus minus, eaque qui.
                </div>
                <a href="#" class="btn btn-primary my-5">Cklick</a>
            </div>
        </div>
        <div class="col-lg-4 pb-5">
            <div class="home-icon-wrap text-center">
                <i class="fs-1 bi bi-wrench"></i>
                <div class="home-icon-text">
                    <h4>Diagn</h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aspernatur optio ipsam impedit repellendus recusandae. Voluptate reiciendis sit optio molestias ipsum possimus consequuntur neque quae, voluptas accusamus minus, eaque qui.
                </div>
                <a href="#" class="btn btn-primary my-5">Cklick</a>
            </div>
        </div>
        <div class="col-lg-4 pb-5">
            <div class="home-icon-wrap text-center">
                <i class="fs-1 bi bi-calendar-date-fill"></i>
                <div class="home-icon-text">
                    <h4>Diagn</h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aspernatur optio ipsam impedit repellendus recusandae. Voluptate reiciendis sit optio molestias ipsum possimus consequuntur neque quae, voluptas accusamus minus, eaque qui.
                </div>
                <a href="#" class="btn btn-primary my-5">Cklick</a>
            </div>
        </div>
    </div>

    <div class="row py-5 align-items-center">
        <div class="col-lg-6">
            <h2 class="pb-5 home-about-title">
                Kto sme
            </h2>
            <div class="home-about-text">
                Firma WEBKVALITA je lídrom v poskytovaní servisu notebookov a počítačov v Košiciach. Ako prvý v Košickom kraji sme začali poskytovať servis notebookov všetkých značiek.
            </div>
            <a href="#" class="mt-5 btn btn-primary">Cklick</a>
        </div>
        <div class="col-lg-6">
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
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-02.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-03.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-04.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-05.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4 p-5">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-06.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
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
                        <div class="home-carousel-customer row">
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
                        <div class="home-carousel-customer row">
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
                        <div class="home-carousel-customer row">
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
    <div class="gallery-section pt-3">
        <h2 class="text-center">Naši partneři</h2>
        <div class="owl-carousel custom-carousel owl-theme">
        <div class="item-partners-logo active" style="background-image: url('https://source.unsplash.com/300x300/?perth,australia');">
            <div class="item-desc">
            {{-- <h3>Coca-cola</h3> --}}
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo soluta voluptas accusantium in officiis quia ad voluptatem, deleniti quaerat, praesentium temporibus animi ab explicabo saepe? Quis atque obcaecati quasi quo?</p> --}}
            </div>
        </div>
        <div class="item-partners-logo" style="background-image: url('https://source.unsplash.com/300x300/?fremantle,australia');">
            <div class="item-desc">
            {{-- <h3>Orlická lodní doprava</h3> --}}
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos minima vel rerum natus nulla necessitatibus itaque tempore tempora! Porro perferendis temporibus optio iure rem repellendus autem eum debitis similique eaque.</p> --}}
            </div>
        </div>
        <div class="item-partners-logo" style="background-image: url('https://source.unsplash.com/300x300/?west-australia');">
            <div class="item-desc">
            {{-- <h3>Platan</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam pariatur cum quis necessitatibus ipsum officia quae, eaque, dolores illo nobis placeat in nam maiores ab a praesentium modi eos!</p> --}}
            </div>
        </div>
        <div class="item-partners-logo" style="background-image: url('https://source.unsplash.com/300x300/?perth');">
            <div class="item-desc">
            {{-- <h3>Zavolejsikurýra</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, ex obcaecati? Unde, quidem non. Quam laborum labore maxime quis. Quo optio id recusandae eum mollitia rem ducimus aspernatur blanditiis. Adipisci!</p> --}}
            </div>
        </div>
        <div class="item-partners-logo" style="background-image: url('https://source.unsplash.com/300x300/?margaretriver,australia');">
            <div class="item-desc">
            {{-- <h3>Top Cars Lease</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio corporis suscipit quia aspernatur odit provident tempora. Dicta suscipit ab consectetur aperiam, impedit eos delectus sapiente facere cupiditate consequuntur itaque?</p> --}}
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

@endsection

