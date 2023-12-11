<div class="hotale-top-bar hotale-middle-logo" >
<div class="hotale-top-bar-background"></div>
    <div class="hotale-top-bar-container hotale-top-bar-full" style="max-width:1280px">
        <div class="hotale-top-bar-container-inner clearfix">
            <div class="hotale-top-bar-left hotale-item-pdlr">
                <div class="hotale-top-bar-left-text">
                    <i class="icon-phone" style="font-size: 15px; color: white; margin-right: 10px;"></i><a href="tel:+48696770000" style="color:white">+48 696 770 000</a>
                    <i class="icon-envelope" style="font-size: 15px; color: white; margin-left: 25px; margin-right: 10px;"></i>
                    <a href="mailto:hello@owcedwie.pl" style="color: white !important;">hello@owcedwie.pl</a>
                </div>
            </div>
            <div class="hotale-logo hotale-item-pdlr">
                <div class="hotale-logo-inner" style="max-width:200px">
                    <a class="hotale-fixed-nav-logo" href="{{route('home')}}">
                        <img
                            src="{{asset('assets/logo.png')}}"
                            alt="hotel logo"
                            width="40"
                            height="40"
                        />
                    </a>
                    <a class="hotale-orig-logo" href="{{route('home')}}">
                        <img
                            src="{{asset('assets/logo.png')}}"
                            alt="hotel logo"
                            width="80"
                            height="95"
                            title="logo-hotel-1"
                            
                        />
                    </a>
                </div>
            </div>
            <div class="hotale-top-bar-right hotale-item-pdlr">
              
                <div class="hotale-top-bar-right-social">
                   @include('partials.socials')
                
                </div>
                <div class="tourmaster-currency-switcher">
                    <span class="tourmaster-head"><span style="color:white">PL</span><i class="fa fa-sort-down" style="color:white"></i></span>
                    <div class="tourmaster-currency-switcher-inner">
                        <div class="tourmaster-currency-switcher-content">
                            <ul>
                                <li><a href="#">PL</a></li>
                                <li><a href="#">ENG</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
</div>