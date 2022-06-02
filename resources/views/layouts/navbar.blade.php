<section class="border-b border-white py-5 px-4 md:px-10">
    <nav class="flex justify-between items-center container">
        <img src="{{ url('assets/images/logo-sis.png') }}" alt="Hero Image">

        <ul class="hidden navbar-link lg:flex items-center gap-6">
            <li class="{{ Route::is('home') ? 'active-navbar' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class=""><a href="#">About</a></li>
            <li class=""><a href="#">Genetic Program</a></li>
            <li class=""><a href="#">Facilities</a></li>
            <li class=""><a href="#">HR</a></li>
            <li class=""><a href="#">R&D</a></li>
            <li class=""><a href="#">News</a></li>
            <li class="{{ Route::is('contact') ? 'active-navbar' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
            <li class="">
                <a href="#" class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    English
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </li>
        </ul>

        <button class="lg:hidden btn-menu-mobile">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </nav>
</section>

<section class="navbar-mobile transform translate-x-full transition fixed top-0 left-1/3 bottom-0 right-0 z-10 grid content-center">
    <button class="btn-menu-hide absolute top-2 left-2">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>

    <ul class="grid items-center justify-center gap-10">
        <li class="{{ Route::is('home') ? 'active-navbar' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class=""><a href="#">About</a></li>
        <li class=""><a href="#">Genetic Program</a></li>
        <li class=""><a href="#">Facilities</a></li>
        <li class=""><a href="#">HR</a></li>
        <li class=""><a href="#">R&D</a></li>
        <li class=""><a href="#">News</a></li>
        <li class="{{ Route::is('contact') ? 'active-navbar' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
        <li class=""><a href="#">English</a></li>
    </ul>
</section>

@push('scripts_body')
    <script>
        const navbarMobile = document.querySelector('.navbar-mobile')
        const btnMobile = document.querySelector('.btn-menu-mobile')
        const btnMobileHide = document.querySelector('.btn-menu-hide')

        btnMobile.addEventListener('click', () => {
            navbarMobile.classList.add('show')
        })

        btnMobileHide.addEventListener('click', () => {
            navbarMobile.classList.remove('show')
        })
    </script>
@endpush