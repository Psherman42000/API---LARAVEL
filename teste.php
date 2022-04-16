<?php
/* echo 'Hello World!!!';
$nome = null ?? 'Nome não informado';

echo $nome; */

class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    static function getNewPerson($nome, $idade) {
        return new Pessoa($nome, $idade);
    }

    public function printAll() {
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Idade: ' . $this->idade . '<br>';
    }
}

$pessoa = Pessoa::getNewPerson('Pedro', 30);
$pessoa->printAll();