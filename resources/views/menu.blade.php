@extends('layouts.appRestabook')
@section('title', 'Menú')
@section('content')
    @include('layouts.components.menu.content_menu')
    @include('layouts.components.index.reservation')
@endsection
