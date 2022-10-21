<?php


use Phinx\Seed\AbstractSeed;

class CreateEscola extends AbstractSeed
{
    public function run() : void
    {
        $escola = [
            [
                'TB_INSTITUICAO_NOME' => 'ETEC Ermelinda',
                'TB_INSTITUICAO_CEP' => '06503112',
                'TB_INSTITUICAO_ENDERECO' => 'Rua Luiz Antônio Maranhão',
                'TB_INSTITUICAO_END_NUM' => '225',
                'TB_INSTITUICAO_CIDADE' => 'Santana de Parnaíba',
                'TB_INSTITUICAO_TELEFONE' => '11975823742',
                'TB_INSTITUICAO_COD' => '187',
                'TB_INSTITUICAO_EMAIL' => 'ermelinda@etec.sp.gov.br', 
                'TB_INSTITUICAO_SENHA' => 'ermelinda2022'
            ]
        ];
            
        $users = $this->table('TB_INSTITUICAO');
            
        $users->insert($escola)
            -> saveData();
    }
}
