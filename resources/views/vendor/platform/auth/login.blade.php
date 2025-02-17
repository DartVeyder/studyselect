@extends('platform::auth')
@section('title',__('Sign in to your account'))

@section('content')
    <h1 class="h4 text-body-emphasis mb-4">{{__('Sign in to your account')}}</h1>

    <a href="/auth/google/redirect"><img src=" {{asset('/images/login_google.svg')}}" alt=""></a>
@endsection
