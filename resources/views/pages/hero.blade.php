@extends('layouts.app')

@section('content')
@include('partials.header')
@include('partials.kenapakami')
@include('partials.stats')
@include('partials.testimonials')
@include('partials.galery')
@endsection

@push('scripts')
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>
@endpush