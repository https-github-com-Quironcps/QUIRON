<?php


use Phinx\Seed\AbstractSeed;

class AdmEscola extends AbstractSeed
{
    public function run() : void
    {
        $escola = [
            [
                'TB_INSTITUICAO_NOME' => 'ADM - Escola',
                'TB_INSTITUICAO_CEP' => '77777777',
                'TB_INSTITUICAO_ENDERECO' => 'Administrador',
                'TB_INSTITUICAO_END_NUM' => '777',
                'TB_INSTITUICAO_CIDADE' => 'Administrador',
                'TB_INSTITUICAO_TELEFONE' => '77777777777',
                'TB_INSTITUICAO_COD' => '777',
                'TB_INSTITUICAO_EMAIL' => 'adm@email.com', 
                'TB_INSTITUICAO_SENHA' => 'adm77777'
            ]
        ];
            
        $users = $this->table('TB_INSTITUICAO');
            
        $users->insert($escola)
            -> saveData();
    }
}
