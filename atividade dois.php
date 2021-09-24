<?php 
	

	$salario;                                                     
	$Salariohora= 150;                                            
	$Horastrabalhadas = 64; 
	$salarioBruto;
	$numerodoDependente = 10;
  	$inss;                                                              
	$ir
	
	$salarioBruto = $horastrabalhadas;
	$salariohora (50* $numerodoDependente);
	
	print("Esse é o valor do salário bruto:R$".$salariobruto);                              


	 if($salariobruto <= 1000){
	 	$inss= $salariobruto*8.5/100;
	 	printf("<br> Desconto INSS: R$".$inss);

	 } 
	 
	  elseif ($salariobruto > 1000){
	  	$inss= ($salariobruto*9/100);
	  printf ("<br> Desconto INSS: R$".$inss);
	 
	  }


	if($salariobruto <= 500){
	$ir= 0;
	print("<br> Desconto IR: R$".$ir);
	
	}elseif($salariobruto > 500 and $salariobruto <= 1000){
	$ir= salariobruto * 5/100;
	print("<br> Desconto IR: R$".$ir);
	}else {
		$ir= salariobruto * 7/100;
		print("<br> Desconto IR:R$".$ir);
	}	
	
 ?>