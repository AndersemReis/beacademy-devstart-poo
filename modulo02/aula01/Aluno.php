<?php

declare (strict_types=1);

class Aluno{
    public $nome;
    public $cpf;
}

class Professor{
    public $nomeProf;
    public $graduacao;
    public $turma;

}

class Curso{
    public $curso;
    public $professor;
    public $tipo;
    public $cargaHoraria;
}

class Disciplina {
    public $nome;
    public $turma;
    public $professor;
}