<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de Shoppings</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		
<!-- Adicionando o conteudo HTML a tela -->
		<div class="container">
			<div class="row">
				<h1>Catálogo de Shoppings</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
            <!-- Aqui adicionamos o formulario utilizando o metodo post -->
    				<form role="form" action="formulario.php" method="post">
					  <div class="form-group">
					    <label for="Shopping">Nome do Shopping:</label>
					    <select class="form-control" name="id_shopping" id="id_shopping">
							<option value="1">Balneário Shopping"</option>
							<option value="2">Continente Shopping"</option>
							<option value="3">Garten Shopping</option>
							<option value="4">Nações Shopping</option>
					    		<option value="5">Neumarkt Shopping</option>
							<option value="6">Norte Shopping</option>
					   	</select>
					  </div>
            <!-- Aqui adicionamos o botao para o cliente selecionar a opcao do shopping desejado -->
					  <button type="submit" class="btn btn-default">Ver detalhes</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
  			</div>
  			<div class="container">
			<div class="row">
  				<h1>Detalhes do Shopping</h1>
  			</div>
  			<div class="row">
  				<div class="col-md-4">
  				<?php
            //funcao para nao imprimir Array Iniciada Vazia
            error_reporting(E_ALL ^ E_NOTICE);
            //faz o post na tela da opcao selecionada
            $id_shopping = $_POST['id_shopping'];

            //Definicao dos titulos e conteudos do array.
  					$detalhes[1]['titulo'] = "Detalhes de Balnário Shopping";
  					$detalhes[1]['conteudo'] = "O novo conceito visual e arquitetônico, aliado a um mix que concentra algumas das mais renomadas grifes, transformaram o Balneário Shopping em um case de sucesso no segmento. Situado na praia mais badalada do Sul do País, o empreendimento conta com marcas inéditas no Estado e operações exclusivas de gastronomia que atraem um público seleto e antenado nas principais tendências do mundo.";


  					$detalhes[2]['titulo'] = "Detalhes de Continente Shopping";
  					$detalhes[2]['conteudo'] = "Inaugurado em outubro de 2012, o Continente Shopping consolidou-se rapidamente na Grande Florianópolis como o shopping das famílias, trazendo sempre uma programação intensa de eventos que agradam a todas as idades. O shopping destaca-se também pelo seu mix diversificado com marcas renomadas, a exemplo da Zara, John John, Intimissimi e Lança Perfume.

Quem busca lazer e diversão encontra no Continente as melhores salas de cinema da região. No total, são oito modernas salas da rede Cinépolis, sendo duas VIP e uma Macro XE 3D – as únicas de toda a região. Para a criançada, tem ainda o Magic Games, o Kids Park ou o Kids Play, que proporcionam diversão aos pequenos em local seguro.";
  			
  					$detalhes[3]['titulo'] = "Detalhes de Garten Shopping";
  					$detalhes[3]['conteudo'] = "Consolidado como primeira opção em compras, lazer e gastronomia no norte catarinense, o Garten Shopping tem o maior e mais completo mix da região. São mais de 200 operações que trazem as melhores marcas para um público qualificado e ávido por novidades. Desde sua inauguração, em abril de 2010, o Garten apresenta aos seus clientes marcas inéditas em moda, excelente gastronomia, a comodidade e conveniência de serviços e opções de entretenimento.";


  					$detalhes[4]['titulo'] = "Detalhes de Nações Shopping";
  					$detalhes[4]['conteudo'] = "O Nações Shopping chega para fazer parte do dia a dia de toda a Região Sul de Santa Catarina e oferecer o melhor do entretenimento, moda, gastronomia e tecnologia.

A transformação que o Nações Shopping vem provocando no sul catarinense já é visível: valorização imobiliária, geração de impostos, de empregos - serão 2.500 empregos diretos e 8 mil indiretos - e modernização do varejo.";
  					

  					$detalhes[5]['titulo'] = "Detalhes de Neumarkt Shopping";
  					$detalhes[5]['conteudo'] = "Inaugurado em 1993, o Neumarkt Shopping tornou-se o ponto de encontro das famílias em Blumenau, seja para as compras ou o lazer. Localizado no centro da cidade, conta com um mix completo e é o destino certo para quem busca marcas renomadas e as melhores âncoras. O shopping já passou por seis expansões que proporcionaram a vinda de novas lojas e a modernização do empreendimento. É o único shopping da região que conta com sala de cinema VIP, além de outras cinco salas que oferecem uma programação variada que agrada a todas as idades.";
  					

  					$detalhes[6]['titulo'] = "Detalhes de Norte Shopping";
  					$detalhes[6]['conteudo'] = "O Norte Shopping é o endereço certo para o lazer e compras das famílias da região Norte de Blumenau e de todas as cidades do Vale do Itajaí. Desde que foi inaugurado, em maio de 2011, o Norte consolidou-se como referência em entretenimento, oferecendo com frequência eventos que atraem as famílias: apresentações artísticas, circo, espetáculos musicais, parques internos e externos. Para completar, tem sete modernas salas de cinema da rede Cinépolis, o Magic Games com inúmeras opções para a garotada e 12 pistas de boliche.";

            //Imprime na Tela o ID Selecionado com o Titulo e o Conteudo
  					echo $detalhes[$id_shopping]['titulo'];
  					echo "<br /><br />";
  					echo $detalhes[$id_shopping]['conteudo'];

  				?> 
  				</div>
			</div>
		</div>
  			
		</div>
	</body>
</html>
