@extends('layouts.app')

@section('title', 'Halaman Dalam Tahap Pengembangan')

@section('content')
    <x-error.section-error
        :title="'Mohon maaf atas ketidaksiapan halaman ini :)'"
        :description="'Halaman ini masih dalam tahap pengembangan. Silahkan beralih ke halaman lain yang sudah siap.'"
        :image="storage_url('static/error-page/under-construction.svg')"
        :link="route('learning-path')"
        :linkLable="'Pergi ke Alur Belajar'"
    />
@endsection
