@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center pt-5">Priebeh opravy notebooku alebo počítača</h2>
    <div class="row py-5">
        <div class="col-lg-6">
            <div class="snake-timeline">
                <div class="step">1. Prevzatie - notebook alebo počítač je odovzdaný na našej prevádzke alebo vyzdvihnutý technikom.</div>
                <div class="step">2. Diagnostika - po prijatí na servis podrobíme Vaše zariadenie komplexnej diagnostike.</div>
                <div class="step">3. Cenová ponuka - po vykonaní diagnostiky vypracuje technik cenovú ponuku opravy.</div>
                <div class="step">4. Kontaktovanie - zákazníkovy telefonicky oznámime cenovú ponuku opravy notebooku alebo PC.</div>
                <div class="step">5. Schválenie - v prípade schválenia ponuky zákazníkom sa začína oprava zariadenia.</div>
                <div class="step">6. Oprava - technici vykonajú potrebné opravy na Vašom notebooku alebo počítači.</div>
                <div class="step">7. Testovanie - po vykonaní opravy sa zariadenie podrobí sériи záťažových testov.</div>
                <div class="step">8. Doručenie - po úspešnom dokončení testov zariadenie čaká na prevzatie alebo je doručené.</div>
            </div>
            <h4 class="text-center text-danger">Presvedčte sa ako pracujú profesionáli!</h4>
        </div>
        <div class="col-lg-6">
            <h5 class="text-center">Ukážka práce v našom servise</h5>
            <div class="image-block">
                <a href="{{ asset('work/foto1.jpg') }}" data-fancybox="gallery">
                    <img class="image-work" src="{{ asset('work/foto1.jpg') }}" alt="">
                </a>
            </div>
            <div class="image-block">
                <a href="{{ asset('work/foto2.jpg') }}" data-fancybox="gallery">
                    <img class="image-work" src="{{ asset('work/foto2.jpg') }}" alt="">
                </a>
            </div>
            <div class="image-block">
                <a href="{{ asset('work/foto3.jpg') }}" data-fancybox="gallery">
                    <img class="image-work" src="{{ asset('work/foto3.jpg') }}" alt="">
                </a>
            </div>
        </div>

        <a href="https://www.instagram.com/webkvalita/" target="_blank" class="btn btn-primary">Viac fotiek z nášho servisu nájdete na našom instagrame</a>

    </div>

</div>

@endsection
