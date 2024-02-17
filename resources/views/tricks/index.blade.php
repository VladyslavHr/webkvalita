@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-5">
        <h2 class="text-center pb-5">Naše tipy, ktoré Vám pomôžu predchádzať poruchám notebookov</h2>
        <div class="col-md-6">
            <h4>Prehrievanie notebookov – chladenie</h4>
            <div class="py-2">
                Prehrievanie je najčastejší problém, s ktorým sa pri notebookoch stretávame.
                Jeho podcenenie často vedie k veľmi nákladným opravám ako je oprava grafického čipu alebo procesora.
                Tento jav je spôsobený tým, že notebook pre chladenie komponentov – procesor, grafický čip alebo chipset využíva prúdenie vzduchu, ktorým dané komponenty ochladzuje.
                Počas dlhšej doby používania sa tak stáva, že notebook nasaje aj množstvo prachu a nečistôt, ktoré zanesú rebrá chladiča notebooku a znemožňujú tak chladenie.
                Zo začiatku sa to prejaví len miernym zvýšením teplôt, avšak po dlhšej dobe môže dôjsť k úplnému upchatiu rebier chladiča prachom, čo spôsobí úplné znemožnenie chladenia notebooku.
                V lepšom prípade sa to skončí častým vypínaním notebooku počas práce s ním – spôsobuje to automatická ochrana, ktorá notebook po prekročení určitej – kritickej teploty notebook vypne.
                V horšom prípade sa tento problém končí poškodením grafického čipu alebo chipsetu notebooku.
            </div>
            <div class="row py-3">
                <h5>Čo doporučujeme?</h5>
                <div class="col-sm-6">
                    Na základe našich skúseností doporučujeme nechať chladenie notebooku odborne prečistiť a prepastovať minimálne raz za 1 – 2 roky ( v závislosti od prašnosti prostredia, v ktorom pracujete ).
                    Predídete tým vážnemu poškodeniu notebooku a výrazne predlžíte jeho životnosť.
                    Okrem toho nedoporučujeme notebook používať položený na paplóne, vankúši alebo akejkoľvek prikrývke, či mäkkom povrchu.
                    Zakrývate tým prieduchy chladenia a znemožníte chladenie notebooku.
                </div>
                <div class="col-sm-6"><img class="image" src="{{ asset('tricks/tip3.jpg') }}" alt=""></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <h4>Poruchy napájania – dobíjania</h4>

                <div class="col-sm-8 py-2">
                    <div class="">
                        Častým problémom u notebookov sú problémy s napájaním, prípadne s batériou. Tu Vám popíšeme ako sa prejavujú a čo ich spôsobuje.
                    </div>
                </div>
                <div class="col-sm-4 py-2">
                    <img class="image" src="{{ asset('tricks/tip2.jpg') }}" alt="">
                </div>
                <div class="trick-problem-list">
                    <div class="trick-problem-item">
                        <span class="trick-problem-number">1.</span>
                        <p>Notebook po odpojení z nabíjačky okamžite vypne, prípadne vydrží podstatne kratšie ako kedysi -> problém je takmer s určitosťou v batérii notebooku – kapacita batérie sa časom znižuje a tak ak chcete Váš notebook používať aj naďalej na batériu, bude nutné ju vymeniť. Vo väčšine prípadov si batériu po zakúpení viete vymeniť samy. Výnimku tvoria niektoré novšie typy notebookov a ultrabookov – tam doporučujeme výmenu zveriť odborníkom.</p>
                    </div>
                    <div class="trick-problem-item">
                        <span class="trick-problem-number">2.</span>
                        <p>Notebook sa dobíja alebo zapne len v určitých polohách zapojenia nabíjačky -> problémom je pravdepodobne poškodený napájací konektor vo vnútri notebooku – bude potrebné ho vymeniť. Výmena napájacieho konektora je náročný úkon, ktorý si vyžaduje prax a odbornosť – doporučujeme túto opravу nechať на servis.</p>
                    </div>
                    <div class="trick-problem-item">
                        <span class="trick-problem-number">3.</span>
                        <p>Notebook sa vôbec nedobíja, nedá sa zapnúť ani na batériu ani pri zapojení nabíjačky -> možností je viacero – môže byť poškodený napájací konektor, môže byť vadná nabíjačka notebooku, alebo môže byть chыba v napájacom obvode na základnej doske notebooku. S výnimkou výmenы nabíjačky doporučujeme tento problém zveriť do rúk odborníkom!</p>
                    </div>
                </div>
            </div>
            <div class="py-2">
            </div>
        </div>
    </div>
    <div class="">
        <h3>
            Ako sa starať o batériu notebooku?
        </h3>
        <p>
            Poznáte to? Po kúpe nového notebooku, vydrží notebook fungovať na batériu okolo 3 hodín, no už po roku maximálne 1 a pól hodiny.
            Žiaľ je faktom, že batéria svojim používaním postupne stráca svoju pôvodnú kapacitu, avšak jej správnym používaním vieme túto stratu kapacity batérie spomaliť.
        </p>
        <h5 class="text-center py-3"><b>My Vám ponúkame zopár tipov ako životnosť batérie predĺžiť:</b></h5>
        <div class="battery-tips">
            <div class="tip-card">
                <h3>1</h3>
                <p>Najčastejší mýtus o batériách v notebookoch je, že ich treba nabíjať až po ich úplnom vybití. Nie je to pravda. Batériu je najlepšie vybiť maximálne na 20% a opäť dobiť. Úplným vybitím batéria notebooku stráca svoju kapacitu.</p>
            </div>
            <div class="tip-card">
                <h3>2</h3>
                <p>Batérii v notebooku škodí aj situácia, keď je zariadenie niekoľko týždňov pripojené do elektrickej siete a batéria sa konštantne udržuje pri plnom nabití. Pri dosiahnutí úrovne nabitia 100 % sa batéria už síce nenabíja, no postupom času nastáva jav, kedy stráca svoju kapacitu. Nejde o okamžitý stav, ale v priebehu dvoch rokov sa môžete dostať do situácie, kedy vám batéria pri bežnej kancelárskej práci vydrží sotva hodinu. Správnou voľbou je zachovanie určitého nabíjacieho cyklu - aspoň raz týždenne batériu vybiť na 25 až 30 percent a opätovne nabiť.</p>
            </div>
            <div class="tip-card">
                <h3>3</h3>
                <p>Pokiaľ notebook plánujete dlhšiu dobu nepoužívať, batériu úplne nenabite ani nevybite. Ideálne je ju nechať dobitú na asi 40 až 50 percent kapacity. Následne ju vyberte a odložte na suché, chladnejšie miesto. Vyhnite sa mrazu, ten naopak môže životnosť znížiť.</p>
            </div>
        </div>

        <h3 class="py-3">
            Zabezpečenie počítača a ochrana pred vírusom.
        </h3>
        <p>
            Najdôležitejší pre ochranu počítača je antivírusový program. Ako najspoľahlivejší sa ukázal antivírusový program ESET Antivirus.
            Tento program poskytuje maximálne zabezpečenie pred vírusom. Je však platený a tak mnohý používatelia siahajú po bezplatných alternatívach.
            Nám sa osvedčil napríklad AVG Free verzia. Nedosahuje až také výsledky ako ESET, avšak pre bežné domáce použitie bohato postačuje.
            Okrem samotného nainštalovaného antivírusového programu je veľmi dôležité ho udržovať pravidelne aktualizovaný.
            Väčšina programov sa aktualizuje automaticky, keď je notebook alebo počítač pripojený k internetu, avšak doporučujeme občas skontrolovať, či je program aktuálny.
        </p>
        <h5 class="py-3"><b>Ak máme funkčný antivírusový program, počítač je relatívne v bezpečí. Treba však okrem toho dodržiavať niekoľko zásad bezpečného používania:</b></h5>
        <div class="battery-tips">
            <div class="tip-card">
                {{-- <h3>1</h3> --}}
                <p> Neotvárať prílohy v mailoch od neznámych ľudí, alebo prílohy o ktorých nevieme, že by sme mali dostať.</p>
            </div>
            <div class="tip-card">
                {{-- <h3>2</h3> --}}
                <p>Nesťahovať podozrivé súbory alebo programy z neoverených zdrojov a podozrivých internetových stránok.</p>
            </div>
            <div class="tip-card">
                {{-- <h3>3</h3> --}}
                <p>Po pripojení cudzieho USB kľúča do počítača doporučujeme vykonať jeho kontrolu antivírusovým programom.</p>
            </div>
        </div>
    </div>
</div>

@endsection
