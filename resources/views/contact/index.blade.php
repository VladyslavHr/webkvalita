@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-5">
        <div class="col-md-6 ">
            <h3 class="py-5">Kde nás nájdete ?</h3>
            @include('blocks.map')
            <div class="contact-info py-5">
                <div class="address">
                    <h3>Adresa:</h3>
                    <p>WEBKVALITA, s.r.o.
                        <br>Trieda KVP 4<br>
                        040 23 Košice - Sídlisko KVP ( na poschodí OC )
                    </p>
                    <p>ak sa k nám chcete dostať s pomocou GPS navigácie, na niektorých je potrebné zadať ulicu: Trieda Košického Vládneho Programu 4</p>
                </div>
                <div class="transport">
                    <h3>Ako sa tam dostať:</h3>
                    <p><i class="bi bi-geo-alt-fill"></i>autobusom sa k nám ľahko dostanete linkami: 19, 34, 36, 54, 55, 71 - a vystúpite na zastávke Miestny úrad KVP</p>
                </div>
            </div>
            <div class="contact-opening-hours">
                <div class="day-time">
                    <h3>Otváracie hodiny:</h3>
                    <div class="contact-time-slot">
                        <span class="contact-day">Pon - Pia:</span>
                        <span class="contact-hours morning">09:00 - 12:00</span>
                        <span class="contact-hours evening">13:00 - 18:00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-5">
            <h3 class="text-center">Napíšte nám</h3>
            <form action="" class="py-4">
                <input type="hidden" value="contact" name="contact">
                <label for="name_contact" class="py-2">Meno</label>
                <input type="text" class="form-control" name="name_contact" id="name_contact" placeholder="Meno">
                <label for="email_contact" class="py-2">E-mail</label>
                <input type="text" class="form-control" name="email_contact" id="email_contact" placeholder="E-mail">
                <label for="phone_contact" class="py-2">Telefon</label>
                <input type="text" class="form-control" name="phone_contact" id="phone_contact" placeholder="Telefon">
                <label for="text_contact" class="py-2">Správa</label>
                <textarea class="form-control" name="text_contact" id="text_contact" cols="30" rows="10" placeholder="Správa"></textarea>
                <button type="submit" class="btn btn-primary float-end my-3">Send<i class="bi bi-send-check-fill ms-3"></i></button>
            </form>
            <div class="d-flex py-5">
                <div class="me-5">
                    <img class="image" src="{{ asset('contact/budova1.jpg') }}" alt="">
                </div>
                <div>
                    <img class="image" src="{{ asset('contact/budova2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
