@extends('layouts.master')
@section('content')
    <section class="u-clearfix u-section-1 container">
        <h1 class="text-center u-custom-font">{{ __('about_.store_name') }}</h1>
        <div class="row">

            <p class="text-center text-break fst-italic lh-1 u-custom-font">
                {{ __('about_.section_1') }}
                <br>

                {{ __('about_.section_2') }}
                <br><br>
                {{ __('about_.section_3') }}
                <br>
                {{ __('about_.section_4') }}
            </p>
        </div>
    </section>
@endsection
