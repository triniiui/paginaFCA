@extends('layouts.app')

@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush
    @yield('vistas-content')
@endsection