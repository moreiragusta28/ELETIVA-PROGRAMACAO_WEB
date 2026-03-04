@extends('layout')


@section('conteudo')
    <h1>Exercício 16 - Calcular novo valor com desconto</h1>
    <form method="post">
        @CSRF
        <div class="mb-3">
            <label for="valorTotal" class="form-label">Insira o valor inicial (R$)</label>
            <input type="number" id="valorTotal" name="valorTotal" class="form-control" required="" wfd-id="id22">
        </div>
        <div class="mb-3">
            <label for="desconto" class="form-label">Insira a % de desconto</label>
            <input type="number" id="desconto" name="desconto" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($novoValor)
        <p class="text-success">O novo valor é: R$ {{ $novoValor }}</p>

    @endisset

@endsection
