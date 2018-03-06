<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Lar São Vicente de Paula::Sorocaba</title>
		<meta name="description" content="Dúvidas Frequentes" />
	    <meta name="author" content="Anne, Gregório, Luan, Tamires" />
	    <meta name="keywords" content="Velhinhos, Lar São Vicente de Paula, Social, Idosos, Sorocaba, Maior idade" />
		<link rel="icon" type="image/png" href="../favicon.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="../css/contato.css" />
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	</head>
	<body class="contato">
		
		<!--**************************************
			HEADER
			**************************************-->
		<?php include('../includes/menu-principal.php');?>
		<div class="container-fluid img">
	      	<img class="img-fluid d-block mx-auto" src="../img/contato/contato.png" alt="Contate-nos">
          </div>

		<!--**************************************
			FORMULÁRIO CONTATO
			**************************************-->
	    <section id="contact" class="formulario-contato pb-2">
	    	<div class="container">
		        <h2 class="text-center text-uppercase mb-0 py-4">Entre em Contato</h2>
		        <div class="row">
		          <div class="col-lg-8 mx-auto">
		            <form name="sentMessage" id="contactForm" novalidate="novalidate">
		              <div class="control-group">
		                <div class="form-group floating-label-form-group controls mb-0 pb-2">
		                  <label>Nome</label>
		                  <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Please enter your name.">
		                  <p class="help-block text-danger"></p>
		                </div>
		              </div>
		              <div class="control-group">
		                <div class="form-group floating-label-form-group controls mb-0 pb-2">
		                  <label>Email</label>
		                  <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address.">
		                  <p class="help-block text-danger"></p>
		                </div>
		              </div>
		              <div class="control-group">
		                <div class="form-group floating-label-form-group controls mb-0 pb-2">
		                  <label>Telefone</label>
		                  <input class="form-control" id="phone" type="tel" placeholder="Telefone" required="required" data-validation-required-message="Please enter your phone number.">
		                  <p class="help-block text-danger"></p>
		                </div>
		              </div>
		              <div class="control-group">
		                <div class="form-group floating-label-form-group controls mb-0 pb-2">
		                  <label>Assunto</label>
		                  <select class="custom-select">
		                  	<option selected>Selecione o Assunto</option>
							<option value="1">Doação</option>
							<option value="2">Voluntariado</option>
							<option value="3">Patrocínio</option>
							<option value="4">Agendamento de Visita</option>
							<option value="5">Dúvidas</option>
						  </select>
		                  <p class="help-block text-danger"></p>
		                </div>
		              </div>
		              <div class="control-group">
		                <div class="form-group floating-label-form-group controls mb-0 pb-2">
		                  <label>Mensagem</label>
		                  <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Please enter a message."></textarea>
		                  <p class="help-block text-danger"></p>
		                </div>
		              </div>
		              <div id="success"></div>
		              <div class="form-group">
		                <button type="submit" class="btn btn-dark btn-block" id="sendMessageButton">Enviar</button>
		              </div>
		            </form>
		          </div>
		        </div>
		    </div>
    	</section>

		<!--**************************************
			Endereço
			**************************************-->
          <section class="endereco">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.6516233111853!2d-47.503776000000016!3d-23.458859000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa05c476a158b1b45!2sLar+S%C3%A3o+Vicente+de+Paulo!5e0!3m2!1spt-BR!2sbr!4v1519580195735" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          	<div class="container">
          		<div class="row">
          			<div class="col-12 col-sm-6">
          				<address>
          					<i class="fas fa-map-marker"></i> Avenida Betânia, 1255 - Jardim Betânia<br>
          					&emsp; &thinsp; Sorocaba - SP &emsp; CEP: 18071-590<br>
          					<i class="fas fa-phone"></i> (15) 3313-2025 ou (15) 3313-9100<br>
          					<i class="fas fa-envelope"></i> sorocaba.<wbr>lar<wbr>sao<wbr>vicente<wbr>de<wbr>paulo<wbr>@gmail.com
          				</address>
          			</div>
          			<div class="col-12 col-sm-6">
          				<h6>
          					<i class="far fa-clock"></i> Horário de visitas <br>
          					&emsp; &thinsp; Segunda a Sábado <br>
          					&emsp; &thinsp; - 09h as 11h e <br>
          					&emsp; &thinsp; - 14h as 17h
          				</h6>
          			</div>
          		</div>
          	</div>
          </section>

		<!--**************************************
			FAQ
			**************************************-->
		<section class="FAQ">
			<div class="container pb-4">
				<h2 class="text-center text-uppercase text-white mb-0 py-4">Dúvidas Frequentes				<br><small class="text-center" style="font-size: 12px;">***Clique em cada pergunta para visualizar a resposta </small>
				</h2>
				<div id="accordion">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Como faço para entrar em contato com o Lar São Vicente de Paulo(Sorocaba)?
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				      	Você pode entrar em contato por meio dos telefones <b>(15) 3313-2025</b> ou <b>(15) 3313-9100</b>, 
				      	pelo nosso email <b>sorocaba.larsaovicentedepaulo@gmail.com</b> ou vindo pessoalmente no endereço 
				        <b>Avenida Betânia, 1255 - Jardim Betânia &emsp; Sorocaba - SP &emsp; CEP: 18071-590</b>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Como faço para ser um voluntário no Lar São Vicente de Paulo?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				        Há várias formas de ser um voluntário, temos uma página dedicada somente a isso, você pode conferir <a href="../voluntario">clicando aqui</a>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Qualquer um pode visitar o Lar?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				        Sim, desde que haja um agendamento antecipado via telefone - <b>(15) 3313-2025</b> ou <b>(15) 3313-9100</b>, ou pelo email <b>sorocaba.larsaovicentedepaulo@gmail.com</b> - lembrando que os horários de visitação são de <b>Segunda a Sábado das 09h as 11h e das 14h as 17h</b>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingFour">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          Tenho interesse em levar um idoso ao Lar, como proceder?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				      <div class="card-body">
				        Para um idoso ser acolhido pelo nosso Lar, você deve se atentar a alguns critérios dispostos na página <a href="../acolhimento">Acolhimento</a>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingFive">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          Como posso contribuir financeiramente com o Lar?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
				      <div class="card-body">
				        Na página <a href="../doacoes">Doações</a> você encontrará detalhes de como contribuir com o Lar São Vicente de Paulo.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingSix">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          Como nossos idosos são cuidados pelo Lar?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
				      <div class="card-body">
				        Temos uma estrutura e equipe totalmente dedicada às necessidades de nossos idosos. Na página <a href="../quem-somos">Quem Somos</a> você conhecerá um pouco dos nossos valores e a estrutura oferecida aos nossos queridos velhinhos.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingSeven">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          Qual idade mínima para acolhimento?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
				      <div class="card-body">
				        Esteja com idade acima de 60 anos (para ambos os sexos). Para outros critérios, visite a página <a href="../acolhimento">Acolhimento</a>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingEight">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				          Em quais condições o idoso poderá ser acolhido pelo Lar?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
				      <div class="card-body">
				        Esteja em estado de carência e abandono, não esteja classificado no grau de dependência III, ou seja, que requeira assistência em todas as atividades de autocuidado para a vida diária e/ou com comprometimento cognitivo. Para outros critérios, visite a página <a href="../acolhimento">Acolhimento</a>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingNine">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
				          Para ser acolhido pelo Lar é necessário algum atestado médico?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
				      <div class="card-body">
				        Sim, precisa de atestado de sanidade mental e psicológica, atestado de saúde física que afirme a inexistência de doença contagiosa.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTen">
				      <h5 class="mb-0">
				        <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
				          Posso receber informações sobre o estado clínico do idoso?
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
				      <div class="card-body">
				        Estão autorizados a receber informações apenas os responsáveis previstos em contrato e aqueles que tiverem autorização expressa/prevista em contrato.
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</section>

    	<?php include('../includes/footer.html');?>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>