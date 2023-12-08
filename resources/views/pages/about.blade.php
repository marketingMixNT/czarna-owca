<x-layouts.master>
    @section('title', '')
    @section('description', '')

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
                                        Willa Owce Dwie<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit senectus rhoncus mauris mus, luctus pellentesque metus ac sapien integer congue ante cras cubilia condimentum, lacinia fermentum vel bibendum magna torquent ultrices parturient vulputate sollicitudin.</p>
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
               
                <x-info-left img="{{asset('assets/images/owce-dwie_22.webp')}}" title="Lorem Ipsum Dolor Sit" >Dolina Lorem ipsum dolor sit amet consectetur, adipiscing elit accumsan quisque iaculis, a donec aliquet nisl. Litora sollicitudin lectus ligula pharetra vitae risus parturient viverra dapibus, ultrices nulla torquent libero vulputate auctor class iaculis aliquam, bibendum nec nostra pellentesque duis ultricies orci quam. Proin tellus euismod etiam erat integer ut maecenas vivamus sem malesuada, orci ultricies bibendum risus sociosqu dapibus interdum libero nascetur, eu ridiculus</x-info-left>
    
                <x-info-right img="{{asset('assets/images/owce-dwie_32.webp')}}" title="Lorem Ipsum Dolor Sit" >Lorem ipsum dolor sit amet consectetur, adipiscing elit accumsan quisque iaculis, a donec aliquet nisl. Litora sollicitudin lectus ligula pharetra vitae risus parturient viverra dapibus, ultrices nulla torquent libero vulputate auctor class iaculis aliquam, bibendum nec nostra pellentesque duis ultricies orci quam. Proin tellus euismod etiam erat integer ut maecenas vivamus sem malesuada, orci ultricies bibendum risus sociosqu dapibus interdum libero nascetur, eu ridiculus</x-attraction-card-second-rig>
               
                <x-info-left img="{{asset('assets/images/owce-dwie_42.webp')}}" title="Lorem Ipsum Dolor Sit
                " >Lorem ipsum dolor sit amet consectetur, adipiscing elit accumsan quisque iaculis, a donec aliquet nisl. Litora sollicitudin lectus ligula pharetra vitae risus parturient viverra dapibus, ultrices nulla torquent libero vulputate auctor class iaculis aliquam, bibendum nec nostra pellentesque duis ultricies orci quam. Proin tellus euismod etiam erat integer ut maecenas vivamus sem malesuada, orci ultricies bibendum risus sociosqu dapibus interdum libero nascetur, eu ridiculus</x-info-left>
               
               
            </div>
        </div>
    </div>

    @include('pages.contact.partials.contact-map')

 
 </x-layouts.master>