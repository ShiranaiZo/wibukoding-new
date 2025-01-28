<section>
    <div class="flex flex-col items-center justify-center my-12 md:gap-8 gap-4">
        <img src="{{ $image }}" alt="{{ $title }}" class="h-56 md:h-60" />

        <div class="flex flex-col items-center justify-center md:gap-4 gap-2 text-center">
            <h1 class="md:text-4xl text-lg font-semibold text-primary-900">{{ $title }}</h1>
            <h4 class="text-gray-600 md:text-2xl text-sm">{{ $description }}</h4>
        </div>

        <a href="{{ @$link ?? route('home') }}" class="btn btn__primary">
            {{ @$linkLable ?? 'Kembali ke Halaman Utama' }}
        </a>
    </div>
</section>

