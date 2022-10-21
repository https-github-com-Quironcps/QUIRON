<?php

use Phinx\Seed\AbstractSeed;

class CreateProfessor extends AbstractSeed
{
    public function run() : void
    {
        $data = [
            [
                'TB_PROFESSOR_NOME' => 'Matheus Gomes',
                'TB_PROFESSOR_CEP' => '06503112',
                'TB_PROFESSOR_ENDERECO' => 'Rua Alberto Frediane',
                'TB_PROFESSOR_END_NUM' => '235',
                'TB_PROFESSOR_CIDADE' => 'Osasco',
                'TB_PROFESSOR_TELEFONE' => '119823742',
                'TB_PROFESSOR_CPF' => '456.789.123-45',
                'TB_PROFESSOR_NASCIMENTO' => '2003-10-16',
                'TB_PROFESSOR_EMAIL' => 'matheus.gomes@gmail.com', 
                'TB_PROFESSOR_SENHA' => 'Matheus2003'
            ]
        ];
            
        $users = $this->table('TB_PROFESSOR');
            
        $users->insert($data)
            -> saveData();
    }
}
  
// 'TB_PROFESSOR_SENHA' => password_hash('Matheus2003', PASSWORD_ARGON2I)