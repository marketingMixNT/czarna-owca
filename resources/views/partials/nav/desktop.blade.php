<div class="hotale-navigation hotale-item-pdlr clearfix hotale-navigation-submenu-indicator desktop-nav-container">
   
    <div class="hotale-main-menu-right-wrap clearfix hotale-item-mglr hotale-navigation-top nav--logo" style="left:0;top:-15px;display:none">
        <div class="tourmaster-room-navigation-checkout-wrap">
          <img src="{{asset('assets/logo--dark.png')}}" alt="" width="160px"  >
          
        </div>
    </div>

    
    <div class="hotale-main-menu" id="hotale-main-menu">
        <ul id="menu-main-navigation-1" class="sf-menu">
        {{--NAV-ITEMS--}}
       @include('partials.nav.nav-items')
        </ul>
        <div class="hotale-navigation-slide-bar hotale-navigation-slide-bar-style-2 hotale-left" data-size-offset="0" data-width="19px" id="hotale-navigation-slide-bar"></div>
    </div>

    <div class="hotale-main-menu-right-wrap clearfix hotale-item-mglr hotale-navigation-top">
        <div class="tourmaster-room-navigation-checkout-wrap">
            <a
                id="tourmaster-room-navigation-checkout-button"
                class="tourmaster-room-navigation-checkout-button btn--secondary"
                href="#"
                data-checkout-label="Check Out"
                data-label="Book Now"
            >
                Zarezerwuj<span class="tourmaster-count">0</span>
            </a>
           
        </div>
    </div>

</div>