<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbSistema extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_SISTEMA` (
            `TB_SISTEMA_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_SISTEMA_MODO` BOOLEAN NOT NULL)");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_SISTEMA`");
    }
}
