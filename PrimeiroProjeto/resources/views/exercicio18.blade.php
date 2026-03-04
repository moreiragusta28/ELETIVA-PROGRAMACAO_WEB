@extends('layout')


@section('conteudo')
    <h1>Exercício 18 - Cálculo de juros compostos</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="capital" class="form-label">Capital</label>
            <input type="number" id="capital" name="capital" class="form-control" required="" wfd-id="id37">
        </div>
        <div class="mb-3">
            <label for="taxa" class="form-label">Taxa de juros (%)</label>
            <input type="number" id="taxa" name="taxa" class="form-control" required="" wfd-id="id38">
        </div>
        <div class="mb-3">
            <label for="periodo" class="form-label">Período (meses)</label>
            <input type="number" id="periodo" name="periodo" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($resultado)
        <p class="text-success">O resultado é: R$ {{ $resultado }}</p>

    @endisset



@endsection
