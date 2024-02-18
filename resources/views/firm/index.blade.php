@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-5">
            <div class="col-sm-6">
                <div class="row align-items-center pb-3">
                    <div class="col-md-6">
                        <h3 class="text-center">O firme</h3>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('firm/firm-1.jpg') }}" alt="" class="image">
                    </div>
                </div>
                <p>
                    Firma WEBKVALITA je lídrom v poskytovaní servisu notebookov a počítačov v Košiciach.
                    Ako prvý v Košickom kraji sme začali poskytovať servis notebookov všetkých značiek.
                    Za niekoľko rokov svojho pôsobenia sme získali už viac ako 20.000 zákazníkov a úspešne dokončili vyše 50.000 opráv notebookov a počítačov.
                    Náš osobný prístup ku klientovi a profesionalita našich technikov presvedčil už množstvo zákazníkov, ktorí sa k nám vždy radi vracajú.
                    Počas tohto obdobia sa nám podarilo úspešne etablovať na našom trhu a posunúť úroveň poskytovaných služieb výrazne vyššie oproti konkurencii.
                    V našom servise poskytujeme služby na najvyššej úrovni. Opravy vykonávame najmodernejšími technológiami a používame najmodernejšie postupy.
                    Naši technici sú vyškolení a majú bohaté skúsenosti s opravou notebookov a počítaчov. Spolupracujeme s výrobcami náhradných dielov a preto Vám vždy poskytneme najlepšiu cenu.
                </p>

                <div class="firm-expiarence-titile">Naše skúsenosti sú pre Vás zárukou a pre nás záväzkom! Od roku 2007 sme tu pre Vás!</div>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="image" src="{{ asset('firm/firm-2.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img class="image" src="{{ asset('firm/firm-3.jpg') }}" alt="">
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="timeline">
                    <div class="timeline-row">
                        <div class="timeline-item left">
                            <span class="date">2007</span>
                            <p>Založenie živnosti Marko Gazdag - WEBKVALITA a začiatok poskytovania servisu počítačov v Košiciach.</p>
                        </div>
                        <div class="timeline-item right">
                            <span class="date">2008</span>
                            <p>Po veľkom dopyte po našich službách sa púšťame do servisu notebookov (ako prvý v Košiciach).</p>
                        </div>
                    </div>
                    <div class="timeline-row">
                        <div class="timeline-item left">
                            <span class="date">2010</span>
                            <p>Množstvo spokojných zákazníkov rýchlo rastie a prijímame prvého zamestnanca.</p>
                        </div>
                        <div class="timeline-item right">
                            <span class="date">2012</span>
                            <p>Priestory našej dielne nestačia a tak sa sťahujeme do novej prevádzky a otvárame predajňu na Sídlisku KVP.</p>
                        </div>
                    </div>
                    <div class="timeline-row">
                        <div class="timeline-item left">
                            <span class="date">2012</span>
                            <p>Založenie firmy WEBKVALITA s.r.o. ako nástupcu živnosti.</p>
                        </div>
                        <div class="timeline-item right">
                            <span class="date">2013</span>
                            <p>Dopyt po našich službách aj mimo Košíc rastie a tak rozširujeme naše pôsobenie na celé Slovensko.</p>
                        </div>
                    </div>
                    <div class="timeline-row">
                        <div class="timeline-item left">
                            <span class="date">2017</span>
                            <p>Poskytujeme opravu základných dosiek už pre niekoľko desiatok servisov PC po celom Slovensku.</p>
                        </div>
                        <div class="timeline-item right">
                            <span class="date">2018</span>
                            <p>Oproti roku 2017 sme zvýšili objem vybavených zákazok o viac ako 40%.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-between pb-3">
                    <h3>Naše referencie</h3>
                    <a href="{{ locale_route('contact.index') }}" class="btn btn-primary">Napíšte nám referenciu</a>
                </div>
                <div class="owl-firm owl-carousel owl-theme">
                    <div class="item">
                        <div class="review">
                            <p><strong>Iveta K. - spomalená Vista:</strong>
                                Keď som si kúpila počítač od telekomu, netušila som, že s ním budú problémy.
                                Už keď som s ním začala pracovať, počítač bol strašne spomalený, avšak čím dlhšie som na ňom pracovala, tým pomalšie to bolo.
                                Nakoniec som sa rozhodla problém riešiť. Práve vtedy, sme mali na bráne vylepenú reklamu WebKvality, tak som sa im ozvala.
                                Technik prišiel do hodiny a hneď ma oboznámil s problémom. Povedal, že ak mi nainštalujú viac pamäte a preinštalujú Vistu, bude to oveľa rýchlejšie.
                                Zobral počítač a o pár hodín boli naspäť. Ostala som prekvapená, keď som zistila o koľko rýchlejší je teraz počítač.
                                Za výmenu pamäte som zaplatila len 13,92€ a pamäť ma stála len niečo cez 10€.
                                S ich prácov som naozaj spokojná a určite ich odporučím aj známim.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Peter S. - prasknutý displej na notebooku:</strong>
                                Svoj notebook používam pri svojej práci denne a prácu bez neho si viem už len ťažko predstaviť.
                                Keď mi večer pri práci spadol notebook z kresla a praskol na ňom displej, mal som veľké obavy čo budem robiť mesiac bez notebooku, a či vôbec nebude oprava drahšia ako celý notebook.
                                Našiel som firmu Webkvalita na internete a objednal servis. Bol som milo prekvapený, keď mi už na druhý deň ráno volali s cenovou kalkuláciou a v ten istý deň poobede mi doniesli opravený notebook domov.
                                Bol som maximálne spokojný.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Rudolf B. - notebook sa nedá zapnúť:</strong>
                                Mám asi 2 a pol roka starý notebook ASUS. Jedného dňa som ho zapol a nič.
                                Nenabehol obraz, ani zvuk, len svietila zelená kontrolka. Obával som sa, že notebook pôjde rovno do koša. Našiel som však kontakt na firmu WEBKVALITA, zavolal im a dohodol servis.
                                Pre počítač prišli ku mne domov a zobrali ho na servis. Už na druhý deň mi volali s príčinou poruchy a cenovou kalkuláciou.
                                Oznámili mi, že musia vymeniť základnú dosku. Do piatich dní som mal notebook u mňa doma a cena ma tiež veľmy potešila.
                                Keď som sa rozprával s kolegom, ktorý pred pár mesiacmi riešil podobný problém so svojim notebookom, platil u konkurencie takmer dvojnásobok.
                                Odporúčam ich aj ostatným.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Ladislav H. - notebook sa sám vypína, prehrieva sa:</strong>
                                Počas práce na notebooku sa mi počítač po niekoľkých minútach sám vypol.
                                Po diagnostike mi technik oznámil, že na notebooku je upchaté chladenie, a je ho potrebné prečistiť. Za 24 hodín bol notebook opravený, doručili mi ho až domov a naozaj to pomohlo.
                                Notebook sa už nevypína, ide podstatne tichšie a je citeľne chladnejší.
                                Som veľmi spokojný.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Marek A. - poškodený displej na notebooku:</strong>
                                Tak displej je už otestovaný, zatiaľ maximálna spokojnosť - vidno že je nový.
                                Ďakujem ešte raz za Váš perfektný a systematický prístup. Navyše s cenou takmer o polovicu nižšou ako u konkurencie.
                                Tak by to malo vyzerať v každej firme!! Zaslúžite si medailu za zákaznícky orientovaný prístup! :)
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Vladimír G. - vadná grafická karta:</strong>
                                Po zapnutí notebooku nenabehol obraz, len svietili kontrolky.
                                Diagnostikou bolo zistené, že je vadná grafická karta notebooku, ktorá je integrovaná na základnej doske.
                                Oprava bola hotová za pár dní a notebook je opäť plne funkčný.
                                Cena o polovicu nižšia ako v konkurenčnej firme. Doporučujem všetkým.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Michaela V. - notebook poliaty pivom:</strong>
                                Po obliatí notebooku pivom ho nebolo možné vôbec zapnúť. Základná doska notebooku bola vyskratovaná a klávesnica úplne lepkavá.
                                Bola vymenená klávesnica a vymenené vyskratované súčiastky na základnej doske.
                                Po oprave notebook bez problémov plne funkčný.
                                Ďakujem za skvelo odvedenú prácu.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Martina P. - nefunkčná klávesnica:</strong>
                                Niektoré klávesy na klávesnici notebooku prestali fungovať.
                                Bolo potrebné vymeniť klávesnicu za novú, taktiež sme urobili prečistenie chladenia, nakoľko sa notebook prehrieval.
                                Nová klávesnica bola skladom, takže oprava bola dokončená do 24 hodín.
                                "Som veľmi spokojná. Ste rýchli a šikovní."
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Róbert M. - vadný displej:</strong>
                                Určite odporúčam, konkurencia mi dala termín do 5 týždňov, s polročnou zárukou a neodporúčali mi investovať do môjho ntb.
                                Ale firma webkvalita ma upokojila, notebook má klasickú záruku a oprava prebehl rýchlo a za podstatne prijatelnejšiu cenu ...
                                dokonca s detekciou inej poruchy ako v konkurenčnom servise.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Patrik H. - vadná základná doska:</strong>
                                V konkurenčnom servise mi ako jedinú možnosť opravy môjho notebooku ponúkli výmenu základnej dosky za cenu vyššiu ako hodnota notebooku.
                                Táto firma však našťastie našla riešenie a to opravu mojej pokazenej základnej dosky za asi pätinovú cenu.
                                Ďakujem a odporúčam aj ostatným.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review">
                            <p><strong>Adriana V. - vadná základná doska:</strong>
                                Odporúčam službu tejto firmy, okrem profesionálneho prístupu si cením rýchlosť a kvalitu poskytnutých služieb, ľudské pochopenie a primeranu cenu.
                                V prípade potreby by som využila služby firmy zas. Ďakujem vám veľmi pekne.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Правая колонка со списком клиентов -->
            <div class="col-md-6">
                <h3>Firemná klientela</h3>
                <ul class="list-group">
                    <li class="list-group-item">Novartis Slovakia s.r.o.</li>
                    <li class="list-group-item">PRIVEL s.r.o.</li>
                    <li class="list-group-item">VČIELKA KOŠICE s.r.o.</li>
                    <li class="list-group-item">WALEON s.r.o.</li>
                    <li class="list-group-item">BLACK-C s.r.o.</li>
                    <li class="list-group-item">STAVEX GROUP s.r.o.</li>
                    <li class="list-group-item">VESPOL s.r.o.</li>
                    <li class="list-group-item">SEZAKO Trnava s.r.o.</li>
                    <li class="list-group-item">CANIS SLOVAKIA s.r.o.</li>
                    <li class="list-group-item">NAŠA s.r.o.</li>
                    <li class="list-group-item">Yellow Taxi</li>
                    <li class="list-group-item">APM Slovakia s.r.o.</li>
                    <li class="list-group-item">DEMONTA s.r.o.</li>
                    <li class="list-group-item">Carys Slovakia s.r.o.</li>
                    <li class="list-group-item">CHARNEL s.r.o.</li>
                    <li class="list-group-item">i.l. impression s.r.o.</li>
                    <li class="list-group-item">Obecný úrad HANISKA</li>
                    <li class="list-group-item">Obecný úrad REŠICA</li>
                    <li class="list-group-item">Obecný úrad TRSTENÉ PRI HORNÁDE</li>
                    <li class="list-group-item">Obecný úrad ČAŇA</li>
                    <li class="list-group-item">Základná škola PARCHOVANY</li>
                    <li class="list-group-item">Základná škola ŠACA</li>
                    <li class="list-group-item">Základná škola HANISKA</li>
                    <li class="list-group-item">AMIKO s.r.o.</li>
                    <li class="list-group-item">ABER s.r.o.</li>
                    <li class="list-group-item">EL-COMP</li>
                    <li class="list-group-item">Základná škola ČAŇA</li>
                    <li class="list-group-item">Základná umelecká škola Krosnianska, Košice</li>
                    <li class="list-group-item">Materská škola TRSTENÉ PRI HORNÁDE</li>
                    <li class="list-group-item">OZ Jeseň života</li>
                    <li class="list-group-item">Študentský servis</li>
                    <li class="list-group-item">TATRA FILM spol. s r.o.</li>
                    <li class="list-group-item">Pizza PARLAMENTKA</li>
                    <li class="list-group-item">Donášková služba KOCKA PIZZA</li>
                    <li class="list-group-item">TOPREZ s.r.o.</li>
                    <li class="list-group-item">Centrum voľného času Spišský Hrad</li>
                    <li class="list-group-item">EMVE Plus s.r.o.</li>
                    <li class="list-group-item">Golf Resort Club s.r.o.</li>
                </ul>
            </div>
        </div>
    </div>



@endsection
