<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

final class TbPerfil extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_PERFIL` (
            `TB_PERFIL_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_PERFIL_CURSOS` VARCHAR(256) NOT NULL,
            `TB_PERFIL_SOBRE` VARCHAR(512) NOT NULL,
            `TB_PERFIL_EQUIPE` VARCHAR(512) NOT NULL,
            `TB_INSTITUICAO_TB_INSTITUICAO_ID` INT NOT NULL,
            `TB_PERFIL_IMG_POST` LONGBLOB NULL,
            `TB_PERFIL_IMG_POST_2` LONGBLOB NULL,
            `TB_PERFIL_IMG_POST_3` LONGBLOB NULL,
            CONSTRAINT `FK_INSTITUICAO_3` FOREIGN KEY (TB_INSTITUICAO_TB_INSTITUICAO_ID) 
            REFERENCES TB_INSTITUICAO (TB_INSTITUICAO_ID))");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_PERFIL`");
    }
}
