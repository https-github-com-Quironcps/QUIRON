<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

final class TbInstituicao extends AbstractMigration
{
    public function change()
    {
        $this->execute("CREATE TABLE `TB_INSTITUICAO` (
            `TB_INSTITUICAO_ID` INT NOT NULL PRIMARY KEY,
            `TB_INSTITUICAO_NOME` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_ENDERECO` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_END_NUM` INT(6) NOT NULL,
            `TB_INSTITUICAO_BAIRRO` VARCHAR(64) NOT NULL,
            `TB_INSTITUICAO_COD` INT NOT NULL,
            `TB_INSTITUICAO_TELEFONE` INT NOT NULL,
            `TB_INSTITUICAO_CEP` INT NOT NULL,
            `TB_INSTITUICAO_EMAIL` VARCHAR(128) NOT NULL,
            `TB_INSTITUICAO_SENHA` VARCHAR(45) NOT NULL,
            `TB_INSTITUICAO_IMG_USER` LONGBLOB NULL)");
    }
}
