@extends('layout')


@section('conteudo')
    <h1>Exercício 14 - Conversão de Km para milhas</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="km" class="form-label">Insira o valor em km</label>
            <input type="number" id="km" name="km" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($conversao)
        <p class="text-success">O valor em milhas é: {{ $conversao }}</p>

    @endisset


@endsection
