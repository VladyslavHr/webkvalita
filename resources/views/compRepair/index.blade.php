@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center pt-4">Oprava počítačov Košice, Servis počítačov Košice</h2>

    @include('blocks/main-icon')

    <div class="row">
        <div class="col-md-4">
            <h2 class="text-center mb-4">Naše Výhody</h2>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <!-- Пункт 1 -->
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-tools"></i>
                            Diagnostika problému len u nás ZADARMO
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-cash"></i>
                            Platíte len za plne funkčné zariadenie
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-shield-check"></i>
                            Oprava notebookov u nás so zárukou 2 roky
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-clock-history"></i>
                            Servis realizujeme aj na počkanie
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-tags"></i>
                            Nízke ceny opravy a náhradných dielov
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-hand-thumbs-up"></i>
                            Vždy platíte len cenu, ktorú odsúhlasíte
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-award"></i>
                            Rokmi overená kvalita servisu
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-truck"></i>
                            Bezplatné vyzdvihnutie a doprava notebooku
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-puzzle"></i>
                            Meníme nové certifikované náhradné diely
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-cpu"></i>
                            Oprava základných dosiek notebookov
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-display"></i>
                            Oprava grafických čipov notebookov
                        </li>
                        <li class="note-service mb-3">
                            <i class="mr-3 bi bi-people"></i>
                            Personál vyškolený priamo u výrobcov
                        </li>
                        <!-- Добавьте остальные пункты по аналогии -->
                    </ul>
                </div>
            </div>
            <a href="#" class="btn btn-primary">Pozrite si priebeh opravy</a>
            <div class="notes-services-list py-5">
                <h3 class="py-3 text-center" >Najčastejšie poruchy notebookov, ktoré opravujeme</h3>
                <ul>
                    <li><span>diagnostika poruchy počítača, oprava alebo výmena chybných alebo poškodených komponentov, oprava akéhokoľvek problému s počitačom</span></li>
                    <li><span>prečistenie chladiaceho systému PC, oprava nefunkčného chladenia počítača</span></li>
                    <li><span>inštalácia a preinštalácia operačného systému, ovládačov a aplikácií, záloha dokumentov</span></li>
                    <li><span>oprava konektorov, USB, HDMI konektora, oprava sieťovej karty </span></li>
                    <li><span>nastavenie systému, programov a riešenie problémov so stabilitou a rýchlosťou notebookov</span></li>
                    <li><span>vyčistenie systému od vírusov a spyware a iných podvodných aplikácií</span></li>
                    <li><span>inštalácia a konfigurácia prídavných zariadení (tlačiareň, skener, webkamera, mobil ...)</span></li>
                    <li><span>zvýšenie výkonu a vylepšenie funkčnosti počítača - upgrade</span></li>
                    <li><span>a všetky ostatné opravy a servis počítačov ...</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 text-center">
            <h2 class="text-center mb-4">Prečo si vybrať náš servis?</h2>
            <div class="row">
                <!-- Преимущество 1 -->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-stopwatch"></i>
                        <h3>Najrýchlejšie vybavenie zákazky</h3>
                        <p>Vo väčšine prípadov je oprava počítačov realizovaná do 24 hodín, väčšinu náhradných dielov máme skladom. Ak sa náhodou oprava predĺži, zapožičiame Vám náhradný notebook.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-tags"></i>
                        <h3>Najnižšia cena opravy</h3>
                        <p>Máme najnižšie ceny na servis počítačov v Košiciach. Pravidelne sledujeme ceny konkurencie a preto garantujeme, že Vás oprava počítača u nás vyjde najlacnejšie.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-cash-stack"></i>
                        <h3>Najnižšie ceny náhradných dielov</h3>
                        <p>Spolupracujeme s výrobcami a poprednými dodávateľmi náhradných dielov, takže Vám vieme ponúknuť najnižšiu cenu.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-calculator"></i>
                        <h3>Dopredu viete koľko budete platiť</h3>
                        <p>U nás je samozrejmosťou, že zákazníci dopredu vedia koľko budú za servis počítačov platiť a výsledná cena nikdy nebude navýšená.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-laptop"></i>
                        <h3>Zapožičanie náhradného notebooku</h3>
                        <p>V prípade väčšieho problému s počítačom alebo notebookom, vám zapožičiame náhradný notebook na dobu pokiaľ bude váš v servise.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-truck"></i>
                        <h3>Bezplatná doprava</h3>
                        <p>Vyzdvihnutie aj doručenie Vášho počítača na servis aj späť k Vám je v Košiciach úplne zadarmo.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-award"></i>
                        <h3>Dlhoročné skúsenosti</h3>
                        <p>Naši technici majú dlhoročné skúsenosti s opravou počítačov, používame najnovšie zariadenia a technológie opravy. Naši technici sú vyškolení a odborne spôsobilí.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-emoji-smile"></i>
                        <h3>Minimum reklamácií</h3>
                        <p>Máme len 0,2% reklamácií na servis počítačov a vo väčšine prípadov Vám vybavíme reklamáciu aj po skončení 2 ročnej záruky.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-journal-check"></i>
                        <h3>Evidencia zariadení zákazníka</h3>
                        <p>Každú opravu počítača evidujeme. Takto dokážeme rýchlo a efektívne riešiť problémy s notebookom alebo počítačom, na ktorom sme už v minulosti robili servis.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary">Pozrite si naše referencie</a>
            <h5 class="text-center py-3">Objednajte si servis na čisle 0911 992 754 , cez internet alebo nás navštívte na našej prevádzke Košice - Sídlisko KVP</h5>
            <div class="row py-3">
                <div class="col-lg-6">
                    <img class="image" src="{{ asset('firm/firm-2.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <img class="image" src="{{ asset('firm/firm-3.jpg') }}" alt="">
                </div>
                <div class="text-center pt-3"><b>Trieda KVP 4, 040 23 Košice</b></div>
                <div class="text-center pt-3">otvorené: <b>Pon - Pia   09:00 - 12:00  13:00 - 18:00</b></div>
                <div class="text-center pt-3 sub-color-text">Oprava notebookov Košice - Servis notebookov Košice</div>
            </div>
        </div>
    </div>
</div>

@endsection
