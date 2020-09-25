@extends('layouts.default')

@section('title', __('About'))
@section('description',__('Control your applications with Laravel Control') . '. ' . __('Manage, deploy and monitor all your Laravel-based applications in real time using our product.'))

@section('content')
    <img class="white-background-shape" src="images/backgroundWhiteShape.svg" alt="White background shape on laravel control page">

    <div class="container about-content">
        <div class="row">
            <div class="col m12 l6">
                <h1 style="font-size: 38px">{{__('Control your applications with Laravel Control.')}}</h1>
                <p style="font-size: 20px; font-weight: lighter">{{__('Manage, deploy and monitor all your Laravel-based applications in real time using our product.')}}</p>
                <div>
                    <a class="waves-effect waves-light red lighten-1 btn" href="#soon">{{__('Use Free')}}</a>
                    <a class="waves-effect waves-light waves-red btn-flat" href="#about">{{__('Learn more')}} ></a>
                </div>
            </div>
        </div>
    </div>
@endsection