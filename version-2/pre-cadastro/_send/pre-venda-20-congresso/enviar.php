<?php

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

sleep(1);

if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) && filter_input(INPUT_POST, "nome", FILTER_DEFAULT) && filter_input(INPUT_POST, "telefone", FILTER_DEFAULT)):
    
    /*crio a sessão*/
    session_start();
    $_SESSION['success'] = 'sucesso';

    $nome = strip_tags(trim(filter_input(INPUT_POST, 'nome', FILTER_DEFAULT)));
    $email = strip_tags(trim(filter_input(INPUT_POST, 'email', FILTER_DEFAULT)));
    $telefone = strip_tags(trim(filter_input(INPUT_POST, 'telefone', FILTER_DEFAULT)));
    // $inscricao = strip_tags(trim(filter_input(INPUT_POST, 'inscricao', FILTER_DEFAULT)));
    // $msg = strip_tags(trim(filter_input(INPUT_POST, 'mensagem', FILTER_DEFAULT)));
    $evento = strip_tags(trim(filter_input(INPUT_POST, 'evento', FILTER_DEFAULT)));
    $chave = strip_tags(trim(filter_input(INPUT_POST, 'chave', FILTER_DEFAULT)));
    $data = date('Y-m-d');
    $hora = date('H:i\h\s');

    $nome2 = utf8_decode($nome);
    $email2 = utf8_decode($email);
    $telefone2 = utf8_decode($telefone);
    $inscricao2 = 'campo-no-formulario-desabilitado';
    $msg2 = 'campo-no-formulario-desabilitado';
    $evento2 = utf8_decode($evento);
    $chave2 = utf8_decode($chave);

    define('EMAIL', 'atendimento@jfveventos.com.br');
    define('PASS', '797jfveventos');

    $from = 'Contato: JFV - Eventos';
    $assunto = 'Contato evento';

    $mensagem = "<font size='2' face='Arial'><strong>==== PRÉ-VENDA 20º CONGRESSO ====</strong><br>";
    $mensagem .= "<strong>Nome: </strong> {$nome}<br>";
    $mensagem .= "<strong>Email: </strong> {$email}<br>";
    $mensagem .= "<strong>Telefone: </strong> {$telefone}<br>";
    // $mensagem .= "<strong>Quantidade de Inscrição(ões): </strong> {$inscricao}<br>";
    $mensagem .= "<strong>Mensagem: </strong> {$msg}<br>";
    $mensagem .= "<strong>Evento: </strong> {$evento}<br>";
    $mensagem .= "<strong>Data: </strong> ". date('d/m/Y', strtotime($data)) . "<br>";
    $mensagem .= "<strong>Hora: </strong> {$hora}<br></font>";

    /*     * ********************************* INICIO - INSERINDO NO BANCO DE DADOS *********************************** */
    require('../Conec/conexao.php');
    $conec = new Conexao();

    $inserir = "INSERT INTO eventos(id, nome, email, empresa, telefone, celular, inscricao, cidade, estado, eventos, mensagem, data, hora, chave) VALUES(' ', '{$nome2}', '{$email2}', '', '{$telefone2}', '', '{$inscricao2}', '', '', '{$evento2}', '{$msg2}', '$data', '{$hora}', '{$chave2}')";

    mysqli_query($conec->Conec(), $inserir);

    /*     * ********************************* FIM - INSERINDO NO BANCO DE DADOS *********************************** */

    require('../PHPMailer-master/PHPMailerAutoload.php');

    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Charset = 'utf8_decode()';
    $mail->Host = 'mail.jfveventos.com.br';
    $mail->Port = '587';
    $mail->Username = EMAIL;
    $mail->Password = PASS;
    $mail->From = EMAIL;
    $mail->FromName = $from;
    $mail->IsHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = utf8_decode($mensagem);


    $emailPara = array(        
        'jair@jfveventos.com.br',
        'atendimento@jfveventos.com.br',
        'contato@jfveventos.com.br'        
    );
    // $emailPara = array(
    //     'francisco.sts@hotmail.com'        
    // );
    
    foreach ($emailPara as $enviarEmail):
        $mail->AddAddress($enviarEmail);
    endforeach;

    $enviado = $mail->Send();

    if (!$enviado):
        return false;
    endif;

    $mail->ClearAllRecipients();

    $autoMsg = "
        <font size='3' face='Arial, sans-serif'>
            Olá {$nome}. <br><br>
            Recebemos seu contato referente ao evento: <strong>20º Congresso Nacional de Vendas</strong>.<br><br>
                       
            Logo nossa equipe entrara em contato para tirarmos todas suas duvidas e fecharmos sua inscrição.<br><br>
            
            Att.<br><br>

            <strong>JFV - Capacitação Empresarial</strong><br>                       
        </font><br>
        <font size='2' face='Arial, sans-serif' color='FF0000'>Favor não responder a este e-mail.</font><br><br>
            ";
    $assunto2 = "Recebemos seu contato";
    $mail->Subject = $assunto2;
    $mail->Body = utf8_decode($autoMsg);


    $mail->AddAddress($email);
//    $mail->AddAddress('francisco.sts@hotmail.com');
    // $mail->AddAddress('contato@jfveventos.com.br');

    $enviado2 = $mail->Send();

    if (!$enviado2):
        return false;
    endif;

    $mail->ClearAllRecipients();

    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    echo json_encode($post);
else:
    return false;
endif;
