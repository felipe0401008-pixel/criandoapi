<?php

 class Pessoa{

 private string $nome;
 private int $idade;
 private int $cpf;

public function __construct(string $nome, int $idade, int $cpf)
    {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->cpf = $cpf;
    }
 }
 $pessoa01 = new Pessoa('Felipe', 18, 11056344261);

class Produto{
private string $nome;
private float $preco;
private int $quantidade;
private string $categoria;

public function __construct(
    string $nome,
    int $preco,
    int $quantidade,
    string $categoria)
 {
    $this-> nome = $nome;
    $this-> preco - $preco;
    $this-> quantidade - $quantidade;
    $this-> categoria - $categoria;
 }
public function pegarNome() {
    return $this->nome;
}
public function pegarPreco() {
    return $this->preco;
}
public function pegarQuantidade() {
    return $this->quantidade;
}
public function pegarCategoria() {
    return $this->categoria;
}

}







?>