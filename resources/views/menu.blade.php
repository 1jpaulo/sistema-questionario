@section('menu')
<div class="menu">
    <div class="logo">Q&A</div>
    <div class="menu-box">
        <a class="menu-item {{isset($answer) ? 'bold' : '' }}" href="{{route('questionarios')}}">Responder</a>
        <a class="menu-item {{isset($answer) ? '' : 'bold' }}" href="{{route('criacao')}}">Criar</a>
    </div>
</div>
@endsection