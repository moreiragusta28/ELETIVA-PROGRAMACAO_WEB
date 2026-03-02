@extends('layout')


@section('conteudo')
    <h1>Exercício 6 - Conversão Celsius para Fahrenheit</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="celsius" class="form-label">Insira a temperatura em Celsius</label>
            <input type="number" id="celsius" name="celsius" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($conversao)
        <p class="text-success">O valor em Fahrenheit é: {{$conversao}}</p>

    @endisset


@endsection
