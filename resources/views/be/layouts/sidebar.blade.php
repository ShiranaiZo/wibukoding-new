<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen pt-32 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full ps-8 pe-4 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <x-be::logo.logo class="pb-4 mb-4 flex md:hidden border-b-2 border-gray-100" />

        <ul class="space-y-2 font-medium">
            @include('be.layouts.item-menu')
        </ul>
    </div>
</aside>
