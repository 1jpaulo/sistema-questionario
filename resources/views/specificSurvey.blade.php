<div class="body">
    
    <h2>Questionário {{$question['title']}}</h2>

    @foreach ($question["questions"] as $key => $value)
        <div class="question">
            <div class="title">Questão {{$key}}</div>
            <div class="description">{{$value["question"]}}</div>
            <div class="answer">{{$value["answer"]}}</div>
        </div>
    @endforeach
</div>