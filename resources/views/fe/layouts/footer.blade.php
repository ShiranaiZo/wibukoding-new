

<footer class=" mt-auto w-full border-t border-gray-200">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6">
        {{-- <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 md:w-1/2 w-full">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ storage_url('static/logo.png') }}" class="h-12" alt="Wibukoding Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Wibukoding</span>
                </a>

                <p class="text-lg mt-4 text-gray-800">
                    Berkomitmen untuk pendidikan dan pelatihan pertanian berkelanjutan yang dipimpin oleh para ahli, memberdayakan petani dengan teknik canggih dan praktik pertanian modern di Indonesia. #AyoBelajarBertani
                </p>
            </div>

            <div class="grid md:grid-cols-3 md:gap-8 gap-6 grid-cols-2">
                <div>
                    <h2 class="mb-4 text-sm font-bold uppercase text-primary-900">Resources</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:text-black">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:text-black">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 text-sm font-bold uppercase text-primary-900">Follow us</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:text-black ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:text-black">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 text-sm font-bold uppercase text-primary-900">Legal</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:text-black">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-black">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

        {{-- <hr class="my-4 border-gray-200 mx-auto md:my-8" /> --}}

        <div class="flex flex-col md:flex-row items-center justify-between">
            <span class="text-sm text-gray-500 text-center">© {{ date('Y') }} <a href="{{ route('home') }}" class="hover:text-black">Wibukoding</a>. All Rights Reserved.
            </span>

            <div class="flex mt-4 justify-center">
                <a href="{{ url('https://www.instagram.com/wibukoding') }}" class="text-gray-500 hover:text-black" target="_blank">
                    <i class="fa-brands fa-square-instagram"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="{{ url('https://www.tiktok.com/@wibukoding') }}" class="text-gray-500 hover:text-black ms-5" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                    <span class="sr-only">Tiktok</span>
                </a>
                <a href="{{ url('https://www.youtube.com/@wibukoding') }}" class="text-gray-500 hover:text-black ms-5" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                    <span class="sr-only">Youtube</span>
                </a>
                <a href="{{ url('https://github.com/ShiranaiZo') }}" class="text-gray-500 hover:text-black ms-5" target="_blank">
                    <i class="fa-brands fa-github"></i>
                    <span class="sr-only">GitHub</span>
                </a>
                <a href="{{ url('https://www.linkedin.com/in/faishal-bariq-maulana') }}" class="text-gray-500 hover:text-black ms-5" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                    <span class="sr-only">LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
</footer>
