<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

sleep(1);
$jSON = array();
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($getPost['wf-form'])) :
    $jSON['erro'] = true;
else :
    $Post = array_map("strip_tags", $getPost);
    $Action = $Post['wf-form'];
    unset($Post['wf-form']);

    switch ($Action):

        case 'form-general':
            if (!empty($Post['wf_name']) && !empty($Post['wf_email'])) :

                $wf_date_hour = date('Y-m-d H:i:s');
                $UserData = [
                    'wf_name' => $Post['wf_name'],
                    'wf_email' => $Post['wf_email'],
                    'wf_whatsapp' => $Post['wf_whatsapp'],
                    'wf_service' => $Post['wf_service'],
                    'wf_message' => $Post['wf_message'],
                    'wf_date_hour' => $wf_date_hour,
                    'wf_form_key' => $Post['wf_form_key']
                ];

                $wf_name = $Post['wf_name'];
                $wf_email = $Post['wf_email'];
                $wf_whatsapp = $Post['wf_whatsapp'];
                $wf_service = $Post['wf_service'];
                $wf_message = $Post['wf_message'];
                $wf_date_hour = date('d/m/Y H:i:s', strtotime($wf_date_hour));
                $wf_form_key = $Post['wf_form_key'];

                /* =============================================== */
                /* ==== escolha formulario (criacao-site-standart) */
                /* =============================================== */
                if ($wf_service == 'criacao-site-standart') :
                    $emailTo = array(EMAIL, 'francisco@webfr.com.br');

                    $service = 'Criação de Site Standart';

                    $mensage = "
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>Nome: </strong> {$wf_name}</div>
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>E-mail: </strong> {$wf_email}</div>
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>WhatsApp: </strong> {$wf_whatsapp}</div>
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>Serviço: </strong> {$wf_service}</div>
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>Mensagem: </strong> {$wf_message}</div>
                        <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 5px;'><strong>Data de preenchimento: </strong> {$wf_date_hour}</div><br><br><br>

                    <table cellspacing='0' cellpadding='0' width='100%'>        
                        <tr width='100%'>
                            <td width='15%' align='left'> <img src='https://www.webfr.com.br/onepage/_cdn/images/assinatura/agencia-digital-web-fr-assinatura.png' width='140' alt='Agência Digital - Web-Fr' title='Agência Digital - Web-Fr'></td>
                            <td width='85%' align='left'> 
                                <div style='color: #1f1f1f; font-size: 1.6em; font-family: Calibri, sans-serif;'><strong>Fale Conosco</strong></div><br>
                                <div style='color: #333; font-size: 1em; font-family: Calibri, sans-serif;'><img src='https://www.webfr.com.br/onepage/_cdn/images/assinatura/agencia-digital-icon-whatsapp.png' width='15' alt='Agência Digital - Web-Fr | WhatsApp: (11) 9 7717-1255' title='Agência Digital - Web-Fr | WhatsApp: (11) 9 7717-1255'>&nbsp; (11) 9 7717-1255</div>
                                <div style='color: #d12121; font-size: 0.9em; font-family: Calibri, sans-serif;'><strong>Atendi.:</strong> segunda à sexta das 08h30 às 17h00</div>
                                <div><a style='color: #296d9b; font-size: 1em; font-family: Calibri, sans-serif;' href='https://www.webfr.com.br/'>www.webfr.com.br</div>
                            </td>            
                        </tr>        
                    </table>
                    ";
                    $mensageClient = "<br><br>
                    <div style='font-family: Calibri, sans-serif; font-size: 1em; color: #333333; margin-bottom: 10px;'>
                    Olá <strong>{$wf_name}</strong>, como você está?<br><br>

                    Recebemos seu contato referente à <span style='color: #296d9b;'>{$service}</span>.<br><br>

                    Conte para a gente...<br> 
                    Você quer um orçamento para seu site?<br>
                    Quer melhorar um site já existente?<br>
                    Qual seria sua necessidade?<br><br>

                    Estamos ansiosos para ajudar.<br><br>

                    <strong>Ah</strong>, já íamos esquecendo. <br>
                    Caso queira bater um papo conosco pelo <strong>WhatsApp</strong>, é só nos adicionar: <a style='color: #296d9b;' href='https://wa.me/5511977171255'>(11) 9 7717-1255</a><br><br>
                    
                    Att.<br><br><br>

                    <table cellspacing='0' cellpadding='0' width='100%'>        
                        <tr width='100%'>
                            <td width='15%' align='left'> <img src='https://www.webfr.com.br/onepage/_cdn/images/assinatura/agencia-digital-web-fr-assinatura.png' width='140' alt='Agência Digital - Web-Fr' title='Agência Digital - Web-Fr'></td>
                            <td width='85%' align='left'> 
                                <div style='color: #1f1f1f; font-size: 1.6em; font-family: Calibri, sans-serif;'><strong>Fale Conosco</strong></div><br>
                                <div style='color: #333; font-size: 1em; font-family: Calibri, sans-serif;'><img src='https://www.webfr.com.br/onepage/_cdn/images/assinatura/agencia-digital-icon-whatsapp.png' width='15' alt='Agência Digital - Web-Fr | WhatsApp: (11) 9 7717-1255' title='Agência Digital - Web-Fr | WhatsApp: (11) 9 7717-1255'>&nbsp; (11) 9 7717-1255</div>
                                <div style='color: #d12121; font-size: 0.9em; font-family: Calibri, sans-serif;'><strong>Atendi.:</strong> segunda à sexta das 08h30 às 17h00</div>
                                <div><a style='color: #296d9b; font-size: 1em; font-family: Calibri, sans-serif;' href='https://www.webfr.com.br/'>www.webfr.com.br</div>
                            </td>            
                        </tr>        
                    </table>
                    </div>
                    ";
                endif;
                /* ==== escolha formulario (criacao-site-standart) */



                /* =============================== */
                /* ==== important o PHPMAILER ==== */
                /* =============================== */
                require('./PHPMailer-master/PHPMailerAutoload.php');

                $mail = new PHPMailer();

                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                $mail->Charset = 'utf8_decode()';
                $mail->Host = 'br802.hostgator.com.br';
                $mail->Port = '26';
                $mail->Username = EMAIL;
                $mail->Password = PASSWORD;
                $mail->From = EMAIL;
                $mail->FromName = utf8_decode(FROM);
                $mail->IsHTML(true);
                $mail->Subject = utf8_decode(SUBJECT);
                $mail->Body = utf8_decode($mensage);

                /** ==== Envio do dados preenchido do formulário */
                foreach ($emailTo as $emailDestiny) :
                    $mail->AddAddress($emailDestiny);
                endforeach;

                $emailSend = $mail->Send();

                if (!$emailSend) :
                    return false;
                endif;

                $mail->ClearAllRecipients();
                /** ==== Envio do dados preenchido do formulário */

                /** ==== Envio da resposta automática para o cliente */
                $mail->Subject = utf8_decode($subjectClient);
                $mail->Body = utf8_decode($mensageClient);

                $mail->AddAddress($wf_email);
                $mail->AddBCC(EMAIL);

                $emailSend2 = $mail->Send();

                if (!$emailSend2) :
                    return false;
                endif;

                $mail->ClearAllRecipients();
                /** ==== Envio da resposta automática para o cliente */

                $jSON['success'] = true;
            else :
                $jSON['erro'] = true;                
            endif;
            break;

    //     case 'cta-pg-consultoria':
    //         if (!empty($Post['wf_name_cta']) && !empty($Post['wf_email_cta'])) :

    //             $wf_date_hour_cta = date('Y-m-d H:i:s');
    //             $UserData = [
    //                 'wf_name_cta' => $Post['wf_name_cta'],
    //                 'wf_email_cta' => $Post['wf_email_cta'],
    //                 'wf_whatsapp_cta' => $Post['wf_whatsapp_cta'],
    //                 'wf_url_cta' => $Post['wf_url_cta'],
    //                 'wf_date_hour_cta' => $wf_date_hour_cta,
    //                 'wf_form_key_cta' => $Post['wf_form_key_cta']
    //             ];

    //             $wf_name_cta = $Post['wf_name_cta'];
    //             $wf_email_cta = $Post['wf_email_cta'];
    //             $wf_whatsapp_cta = $Post['wf_whatsapp_cta'];
    //             $wf_url_cta = $Post['wf_url_cta'];
    //             $wf_date_hour_cta = date('d/m/Y H:i:s', strtotime($wf_date_hour_cta));
    //             $wf_form_key_cta = $Post['wf_form_key_cta'];

    //             $Create->ExeCreate(TB_CTA_FORM, $UserData);

    //             if ($Create->getResult()) :
    //                 $jSON['success'] = true;
    //             endif;
    //         endif;
    //         break;
    endswitch;
endif;
echo json_encode($jSON);
   
