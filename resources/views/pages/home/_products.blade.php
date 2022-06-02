<section class="text-center bg-white md:bg-gray-200 pb-12 pt-12 md:pt-0 px-4">
    <h3 class="font-bold text-3xl mb-4 text-utama">Our Product</h3>
    <p>The product that we provide for you is high quality</p>

    <div class="grid md:flex gap-10 justify-center mt-10">
        @for ($i = 0; $i < 2; $i++)
            <div class="w-80 h-8w-80 overflow-hidden rounded-xl relative cursor-pointer card-produk">
                <img src="{{ url('assets/images/shrimp.png') }}" alt="Product Photo">
                <div class="absolute top-0 left-0 right-0 bottom-0 grid items-center content-center card-produk-detail text-white text-center">
                    <h5 class="text-xl w-28 mb-8 mx-auto">Shrimp Broodstock</h5>
                    <a href="#" class="flex gap-3 items-center mx-auto">View Product
                        <img src="{{ url('assets/svg/right-arrow.svg') }}" alt="icon arrow">
                    </a>
                </div>
            </div>
        @endfor
    </div>
</section>