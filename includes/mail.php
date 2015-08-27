<?php

    // Incluir o PHP Mailer
      
    require_once('mailer/PHPMailerAutoload.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        // Obter as variáveis

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $entrada = $_POST['entrada'];
        $prestacoes = $_POST['prestacoes'];
        $carro = $_POST['carro'];
        $concessionaria = $_POST['concessionaria'];
        $montadora = $_POST['montadora'];

        $enderecos = array(

            '1' => 'vinicius.alves@grupolider.com.br',
            '2' => 'aline.landim@grupolider.com.br',
            '3' => 'vendasweb.vait@grupolider.com.br',
            '4' => 'isabely.matias@sgatoyota.com.br',
            '5' => 'sidney.saldanha@grupolider.com.br',
            '6' => 'recreiomotos.bangu@grupolider.com.br'

        );

        $mail = new PHPMailer;

        $mail->isSMTP();
        //$mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->CharSet = 'UTF-8';

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // $mail->SMTPDebug = 3;
        // $mail->Host = 'smtp.gmail.com';
        // $mail->isHTML(true);
                                  
        // $mail->Username = 'socialmedia@3aworldwide.com.br';            
        // $mail->Password = 'media1234';

        // $mail->From = 'socialmedia@3aworldwide.com.br';
        // $mail->FromName = 'Feirão Líder';

        $mail->SMTPDebug = 3;
        $mail->Host = 'smtpout.secureserver.net';
        $mail->isHTML(true);
                                  
        $mail->Username = 'cadastro@liderautofest.com.br';            
        $mail->Password = 'Grupolider34';

        $mail->From = 'cadastro@liderautofest.com.br';
        $mail->FromName = 'Feirão Líder';

        $mail->addAddress($enderecos[$montadora], '');

        $mail->Subject = 'Contato - Feirao Lider';
        $mail->Body    = "
          Nome: $nome <br/> 
          Telefone: $telefone<br/>
          E-mail: $email<br/>
          Entrada: $entrada<br/>
          Prestações: $prestacoes<br/>
          Carro: $carro<br/>
          Concessionaria: $concessionaria<br/>
          Mensagem : $mensagem<br/>";

        if($mail->send())
        {
          echo 1;
        }
        else
        {
          echo $mail->ErrorInfo;
        }

    }