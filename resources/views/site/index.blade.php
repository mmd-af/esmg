@extends('site.layouts.index')

@section('style')

@endsection

@section('content')

    @include('site.sections.01-landing-slide')

    @include('site.sections.02-introducing-services')

    @include('site.sections.03-experience')

    @include('site.sections.04-projects')

    @include('site.sections.05-chart')
    @include('site.sections.05-counter')

    @include('site.sections.06-our-customers')

@endsection
