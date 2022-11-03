<?php
session_start();

if (isset($_POST['submit'])) {
    if (
        isset(
            $_POST['nome-e'],
            $_POST['end-e'],
            $_POST['num-e'],
            $_POST['cidade-e'],
            $_POST['cep-e'],
            $_POST['tel-e'],
            $_POST['email-e'],
            $_POST['senha-e'],
            $_POST['cod-e']
        )

        && !empty($_POST['nome-e'])
        && !empty($_POST['end-e'])
        && !empty($_POST['num-e'])
        && !empty($_POST['cidade-e'])
        && !empty($_POST['cep-e'])
        && !empty($_POST['tel-e'])
        && !empty($_POST['email-e'])
        && !empty($_POST['senha-e'])
        && !empty($_POST['cod-e'])
    ) {
        $nome = trim($_POST['nome-e']);
        $endereco = trim($_POST['end-e']);
        $numero = trim($_POST['num-e']);
        $cidade = trim($_POST['cidade-e']);
        $cep = trim($_POST['cep-e']);
        $telefone = trim($_POST['tel-e']);
        $email = trim($_POST['email-e']);
        $senha = trim($_POST['senha-e']);
        $codigo = trim($_POST['cod-e']);
        $textarea = trim($_POST['imagem']);

        $options = array("cost" => 4);
        $hashsenha = password_hash($senha, PASSWORD_BCRYPT, $options);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = 'SELECT * FROM TB_INSTITUICAO where TB_INSTITUICAO_EMAIL = :TB_INSTITUICAO_EMAIL';
            $stmt = $pdo->prepare($sql);
            $p = ['TB_INSTITUICAO_EMAIL' => $email];
            $stmt->execute($p);

            if ($stmt->rowCount() == 0) {
                $sql = "INSERT INTO TB_INSTITUICAO (TB_INSTITUICAO_NOME, TB_INSTITUICAO_ENDERECO, TB_INSTITUICAO_END_NUM, TB_INSTITUICAO_CIDADE, TB_INSTITUICAO_CEP, TB_INSTITUICAO_TELEFONE, TB_INSTITUICAO_EMAIL,`TB_INSTITUICAO_SENHA`,TB_INSTITUICAO_COD, TB_INSTITUICAO_IMG_USER) 
                values(:TB_INSTITUICAO_NOME,:TB_INSTITUICAO_ENDERECO,:TB_INSTITUICAO_END_NUM,:TB_INSTITUICAO_CIDADE,:TB_INSTITUICAO_CEP,:TB_INSTITUICAO_TELEFONE,:TB_INSTITUICAO_EMAIL,:TB_INSTITUICAO_SENHA,:TB_INSTITUICAO_COD, :IMG_INSTITUICAO)";

                try {
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':TB_INSTITUICAO_NOME' => $nome,
                        ':TB_INSTITUICAO_ENDERECO' => $endereco,
                        ':TB_INSTITUICAO_END_NUM' => $numero,
                        ':TB_INSTITUICAO_CIDADE' => $cidade,
                        ':TB_INSTITUICAO_CEP' => $cep,
                        ':TB_INSTITUICAO_TELEFONE' => $telefone,
                        ':TB_INSTITUICAO_EMAIL' => $email,
                        ':TB_INSTITUICAO_SENHA' => $senha,
                        ':TB_INSTITUICAO_COD' => $codigo,
                        ':IMG_INSTITUICAO' => $textarea
                    ];

                    $handle->execute($params);

                    // $success = 'Sua escola está cadastrada na Quíron';

                    //redireciona para pagina de cadastrar o perfil com o id na url
                    $pega_id = $pdo->prepare("SELECT TB_INSTITUICAO_ID AS ID FROM TB_INSTITUICAO WHERE TB_INSTITUICAO_NOME LIKE :NOME AND TB_INSTITUICAO_EMAIL LIKE :EMAIL");
                
                    $pega_id->bindParam(':NOME', $nome, PDO::PARAM_STR);
                    $pega_id->bindParam(':EMAIL', $email, PDO::PARAM_STR);

                    $pega_id->execute();
                    
                    $id_int = $pega_id->fetchAll(PDO::FETCH_ASSOC);
                    
                    if (count($id_int)) {
                        foreach ($id_int as $Lat) {
                            $last_id = $Lat['ID'];
                        }
                    }

                    header("location: ../server/pega_id_perfil.php?cad=$last_id");

                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
            } else {
                $valnome = $nome;
                $valendereco = $endereco;
                $valnumero = $numero;
                $valcidade = $cidade;
                $valcep = $cep;
                $valtelefone = $telefone;
                $valemail = '';
                $valsenha = $senha;
                $valcodigo = $codigo;

                $errors[] = 'Email já cadastrado';
            }
        } else {
            $errors[] = "Endereço de email não é válido";
        }
    } else {
        if (!isset($_POST['nome-e']) || empty($_POST['nome-e'])) {
            $errors[] = 'Por favor insira o nome da sua escola';
        } else {
            $valnome = $_POST['nome-e'];
        }
        if (!isset($_POST['end-e']) || empty($_POST['end-e'])) {
            $errors[] = 'Por favor insira o endereço de sua escola';
        } else {
            $valendereco = $_POST['end-e'];
        }

        if (!isset($_POST['num-e']) || empty($_POST['num-e'])) {
            $errors[] = 'Por favor insira o número do endereço';
        } else {
            $valendereco = $_POST['num-e'];
        }

        if (!isset($_POST['cidade-e']) || empty($_POST['cidade-e'])) {
            $errors[] = 'Por favor insira a cidade da sua escola';
        } else {
            $valcidade = $_POST['cidade-e'];
        }

        if (!isset($_POST['cep-e']) || empty($_POST['cep-e'])) {
            $errors[] = 'Por favor insira o cep da escola';
        } else {
            $valcep = $_POST['cep-e'];
        }

        if (!isset($_POST['tel-e']) || empty($_POST['tel-e'])) {
            $errors[] = 'Por favor insira o telefone para contato da escola';
        } else {
            $valtelefone = $_POST['tel-e'];
        }

        if (!isset($_POST['email-e']) || empty($_POST['email-e'])) {
            $errors[] = 'Por favor insira o email para contato da escola';
        } else {
            $valemail = $_POST['email-e'];
        }

        if (!isset($_POST['senha-e']) || empty($_POST['senha-e'])) {
            $errors[] = 'Por favor insira a senha';
        } else {
            $valsenha = $_POST['senha-e'];
        }

        if (!isset($_POST['cod-e']) || empty($_POST['cod-e'])) {
            $errors[] = 'Por favor insira o código da instituição';
        } else {
            $valcodigo = $_POST['cod-e'];
        }

        
            $errors[] = 'Por favor insira o código da ';
       

    }
}
