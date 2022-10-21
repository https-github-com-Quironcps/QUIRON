<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

final class TbProfessor extends AbstractMigration
{
    public function change()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `TB_PROFESSOR` (
            `TB_PROFESSOR_ID` INT NOT NULL primary key AUTO_INCREMENT,
            `TB_PROFESSOR_NOME` VARCHAR(64) NOT NULL,
            `TB_PROFESSOR_NASCIMENTO` DATE NOT NULL,
            `TB_PROFESSOR_CPF` VARCHAR(14) NOT NULL,
            `TB_PROFESSOR_CEP` VARCHAR(8) NOT NULL,
            `TB_PROFESSOR_EMAIL` VARCHAR(128) NOT NULL,
            `TB_PROFESSOR_SENHA` VARCHAR(45) NOT NULL,
            `TB_PROFESSOR_ENDERECO` VARCHAR(128) NOT NULL,
            `TB_PROFESSOR_END_NUM` INT NOT NULL,
            `TB_PROFESSOR_CIDADE` VARCHAR(128) NOT NULL,
            `TB_PROFESSOR_TELEFONE` INT(11) NOT NULL,
            `TB_PROFESSOR_IMG_USER` LONGBLOB NULL)");
    }
}
