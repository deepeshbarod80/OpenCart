@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')


@section('content')
    <div class="max-w-sm m-8">
        <div class="text-black text-5xl md:text-15xl font-black">
            <img src="{{asset('public/backEnd/img/503.png')}}" alt="" class="img img-fluid"></div>

        <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

        <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal text-white">

            {{__($exception->getMessage() ?: 'Service Unavailable')}}
        </p>

        <a href="{{url('/')}}">
            <button
                class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg text-white">
                Go Home
            </button>
        </a>
        <a href="{{ URL::previous() }}">
            <button
                class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg text-white">
                Go Back
            </button>
        </a>
    </div>
@endsection
