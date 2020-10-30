<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Emails extends BaseController {
  public function index(){

    //$nome       = $request->getVar('nome');
    //$telefone   = $request->getVar('telefone');
    //$emailform  = $request->getVar('email');
    //$mensagem   = $request->getVar('mensagem');

    $nome       = 'JUCA BALA DA SILVA';
    $telefone   = '11-9.5079-2712';
    $emailform  = 'mauro@mmsites.com.br';
    $mensagem   = 'NOVO EMAIL TESTE DO CODEIGNITER 4';    

    $email = \Config\Services::email();

    $config['mailType'] = 'html';
    $email->initialize($config);
    $email->setFrom('mauro@mmsites.com.br', 'Mauro Mendes');
    $email->setTo('mmn@mmsys.com.br');
    //$email->setCC('mauro@multipabx.com.br');
    //$email->setBCC('mauromn@multipabx.com.br');
    $email->setSubject('Formulário de contato');
    $email->setMessage("<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
          </head>
          <body>
            <strong>" . $nome . "</strong><br/>" .
            "<strong>Telefone:</strong> " . $telefone . "<br/>" .
            "<strong>E-mail:</strong> " . $emailform . "<br/>" .
            "<strong>Mensagem:</strong> <br/>" . $mensagem .
            "<br><b>Data - Hora: </b>" . date('d/m/Y - H:i:s') . " Hs " .
            "<br><a href='https://mmsites.com.br/ci4-lte/public/login/nvpass/12345'>
            Click aqui para criar uma nova senha, conforme solicitado.
            </a>".
          "</body>
        </html>");
    $email->setAltMessage("Nome: ".$nome."\n\Telefone: ".$telefone."\n\E-mail: ".$emailform."\n\Mensagem: ".$mensagem);

    if (!$email->send()) {
      echo '<br><br><br><hr> ERRO AO ENVIAR ! <hr><br><br><br>: '. $mail->ErrorInfo;
      mensagem('nemail');
    }else{
      return redirect()->to(base_url().'/public/Home/index/email');
    }

    //$email->printDebugger();
    //alerta($mail->ErrorInfo); 
    //$email->send();
    //echo view('include/header', $data);
    // echo view('sucesso') ;
    // echo view('include/footer');
  }

}

?>

