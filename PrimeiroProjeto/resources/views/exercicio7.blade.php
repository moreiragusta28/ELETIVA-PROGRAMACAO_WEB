@extends('layout')


@section('conteudo')
    <h1>Exercício 7 - Conversão Fahrenheit para Celsius</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="fahrenheit" class="form-label">Insira a temperatura em Fahrenheit</label>
            <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($conversao)
        <p class="text-success">O valor em Celsius é: {{$conversao}}</p>

    @endisset


@endsection
