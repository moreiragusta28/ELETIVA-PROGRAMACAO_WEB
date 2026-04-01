@extends('layout')


@section('conteudo')
    <h1>Exercício 20 - Cálculo da velocidade média</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
              <label for="distancia" class="form-label">Distancia</label>
              <input type="number" id="distancia" name="distancia" class="form-control" required="" wfd-id="id22">
        </div>
        <div class="mb-3">
              <label for="tempo" class="form-label">Tempo</label>
              <input type="number" id="tempo" name="tempo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($resultado)
        <p class="text-success">O resultado é: {{ $resultado }}</p>

    @endisset



@endsection
