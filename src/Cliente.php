<?php
class Cliente {
    private string $nome;
    private string $email;
    private string $senha;
    
    /* Métodos getters e setters */
    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
}