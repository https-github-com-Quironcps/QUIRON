<?php


use Phinx\Seed\AbstractSeed;

class SistemaPadrao extends AbstractSeed
{
    public function run() : void
    {
        $sistema = [
            [
                'TB_SISTEMA_MODO' => true
            ]
        ];
            
        $sis = $this->table('TB_SISTEMA');
            
        $sis->insert($sistema)
            -> saveData();
    }
}
