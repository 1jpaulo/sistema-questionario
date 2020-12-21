<script>
    function createQuestion()
    {
        var questionDiv = document.createElement('DIV');
        questionDiv.classList.add("question");
        
        var titleDiv = document.createElement("DIV");
        titleDiv.classList.add("title");
        // query all divs with a class title so it can calculate
        // the next number question
        var number = document.getElementsByClassName("title").length + 1;
        titleDiv.appendChild(document.createTextNode(`Questão ${number++}`))
        
        var inputDesc = document.createElement("INPUT");
        inputDesc.type = "text";
        inputDesc.classList.add("description");
        
        var inputAnswer = document.createElement("INPUT");
        inputAnswer.type = "text";
        inputAnswer.classList.add("answer");

        questionDiv.appendChild(titleDiv);
        questionDiv.appendChild(document.createTextNode("Pergunta"));
        questionDiv.appendChild(inputDesc);
        questionDiv.appendChild(document.createTextNode("Resposta"));
        questionDiv.appendChild(inputAnswer);

        return questionDiv;
    }

    function insertQuestion()
    {
        var question = createQuestion();
        var body = document.getElementsByClassName("body")[0];
        body.insertBefore(question, document.getElementsByName("Adiciona")[0]);
    }
</script>
<div class="body">
    <!-- TODO some json value for title, description and answer -->
    <h2>Criação de Questionário</h2>
    <div class="question">
        <div class="title">Questão 1</div>
        Pergunta
        <input class="description" type="text">
        Resposta
        <input class="answer" type="text">
    </div>
    <input type="button" name="Adiciona" value="Adicionar questão" onclick="insertQuestion()">
    <input type="button" name="Registra" value="Registrar questionário" onclick="void(0)">
</div>