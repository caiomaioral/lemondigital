<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    
		$this->load->model('home_model');
	}
	 
    public function index()
    {
		$this->usable('home');
    }
	
	public function enviar()
	{
		/*
		$Data['nome']   	=   trim($this->input->post('nome'));
		$Data['empresa']    =   trim($this->input->post('empresa'));
		$Data['email']   	=   trim($this->input->post('email'));
		$Data['telefone']   =   trim($this->input->post('telefone'));
		$Data['mensagem']   =   trim($this->input->post('mensagem'));
		
		$mail_disparo  =  "caio@lemondigital.com.br";
		$mail_origem   =  "Contato";
		$mail_email    =  "contato@lemondigital.com.br";
		$mail_assunto  =  "Contato | Lemon Digital";

		#### Prepara o conteudo do email
		$mail_conteudo  =  '<h3>Contato efetuado pelo site</h3>
							<p></p>
							<p style="font-size:12px"><strong>Nome:</strong> '.$Data['nome'].'</p>
							<p style="font-size:12px"><strong>Empresa:</strong> '.$Data['empresa'].'</p>
							<p style="font-size:12px"><strong>Email:</strong> '.$Data['email'].'</p>
							<p style="font-size:12px"><strong>Telefone:</strong> '.$Data['telefone'].'</p>
							<p style="font-size:12px"><strong>Mensagem:</strong> '.$Data['mensagem'].'</p>';
	
		#### Rodapé do Email
		$mail_conteudo .= "<br>E-mail enviado em ".date ("d/m/Y - H:i:s").".";
		
		if(PATH_SEPARATOR == ';')
		{ 
			$quebra_linha = "\r\n";
		}
		elseif(PATH_SEPARATOR == ':')
		{ 
			$quebra_linha = "\n";
		}
		elseif(PATH_SEPARATOR != ';' and PATH_SEPARATOR != ':')
		{
			echo ('<script>Esse script não funcionará corretamente neste servidor, a função PATH_SEPARATOR não retornou o parâmetro esperado.</script>');
		}
		 
		// Formata o campo da mensagem 
		$mensagem  = $mail_conteudo; 
		 
		$headers = "MIME-Version: 1.0" . $quebra_linha . ""; 
		$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha . ""; 
		$headers .= "From: ".$mail_origem." <".$mail_email.">".$quebra_linha;
		$headers .= "Return-Path: $mail_origem " . $quebra_linha . ""; 
		 
		// Envia o email sem anexo 
		mail($mail_disparo, $mail_assunto, $mensagem, $headers, "-r".$mail_email);
		*/
	}
}