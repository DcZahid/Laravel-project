@extends('layout')

@section('title')
Coran || Your Business Adviser
@endsection

@section('content')
@include('include.sliderSection')
<!--End Main Slider-->


<!--Start About One -->
@include('include.aboutSection')
<!--End About One -->


<!--Start Brand One-->
@include('include.brandSection')
<!--End Brand One -->

<!--Start Services One -->
@include('include.serviceSection')
<!--End Services One -->

<!--Start Counter One -->
@include('include.counterSection')
<!--End Counter One -->

<!--Start Feature One -->
@include('include.featureSection')
<!--End Feature One -->


<!--Start Price One -->
@include('include.planSection')
<!--End Price One -->


<!--Start Company Strategy One -->
@include('include.strategySection')
<!--End Company Strategy One -->


<!--Start Testimonial One -->
@include('include.testimonial')
<!--End Testimonial One -->


<!--Start Team One -->
@include('include.teamSection')
<!--End Team One -->

<!--Start Contact One -->
@include('include.formSection')
<!--End Contact One -->


<!--Start Blog One -->
@include('include.blogSection')
<!--End Blog One -->

<!--Start Subscribe One -->
@include('include.subscribe')
@endsection


