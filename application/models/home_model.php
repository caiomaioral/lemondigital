<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Home_model extends CI_Model {
	
    private $projetos = 'tb_projetos';
	
	public function __construct()
	{
        parent::__construct();
    } 

	/*
	 *  Busca o nome dos projetos
	 */
	public function get_projetos($limit)
	{
        $query = $this->db
                      ->order_by('int_ordem', 'ASC')
					  ->get($this->projetos, 10, $limit);
        
        if($query->num_rows() > 0)
		{
			return $query->result();
        }
		else
		{
            return 0;
        }		
	}
}

?>