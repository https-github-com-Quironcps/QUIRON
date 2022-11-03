<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbSistema extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_SISTEMA` (
            `TB_SISTEMA_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_SISTEMA_MODO` BOOLEAN NOT NULL,
            `TB_INSTITUICAO_FK` INT NULL, 
            `TB_PROFESSOR_FK` INT NULL, 
            CONSTRAINT `TB_PROFESSOR_FK_` FOREIGN KEY (TB_PROFESSOR_FK) 
            REFERENCES TB_PROFESSOR (TB_PROFESSOR_ID),
            CONSTRAINT `TB_INSTITUICAO_FK_` FOREIGN KEY (TB_INSTITUICAO_FK) 
            REFERENCES TB_INSTITUICAO (TB_INSTITUICAO_ID))");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_SISTEMA`");
    }
}
