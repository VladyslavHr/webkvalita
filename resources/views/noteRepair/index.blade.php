@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center pt-4">Oprava notebookov Košice, Servis notebookov Košice</h2>
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
        </div>
        <div class="col-md-8 text-center">
            <h2 class="text-center mb-4">Prečo si vybrať náš servis?</h2>
            <div class="row">
                <!-- Преимущество 1 -->
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-tools"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Bezplatná diagnostika</h3>
                        <p>Váš notebook bezplatne zdiagnostikujeme, stanovíme cenovú kalkuláciu opravy a vy sa môžete rozhodnúť, či ho opravíme alebo nie. Ak nie, jednoducho Vám ho vrátime a vy nič neplatíte.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-shield-check"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Len u nás záruka 2 roky</h3>
                        <p>Za kvalitou našej práce si stojíme a len preto Vám vieme dať záruku 2 roky na opravu notebooku aj na vymenené náhradné diely.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-clock-history"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Najrýchlejšie vybavenie zákazky</h3>
                        <p>Vo väčšine prípadov je oprava notebookov realizovaná do 24 hodín, množstvo náhradných dielov máme skladom. Ak sa náhodou oprava predĺži, zapožičiame Vám náhradný notebook.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-tags "></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Najnižšia cena opravy</h3>
                        <p>Máme najnižšie ceny na servis notebookov v Košiciach. Pravidelne sledujeme ceny konkurencie a preto garantujeme, že Vás oprava notebooku u nás vyjde najlacnejšie.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-cart-check"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Najnižšie ceny náhradných dielov</h3>
                        <p>Spolupracujeme s výrobcami a poprednými zahraničnými dodávateľmi náhradných dielov do notebookov, takže Vám vieme ponúknuť najnižšiu cenu.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-calculator "></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Dopredu viete koľko budete platiť</h3>
                        <p>U nás je samozrejmosťou, že zákazníci dopredu vedia koľko budú za servis notebookov platiť a výsledná cena nikdy nebude navýšená.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-laptop  "></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Zapožičanie náhradného notebooku</h3>
                        <p>V prípade väčšieho problému s počítačom alebo notebookom, vám zapožičiame náhradný notebook na dobu pokiaľ bude váš v servise.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-truck"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Bezplatná doprava</h3>
                        <p>Vyzdvihnutie aj doručenie Vášho notebooku na servis aj späť k Vám je úplne zadarmo v Košiciach aj po celom Slovensku kuriérom DPD.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-award"></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Dlhoročné skúsenosti</h3>
                        <p>Naši technici majú dlhoročné skúsenosti s opravou notebookov, používame najnovšie zariadenia a technológie opravy notebookov. Naši technici sú vyškolení a odborne spôsobilí.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-emoji-smile "></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Minimum reklamácií</h3>
                        <p>Máme len 0,2% reklamácií na servis notebookov a vo väčšine prípadov Vám vybavíme reklamáciu aj po skončení 2 ročnej záruky.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="note-icon-box">
                        <i class="bi bi-journal-check "></i> <!-- Пример иконки, можете заменить на свою -->
                        <h3>Evidencia zariadení zákazníka</h3>
                        <p>Každú opravu notebooku evidujeme. Takto dokážeme rýchlo a efektívne riešiť problémy s notebookom alebo počítačom, na ktorom sme už v minulosti robili servis</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary">Pozrite si naše referencie</a>
        </div>
    </div>

    <div class="row py-3">
        <div class="col-md-6">
            <h3 class="text-center">Oprava notebookov Košice</h3>
            <ul class="note-brands-list">
                <li><i class="bi bi-tools me-3"></i>Oprava notebookov Košice</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov ASUS</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Acer</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Lenovo</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov DELL</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov HP</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov MSI</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Compaq</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov eMachines</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Sony</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Toshiba</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Packard Bell</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Fujitsu</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Samsung</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Huawei</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Xiaomi</li>
                <li><i class="bi bi-tools me-3"></i>Servis notebookov Razer</li>
                <li><i class="bi bi-tools me-3"></i>Servis Apple Macbookov</li>
                <li><i class="bi bi-tools me-3"></i>a mnoho ďalších</li>
            </ul>

            <div class="row py-5 align-items-center">
                <div class="col-sm-3">
                    <img class="image" src="{{ asset('notes/img2.jpg') }}" alt="">
                </div>
                <div class="col-sm-9">
                    <h4>
                        Neexistuje notebook, ktorý nedokážeme opraviť.
                        Určite opravíme aj ten Váš!
                    </h4>
                </div>
            </div>

            <div class="notes-services-list">
                <h3 class="py-3 text-center">Služby, ktoré poskytuje náš servis notebookov Košice</h3>
                <ul >
                    <li><span>diagnostika poruchy notebooku, oprava alebo výmena chybných alebo poškodených komponentov, oprava akéhokoľvek problému s notebookom</span></li>
                    <li><span>oprava poškodenej základnej dosky alebo grafickej karty notebooku profesionálnou metódou - kvalitná oprava, so zárukou</span></li>
                    <li><span>výmena poškodených alebo polámaných častí notebookov, výmena plastov, oprava pántov, klávesnice, prasknutého displeja a pod.</span></li>
                    <li><span>prečistenie chladiaceho systému notebooku alebo PC, oprava nefunkčného chladenia notebooku</span></li>
                    <li><span>oprava notebooku s nefunkčnout klávesnicou, touchpadom a pod.</span></li>
                    <li><span>inštalácia a preinštalácia operačného systému, ovládačov a aplikácií, záloha dokumentov</span></li>
                    <li><span>oprava napájacích konektorov, USB, HDMI konektora, oprava sieťovej karty alebo wifi pripojenia a bluetooth</span></li>
                    <li><span>oprava poškodeného displeja, výmena prepojovacích káblov medzi displejom a základnou doskou</span></li>
                    <li><span>nastavenie systému, programov a riešenie problémov so stabilitou a rýchlosťou notebookov</span></li>
                    <li><span>vyčistenie systému od vírusov a spyware a iných podvodných aplikácií</span></li>
                    <li><span>inštalácia a konfigurácia prídavných zariadení (tlačiareň, skener, webkamera, mobil ...)</span></li>
                    <li><span>zvýšenie výkonu a vylepšenie funkčnosti notebookov - upgrade</span></li>
                    <li><span>a všetky ostatné opravy a servis notebookov ...</span></li>
                </ul>
            </div>

        </div>
        <div class="col-md-6">
            <h3 class="text-center pb-3">Oprava základných dosiek notebookov</h3>
            <div class="row">
                <div class="col-sm-4">
                    <img class="image" src="{{ asset('notes/img1.jpg') }}" alt="">
                </div>
                <div class="col-sm-8">
                    <span class="sub-color-text">
                        Garantujeme najvyššiu kvalitu opravy základných dosiek - len u nás záruka na opravu základnej dosky až 2 roky
                    </span>
                    <ul class="pt-3">
                        <li>Výmena chybných grafických čipov, čipsetov a procesorov najmodernejšími technológiami.</li>
                        <li>Oprava základných dosiek po obliati notebooku tekutinou alebo vyskratovaní.</li>
                        <li>Rozšírená záruka - len u nás poskytujeme záruku na celú základnú dosku, nie len na opravený diel ako väčšina iných servisov notebookov</li>
                    </ul>
                </div>
            </div>
            <div class="notes-problems-list">
                <h3 class="py-3 text-center" >Najčastejšie poruchy notebookov, ktoré opravujeme</h3>
                <ul>
                    <li><span>notebook sa počas práce s ním samovoľne vypne alebo reštartujte</span></li>
                    <li><span>notebook sa nedá vôbec zapnúť, po stlačení tlačidla zapnutia nereaguje</span></li>
                    <li><span>po zapnutí notebooku nie je na displeji viditeľný žiaden obraz</span></li>
                    <li><span>obraz na displeji je veľmi tmavý, takmer nečitateľný, chybné podsvietenie displeja</span></li>
                    <li><span>notebook pracuje príliš pomaly, prípadne počas práce zamrzne</span></li>
                    <li><span>prasknutý alebo poškriabaný displej notebooku</span></li>
                    <li><span>obraz na displeji vypadáva, prípadne je deformovaný alebo skáče</span></li>
                    <li><span>nie je možné naštartovať operačný systém (pracovná plocha)</span></li>
                    <li><span>počas práce alebo pri zapínaní vyskakuje hlásenie o chybe hardwaru - modrá obrazovka</span></li>
                    <li><span>notebook sa prehrieva, nefunguje chladenie alebo ventilátor veľmi hučí</span></li>
                    <li><span>nefunguje nabíjanie notebooku, prípadne je zlý konektor nabíjačky</span></li>
                    <li><span>polámané pánty na obrazovke alebo poškodené plastové časti notebooku</span></li>
                    <li><span>notebook bol poliaty čajom alebo inou tekutinou</span></li>
                    <li><span>nefungujú všetky klávesy na klávesnici, prípadne je nefunkčný touchpad (myška)</span></li>
                    <li><span>výmena poškodeného pevného disku, prípadne rozšírenie kapacity</span></li>
                    <li><span>notebook má nefunkčné porty alebo pri pohnutí vypadávajú - napríklad USB, HDMI, audio</span></li>
                    <li><span>nenačítava obsah z CD alebo DVD, prípadne mechanika veľmi hučí</span></li>
                    <li><span>nefunguje zvuk, reproduktory, alebo mikrofón</span></li>
                    <li><span>zákazník nevie nainštalovať nový program alebo ovládače k zariadeniam</span></li>
                    <li><span>vyskakuje hlásenie o nájdenom víruse alebo spyware</span></li>
                    <li><span>nefunguje pripojenie notebooku na mobilný alebo pevný internet</span></li>
                    <li><span>pripojenie periférnych zariadení (tlačiareň, skener, webkamera ...)</span></li>
                    <li><span>a všetky ostatné poruchy notebookov ...</span></li>
                </ul>
            </div>
            <h5 class="text-center py-3">Objednajte si servis na čisle 0911 992 754 , cez internet alebo nás navštívte na našej prevádzke Košice - Sídlisko KVP</h5>
            <div class="row">
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
