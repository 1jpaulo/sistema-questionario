<div class="body">
    <h2>Questionários</h2>
    @foreach ($info as $key => $value)
        <a href="{{url()->current() . '/' . $key}}" class="question selectable">
            <div class="title">Questionário {{$value["title"]}}</div>
            <div class="description">{{$value["description"]}}</div>
        </a>
    @endforeach
</div>