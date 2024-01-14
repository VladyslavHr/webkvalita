@extends('layouts.app')

@section('content')
<div class="container">
    <div class="language-switcher">
        <a href="{{ str_replace('/' . app()->getLocale(), '/en', url()->current()) }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">English</a> |
        <a href="{{ str_replace('/' . app()->getLocale(), '/sk', url()->current()) }}" class="{{ app()->getLocale() == 'sk' ? 'active' : '' }}">SK</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="">
                    {{__('header.welcome')}}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
