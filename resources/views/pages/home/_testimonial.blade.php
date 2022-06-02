<section class="container text-center py-10 px-4">
    <h3 class="col-span-2 font-bold text-3xl text-utama mb-2">Testimonial</h3>
    <p>What our customer say</p>

    <div class="mt-10 relative px-5 md:px-12">
        <section class="overflow-x-scroll card-testi-container">
            <div class="flex gap-10 mx-4 md:mx-12">
                @for ($i = 0; $i < 6; $i++)
                    <div class="card-testi text-white text-center p-8 max-w-sm">
                        <div class="w-36 h-36 rounded-full overflow-hidden flex m-auto">
                            <img src="{{ url('assets/images/testi-foto.png') }}" alt="Testi Foto">
                        </div>
                        <h5 class="mt-2 mb-5">John Doe {{ $i }}</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                @endfor
            </div>
        </section>

        <button class="absolute top-1/2 -left-4 md:left-0 slide-left">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </button>
        <button class="absolute top-1/2 -right-4 md:right-0 slide-right">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</section>

@push('scripts_body')
    <script>
        const cardTestiContainer = document.querySelector('.card-testi-container')
        const btnSlideLeft = document.querySelector('.slide-left')
        const btnSlideRight = document.querySelector('.slide-right')

        btnSlideLeft.addEventListener('click', (e) => {
            let value = cardTestiContainer.scrollLeft
            value -= cardTestiContainer.offsetWidth

            if(cardTestiContainer.scrollLeft > 0){
                cardTestiContainer.scrollTo({top: 0, left: value, behavior: 'smooth'})
            }
        })

        btnSlideRight.addEventListener('click', (e) => {
            let value = cardTestiContainer.scrollLeft
            value += cardTestiContainer.offsetWidth

            if(cardTestiContainer.scrollLeft < (cardTestiContainer.scrollWidth - cardTestiContainer.offsetWidth)){
                cardTestiContainer.scrollTo({top: 0, left: value, behavior: 'smooth'})
            }
        })

        cardTestiContainer.addEventListener('scroll', (e) => {
            if(e.target.scrollLeft <= 0){
                btnSlideLeft.classList.add('text-gray-500')
            }else{
                btnSlideLeft.classList.remove('text-gray-500')
            }
            
            if(e.target.scrollLeft >= (cardTestiContainer.scrollWidth - cardTestiContainer.offsetWidth)){
                btnSlideRight.classList.add('text-gray-500')
            }else{
                btnSlideRight.classList.remove('text-gray-500')

            }
        })
    </script>
@endpush