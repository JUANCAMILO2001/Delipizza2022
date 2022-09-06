@extends('layouts.appRestabook')
@section('title', 'Registrarse')
@section('content')
    @include('layouts.components.login.wrapper')
    @include('layouts.components.register.cardregister')
    @include('layouts.components.index.reservation')
@endsection
