<div class="gdlr-core-pbf-wrapper rooms-container" style="padding: 90px 0px 30px 0px;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-background-wrap" style="top: 155px;">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
            style="background-image: url(upload/hotel-room-bg.png); background-repeat: no-repeat; background-position: top center;"
            data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">



        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-2">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 35px 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 900px;">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                        style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                        Pokoje<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                    style="font-size: 20px; font-style: normal; letter-spacing: 0px; color: #94959b; margin-top: 20px;">
                                    W naszym obiekcie znajdziesz 12 przytulnych pokoi z osobnymi łazienkami, zapewniających wyjątkowy komfort podczas pobytu. Położenie naszego miejsca sprawia, że stanowi doskonałą bazę wypadową do górskich przygód. Profesjonalny personel jest gotowy zadbać o każdy detal Twojego pobytu, zapewniając niezapomniane doświadczenie.
                                </span>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                <div class="gdlr-core-divider-container" style="max-width: 43px;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-3">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeIn"
                        data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                        <div class="gdlr-core-pbf-element">
                            <div class="tourmaster-room-item clearfix tourmaster-room-item-style-grid3"
                                id="gdlr-core-room-1">
                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel"
                                    data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self"
                                    data-vcenter-nav="1">
                                    <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align"
                                        style="margin-top: -20px;">
                                        <i class="icon-arrow-left flex-prev"
                                            style="color: #9e9e9e; font-size: 34px; left: -80px;display:none" ></i>
                                        <i class="icon-arrow-right flex-next"
                                            style="color: #9e9e9e; font-size: 34px; right: -80px;display:none"></i>
                                    </div>
                                    <ul class="slides">
                                        {{-- FIRST ROOM --}}
                                        <x-room-card href="{{ route('apartment-1') }}"
                                            img="{{ asset('assets/images/owce-dwie_4.webp') }}" price="300 zł"
                                            title="Rodzinny Pokój Deluxe z Balkonem">
                                            <div class="tourmaster-info-wrap clearfix">

                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i
                                                        class="gdlr-icon-group"></i><span class="tourmaster-tail">max
                                                        4 os.</span></div>
                                                {{-- <div class="tourmaster-info tourmaster-info-bed-type"><i
                                                        class="gdlr-icon-resize"></i><span
                                                        class="tourmaster-tail">25m²</span></div> --}}
                                            </div>
                                        </x-room-card>
                                        {{-- SECOND ROOM --}}
                                        <x-room-card href="{{ route('apartment-2') }}"
                                            img="{{ asset('assets/images/owce-dwie_24.webp') }}" price="400 zł"
                                            title="Rodzinny Pokój Premiere z Balkonem">
                                            <div class="tourmaster-info-wrap clearfix">

                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i
                                                        class="gdlr-icon-group"></i><span class="tourmaster-tail">max
                                                        4 os.</span></div>
                                                {{-- <div class="tourmaster-info tourmaster-info-bed-type"><i
                                                        class="gdlr-icon-resize"></i><span
                                                        class="tourmaster-tail">30m²</span></div> --}}
                                            </div>
                                        </x-room-card>
                                        {{-- THIRD ROOM --}}

                                        <x-room-card href="{{ route('apartment-3') }}"
                                            img="{{ asset('assets/images/owce-dwie_4.webp') }}" price="500 zł"
                                            title="Dwuusobowy Pokój Deluxe z Balkonem">
                                            <div class="tourmaster-info-wrap clearfix">

                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i
                                                        class="gdlr-icon-group"></i><span class="tourmaster-tail">max
                                                        2 os.</span></div>
                                                {{-- <div class="tourmaster-info tourmaster-info-bed-type"><i
                                                        class="gdlr-icon-resize"></i><span
                                                        class="tourmaster-tail">25m²</span></div> --}}
                                            </div>
                                        </x-room-card>
                                       






                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border"
                                    href="{{ route('apartments') }}"
                                    style="
                                font-size: 13px;
                                font-style: normal;
                                font-weight: 500;
                                letter-spacing: 3px;
                                padding: 0px 0px 9px 0px;
                                text-transform: uppercase;
                                border-radius: 0px;
                                -moz-border-radius: 0px;
                                -webkit-border-radius: 0px;
                                border-width: 0px 0px 1px 0px;
                                border-color: #dadada;
                            ">
                                    <span class="gdlr-core-content">Zobacz wszystkie pokoje<i
                                            class="gdlr-core-pos-right icon-arrow-right"
                                            style="font-size: 16px;"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</div>
