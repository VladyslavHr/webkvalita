<div class="container pt-3">
    <div class="info-top-header">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3 info-top-headr-adress">
                        <a href="https://maps.app.goo.gl/EaDN2FAnhnqqMTCW8" class="links-styl" target="__blank">
                            <i class="bi bi-house"></i>
                            Trieda KVP 4, 040 23 Košice
                        </a>
                    </div>
                    <div class="col-lg-3 info-top-header-email">
                        <a href="mailto:info@webkvalita.com" class="links-styl" target="__blank">
                            <i class="bi bi-envelope"></i>
                            info@webkvalita.com
                        </a>
                    </div>
                    <div class="col-lg-2 language-switcher">
                        <a class="links-styl" href="{{ str_replace('/' . app()->getLocale(), '/sk', url()->current()) }}" class="{{ app()->getLocale() == 'sk' ? 'active' : '' }}">SK</a> |
                        <a class="links-styl" href="{{ str_replace('/' . app()->getLocale(), '/en', url()->current()) }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="social-links d-flex">
                    <div class="me-2">
                        <a href="https://www.instagram.com/webkvalita/" class="links-styl" target="__blank"><i class="bi bi-instagram"></i></a> /
                    </div>
                    <div >
                        <a href="" class="links-styl" target="__blank"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border-top-head py-2"></div>
<div class="container py-5 info-mid-header">
    <div class="row align-items-center">
        <div class="col-lg-3">
            <a class="navbar-brand" href="{{ locale_route('home.index',) }}">
                <img src="{{ asset('logo/logo.png') }}" style="width: 100%" alt="">
            </a>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <i class="bi bi-telephone-fill fs-5"></i>
                </div>
                <div class="col-lg-10 info-mid-header-call">
                    <div>
                        {{__('header.CALL')}}
                    </div>
                    <div>
                        <a class="links-styl" href="tel:0911 992 754">0911 992 754</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <i class="bi bi-clock-fill fs-5"></i>
                </div>
                <div class="col-lg-10 info-mid-header-open">
                    <div>
                        {{__('header.OPENING HOURS')}}
                    </div>
                    <div>
                        {{__('header.Mon - Fri:')}} 09:00 - 12:00   13:00 - 18:00
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <a href="{{ locale_route('contact.service') }}" class="btn btn-primary float-end">{{__('header.Order servis!')}}</a>
        </div>
    </div>
</div>
<div class="backgoud-wrap-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-menu sticky-top">
            {{-- <nav class="navbar s bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Sticky top</a>
                </div>
              </nav> --}}
            <div class="container-fluid">
                <a class="navbar-brand-small-creen" href="{{ locale_route('home.index',) }}">
                    <img class="image" src="{{ asset('logo/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler button-colapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex w-100" id="header_menu_main">
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('home.index',) }}">{{__('header.Current actions')}}</a>
                            <span class="active-line"></span>
                        </li>
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('firm.index',) }}">{{__('header.About company')}}</a>
                            <span class="active-line"></span>
                        </li>
                        <li class="nav-item dropdown flex-grow-1 text-center">
                            <a class="nav-link dropdown-toggle {{ url()->current() == locale_route('noteRepair.index') ? 'active' : '' }}"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ __('header.Laptop repair') }}
                            </a>
                            <span class="active-line"></span>
                            <ul class="dropdown-menu flex-grow-1 header-drop-menu-wrap" aria-labelledby="navbarDropdown">
                              <li class="header-drop-li-active"><a class="dropdown-item" href="{{ locale_route('noteRepair.index',) }}">{{ __('header.Laptop repair') }}</a></li>
                              <li class="header-drop-li-active"><a class="dropdown-item" href="#">Another action</a></li>
                              {{-- <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                        </li>
                        {{-- <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="#">{{__('header.Laptop repair')}}</a>
                        </li> --}}
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('compRepair.index',) }}">{{__('header.Computer repair')}}</a>
                            <span class="active-line"></span>
                        </li>
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('tricks.index',) }}">{{__('header.Tips and tricks')}}</a>
                            <span class="active-line"></span>
                        </li>
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('work.index',) }}">{{__('header.Our work')}}</a>
                            <span class="active-line"></span>
                        </li>
                        <li class="nav-item flex-grow-1 text-center active-header-link">
                            <a class="nav-link" href="{{ locale_route('contact.index',) }}">{{__('header.Contact')}}</a>
                            <span class="active-line"></span>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
    </div>
</div>

  <script>
    document.querySelectorAll('.locale-link').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Предотвращаем стандартное поведение ссылки
            var locale = this.getAttribute('data-locale'); // Получаем локаль из атрибута ссылки
            document.getElementById('localeField').value = locale; // Устанавливаем локаль в скрытое поле
            link.closest('form').submit(); // Отправляем форму
        });
    });

    // document.querySelectorAll('#header_menu_main a[href="'+location.href+'"]').forEach(link => link.classList.add('active'));
    $('#header_menu_main a[href="' + location.href + '"]').each(function() {
    $(this).addClass('active'); // Добавление класса active
    // $(this).siblings('.active-line').show(); // Показ .active-line, используя jQuery
    $(this).next('.active-line').show();

    var currentUrl = window.location.href;
    $('.dropdown-menu .dropdown-item').each(function() {
        var itemUrl = $(this).attr('href');
        if(currentUrl.includes(itemUrl)) {
            $(this).closest('.nav-item').find('.active-line').css('display', 'block');
            // Добавляем класс active к dropdown-toggle, если это требуется
            $(this).closest('.nav-item').find('.dropdown-toggle').addClass('active');
        }
    });
});

</script>
