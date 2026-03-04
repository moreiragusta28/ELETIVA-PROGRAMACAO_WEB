@extends('layout')


@section('conteudo')
    <h1>Exercício 12 - Calculo de potência</h1>
    <form method="post">
        <div class="mb-3">
            <label for="base" class="form-label">Insira o valor da base</label>
            <input type="number" id="base" name="base" class="form-control" required="" wfd-id="id22">
        </div>
        <div class="mb-3">
            <label for="expoente" class="form-label">Insira o valor do expoente</label>
            <input type="number" id="expoente" name="expoente" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($resultado)
        <p class="text-success">O valor da potencia é: {{ $resultado }}</p>

    @endisset


@endsection
