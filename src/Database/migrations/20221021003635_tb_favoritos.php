<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TbFavoritos extends AbstractMigration
{
    public function change()
    {
        $this->execute("CREATE TABLE `TB_FAVORITO` (
            `TB_FAVORITO_ID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `FK_PROFESSOR` INT NOT NULL,
            `FK_VAGA` INT NOT NULL,

            CONSTRAINT `FK_VAGA` FOREIGN KEY (FK_VAGA) 
            REFERENCES TB_VAGA (TB_VAGA_ID),

            CONSTRAINT `FK_PROFESSOR` FOREIGN KEY (FK_PROFESSOR) 
            REFERENCES TB_PROFESSOR (TB_PROFESSOR_ID))");
    }
}
