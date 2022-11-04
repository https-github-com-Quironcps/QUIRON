<?php


use Phinx\Seed\AbstractSeed;

class VagaFavorita extends AbstractSeed
{
    public function run() :void
    {
        $favorito = [
            [
                'TB_FAVORITO_CONDICAO' => true,
                'FK_VAGA' => '1',
                'FK_PROFESSOR' => '1'
            ]
        ];
            
        $users = $this->table('TB_FAVORITO');
            
        $users->insert($favorito)
            -> saveData();
    }
}
