<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_painel extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }

 //Função que verifica no banco de dados se os dados digitados pelo usuário estão OK   
    public function login($dados){
    
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('email',$dados['email']);
        $this->db->where('senha',$dados['senha']);
      
        
        $login = $this->db->get();
        
         if ($login->num_rows() == 1) {
            return $login->row();
        } else {
            return false;
        }
    }
//Função que adiciona os dados de um novo usuáro no sistema
    public function adduser($data){

    return $this->db->insert('usuario', $data);
}
//Função que consulta o banco de dados para retornar quais são os usuários adicionados no sistema
   public function veruser(){
    return $this->db->query("Select * from usuario")->result();
   }
//Função que altera a senha dos usuários no sistema
  public function redefinirsenha($data){

    $this->db->where('id', $data['chapa']);
    $this->db->set('senha', $data['senha']);
    return $this->db->update('usuario');
}
//Função que adiciona os leads manualmente
public function addleads($data){

     return $this->db->insert('leads', $data);
}
//Função que consulta o banco de dados e retorna quais os leads que estão adicionados no sistema/leads manuais
public function verleads(){
   return $this->db->query("Select * from leads")->result();

}
//Função que adiciona os dados do mapa de empatia
public function addmapa($data){
    return $this->db->insert('mapa',$data);
}
//Função que consulta o banco de dados e retorna quais são os mapas que estão adicionados no sitema
public function vermapa(){
return $this->db->query("Select * from mapa")->result();

}
//Função que consulta o banco de dados e retorna quais são os leads que foram adicionados via SQL
public function bdleads(){
    return $this->db->query("Select * from bdleads")->result();

}
//Função que consulta no banco as informações os leads manuais para gerar planilha
public function gerar_planilha(){

     return $this->db->query("Select * from leads")->result();

}
//Função que consulta no banco as informações do mapa de emaptia para gerar planilha
public function gerar_mapa(){

    return $this->db->query("Select * from mapa")->result();
}
//Função que adiciona no banco de dados as taxas de problemas resolvidos
public function addresolvidas($data){
    return $this->db->insert('resolvidas',$data);
}
//Função que consulta no banco de dados e retorna quais são as taxas de problemas resolvidos
public function ver_resolvidas(){

  return $this->db->query("Select * from resolvidas")->result();
}
//Função que adiciona no banco de dados a taxa de problemas por falhas ou erros técnicos
public function addtecnico($data){
  return $this->db->insert('tecnicas',$data);
}
//Função que consulta no banco de dados e retorna quais foram os dados adicionados nas taxas de problemas técnicos
public function ver_tecnico(){
  return $this->db->query("Select * from  tecnicas")->result();
}
//Função que adiciona no banco de dados a taxa de problemas por fluxo de telas 
public function addtelas($data){
  return $this->db->insert('tela',$data);
}
//Função que consulta o banco de dados e retorna quais foram os dados adicionador na taxa por fluxo de telas
public function ver_telas(){
  return $this->db->query("Select * from tela")->result();
}
//Função que adiciona no banco de dados por taxas por abandono
public function addabandono($data){
  return $this->db->insert("abandono",$data);
}
//Função que consulta o banco de dados e retorna quais são os dados adicionados no sistema
public function ver_abandono(){
  return $this->db->query("Select * from abandono")->result();
}
//Função que consulta o banco de dados os dados para gerar a planilha de taxas resolvidas
public function gerartaxa(){
  return $this->db->query("Select * from resolvidas")->result();
}
//Função que adiciona os dados no banco por taxa de conversão 
public function addconversao($data){
  return $this->db->insert('conversao',$data);
}
//Função que consulta o banco de dados e retorna quais os dados que estão adicionados em taxa de conversão
public function ver_conversao(){
  return $this->db->query("Select * from conversao")->result();
}
//Função que adiciona no banco de dados as informaçõs de primeiro contato 
public function addcontato($data){
  return $this->db->insert('contato',$data);
}
//Função que consulta o banco de dados e retorna quais os dados que estão adicionados no sistema no primeiro contato
public function ver_contato(){
  return $this->db->query("Select * from contato")->result();
}
//Função que consulta o banco de dados e retorna quais foram os dados extraídos da API Bitvalor
public function ver_mercado(){

  return $this->db->query("Select * from dados where yearweek(data) = yearweek(now())-1")->result();
}
//Função que consulta o banco de dados e retorna os dados da API Bitvalor para gerar planilha
public function gerar_mercado(){

  return $this->db->query("Select * from dados where yearweek(data) = yearweek(now())-1")->result();

}
public function gerar_resolvidas(){

  return $this->db->query("Select * from resolvidas")->result();
}
public function gerar_tecnico(){
  return $this->db->query("Select * from tecnicas")->result();
}
public function gerar_telas(){
  return $this->db->query("Select * from tela")->result();
}
public function gerar_abandono(){
  return $this->db->query("Select * from abandono")->result();
}
public function gerar_conversao(){
  return $this->db->query("Select * from conversao")->result();
}
public function media(){
  return $this->db->query("Select AVG(questao7) from mapa")->result();
}

public function ver_indice_nacional(){
  return $this->db->query("Select * from indice")->result();
}

public function ver_cotacao_internacional(){
  return $this->db->query("SELECT valor FROM bitstamp ORDER BY id DESC LIMIT 1 ")->result();
}
public function dolar(){
  return $this->db->query("SELECT valor FROM cotacao_dolar ORDER BY id DESC LIMIT 1")->result();
}

public function media_indice(){
  return $this->db->query("Select AVG(PRECO) FROM dados where yearweek(data) = yearweek(now())-1")->result();
}


    }
    