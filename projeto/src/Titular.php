<?php
// Titular é uma pessoa.
class Titular extends Pessoa
{
    private string $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(); Endereco
    {
        return $this->endereco;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}

