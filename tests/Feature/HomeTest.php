<?php

use function Pest\Laravel\withoutMiddleware;

it("has a simple test for study", function () {

     $arr = [1, 2, 3, 4];
     $arr2 = [];
     $str = 'OLA,BEM VINDO';
     /** @var TestCase $this */
     // Retorna true ou false determinando a quantidade que deve ser retornada
     // $this->assertCount(4, $arr);

     // Compara segundo a necessidade a variável
     // $this->assertEquals([1, 2, 3, 4], $arr);

     // Verifica se algo está vazio
     // $this->assertEmpty($arr2);

     // Verifica se uma string existe determinado caractere 
     $this->assertStringContainsString('BEM', $str);
});


it('Work for expectation', function () {
     $id = 2;
     $name = 'Math';
     $arr5 = [1, 2, 3];
     $v = '';
     $passed = true;
     // Método que verifica o retorno de váriaveis em que se espera receber uma determianda informação
     // expect($id)->toBe(2)->and($name)->toBe('Math');

     //Verifica se o que estiver passando possue valores do tipo string
     // expect($arr5)->toBeInt();

     // percorre um array e valida suas condições
     // expect($arr5)->each->not->toBeString();
     // expect($arr5)->each(
     //      function ($number) {
     //           return $number->toBeLessThan(4);
     //      }
     // );

     // verifica cada elemento do array uma condição
     // expect($arr5)->sequence(fn ($number) => $number->toBe(1), fn ($number) => $number->toBe(2),fn ($number) => $number->toBe(3));

     // verifica se uma varíavel, array ou collection está vazia
     // expect($v)->tobeEmpty();


     // verifica se algo é falso ou verdadeiro
     // expect($passed)->toBeTrue();
     // expect(false)->tobeFalse();

     //verifica se algo e maio que 
     // expect($id)->toBeGreaterThan(1);
     // expect($id)->toBeGreaterThanOrEqual(2);

     // expect($id)->toBeLessThan(4);
     // expect($id)->toBeLessThanOrEqual(2);

     //verifica se um conteúdo está como deverioa
     // $content = 'Math is good';
     // expect($content)->toContain('is good');

     // verifica se uim array ou uma collection tem um determianda quantidade
     // $arr6 = [1, 2, 4, 5];
     // expect($arr6)->toHaveCount(4);


     // verifica se dtermiando valor se encontra na classe
     // $user = new stdClass();
     // $user->name = 'Math';

     // expect($user)->toHaveProperty('name','Math');


     // verifica se dois arrays são semelhantes
     // $compare = [
     //      'id'=>1,
     //      'name'=>'Math',
     //      'matricula'=>202132
     // ];

     // $value = [
     //      'name'=>'Math',
     //      'matricula'=>202132
     // ];

     // expect($compare)->toMatchArray($value);


     //verifica igualdade em uma variavel
     // $title = 'Hello Math';
     // expect($title)->toEqual('Hello Math');


     // verifica chaves em um array
     // $res = [
     //      'success' => true,
     //      'message' => 'hey'
     // ];

     // expect($res)->toHaveKeys(['success', 'message']);

     expect(20)->toBeWithRange(10, 30);
});

// e possível criar seus próprios testes
expect()->extend('toBeWithRange', function ($min, $max) {
     return $this->toBeGreaterThanOrEqual($min)->toBeLessThanOrEqual($max);
});

beforeEach()->withoutMiddleware();
it('verify if has home page', function () {

     return $this->get('/')->assertSee('Documentation');
});
