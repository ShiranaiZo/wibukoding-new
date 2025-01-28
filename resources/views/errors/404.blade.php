@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <x-error.section-error
        :title="'Uuupps... Sepertinya kamu tersesat :('"
        :description="'Halaman yang kamu cari tidak ditemukan atau mungkin telah dipindahkan.'"
        :image="storage_url('static/error-page/not-found.svg')"
    />
@endsection
