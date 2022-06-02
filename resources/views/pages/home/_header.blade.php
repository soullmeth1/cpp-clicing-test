<header class="header text-white flex flex-col">
    @include('layouts.navbar')

    <section class="text-center flex-1 flex flex-col justify-center overflow-x-hidden">
        <section class="flex header-slide">
            @for ($i = 0; $i < 5; $i++)
                <div class="min-w-full overflow-visible">
                    <p class="text-lg md:text-2xl lg:text-4xl">The World's Leading Provider of</p>
                    <h2 class="font-bold text-2xl md:text-4xl lg:text-6xl">SHRIMP BROODSTOCK #{{ $i }}</h2>
                </div>
            @endfor
        </section>

        <span class="mt-12 slide-indicator flex justify-center gap-2">
        </span>
    </section>
</header>

@push('scripts_body')
    <script>
        const headerContainer = document.querySelector('.header-slide')
        const divCount = headerContainer.childElementCount
        const slideIndicator = document.querySelector('.slide-indicator')
        let count = 1

        for(let i = 0; i < divCount; i++){
            slideIndicator.innerHTML += `<i class="w-3 h-3 border border-white rounded-full inline-block ${i === 0 ? 'bg-white' : ''}"></i>`
        }

        setInterval(() => {
            Array.from(slideIndicator.children).forEach(el => {
                el.classList.remove('bg-white')
            })

            if (count === divCount) {
                count = 0
                slideIndicator.children[count].classList.add('bg-white')
                headerContainer.style.transform = `translateX(-${count++ * 100}%)`
            } else {
                slideIndicator.children[count].classList.add('bg-white')
                headerContainer.style.transform = `translateX(-${count++ * 100}%)`
            }


        }, 5000);
    </script>
@endpush