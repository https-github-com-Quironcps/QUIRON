<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbFavoritos extends AbstractMigration
{
    public function up()
    {
        $this->execute("CREATE TABLE `TB_FAVORITO` (
            `TB_FAVORITO_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `TB_FAVORITO_CONDICAO` BOOLEAN NULL,
            `FK_PROFESSOR` INT NOT NULL,
            `FK_VAGA` INT NOT NULL,

            CONSTRAINT `FK_VAGA_CONS` FOREIGN KEY (FK_VAGA) 
            REFERENCES TB_VAGA (TB_VAGA_ID),

            CONSTRAINT `FK_PROFESSOR_CONS` FOREIGN KEY (FK_PROFESSOR) 
            REFERENCES TB_PROFESSOR (TB_PROFESSOR_ID))");
    }

    public function down(){
        $this->execute("DROP TABLE IF EXISTS `TB_FAVORITO`");
    }
}
