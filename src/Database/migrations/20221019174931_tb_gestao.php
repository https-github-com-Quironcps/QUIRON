<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbGestao extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_GESTAO` (
            `TB_GESTAO_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_GESTAO_RESPONSAVEL` VARCHAR(64) NOT NULL,
            `TB_GESTAO_TELEFONE` INT(11) NOT NULL,
            `TB_GESTAO_EMAIL` VARCHAR(64) NOT NULL,
            `FK_INSTITUICAO` INT NOT NULL,
            CONSTRAINT `FK_INSTITUICAO` FOREIGN KEY (FK_INSTITUICAO) 
            REFERENCES TB_INSTITUICAO (TB_INSTITUICAO_ID))");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_GESTAO`");
    }
}