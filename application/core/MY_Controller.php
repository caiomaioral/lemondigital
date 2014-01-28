<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
    /**
     * Dados de acesso
     *
     * @access	public
     * @param array de variaveis
     */
    public $data = array();
    
    /**
     * Nome da view
     *
     * @access	public
     * @param	string
     */
    public $content = 'home';

    public function __construct()
	{
		parent::__construct();
        
		$this->data['key'] = '@Setva01Na';
    }
    
    /**
     * Verifica se o usuário está logado no sistema
     * Caso positivo o monta a pagina selecionada ou a pagina padrão
     *
     * @access	public
     * @param	string Nome da view a ser carregada
     */
    public function usable($content)
	{
		if(isset($this->data['title']) == false)  
		
		$this->data['title'] =  NAME_SITE . ' | ' . ucfirst($this->router->class);
		
        // Gera o Conteudo
        $this->content = $content;

		$this->load->view('default/header', $this->data);
		$this->load->view($this->content, $this->data);
		$this->load->view('default/footer', $this->data);
    }	
}