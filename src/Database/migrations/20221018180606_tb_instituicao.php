<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

final class TbInstituicao extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_INSTITUICAO` (
            `TB_INSTITUICAO_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_INSTITUICAO_NOME` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_ENDERECO` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_END_NUM` INT(6) NOT NULL,
            `TB_INSTITUICAO_CIDADE` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_COD` INT NOT NULL,
            `TB_INSTITUICAO_TELEFONE` INT(11) NOT NULL,
            `TB_INSTITUICAO_CEP` VARCHAR(8) NOT NULL,
            `TB_INSTITUICAO_EMAIL` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_SENHA` VARCHAR(45) NOT NULL,
            `TB_INSTITUICAO_IMG_USER` LONGBLOB NULL)");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_INSTITUICAO`");
    }
}
