@extends('site.layouts.index')
@section('content')
    @include('site.sections.01-landing-slide')
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.02-introducing-services')
    </section>
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.03-experience')
    </section>
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.04-projects')
    </section>
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.05-chart')
    </section>
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.05-counter')
    </section>
    <section class="wow fadeInUp" data-wow-duration="2s">
        @include('site.sections.06-our-customers')
    </section>
@endsection
