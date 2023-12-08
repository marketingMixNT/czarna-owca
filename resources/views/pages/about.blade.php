<x-layouts.master>
    {{-- @section('title', '')
    @section('description', '') --}}

    <x-breadcrumbs title="O nas" bgi="{{asset('assets/images/owce-dwie_22.webp')}}"/>
 
    <div class="gdlr-core-pbf-wrapper attractions--second-container" style="padding: 105px 0px 55px 0px;" id="gdlr-core-wrapper-1">
        <div class="gdlr-core-pbf-background-wrap"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                    style="padding-bottom: 20px;"
                                    id="gdlr-core-title-item-1"
                                >
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 50px; font-weight: 400; letter-spacing: 0px; text-transform: none;">
                                        witaj na stronie Owce Dwie<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-1">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 20px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space">
                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #898989;">
                                        <p>Twój wymarzony pobyt zaczyna się tutaj-odkryj przyjemność w każdym detalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                    <div class="gdlr-core-divider-container" style="max-width: 40px;">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="gdlr-core-pbf-wrapper attractions--second-container" style="padding: 0px 0px 63px 0px;" id="gdlr-core-wrapper-2">
        <div class="gdlr-core-pbf-background-wrap"></div>
        <div class="gdlr-core-pbf-background-wrap" style="top: -10px;">
            <div
                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="background-image: url(); background-repeat: no-repeat; background-position: top center;"
                data-parallax-speed="0.1"
            ></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container attractions--second-container">
               
                <x-info-card img="{{asset('assets/images/owce-dwie_22.webp')}}" title="" >Willa "Owce Dwie" to niezwykłe miejsce, w którym tradycja spotyka się z nowoczesnością, tworząc atmosferę pełną komfortu i relaksu. Położona w otoczeniu szlaków, tuż obok Skoczni, willa oferuje niezapomniane widoki, które zaspokoją nawet najbardziej wymagających Gości.</x-info-card>
    
                <x-info-card class="info-card--reverse" img="{{asset('assets/images/owce-dwie_32.webp')}}" title="" >Wnętrza Willi "Owce Dwie" to harmonijne połączenie nowoczesnego designu z elementami charakterystycznymi dla stylu góralskiego. Starannie dobrany wystrój sprawia, że każdy detal oddaje unikalny urok tego miejsca. Codziennie nasz zaangażowany personel dba o to, aby nasi Goście doświadczali pełni relaksu i satysfakcji podczas pobytu.</x-info-card>
               
                <x-info-card img="{{asset('assets/images/owce-dwie_42.webp')}}" title="
                " >Ponadto, każdego dnia zapewniamy naszym Gościom urozmaicone śniadania, dostosowane do różnorodnych gustów i preferencji. "Owce Dwie" nie tylko zapewniają wyjątkowe doświadczenie wizualne, ale również kulinarną przyjemność, dbając o zaspokojenie podniebienia każdego Gościa.</x-info-card>

                <x-info-card class="info-card--reverse" img="{{asset('assets/images/owce-dwie_32.webp')}}" title="" >Willa "Owce Dwie" to miejsce, gdzie tradycja, piękno przyrody i nowoczesność łączą się, tworząc niepowtarzalną atmosferę idealną do wypoczynku i relaksu.</x-info-card>
               
            </div>
        </div>
    </div>

    @include('pages.contact.partials.contact-map')

 
 </x-layouts.master>