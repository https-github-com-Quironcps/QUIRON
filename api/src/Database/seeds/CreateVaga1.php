<?php


use Phinx\Seed\AbstractSeed;

class CreateVaga1 extends AbstractSeed
{
    public function run() : void
    {
        $vaga = [
            [
                'TB_VAGA_MATERIA' => 'VAGA 1',
                'TB_VAGA_LINK' => 'https://urh.cps.sp.gov.br/tag/vagas/',
                'TB_VAGA_DESC' => '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."',
                'TB_VAGA_REQ' => '77"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."7',
                'TB_VAGA_CARGA' => 'X horas por semana',
                'TB_VAGA_FAIXA_SALARIAL' => 'Mil - Dois mil',
                'TB_VAGA_GRADE' => 'Tecnólogo',
                'FK_INSTITUICAO' => '2'
            ]
        ];
            
        $users = $this->table('TB_VAGA');
            
        $users->insert($vaga)
            -> saveData();
    }
}
