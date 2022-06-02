<footer class="footer mt-5 px-4 md:px-10">
    <section class="container text-white">
        <div class="grid md:grid-cols-2 lg:flex gap-10 lg:gap-5 py-10">
            <div>
                <h5 class="font-bold mb-5">QUICK LINK</h5>
                <ul class="grid grid-cols-2 md:grid-cols-3 gap-5">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Facility</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#" class="whitespace-nowrap">Human Resources</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="#" class="whitespace-nowrap">Genetic Program</a></li>
                    <li><a href="#">R&D</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-5">CONTACT INFO</h5>
                <div class="flex gap-2 mb-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <p class="w-60">No. 90 Lim Chu Kang Lane 6 F Singapore 718873</p>
                </div>
                <div class="flex gap-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    <p>sales@shrimpimprovement.com.sg</p>
                </div>
            </div>
            <div>
                <h5 class="font-bold mb-5">GET THE UPDATED NEWS</h5>
                <div class="grid gap-4 md:gap-0 md:flex">
                    <input type="text" placeholder="Your Email" class="p-2 outline-none text-black">
                    <button class="bg-black text-white p-2">Subscribe</button>
                </div>
            </div>
        </div>

        <div class="mb-10 lg:hidden flex justify-center md:justify-start items-center gap-4">
            <img src="{{ url('assets/svg/facebook.svg') }}" alt="logo facebook">
            <img src="{{ url('assets/svg/instagram.svg') }}" alt="logo instagram">
            <img src="{{ url('assets/svg/youtube.svg') }}" alt="logo youtube">
        </div>

        <hr class="border border-white">

        <div class="py-5 grid gap-5 md:flex justify-center md:justify-between items-center justify-items-center">
            <img src="{{ url('assets/images/logo-sis.png') }}" alt="Logo Sis">
            <p class="hidden md:block text-center md:text-left">2022 All rights reserved | Shrimp Improvement System</p>
            <span class="text-center md:hidden">
                <p>2022 All rights reserved</p>
                <p>Shrimp Improvement System</p>
            </span>
            <span class="hidden lg:flex items-center gap-4">
                <img src="{{ url('assets/svg/facebook.svg') }}" alt="logo facebook">
                <img src="{{ url('assets/svg/instagram.svg') }}" alt="logo instagram">
                <img src="{{ url('assets/svg/youtube.svg') }}" alt="logo youtube">
            </span>
        </div>
    </section>
</footer>