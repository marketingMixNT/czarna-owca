<x-layouts.master>


    <x-breadcrumbs title="Pokoje" bgi="{{ asset('assets/images/owce-dwie_26.webp') }}" />

        <x-apartments.grid>
            {{--APARTMENT ONE--}}
           <x-apartments.card img="{{asset('assets/images/owce-dwie_26.webp')}}">
            <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background" style="padding-top: 35px; padding-bottom: 40px; padding-left: 60px;">
                <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 30px; font-weight: 500; text-transform: none;">
                    <a href="{{route('apartment-1')}}">Rodzinny Pokój Deluxe z Balkonem</a>
                </h3>
                <div class="tourmaster-info-wrap clearfix">
                    <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">max 4 os.</span></div>
                    {{-- <div class="tourmaster-info tourmaster-info-room-size"><i class="gdlr-icon-resize"></i><span class="tourmaster-tail">30 m²</span></div> --}}
                </div>
                <div class="tourmaster-room-content">Lorem ipsum dolor sit amet consectetur adipiscing elit platea ante curae, cras ad ac nisi aenean</div>
                <div class="tourmaster-bottom">
                    <a class="tourmaster-read-more tourmaster-type-text" href="{{route('apartment-1')}}">Zobacz<i class="icon-arrow-right"></i></a>
                    {{-- <div class="tourmaster-price-wrap tourmaster-no-bg">
                        <span class="tourmaster-head">Od</span><span class="tourmaster-price">299 zł</span><span class="tourmaster-tail"> / noc</span>
                    </div> --}}
                </div>
            </div>
           </x-apartments.card>
            {{--APARTMENT TWO--}}
            <x-apartments.card img="{{asset('assets/images/owce-dwie_4.webp')}}">
                <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background" style="padding-top: 35px; padding-bottom: 40px; padding-left: 60px;">
                    <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 30px; font-weight: 500; text-transform: none;">
                        <a href="{{route('apartment-2')}}">Rodzinny Pokój  Premiere z Balkonem</a>
                    </h3>
                    <div class="tourmaster-info-wrap clearfix">
                        <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">max 4 os.</span></div>
                        
                    </div>
                    <div class="tourmaster-room-content">Lorem ipsum dolor sit amet consectetur adipiscing elit platea ante curae, cras ad ac nisi aenean</div>
                    <div class="tourmaster-bottom">
                        <a class="tourmaster-read-more tourmaster-type-text" href="{{route('apartment-2')}}">Zobacz<i class="icon-arrow-right"></i></a>
                        {{-- <div class="tourmaster-price-wrap tourmaster-no-bg">
                            <span class="tourmaster-head">Od</span><span class="tourmaster-price">399 zł</span><span class="tourmaster-tail"> / noc</span>
                        </div> --}}
                    </div>
                </div>
               </x-apartments.card>
                {{--APARTMENT THREE--}}
                <x-apartments.card img="{{asset('assets/images/owce-dwie_26.webp')}}">
                    <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background" style="padding-top: 35px; padding-bottom: 40px; padding-left: 60px;">
                        <h3 class="tourmaster-room-title gdlr-core-skin-title" style="font-size: 30px; font-weight: 500; text-transform: none;">
                            <a href="single-room.html">Dwuosobowy Pokój Deluxe z Balkonem</a>
                        </h3>
                        <div class="tourmaster-info-wrap clearfix">
                            <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">max 2 os.</span></div>
                            {{-- <div class="tourmaster-info tourmaster-info-room-size"><i class="gdlr-icon-resize"></i><span class="tourmaster-tail">45 m²</span></div> --}}
                        </div>
                        <div class="tourmaster-room-content">Lorem ipsum dolor sit amet consectetur adipiscing elit platea ante curae, cras ad ac nisi aenean</div>
                        <div class="tourmaster-bottom">
                            <a class="tourmaster-read-more tourmaster-type-text" href="{{route('apartment-3')}}">Zobacz<i class="icon-arrow-right"></i></a>
                            {{-- <div class="tourmaster-price-wrap tourmaster-no-bg">
                                <span class="tourmaster-head">Od</span><span class="tourmaster-price">499 zł</span><span class="tourmaster-tail"> / noc</span>
                            </div> --}}
                        </div>
                    </div>
                   </x-apartments.card>
            
        </x-apartments.grid>
    




</x-layouts.master>
