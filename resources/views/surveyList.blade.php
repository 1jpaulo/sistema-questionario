@extends('layout.app')

@include('menu')

@section('content')
    <div class="content">
        @if (isset($info))
            @include('list')
        @else
            @include('specificSurvey')
        @endif
    </div>
@endsection