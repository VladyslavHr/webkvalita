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

    <h2>Naše služby</h2>

    <a href="#" class="btn btn-primary">Click</a>
    <div class="home-services-text">
        Opravy vykonávame najmodernejšími technológiami a používame najmodernejšie postupy. Naši technici sú vyškolení a majú bohaté skúsenosti s opravou notebookov a počítačov.
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-01.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-02.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-03.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-04.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4">
            <div class="home-sevice-img">
                <img class="image" src="{{ asset('services/service-05.jpg') }}" alt="">
            </div>
            <h4>Titel</h4>
            <div class="home-service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam reprehenderit odio, nostrum voluptatum quibusdam repellendus, distinctio quam nobis molestiae perferendis a quidem doloremque quas nihil sapiente sit. Velit, ratione?
            </div>
            <a href="#" class="btn btn-primary">Click</a>
        </div>
        <div class="col-lg-4">
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
@endsection
