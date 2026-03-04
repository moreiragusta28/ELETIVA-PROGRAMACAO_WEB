@extends('layout')


@section('conteudo')
    <h1>Exercício 11 - Perímetro de um círculo</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="raio" class="form-label">Insera o valor do raio</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetro)
        <p class="text-success">O valor do perímetro do círculo é: {{ $perimetro }}</p>

    @endisset


@endsection
