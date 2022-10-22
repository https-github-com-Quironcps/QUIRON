<?php


use Phinx\Seed\AbstractSeed;

class AdmProfessor extends AbstractSeed
{
    public function run() : void
    {
        $data = [
            [
                'TB_PROFESSOR_NOME' => 'ADM - Professor',
                'TB_PROFESSOR_CEP' => '77777777',
                'TB_PROFESSOR_ENDERECO' => 'Administrador',
                'TB_PROFESSOR_END_NUM' => '777',
                'TB_PROFESSOR_CIDADE' => 'Administrador',
                'TB_PROFESSOR_TELEFONE' => '77777777777',
                'TB_PROFESSOR_CPF' => '777.777.777-77',
                'TB_PROFESSOR_NASCIMENTO' => '2001-01-01',
                'TB_PROFESSOR_EMAIL' => 'adm@email.com', 
                'TB_PROFESSOR_SENHA' => 'adm77777'
            ]
        ];
            
        $users = $this->table('TB_PROFESSOR');
            
        $users->insert($data)
            -> saveData();
    }
}
