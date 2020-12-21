@extends('layout.app')

@section('menu')
<div class="menu">
    <div class="logo">Q&A</div>
    <div class="menu-box">
        <div class="menu-item {{isset($answer) ? 'bold' : '' }}">Responder</div>
        <div class="menu-item {{isset($answer) ? '' : 'bold' }}">Criar</div>
    </div>
</div>
@endsection