<?php

declare(strict_types = 1);

use Phinx\Seed\AbstractSeed;

class CadastraProfessor extends AbstractSeed
{
    public function cadastra_professor()
    {
        $this->execute("INSERT INTO TB_PROFESSOR(
            TB_PROFESSOR_NOME,
            TB_PROFESSOR_CEP,
            TB_PROFESSOR_ENDERECO, 
            TB_PROFESSOR_END_NUM, 
            TB_PROFESSOR_BAIRRO, 
            TB_PROFESSOR_TELEFONE,
            TB_PROFESSOR_CPF,
            TB_PROFESSOR_NASCIMENTO,
            TB_PROFESSOR_EMAIL,
            TB_PROFESSOR_SENHA) 
            VALUES ('Matheus Gomes', 
            '06503112', 
            'Rua Alberto Frediane', 
            '235', 
            'Centro', 
            '11982374532', 
            '456.789.123-45', 
            '2003-10-16', 
            'matheus.gomes@gmail.com', 
            'Matheus2003')");
    }
}
