<nav class=" sticky w-full top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 bg-primary-50">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ storage_url('static/logo.png') }}" class="h-12" alt="Wibukoding Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Wibukoding</span>
        </a>

        <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-primary-100" aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <div class="hidden w-full md:flex md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col md:items-center order-1 font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-primary-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-primary-50 navbar-menu">
                @include('layouts.item-menu')
            </ul>

            <div class="gap-4 flex flex-row items-center justify-center order-2 md:ms-8 mt-4 md:mt-0">
                <button type="button" class="btn btn__primary--outlined">Daftar</button>
                <button type="button" class="btn btn__primary">Masuk</button>
            </div>
        </div>
    </div>
</nav>
