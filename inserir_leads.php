<?php
$link = mysqli_connect("localhost","root","","sistema");
$consulta = "select * from bdleads";
$retorno = mysqli_query($link,$consulta);
if($retorno){
while ($rows=mysqli_fetch_assoc($retorno)){

    $nome =$rows['nome'];
    echo $nome;
    $telefone = $rows['telefone'];

    $estado = substr($telefone,0,4); 

    if($estado == 5511){ 

    $estado = "São Paulo"; 

    }elseif($estado == 5512){ 

    $estado = "São Paulo";  

    }elseif($estado == 5513){ 

    $estado = "São Paulo"; 

    }elseif($estado== 5514){ 

    $estado = "São Paulo"; 

    }elseif($estado== 5516){ 

    $estado = "São Paulo"; 

    }elseif($estado==5517){ 

    $estado = "São Paulo";  

    }elseif($estado==5518){ 

    $estado = "São Paulo"; 

    }elseif($estado == 5519){ 

    $estado = "São Paulo"; 

    }elseif($estado == 5521){ 

    $estado = "Rio de Janeiro"; 

    }elseif($estado == 5522){ 

    $estado = "Rio de Janeiro";

    }elseif($estado == 5524){ 

    $estado = "Rio de Janeiro";

    }elseif($estado ==5527){ 

    $estado = "Espírito Santo"; 

    }elseif($estado==5528){ 

    $estado = "Espírito Santo"; 

    }elseif($estado == 5531){ 

    $estado = "Minas Gerais"; 

    }elseif($estado == 5532){ 

    $estado = "Minas Gerais"; 

    }elseif($estado == 5533){ 

    $estado = "Minas Gerais"; 

    }elseif($estado == 5534){ 

    $estado = "Minas Gerais"; 

    }elseif($estado == 5535){ 

    $estado = "Minas Gerais";

    }elseif($estado ==5537){ 

    $estado = "Minas Gerais"; 

    }elseif($estado ==5538){ 

    $estado = "Minas Gerais";

    }elseif($estado == 5541){ 

    $estado = "Paraná"; 

    }elseif($estado == 5542){ 

    $estado = "Paraná"; 

    }elseif($estado == 5543){ 

    $estado = "Paraná"; 

    }elseif($estado == 5544){ 
    
    $estado = "Paraná"; 
  
    }elseif($estado == 5545){ 
    
    $estado = "Paraná"; 

    }elseif($estado == 5546){ 

    $estado = "Paraná"; 

    }elseif($estado == 5547){ 

    $estado = "Santa Catarina"; 

    }elseif($estado == 5548){ 

    $estado = "Santa Catarina"; 

    }elseif($estado == 5549){ 

    $estado = "Santa Catarina"; 

    }elseif($estado == 5551){ 

    $estado = "Rio Grande do Sul"; 

    }elseif($estado = 5553){ 

    $estado = "Rio Grande do Sul"; 

    }elseif($estado == 5554){ 

    $estado = "Rio Grande do Sul"; 

    }elseif($estado == 5555){ 

    $estado = "Rio Grande do Sul"; 

    }elseif($estado == 5561){ 

    $estado = "Distrito Federal"; 

    }elseif($estado == 5562){ 

    $estado = "Goiás"; 

    }elseif($estado == 5563){ 

    $estado = "Tocantins"; 

    }elseif($estado == 5564){ 

    $estado = "Goiás"; 

    }elseif($estado == 5565){ 

    $estado = "Mato Grosso"; 

    }elseif($estado == 5566){ 

    $estado = "Mato Grosso"; 

    }elseif($estado == 5567){ 

    $estado = "Mato Grosso do Sul"; 

    }elseif($estado ==5568){ 

    $estado = "Acre"; 

    }elseif($estado == 5569){ 

    $estado = "Rondônia"; 

    }elseif($estado == 5571){ 

    $estado = "Bahia"; 

    }elseif($estado == 5573){ 

    $estado = "Bahia"; 

    }elseif($estado == 5574){ 

    $estado = "Bahia"; 

    }elseif($estado == 5575){ 

    $estado = "Bahia"; 

    }elseif($estado == 5577){ 

    $estado = "Bahia"; 

    }elseif($estado == 5579){ 

    $estado = "Sergipe"; 

    }elseif($estado == 5581){ 

    $estado = "Pernambuco"; 

    }elseif($estado == 5582){ 

    $estado = "Alagoas"; 

    }elseif($estado == 5583){ 

    $estado = "Paraíba"; 

    }elseif($estado == 5584){ 

    $estado = "Rio Grande do Norte"; 

    }elseif($estado == 5585){ 

    $estado = "Ceará"; 

    }elseif($estado == 5586){ 

    $estado = "Piauí"; 

    }elseif($estado == 5587){ 

    $estado = "Pernambuco"; 

    }elseif($estado == 5588){ 

    $estado = "Ceará"; 

    }elseif($estado == 5589){ 

    $estado = "Piauí"; 

    }elseif($estado == 5591){ 

    $estado = "Pará"; 

    }elseif($estado == 5592){ 

    $estado = "Amazonas"; 

    }elseif($estado == 5593){ 

    $estado = "Pará"; 

    }elseif($estado == 5594){ 

    $estado = "Pará"; 

    }elseif($estado == 5595){ 

    $estado = "Roraima"; 

    }elseif($estado == 5596){ 

    $estado = "Amapá"; 

    }elseif($estado == 5597){ 

    $estado = "Amazonas"; 

    }elseif($estado == 5598){ 

    $estado = "Maranhão"; 

    }elseif($estado == 5599){ 

    $estado = "Maranhão"; 

    }else { 

    $estado = "Inválido"; 

    }
    echo $estado;

    $regiao = substr($telefone,0,4); 

    if($regiao ==5511){ 

    $regiao = "Sudeste"; 

    }elseif($regiao =  5512){ 

    $regiao = "Sudeste"; 

    }elseif($regiao = 5513){ 

    $regiao = "Sudeste";  

    }elseif($regiao = 5514){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5515){ 
    
    $regiao = "Sudeste"; 
  
    }elseif($regiao == 5516){
    
    $regiao = "Sudeste"; 

    }elseif($regiao == 5517){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5518){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5519){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5521){ 

    $regiao = "Sudeste";  

    }elseif($regiao == 5522){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5524){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5527){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5528){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5531){ 

    $regiao = "Sudeste";  

    }elseif($regiao == 5532){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5533){ 
    
    $regiao = "Sudeste"; 
  
    }elseif($regiao == 5534){ 

    $regiao = "Sudeste";  

    }elseif($regiao == 5535){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5537){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5538){ 

    $regiao = "Sudeste"; 

    }elseif($regiao == 5541){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5542){ 

    $regiao = "Sul"; 

    }elseif($regiao ==5543){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5543){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5544){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5545){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5546){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5547){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5548){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5549){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5551){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5553){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5554){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5555){ 

    $regiao = "Sul"; 

    }elseif($regiao == 5561){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5562){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5563){ 

    $regiao = "Norte"; 

    }elseif($regiao ==5564){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5565){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5566){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5567){ 

    $regiao = "Centro-oeste"; 

    }elseif($regiao == 5568){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5569){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5571){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5573){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5574){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5575){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5577){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5579){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5581){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5582){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5583){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5584){ 

    $regiao  =  "Nordeste"; 

    }elseif($regiao == 5585){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5586){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5587){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5588){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5589){ 

    $regiao = "Nordeste"; 

    }elseif($regiao ==5591){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5592){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5593){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5594){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5595){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5596){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5597){ 

    $regiao = "Norte"; 

    }elseif($regiao == 5598){ 

    $regiao = "Nordeste"; 

    }elseif($regiao == 5599){ 

    $regiao = "Nordeste"; 

}else{ 

$regiao = "Inválido"; 

} 
echo $regiao;

$pais = substr($telefone,0,4);

if($pais==5511){
    
   $pais = "Brasil"; 
}

elseif($pais==5512){
    
    $pais = "Brasil"; 

}elseif($pais==5513){

    $pais = "Brasil"; 

}elseif($pais==5514){

    $pais = "Brasil"; 

}elseif($pais==5515){

    $pais = "Brasil"; 
}elseif($pais==5516){

    $pais = "Brasil"; 

}elseif($pais==5517){

    $pais = "Brasil"; 

}elseif($pais==5518){

    $pais = "Brasil"; 

}elseif($pais==5519){

    $pais = "Brasil"; 
}elseif($pais==5521){

    $pais = "Brasil"; 
}elseif($pais==5522){

    $pais = "Brasil"; 

}elseif($pais==5524){

    $pais = "Brasil"; 

}elseif($pais==5527){

    $pais = "Brasil"; 

}elseif($pais==5528){

    $pais = "Brasil"; 

}elseif($pais==5531){

    $pais = "Brasil"; 

}elseif($pais==5532){

    $pais = "Brasil"; 

}elseif($pais==5533){

    $pais = "Brasil"; 

}elseif($pais==5534){
    
    $pais = "Brasil"; 

}elseif($pais==5535){

    $pais = "Brasil"; 

}elseif($pais==5541){

    $pais = "Brasil"; 

}elseif($pais==5542){

    $pais = "Brasil"; 

}elseif($pais==5543){
    $pais = "Brasil"; 
}elseif($pais==5544){
    $pais = "Brasil"; 
}elseif($pais=5545){
    $pais = "Brasil"; 
}elseif($pais==5546){
    $pais = "Paraná";
}elseif($pais==5547){
    $pais = "Brasil"; 
}elseif($pais==5548){
    $pais = "Brasil"; 
}elseif($pais==5549){
    $pais = "Brasil"; 
}elseif($pais==5551){
    $pais = "Brasil"; 
}elseif($pais==5553){
    $pais = "Brasil"; 
}elseif($pais==5554){
    $pais = "Brasil"; 
}elseif($pais==5555){
    $pais = "Brasil"; 
}elseif($pais==5561){
    $pais = "Brasil"; 
}elseif($pais==5562){
    $pais = "Brasil"; 
}elseif($pais==5563){
    $pais = "Brasil"; 
}elseif($pais==5564){
    $pais = "Brasil"; 
}elseif($pais == 5565){
    $pais = "Brasil"; 
}elseif($pais==5567){
    $pais = "Brasil"; 
}elseif($pais==5568){
    $pais = "Brasil"; 
}elseif($pais==5569){
    $pais = "Brasil"; 
}elseif($pais==5571){
    $pais = "Brasil"; 
}elseif($pais==5573){
    $pais = "Brasil"; 
}elseif($pais==5574){
    $pais = "Brasil"; 
}elseif($pais==5575){
    $pais = "Brasil"; 
}elseif($pais==5577){
    $pais = "Brasil"; 
}elseif($pais==5579){
    $pais = "Brasil"; 
}elseif($pais==5581){
    $pais = "Brasil"; 
}elseif($pais==5582){
    $pais = "Brasil"; 
}elseif($pais==5583){
    $pais = "Brasil"; 
}elseif($pais==5584){
    $pais = "Brasil"; 
}elseif($pais==5585){
    $pais = "Brasil"; 
}elseif($pais==5586){
    $pais = "Brasil"; 
}elseif($pais==5587){
    $pais = "Brasil"; 
}elseif($pais==5588){
    $pais = "Brasil"; 
}elseif($pais==5589){
    $pais = "Brasil"; 
}elseif($pais==5591){
    $pais = "Brasil"; 
}elseif($pais==5591){
    $pais = "Brasil"; 
}elseif($pais==5592){
    $pais = "Brasil"; 
}elseif($pais==5593){
    $pais = "Brasil"; 
}elseif($pais==5594){
    $pais = "Brasil"; 
}elseif($pais==5595){
    $pais = "Brasil"; 
}elseif($pais==5596){
    $pais = "Brasil"; 
}elseif($pais==5597){
    $pais = "Brasil"; 
}elseif($pais==5598){
    $pais = "Brasil"; 
}elseif($pais==5599){
    $pais = "Brasil"; 
}else{
    $pais = "Internacional";
}

echo $pais;
    }
    }



?>