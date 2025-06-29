@extends('home.layouts.app')

@section('content')
    @include('home.sections.hero')
    @include('home.sections.scrolling-top')
    @include('home.sections.about')
    @include('home.sections.services')
    @include('home.sections.designers')
    @include('home.sections.studios')
    @include('home.sections.why-choose-us')
    @include('home.sections.employee-exp')
    @include('home.sections.benefits')
    @include('home.sections.how-it-works')
    @include('home.sections.testimonials')
    @include('home.sections.faqs')
    @include('home.sections.blog')
    {{-- @include('home.sections.contact') --}}
    @include('home.sections.scrolling-bottom')
@endsection