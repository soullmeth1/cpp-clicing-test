<section class="container py-10 px-4 md:px-10">
    <h3 class="col-span-2 font-bold text-3xl text-utama mb-5">News & Article</h3>
    <div class="grid md:grid-cols-2 gap-10">
        @for ($i = 0; $i < 4; $i++)
            <div class="grid lg:flex gap-5">
                <div class="flex-1 md:rounded-xl h-36 md:h-auto overflow-hidden">
                    <img src="{{ url('assets/images/news-foto.png') }}" alt="News Photo" width="100%" height="100%">
                </div>
                <div class="flex-1 py-2 news-article">
                    <h4 class="font-bold">SHRIMP BROODSTOCK LOREM IPSUM</h4>
                    <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="flex gap-2 items-center text-utama">Read more
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        @endfor
    </div>
</section>