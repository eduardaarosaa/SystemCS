<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_painel extends CI_Controller {

	 function __construct() {
        parent::__construct();
        
        $this->load->model('Model_painel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

    }


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

//Função que mostra a tela de login
	public function index()
	{
		$this->load->view('login');
	}
//Função que inicia a sessão de um usuário no sistea
	public function login(){

        $this->form_validation->set_rules('email','E-mail','required');
	$this->form_validation->set_rules('senha','Senha','required');
		
        
		$dados = array (
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha')
		);
                
                if($this->form_validation->run()){
                    
                    //var_dump($dados);
                    
              $auth = $this->Model_painel->login($dados); 
              
            
                   if($auth){
				$sessao = array(
					'id'=> $auth->id,
                                        'nome'=>$auth->nome,
                                        'email'=>$auth->email,
                                        'nivel'=>$auth->nivel,
                                         'login' => true
                                         
                                        
                );
                
            
            $media['media'] = $this->Model_painel->media();
	         $this->session->set_userdata($sessao);
	         $this->load->view('header',$sessao);
             $this->load->view('painel',$media);
			

			} else {
                            
           	$this->load->view('login');	

        }
        
                }
       
                }
   
//Função que destrói a sessão 
 public function logout() {

		$this->session->sess_destroy();
		$this->login();
        $this->load->view('login');

	}
//Fnção que mostra a tela inicial do sistema - Painel
public function painel(){

    $media['media'] = $this->Model_painel->media();
	$this->load->view('header');
    $this->load->view('painel',$media);

}

//Função que visualiza a tela para adicionar um usuário
public function addusuario(){
	$this->load->view('header');
	$this->load->view('addusuario');
}
//Função que coloca os dados em um array e manda para o model
public function adduser(){

    $data = 'null';
    $this->form_validation->set_rules('nome', 'o campo nome é obrigatório', 'required');
    $this->form_validation->set_rules('email', 'o campo email é obrigatório','required');
    $this->form_validation->set_rules('senha', 'o campo senha é obrigatório','required');

    
    if($this->form_validation->run()==true){
        
        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'nivel'=>2
           
        );
        
        var_dump($data);
        
      $this->Model_painel->adduser($data);
      
     redirect("Controller_painel/veruser", 'redirect');

    }
    }
//Função que mostra tods os usuários cadastrados no sistema
    public function veruser(){

    	$usuario['usuario'] = $this->Model_painel->veruser();

    	$this->load->view('header');
    	$this->load->view('veruser',$usuario);
    }
//Função que mostra a tela para resetar a senha
public function senha(){

	$this->load->view('header');
	$this->load->view('senha');
}
//Função que coloca os dados em array e manda para o model 
public function redefinirsenha(){

    $data = 'null';
    $this->form_validation->set_rules('chapa', 'o campo chapa é obrigatório', 'required');
    $this->form_validation->set_rules('senha','o campo senha é obrigatório', 'required');

    
    if($this->form_validation->run()==true){
        
        $data = array(
            'chapa' => $this->input->post('chapa'),
            'senha' => $this->input->post('senha'),
           
        );
        
        var_dump($data);
        
      $this->Model_painel->redefinirsenha($data);
     redirect("Controller_painel/painel", 'redirect');


}
}
//Função que mostra a tela com o formulário dos Leads
public function leads(){

	$this->load->view('header');
	$this->load->view('leads');
}
//Função que coloca os dados em um array e manda para o model
public function addleads(){

	 $data = 'null';
    $this->form_validation->set_rules('nome', 'o campo nome é obrigatório', 'required');
    $this->form_validation->set_rules('telefone', 'o campo telefone é obrigatório', 'required');
    $this->form_validation->set_rules('nivel', 'o campo nivel é obrigatório', 'required');
    $this->form_validation->set_rules('cidade', 'o campo cidade é obrigatório', 'required');
    $this->form_validation->set_rules('estado', 'o campo estado é obrigatório', 'required');
    $this->form_validation->set_rules('regiao', 'o campo regiao é obrigatório', 'required');
    $this->form_validation->set_rules('quantidade', 'o campo quantidade é obrigatório', 'required');
   
    
    if($this->form_validation->run()==true){
        
        $data = array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'nivel'=>$this->input->post('nivel'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'regiao' => $this->input->post('regiao'),
            'quantidade' => $this->input->post('quantidade'),
           
        );
        
        var_dump($data);
        
      $this->model_painel->addleads($data);
      redirect("Controller_painel/verleads", 'redirect');


}
}
//Função que mostra quais são os leads adicionados no sistema
 public function verleads(){

    	$leads['leads'] = $this->Model_painel->verleads();

    	$this->load->view('header');
    	$this->load->view('verleads',$leads);
    }
//Função que mostra tela com formulário para adicionar um atendimento no mapa de empatia
    public function mapa(){
    $this->load->view('header');
	$this->load->view('addmapa');

    }

//Função que coloca os dados em um array e manda para o model
    public function addmapa(){
    	$data = "null";
    	$data = array(
            'questao1' => $this->input->post('questao1'),
            'questao2' => $this->input->post('questao2'),
            'questao3' => $this->input->post('questao3'),
            'questao4' => $this->input->post('questao4'),
            'questao5' => $this->input->post('questao5'),
            'questao6' => $this->input->post('questao6'),
            'questao7' => $this->input->post('questao7'),
           
        );
        
        var_dump($data);
        
      $this->Model_painel->addmapa($data);
      redirect("Controller_painel/vermapa", 'redirect');
    }

// Função que mostra todos os contatos que foram adicionados no mapa de empatia
    public function vermapa(){
    	$mapa['mapa'] = $this->Model_painel->vermapa();

    	$this->load->view('header');
    	$this->load->view('vermapa',$mapa);
    }
//Função que mostra os dados que estão sendo adicionados via sql 
    public function bdleads(){

    	$bdleads['bdleads'] = $this->Model_painel->bdleads();
    	$this->load->view('header');
    	$this->load->view('bdleads',$bdleads);
    }
//Função que gera planilha dos leads manualmene
    public function gerar_planilha(){
    	$gerar_planilha['gerar_planilha'] = $this->Model_painel->gerar_planilha();

    	$this->load->view('gerar',$gerar_planilha);
   
    }
//Função que gera planilha de taxa de problemas resolvidos
    public function gerar_resolvidas(){
        $gerar_resolvidas['gerar_resolvidas'] = $this->Model_painel->gerar_resolvidas();
        $this->load->view('gerar_resolvidas',$gerar_resolvidas);
    }
//Função que gera planilha de taxa de problemas técnicos
    public function gerar_tecnico(){
        $gerar_tecnico['gerar_tecnico'] = $this->Model_painel->gerar_tecnico();
        $this->load->view('gerar_tecnico', $gerar_tecnico);
    }
//Função que gera planilha de taxa de problemas por fluxo de tela
    public function gerar_telas(){
        $gerar_telas['gerar_telas'] = $this->Model_painel->gerar_telas();
        $this->load->view('gerar_telas',$gerar_telas);
    }
//Função que gera planilha para mapa de empatia
    public function gerar_mapa(){
    	$gerar_mapa['gerar_mapa'] = $this->Model_painel->gerar_mapa();
    	$this->load->view('gerarmapa',$gerar_mapa);
    }
//Função que gera planilha para taxa de abandono
    public function gerar_abandono(){
        $gerar_abandono['gerar_abandono'] = $this->Model_painel->gerar_abandono();
        $this->load->view('gerar_abandono',$gerar_abandono);
    }
//Função que gera planilha para a taxa de conversão
    public function gerar_conversao(){
        $gerar_conversao['gerar_conversao'] = $this->Model_painel->gerar_conversao();
        $this->load->view('gerar_conversao',$gerar_conversao);
    }
//Função que mostra o aviso que é necessário estar logado para ter acesso ao sistema
    public function acesso(){

    	$this->load->view('header');
    	$this->load->view('acesso');

    }
//Função que mostra a tela de pos atendimento
    public function pos(){
    	$this->load->view('header');
    	$this->load->view('pos');
    }
//Função que mostra a tela de taxas
    public function taxas(){
    	$this->load->view('header');
    	$this->load->view('taxas');
    }
//Função que mostra a tela de taxas resolvidas
    public function resolvidas(){
    	$this->load->view('header');
    	$this->load->view('resolvidas');
    }
//Função que coloca os dados de taxa resolvidas em um array e manda para o model
    public function addresolvidas(){

    	$data = "null";
    	$data = array(
            'questao1' => $this->input->post('questao1'),
            'questao2' => $this->input->post('questao2'),
            
           
        );
        
        var_dump($data);
        
      $this->Model_painel->addresolvidas($data);
      redirect("Controller_painel/ver_resolvidas", 'redirect');


    }

//Função que mostra os taxas resolvidas 
    public function ver_resolvidas(){
    	$ver_resolvidas['ver_resolvidas'] = $this->Model_painel->ver_resolvidas();
    	$this->load->view('header');
    	$this->load->view('ver_resolvidas',$ver_resolvidas);
    }
//Função que coloca os dados em um array em taxa de problemas técnicos
    public function addtecnico(){
    	$data = "null";
    	$data = array(
            'questao1' => $this->input->post('questao1'),
            'questao2' => $this->input->post('questao2'),
            'questao3' => $this->input->post('questao3'),
            
           
        );
        
        var_dump($data);
        
      $this->Model_painel->addtecnico($data);
      redirect("Controller_painel/ver_tecnico", 'redirect');
    }

//Função que mostra o formulário para adicionar uma taxa de problemas técnicos
    public function tecnico(){
    	$this->load->view('header');
    	$this->load->view('tecnico');
    }
//Função que mostra as taxas inseridas dentro do banco de dados
    public function ver_tecnico(){
    	$ver_tecnico['ver_tecnico'] = $this->Model_painel->ver_tecnico();
    	$this->load->view('header');
    	$this->load->view('ver_tecnico',$ver_tecnico);
    }
//Função que coloca em um aray os dados em taxas de problemas por fluxo de telas e manda para o model
    public function addtelas(){
    	$data = "null";
    	$data = array(
            'questao1' => $this->input->post('questao1'),
         
            
           
        );
        
        var_dump($data);
        
      $this->Model_painel->addtelas($data);
      redirect("Controller_painel/ver_telas", 'redirect');
    }
//Função que mostra a tela para adicionar as taxas por fluxo de tela
    public function tela(){
    	$this->load->view("header");
    	$this->load->view("telas");
    }
//Função que mostra quais os dados que foram adicionados em taxas por fluxo de telas.
    public function ver_telas(){
    	$ver_telas['ver_telas'] = $this->Model_painel->ver_telas();
    	$this->load->view('header');
    	$this->load->view('ver_telas',$ver_telas);
    }
//Função que mostra a tela com o formulário para adicionar uma taxa de abandono
    public function abandono(){
    	$this->load->view("header");
    	$this->load->view("abandono");
    }
//Função que coloca os dados em um array em taxas por abandono.
    public function addabandono(){
    	$data = "null";
    	$data = array(
            'questao1' => $this->input->post('questao1'),
            'questao2' => $this->input->post('questao2')
        );
        $this->Model_painel->addabandono($data);
        redirect('Controller_painel/ver_abandono', 'redirect');
    }
//Função que mostra quais os dados que foram adicionados em taxas por abandono
    public function ver_abandono(){
    	$ver_abandono['ver_abandono'] = $this->Model_painel->ver_abandono();
    	$this->load->view("header");
    	$this->load->view('ver_abandono',$ver_abandono);
    }
//Função que mostra tela com o formulário para adicionar a taxa de conversão
    public function taxa_conversao(){

    	$this->load->view('header');
    	$this->load->view('taxa_conversao');
    }
//Função coloca os dados em um array e manda para o model para adicionar as taxas de conversão 
    public function addconversao(){
    	$data = "null";
    	$data = array(
    		'questao1' => $this->input->post('questao1'),
    		'questao2' => $this->input->post('questao2')
    	);
    	$this->Model_painel->addconversao($data);
    	redirect('Controller_painel/ver_conversao','redirect');
    }

//Função para ver as taxas de conversão que foram adicionados no sistema 
    public function ver_conversao(){
    	$ver_conversao['ver_conversao'] = $this->Model_painel->ver_conversao();
    	$this->load->view('header');
    	$this->load->view('ver_conversao',$ver_conversao);
    }
//Função para ver a tela para adicionar o primeiro contato
    public function primeiro_contato(){

        $this->load->view('header');
        $this->load->view('primeiro_contato');
    }
//Função que coloca os dados em um array e manda para o model 
    public function addcontato(){
        $data = "null";
        $data = array(
            'questao1' => $this->input->post('questao1'),
            'questao2' => $this->input->post('questao2'),
            'questao3' => $this->input->post('questao3')
        );
        $this->Model_painel->addcontato($data);
        redirect('Controller_painel/ver_contato','redirect');
    }
//Função que mostra quais foram os dados adicionados no sistema no primeiro contato
    public function ver_contato(){
        $contato['contato'] = $this->Model_painel->ver_contato();
        $this->load->view('header');
        $this->load->view('ver_contato',$contato);
    }

//Função que mostra quais foram os dados extraídos da API bitvalor 
    public function ver_mercado(){

        $dados['dados'] = $this->Model_painel->ver_mercado();
        $this->load->view('header');
        $this->load->view('ver_mercado',$dados);


    }

//Fução que gera a planilha para inteligência de mercado

    public function gerar_mercado(){

        $gerar_mercado['gerar_mercado'] = $this->Model_painel->gerar_mercado();
        $this->load->view('gerarmercado',$gerar_mercado);
    }

    

}