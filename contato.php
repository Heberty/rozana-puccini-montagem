<?php include 'head.php' ?>
<?php include 'header.php' ?>
<section>
	<div class="page-inner">
		<h1>Contato</h1>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="contact-box">
						<form method="get" action="form-contact">
							<div class="form-group">
								<label for="name">Nome:</label>
								<input type="name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="number">Telefone:</label>
								<input type="text" class="form-control sp_celphones" id="number">
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
							    <label for="exampleTextarea">Mensagem</label>
							    <textarea class="form-control" id="textarea" rows="3"></textarea>
						  	</div><!-- 
							<div class="checkbox">
								<label><input type="checkbox"> Lembre-me</label>
							</div> -->
							<button type="submit" class="btn-puccini">Enviar</button>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<h2>Entre em contato conosco</h2>
					<div class="contact-itens">
						<div class="contact-footer">
							<a href="tel:08499999999"><i class="fa fa-mobile"></i>(84) 9 9999-9999</a><br/>
							<a href="tel:08499999999"><i class="fa fa-phone"></i>(84) 9 9999-9999</a><br/>
							<a href="mailto:ropuccini@yahoo.com.br"><i class="fa fa-envelope"></i>ropuccini@yahoo.com.br</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php' ?>