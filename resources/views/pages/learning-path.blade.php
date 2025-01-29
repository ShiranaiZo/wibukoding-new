@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-learning-path.section-learning-path :learningPathCategories="$learningPathCategories" />
@endsection
