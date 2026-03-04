<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use function PHPUnit\Framework\returnSelf;

class ExercicioController extends Controller {

    public function exibirFormulario(){
        return view('exercicio');
    }
    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio', ['soma' => $soma]);
    }

    public function exibirFormulario2(){
        return view('exercicio2');
    }
    public function calcularSub(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2', ['sub' => $sub]);
    }

    public function exibirFormulario3(){
        return view('exercicio3');
    }
    public function calcularMult(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $mult = $valor1 * $valor2;
        return view('exercicio3', ['mult' => $mult]);
    }

    public function exibirFormulario4(){
        return view('exercicio4');
    }
    public function calcularDiv(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        if ($valor2 == 0){
            return view('exercicio4', ['ndiv' => 0]);
        }
        else{
            $div = $valor1 / $valor2;
            return view('exercicio4', ['div' => $div]);
        }
    }


    public function exibirFormulario5(){
        return view('exercicio5');
    }
    public function calcularMedia(Request $request){
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return view('exercicio5', ['media' => $media]);
    }


    public function exibirFormulario6(){
        return view('exercicio6');
    }
    public function conversaoC2F(Request $request){
        $celsius = $request->input('celsius');
        $conversao = ($celsius * 1.8) + 32;
        return view('exercicio6', ['conversao' => $conversao]);
    }


    public function exibirFormulario7(){
        return view('exercicio7');
    }
    public function conversaoF2C(Request $request){
        $fahrenheit = $request->input('fahrenheit');
        $conversao = ($fahrenheit - 32) * 5 / 9;
        return view('exercicio7', ['conversao' => $conversao]);
    }


    public function exibirFormulario8(){
        return view('exercicio8');
    }
    public function calcularArea(Request $request){
        $largura = $request->input('largura');
        $altura = $request->input('altura');
        $area = $largura * $altura;
        return view('exercicio8', ['area' => $altura]);
    }


    public function exibirFormulario9(){
        return view('exercicio9');
    }
    public function calcularAreaCirculo(Request $request){
        $raio = $request->input('raio');
        $area = ($raio ** 2) * 3.14;
        return view('exercicio9', ['area' => $area]);
    }


    public function exibirFormulario10(){
        return view('exercicio10');
    }
    public function cacularPerimetroRet(Request $request){
        $largura = $request->input('largura');
        $altura = $request->input('altura');
        $perimetro = ($largura * 2) + ($altura * 2);
        return view('exercicio10', ['perimetro' => $perimetro]);
    }


    public function exibirFormulario11(){
        return view('exercicio11');
    }
    public function calcularPerimetroCirc(Request $request){
        $raio = $request->input('raio');
        $perimetro = 2 * 3.14 * $raio;
        return view('exercicio11', ['perimetro' => $perimetro]);
    }


    public function exibirFormulario12(){
        return view('exercicio12');
    }
    public function calcularPotencia(Request $request){
        $base = $request->input('base');
        $expoente = $request->input('expoente');
        $resultado = $base ** $expoente;
        return view('exercicio12', ['resultado' => $resultado]);
    }


    public function exibirFormulario13(){
        return view('exercicio13');
    }
    public function calcularCentimetros(Request $request){
        $metros = $request->input('metros');
        $conversao = $metros * 100;
        return view('exercicio13', ['conversao' => $conversao]);
    }


    public function exibirFormulario14(){
        return view('exercicio14');
    }
    public function calcularMilhas(Request $request){
        $km = $request->input('km');
        $conversao = $km * 0.621371;
        return view('exercicio14', ['conversao' => $conversao]);
    }


    public function exibirFormulario15(){
        return view('exercicio15');
    }
    public function calcularIMC(Request $request){
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $imc = ($peso / ($altura ** 2));
        return view('exercicio15', ['imc' => $imc]);
    }


    public function exibirFormulario16(){
        return view('exercicio16');
    }
    public function calcularDesconto(Request $request){
        $valorTotal = $request->input('valorTotal');
        $desconto = $request->input('desconto');
        $novoValor = $valorTotal - ($valorTotal * $desconto);
        return view('exercicio16', ['novoValor' => $novoValor]);
    }


    public function exirbirFormulario17(){
        return view('exercicio17');
    }
    public function calcularJurosSimples(Request $request){
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');
        $resultado = $capital * $taxa * $periodo;
        return view('exercicio17', ['resultado' => $resultado]);
    }






}

