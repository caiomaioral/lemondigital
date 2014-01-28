<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(

    /*
     * Validacao do formulário de login
     */
    'login/enviar' => array(

        array('field'=>'login',
              'rules'=>'trim|required|callback_autenticar',
			  'label'=>'<strong>LOGIN</strong>'),

        array('field'=>'pwd',
              'rules'=>'trim|required|min_length[5]|max_length[20]',
			  'label'=>'<strong>SENHA</strong>')
    ),

    /*
     * Validacao do formulário de esqueci minha senha
     */
    'esqueci/enviar' => array(

        array('field'=>'email',
              'rules'=>'trim|required|callback_autenticar',
			  'label'=>'<strong>E-MAIL</strong>')
    ),

    /*
     * Validacao do formulário de perfil
     */
    'perfil/salvar' => array(

        array('field'=>'OldPassword',
              'rules'=>'trim|required|callback_confirm_senha',
			  'label'=>'<strong>SENHA ATUAL</strong>'),
			  
        array('field'=>'NewPassword',
              'rules'=>'trim|required|min_length[6]|max_length[20]|callback_password_check[NewPassword]',
			  'label'=>'<strong>NOVA SENHA</strong>'),

        array('field'=>'ConfirmPassword',
              'rules'=>'trim|required|min_length[6]|max_length[20]|matches[NewPassword]',
			  'label'=>'<strong>Confirmação de NOVA SENHA</strong>')
    ),
	
    /*
     * Validacao do formulário de pre-cadastro
     */
	'precadastro/salvar' => array(
        
		array('field'=>'Nome',
              'rules'=>'trim|required',
			  'label'=>'<strong>NOME</strong>'),

        array('field'=>'CPF',
              'rules'=>'trim|required|callback_validarCPF',
			  'label'=>'<strong>CPF</strong>'),

        array('field'=>'Genero',
              'rules'=>'required',
			  'label'=>'<strong>GENERO</strong>'),

        array('field'=>'EstadoCivil',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>ESTADO CIVIL</strong>'),

        array('field'=>'Nascimento',
              'rules'=>'required|callback_isDate',
			  'label'=>'<strong>DATA DE NASCIMENTO</strong>'),	

        array('field'=>'Residencial',
              'rules'=>'required',
			  'label'=>'<strong>FONE RESIDENCIAL</strong>'),

        array('field'=>'CEP',
              'rules'=>'required',
			  'label'=>'<strong>CEP</strong>'),

        array('field'=>'Endereco',
              'rules'=>'required',
			  'label'=>'<strong>ENDEREÇO</strong>'),

        array('field'=>'Bairro',
              'rules'=>'required',
			  'label'=>'<strong>BAIRRO</strong>'),

        array('field'=>'Profissao',
              'rules'=>'required',
			  'label'=>'<strong>PROFISSÃO</strong>'),

        array('field'=>'Cidade',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>CIDADE</strong>'),

        array('field'=>'Escolaridade',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>ESCOLARIDADE</strong>'),

        array('field'=>'NewPassword',
              'rules'=>'trim|required|min_length[6]|max_length[20]|callback_password_check[NewPassword]',
			  'label'=>'<strong>NOVA SENHA</strong>'),

        array('field'=>'ConfirmPassword',
              'rules'=>'trim|required|min_length[6]|max_length[20]|matches[NewPassword]',
			  'label'=>'<strong>CONFIRMAÇÃO DE NOVA SENHA</strong>'),

        array('field'=>'Igreja',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>IGREJA</strong>'),

        array('field'=>'Pagamento',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>MODO DE PAGAMENTO</strong>'),

        array('field'=>'Vencimento',
              'rules'=>'required|greater_than[0]',
			  'label'=>'<strong>DIA PARA VENCIMENTO</strong>')
    ),

    /*
     * Validacao do formulário de alterar a data de vencimento
     */
    'boletos/salvar_vencimento' => array(

        array('field'=>'Vencimento',
              'rules'=>'trim|required|callback_isDate',
			  'label'=>'<strong>DATA DE VENCIMENTO</strong>'),

        array('field'=>'AlteracaoVencimento',
              'rules'=>'trim|required|less_than[3]',
			  'label'=>'<strong>ALTERAR O VENCIMENTO</strong>')
    ),
);
