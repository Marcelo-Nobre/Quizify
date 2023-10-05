<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/quiz.css')}}">

    <title>Quiz</title>
</head>
<body>
<div class="container">
    <h1>Quiz</h1>
    <form action="">
        @csrf
        <div class="name-quiz">
            <label for="name-quiz">Nome do Quiz</label>
            <input type="text" name="" id="name-quiz" placeholder="Digite o nome do Quiz">
        </div>
        <div class="description-quiz">
            <label for="description-quiz">Descrição</label>
            <input type="text" name="" id="description-quiz" placeholder="Digite a descrição do Quiz">
        </div>
        <div class="name-participant">
            <label for="name-participant">Descrição do Quiz</label>
            <input type="text" name="" id="name-participant" placeholder="Digite o nome do Participante">
        </div>

        <div class="horizontal-line"></div>

        <h1>Pergunta</h1>
{{--        <hr>--}}


        <div class="question">
            <label for="question">Pergunta</label>
            <input type="text" name="" id="question" placeholder="Digite o nome da Pergunta">
        </div>
        <div class="description-question">
            <label for="description-question">Descrição da Pergunta</label>
            <input type="text" name="" id="description-question" placeholder="Digite a descrição da Pergunta">
        </div>
        <div class="form-check form-switch optional">
            <label for="optional">Essa pergunta é opicional?</label>
{{--            <input type="checkbox" name="" id="optional">--}}
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault optional">
        </div>
        <div>
            <button type="submit" class="btn">Cadastrar</button>
        </div>
    </form>
</div>

</body>
</html>
