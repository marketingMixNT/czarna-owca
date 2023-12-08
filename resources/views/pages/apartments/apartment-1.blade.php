<x-layouts.master>

    <x-breadcrumbs title="Rodzinny Pokój Deluxe z Balkonem" bgi="{{ asset('assets/images/owce-dwie_40.webp') }}" />

    <x-apartment.template title="Rodzinny Pokój Deluxe z Balkonem" price="od 299 zł">

        <x-slot name="thumbnail">
            <x-apartment.thumbnail img="{{ asset('assets/images/owce-dwie_24.webp') }}" />
        </x-slot>

        <x-slot name="features">
            <x-apartment.featureCard title="Liczba Gości" desc="max 4 os.">
                <i class="gdlr-icon-group"
                    style="font-size: 33px; line-height: 33px; width: 33px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
            <x-apartment.featureCard title="Łóżko" desc="podwójne">
                <i class="gdlr-icon-double-bed2"
                    style="font-size: 34px; line-height: 34px; width: 34px; color: #0a0a0a;"></i>
            </x-apartment.featureCard>
            <x-apartment.featureCard title="Sofa" desc="rozkładana">
                <i class="gdlr-icon-sofa"
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
            <x-apartment.amenityCard title="Internet">
                <i class="gdlr-icon-wifi-signal" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Sejf">
                <i class="gdlr-icon-safe-box1" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Łazienka z Prysznicem">
                <i class="gdlr-icon-shower" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Szafa">
                <i class="gdlr-icon-bathrobe" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Biurko">
                <i class="gdlr-icon-workspace" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
            <x-apartment.amenityCard title="Ręczniki">
                <i class="gdlr-icon-towel" style="color: #1e1e1e;"></i>
            </x-apartment.amenityCard>
           
           
        </x-slot>

        

        <x-slot name="gallery">
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_3.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_1.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_14.webp')}}"/>
        <x-apartment.galleryItem src="{{asset('assets/images/owce-dwie_24.webp')}}"/>

        </x-slot>

        <x-slot name='otherRooms'>
            <x-apartment.moreRoomsItem 
            title='Rodzinny Pokój Premiere z Balkonem'
            price="399 zł"
            href="{{route('apartment-2')}}"
            img="{{asset('assets/images/owce-dwie_3.webp')}}"
            guests="max 4 os."
            />
            <x-apartment.moreRoomsItem 
            title='Dwuosobowy Pokój Deluxe z Balkonem'
            price="499 zł"
            href="{{route('apartment-3')}}"
            img="{{asset('assets/images/owce-dwie_23.webp')}}"
            guests="max 2 os."
            />
           
            
        </x-slot>
    </x-apartment.template>




</x-layouts.master>
