@extends('layout')


@section('conteudo')
    <h1>Exercício 19 - Conversão de dias para horas, minutos e segundos</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="dias" class="form-label">Dias</label>
            <input type="number" id="dias" name="dias" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($resultado)
        <p>Dias: {{ $resultado['dias'] }}</p>
        <p>Horas: {{ $resultado['horas'] }}</p>
        <p>Minutos: {{ $resultado['minutos'] }}</p>
        <p>Segundos: {{ $resultado['segundos'] }}</p>
    @endisset



@endsection
