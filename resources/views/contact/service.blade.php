@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center py-4">Objednávka servisu notebooku alebo počítača</h2>
    <div class="row py-3">
        <div class="col-md-2">
            <img class="image" src="{{ asset('contact/pickup.jpg') }}" alt="">
        </div>
        <div class="col-md-10">
            <div><b>Máte záujem o opravu Vášho notebooku alebo počítača v našom servise? Gratulujeme Vám k správnemu výberu!</b></div>
            <div>Vyberte si, ktorá možnosť doručenia na servis Vám najviac vyhovuje:</div>
            <ul class="py-2 contact-service-ul">
                <li>
                    Vaše zariadenie môžete doniesť na servis osobne na prevádzku: <b>Trieda KVP 4, 040 23 Košice</b>
                </li>
                <li>
                    Vaše zariadenie v rámci Košíc môže bezplatne vyzdvihnúť náš technik a doručiť ho na servis
                </li>
                <li>
                    Ak ste mimo Košíc, Vaše zariadenie bezplatne vyzdvihne kuriér DPD v rámci celého Slovenska
                    notebook je potrebné zabaliť do krabice (nemusí byť pôvodná od notebooku)
                </li>
            </ul>
        </div>
    </div>

    <div class="row py-3">
        <div class="col-md-6">
            <h4 class="text-center py-3">Kde nás nájdete ?</h4>
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
        <div class="col-md-6">
            <h4 class="text-center py-3">Objednávka servisu</h4>
            <div>
                Vyplňte prosím tento formulár, ak máte záujem objednať vyzdvihnutie Vášho notebooku na servis.
                Po potvrdení objednávky Vám príde potvrdzujúca SMS správa alebo Vás budeme kontaktovať telefonicky.
            </div>
            <form action="" class="py-3">
                <input type="hidden" value="service" name="service">
                <input type="hidden" value="contact" name="contact">
                <label for="name_contact" class="py-2">Meno</label>
                <input type="text" class="form-control" name="name_contact" id="name_contact" placeholder="Meno">
                <label for="email_contact" class="py-2">E-mail</label>
                <input type="text" class="form-control" name="email_contact" id="email_contact" placeholder="E-mail">
                <label for="phone_contact" class="py-2">Telefon</label>
                <input type="text" class="form-control" name="phone_contact" id="phone_contact" placeholder="Telefon">
                <label for="address_contact" class="py-2">Adresa vyzdvihnutia:</label>
                <input type="text" class="form-control" name="address_contact" id="address_contact" placeholder="Adresa vyzdvihnutia:">
                <label for="date_contact" class="py-2">Dátum vyzdvihnuta:</label>
                <input type="text" class="form-control" name="date_contact" id="date_contact" placeholder="Dátum vyzdvihnuta:">
                <label for="text_contact" class="py-2">Popis problému:</label>
                <textarea class="form-control" name="text_contact" id="text_contact" cols="30" rows="10" placeholder="Popis problému:"></textarea>
                <button type="submit" class="btn btn-primary float-end my-3">Send<i class="bi bi-send-check-fill ms-3"></i></button>
            </form>
        </div>
    </div>
</div>

@endsection
