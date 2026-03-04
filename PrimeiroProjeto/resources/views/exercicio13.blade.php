@extends('layout')


@section('conteudo')
    <h1>Exercício 13 - Conversão de metros em centímetros</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="metros" class="form-label">Digite o valor em metros</label>
            <input type="number" id="metros" name="metros" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($conversao)
        <p class="text-success">O valor em centímetros é: {{ $conversao }}</p>

    @endisset


@endsection
