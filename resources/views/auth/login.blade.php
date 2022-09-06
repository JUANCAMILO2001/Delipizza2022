@extends('layouts.appRestabook')
@section('title', 'Iniciar Sesión')
@section('content')
    @include('layouts.components.login.wrapper')
    @include('layouts.components.login.cardlogin')
    @include('layouts.components.index.reservation')
@endsection
