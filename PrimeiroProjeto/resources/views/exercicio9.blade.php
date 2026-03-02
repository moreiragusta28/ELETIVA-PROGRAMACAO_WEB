@extends('layout')


@section('conteudo')
    <h1>Exercício 9 - Calcular área de um círculo</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="raio" class="form-label">Insira o valor do raio</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($area)
        <p class="text-success">O valor da área do círculo é: {{$area}}</p>

    @endisset


@endsection
