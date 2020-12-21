@extends('layout.app')

@include('menu')

@section('content')
    <div class="content">
        @if (isset($info))
            @include('list')
        @elseif (isset($question))
            @include('specificSurvey')
        @else
            @include('surveyCreation')
        @endif
    </div>
@endsection