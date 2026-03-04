@extends('layout')


@section('conteudo')
    <h1>Exercício 10 - Perímetro de um retângulo/h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="largura" class="form-label">Lagura</label>
            <input type="number" id="largura" name="largura" class="form-control" required="" wfd-id="id22">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetro)
        <p class="text-success">O perímetro do retângulo é: {{ $perimetro }}</p>

    @endisset




@endsection
