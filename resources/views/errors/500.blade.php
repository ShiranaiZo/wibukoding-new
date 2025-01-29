@extends('layouts.app')

@section('title', 'Server Error')

@section('content')
    <x-error.section-error
        :title="'Mohon maaf atas ketidaknyamanannya :('"
        :description="'Sepertinya terjadi masalah pada server. Silakan coba lagi nanti.'"
        :image="storage_url('static/error-page/server-error.svg')"
    />
@endsection
