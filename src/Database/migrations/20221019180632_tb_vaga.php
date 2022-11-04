<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbVaga extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE TB_VAGA (
        `TB_VAGA_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `TB_VAGA_MATERIA` VARCHAR(45) NOT NULL,
        `TB_VAGA_LINK` VARCHAR(128) NOT NULL,
        `TB_VAGA_DESC` VARCHAR(512) NOT NULL,
        `TB_VAGA_REQ` VARCHAR(512) NOT NULL,
        `TB_VAGA_CARGA` VARCHAR(64) NOT NULL,
        `TB_VAGA_FAIXA_SALARIAL` VARCHAR(45) NOT NULL,
        `TB_VAGA_GRADE` VARCHAR(45) NOT NULL,
        `FK_INSTITUICAO` INT NOT NULL,
        CONSTRAINT `FK_INSTITUICAO_2` FOREIGN KEY (FK_INSTITUICAO) 
        REFERENCES TB_INSTITUICAO (TB_INSTITUICAO_ID))");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_VAGA`");
    }
}
