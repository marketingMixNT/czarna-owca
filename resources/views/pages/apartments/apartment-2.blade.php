<x-layouts.master>

    <x-breadcrumbs title="Pokój 2" bgi="{{ asset('assets/images/owce-dwie_40.webp') }}" />

    <x-apartment.template title="Pokój 2" price="od 399 zł">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/owce-dwie_24.webp') }}" />
        </x-slot>

        <x-slot name="features">
            <x-apartment.featureCard title="Liczba Gości" desc="max 4 os.">
                <i class="gdlr-icon-group"
                    style="font-size: 33px; line-height: 33px; width: 33px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
            <x-apartment.featureCard title="Powierzchnia" desc="30 m²">
                <i class="gdlr-icon-resize"
                    style="font-size: 34px; line-height: 34px; width: 34px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
        </x-slot>

        <x-slot name='description'>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit ac, scelerisque sodales laoreet molestie leo semper tellus, sem lobortis suscipit id interdum augue aptent. Enim inceptos nisi torquent porttitor facilisis faucibus tincidunt placerat sollicitudin, duis pulvinar interdum cum hendrerit nec dictum magnis massa sociosqu, etiam venenatis ante parturient id felis tempor rutrum. Rhoncus posuere neque dis velit integer leo quis montes eu luctus iaculis, ut facilisis fusce tempor vivamus mattis malesuada vehicula dictumst. Cum libero donec velit taciti bibendum auctor iaculis purus, a per vulputate orci penatibus phasellus maecenas.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit ac, scelerisque sodales laoreet molestie leo semper tellus, sem lobortis suscipit id interdum augue aptent. Enim inceptos nisi torquent porttitor facilisis faucibus tincidunt placerat sollicitudin, duis pulvinar interdum cum hendrerit nec dictum magnis massa sociosqu, etiam venenatis ante parturient id felis tempor rutrum. Rhoncus posuere neque dis velit integer leo quis montes eu luctus iaculis, ut facilisis fusce tempor vivamus mattis malesuada vehicula dictumst. Cum libero donec velit taciti bibendum auctor iaculis purus, a per vulputate orci penatibus phasellus maecenas.
            </p>
        </x-slot>

        <x-slot name="rooms_amenities">
            <x-apartment.amenityCard title="TV">
                <i class="gdlr-icon-watch-tv" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Free Wifi">
                <i class="gdlr-icon-wifi-signal" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Safe">
                <i class="gdlr-icon-safe-box1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="None Smoking">
                <i class="gdlr-icon-shower" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Air Conditioning">
                <i class="gdlr-icon-air-conditioner1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Heater">
                <i class="gdlr-icon-oil-heater-1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Phone">
                <i class="gdlr-icon-telephone" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Hair Dryer">
                <i class="gdlr-icon-hair-dryer1" style="color: #1e1e1e;"></i> </x-apartment.amenityCard>
        </x-slot>

        

        <x-slot name="gallery">
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_3.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_14.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_24.webp')}}"/>

        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem 
            title='Pokój 1'
            price="299 zł"
            href="{{route('apartment-1')}}"
            img="{{asset('assets/images/owce-dwie_3.webp')}}"
            size="25 m²"
            guests="max 4 os."
            />
            <x-apartment.moreRoomsItem 
            title='Pokój 3'
            price="499 zł"
            href="{{route('apartment-3')}}"
            img="{{asset('assets/images/owce-dwie_23.webp')}}"
            size="25 m²"
            guests="max 4 os."
            />
            <x-apartment.moreRoomsItem 
            title='Pokój 4'
            price="599 zł"
            href="{{route('apartment-4')}}"
            img="{{asset('assets/images/owce-dwie_33.webp')}}"
            size="25 m²"
            guests="max 4 os."
            />
            
        </x-slot>
    </x-apartment.template>




</x-layouts.master>
