<?php

declare (strict_types=1);


class Cliente extends Usuario{
    
    private string $dataCadastro;

    public function getCadastro(): string 
    {
        return $this->$cadastro;
    }
    public function setCadastro(string $cadastro): void 
    {
        $this->cadastro = $cadastro;
    }
}