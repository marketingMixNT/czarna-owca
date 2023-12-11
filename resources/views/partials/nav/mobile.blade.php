<div class="hotale-mobile-header-wrap">
    <div class="hotale-mobile-header hotale-header-background hotale-style-slide hotale-sticky-mobile-navigation nav__mobile" id="hotale-mobile-header" style="padding-top:0;padding-bottom:0">
        <div class="hotale-mobile-header-container hotale-container clearfix">
            <div class="hotale-logo hotale-item-pdlr">
                <div class="hotale-logo-inner" style="max-width:140px">
                    <a class="hotale-fixed-nav-logo" href="{{route('home')}}">
                        <img
                            src="{{asset('assets/logo.png')}}"
                            alt=""
                            width="40"
                            height="40"
                        />
                    </a>
                    <a class="hotale-orig-logo" href="{{route('home')}}">
                        <img src="{{asset('assets/logo.png')}}" alt="" width="110" height="110" title="logo-hotel-mobile" />
                    </a>
                </div>
            </div>
            <div class="hotale-mobile-menu-right">
               
                <div class="hotale-mobile-menu" >
                    <a class="hotale-mm-menu-button hotale-mobile-menu-button hotale-mobile-button-hamburger hamburger" href="#hotale-mobile-menu"><span></span></a>
                    <div class="hotale-mm-menu-wrap hotale-navigation-font" id="hotale-mobile-menu" data-slide="right" >
                        {{--NAV-ITEMS--}}
                        <ul id="menu-main-navigation" class="m-menu">
                        @include('partials.nav.nav-items')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>