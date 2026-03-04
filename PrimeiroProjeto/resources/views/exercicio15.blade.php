@extends('layout')


@section('conteudo')
    <h1>Exercício 15 - Calcular o IMC</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="peso" class="form-label">Insira o peso (em kg)</label>
            <input type="number" id="peso" name="peso" class="form-control" required="" wfd-id="id22">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Insira a altura (em metros)</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($imc)
        <p class="text-success">O valor do IMC é: {{ $imc }}</p>

    @endisset


@endsection
