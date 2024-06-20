@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1">
    <div class="container">
        <div class="u-khayba-phone col-md-12">
            <p class="pt-5 pl-5 text-left">
                0779959058
            </p>
        </div>
    </div>
    <div class="container pt-5">
        <div class="u-khayba-email col-md-12">
            <p class="pt-5 pl-5 text-left" style="font-size: 14px;">
                <a href="mailto:info@beitkhairatsouf.com">
                    info@beitkhairatsouf.com
                </a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="container mt-5 mb-5" style="height: 500px;">
            <div class="u-khayba-location col-md-12">
                <p class="pt-5 pl-5 text-left" style="font-size: 14px;">
                    {{ __('contact.places') }}
                </p>
                <p class="location">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26975.36052414224!2d35.80119469034006!3d32.314001161530875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c80980546630b%3A0x891dd0ca76968f68!2sSouf%2C%20Jordan!5e0!3m2!1sen!2seg!4v1678739821800!5m2!1sen!2seg"
                        width="100%" height="395" style="border:0;border-radius: 10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="u-khayba-line col-md-12">
        </div>
    </div>
</section>
@endsection
