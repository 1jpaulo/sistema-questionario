@extends('layout.app')

@section('menu')
<div class="menu">
    <div class="logo">LOGO</div>
    <div class="menu-box">
        <div class="menu-item">Criar</div>
        <div class="menu-item">Responder</div>
    </div>
</div>
@endsection

@section('content')
    <!-- 
        Yields in two separe blade files for reusability
        where list blade will list every question both 
        attended and unattended.
        And body will be the section where questions are 
        made and answered.
     -->
    <div class="content">
        @include('list')
        @include('body')
    </div>
@endsection