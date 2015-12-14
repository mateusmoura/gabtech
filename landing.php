<?php include("inc/header_landing.php"); ?>

			<main role="main" class="page__landing">
				<section class="page__header">
					<div class="center">
						<div class="row">
							<div class="col-7 col-m-6">
								<h1 class="header__logo--form-active">
									<a href="#this">
										<i class="icon icon-clip-active"></i>
										<img src="img/lgo/header__logo.svg" alt="NossoGabinete">
									</a>
								</h1>
							</div>

							<div class="col-5 col-m-6 align-right">
								<button type="button" class="btn btn-link btn-support mobile--hidden">Suporte</button>
								<button type="button" class="btn btn-blue btn-radius btn-login">Login</button>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-m-5">
								<div class="block__demonstration">
									<h1>Seu gabinete organizado.</h1>
									<p>O NossoGabinete é a melhor ferramenta para ajudar você e sua equipe a gerenciar a atividade do seu parlamentar.</p>

									<div class="block__demonstration--form">
										<span>Solicite uma demonstração</span>

										<form class="validate" method="POST" data-ajax="true" action="#url" data-calfn="saveRequest">
											<div class="row">
												<div class="col-12 col-m-6">
													<input type="text" name="nome" class="form-style required" placeholder="Nome">
												</div>

												<div class="col-12 col-m-6">
													<input type="text" name="telefone" class="form-style mask-phone numeros required" placeholder="Telefone">
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<input type="text" name="email" class="form-style email required" placeholder="Email">
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<button type="submit" class="btn btn-success btn-full btn-send">Enviar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="page__intro">
					<div class="center">
						<div class="row">
							<div class="col-12 align-center">
								<div class="block__text">
									<h2>Tudo o que você precisa em um único lugar.</h2>
									<p>A única plataforma que permite organizar de forma fácil e intuitíva todos os seus documentos e cadastros com total segurança em qualquer dispositivo.</p>
								</div>
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-12 col-m-5">
								<div class="block__text">
									<h3>Tudo ao seu alcance.</h3>
									<p>Gerencie as demandas feitas ao gabinete, organize contatos e municípios, monitore ligações e visitas recebidas, arquive documentos importantes de uma maneira simples e rápida.</p>

									<img src="img/fke/page__intro--notebook-mobile.png" alt="Figure" class="page__intro--image desktop--hidden">
								</div>

								<div class="block__features mobile--hidden">
									<div class="col-3">
										<p><i class="icon icon-sheet-e"></i> <span>DEMANDAS</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-marker"></i> <span>MUNICÍPIOS</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-person-c"></i> <span>CONTATOS</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-phone-b"></i> <span>LIGAÇÕES</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-door"></i> <span>VISITAS</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-person-c"></i> <span>ASSESSORES</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-clip-d"></i> <span>ANEXOS</span></p>
									</div>
									<div class="col-3">
										<p><i class="icon icon-reminder-c"></i> <span>LEMBRETES</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<img src="img/fke/page__intro--notebook-desktop.png" alt="Figure" class="page__intro--image-desktop mobile--hidden">
				</section>

				<section class="page__timer">
					<div class="center">
						<div class="row">
							<div class="col-12 col-m-5 col-m-emp-7">
								<div class="block__text--timer">
									<h3>Faça mais em menos tempo.</h3>
									<p>É comum gastarmos horas para encontrar um documento ou preencher etiquetas . Por isso, criamos uma ferramenta de busca que ajuda você a encontrar o que você precisa, filtrar contatos e gerar milhares de etiquetas instantaneamente.</p>

									<h4>Seu dia mais traquilo.</h4>
									<p>Economize várias horas de trabalho na criação de etiquetas.</p>

									<div class="block__text--table">
										<div class="row block__text--table-head">
											<div class="col-6">
												<p>Preenchimento manual</p>
											</div>

											<div class="col-6">
												<p>Geração automática</p>
											</div>
										</div>

										<div class="row block__text--table-body">
											<div class="col-6">
												<strong>13 horas</strong>
											</div>
											<div class="col-6">
												<strong>Instantânea</strong>
											</div>
										</div>
									</div>

									<span class="legend">Cálculo baseado na criação de mil etiquetas</span>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="page__compatibility">
					<div class="center">
						<div class="row">
							<div class="col-12 col-m-5">
								<div class="block__text">
									<h3>Em qualquer lugar.</h3>
									<p>Não importa se você está no gabinete, na rua ou até mesmo em outro estado. Tenha acesso completo a todas as funções em qualquer lugar ou dispositivo.</p>
									<span>Disponível para todos os dispositivos.</span>

									<div class="block__text--table mobile--hidden">
										<div class="row block__text--table-body">
											<div class="col-4">
												<figure>
													<img src="img/ico/icon-desktop.svg" alt="DESKTOP E NOTEBOOK">

													<figcaption>
														DESKTOP E NOTEBOOK
													</figcaption>
												</figure>
											</div>

											<div class="col-4">
												<figure>
													<img src="img/ico/icon-tablet.svg" alt="TABLETS">

													<figcaption>
														TABLETS
													</figcaption>
												</figure>
											</div>

											<div class="col-4">
												<figure>
													<img src="img/ico/icon-mobile.svg" alt="SMARTPHONES">

													<figcaption>
														SMARTPHONES
													</figcaption>
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-m-7">
								<img src="img/fke/page__compatibility--mobile.png" alt="Imagem Mobile" class="desktop--hidden">
							</div>


							<img src="img/fke/page__compatibility--desktop.png" alt="Imagem Desktop" class="page__compatibility--image-desktop mobile--hidden">
						</div>
					</div>
				</section>

				<section class="page__safety">
					<div class="center">
						<div class="row">
							<div class="col-12 col-m-5 col-m-emp-7">
								<div class="block__text">
									<h3>Segurança levada a sério.</h3>
									<p>Para garantir a segurança das informações, os nossos servidores são certificados e utilizamos um dos protocolos de segurança mais avançados do mercado, o mesmo utilizado por bancos e instituições financeiras. </p>

									<img src="img/fke/page__safety--ssl.png" class="page__safety--ssl" alt="Active SSL">
									<img src="img/fke/page__safety--iso.png" class="page__safety--iso" alt="ISO 27017">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="page__testimony">
					<div class="row">
						<div class="col-12">
							<h3>Depoimentos</h3>

							<div class="block__carousel">
								<div class="item">
									<img src="img/fke/block__carousel--image-1.png" class="block__carousel--image" alt="Imagem fundo">

									<div class="center">
										<div class="block__carousel--content">
											<p>Agora eu fico tranquilo sabendo que os nossos documentos  estão seguros.</p>

											<span>OSCAR MOURA <strong>- CHEFE DE GABINETE</strong></span>
										</div>
									</div>
								</div>

								<div class="item">
									<img src="img/fke/block__carousel--image-2.png" class="block__carousel--image" alt="Imagem fundo">

									<div class="center">
										<div class="block__carousel--content">
											<p>2 Agora eu fico tranquilo sabendo que os nossos documentos  estão seguros.</p>

											<span>OSCAR MOURA <strong>- CHEFE DE GABINETE</strong></span>
										</div>
									</div>
								</div>

								<div class="item">
									<img src="img/fke/block__carousel--image-1.png" class="block__carousel--image" alt="Imagem fundo">

									<div class="center">
										<div class="block__carousel--content">
											<p>3 Agora eu fico tranquilo sabendo que os nossos documentos  estão seguros.</p>

											<span>OSCAR MOURA <strong>- CHEFE DE GABINETE</strong></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="page__register">
					<div class="center">
						<div class="row">
							<div class="col-12 col-m-5 col-m-emp-4">
								<div class="block__demonstration">
									<p>Junte-se aos 53 gabinetes que já estão usando o <strong>NossoGabinete.</strong></p>

									<div class="block__demonstration--form">
										<span>Solicite uma demonstração</span>

										<form class="validate" method="POST" data-ajax="true" action="#url" data-calfn="saveRequest">
											<div class="row">
												<div class="col-12 col-m-6">
													<input type="text" name="nome" class="form-style required" placeholder="Nome">
												</div>

												<div class="col-12 col-m-6">
													<input type="text" name="telefone" class="form-style mask-phone numeros required" placeholder="Telefone">
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<input type="text" name="email" class="form-style email required" placeholder="Email">
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<button type="submit" class="btn btn-success btn-full btn-send">Enviar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</main>

<?php include("inc/footer.php"); ?>