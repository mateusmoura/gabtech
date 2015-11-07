<?php include("inc/header.php"); ?>

			<main role="main" class="page__view">
				<div class="page__header">
					<div class="page__title">
						<div class="center">
							<div class="row">
								<div class="col-10 col-m-9">
									<a href="#this" class="block__menu--avatar">
										<img src="img/fke/user-avatar.png">
									</a>
									<h2>Marcelo Oliveira da Costa</h2>
								</div>
							</div>
						</div>
					</div>

					<div class="center">
						<div class="page__menu">
							<a href="#" class="page__menu--item page__menu--item-active">Detalhes</a>
							<a href="#" class="page__menu--item">Demandas</a>
							<a href="#" class="page__menu--item">Utilidaes</a>
							<a href="#" class="page__menu--item">Visitas</a>
						</div>
					</div>
				</div>

				<div class="page__content">
					<div class="center">
						<div class="block__view">
							<div class="row">
								<div class="col-12">
									<div class="block__view--title borderline">
										<div class="col-7 col-m-5">
											<h3>Táxi</h3>
										</div>

										<div class="col-5 col-m-7 align-right">
											<a href="#this" class="btn btn-blue btn-sm">Novo táxi</a>
										</div>
									</div>

									<div class="block__panel">
										<div class="block__panel--heading">
											<div class="col-8">
												<h4 class="block__panel--title"><i class="icon icon-car"></i> BarraTáxi</h4>
											</div>

											<div class="col-4 align-right">
												<a href="#this" class="btn btn-link">Editar</a>
											</div>
										</div>

										<div class="block__panel--body">
											<div class="block__list">
												<dl>
													<dt>Telefone</dt>
													<dd><a href="tel:+551133445566" class="block__number">(11) 3344-5566 <i class="icon icon-phone"></i></a></dd>
													<dt>Telefone</dt>
													<dd><a href="tel:+551133445566" class="block__number">(11) 3344-5566 <i class="icon icon-phone"></i></a></dd>
													<dt>Email</dt>
													<dd>barrataxi@gmail.com</dd>
													<dt>Site</dt>
													<dd><a href="#this">www.barrataxi.com.br</a></dd>
												</dl>
											</div>
										</div>
									</div>

									<br>

									<div class="block__panel">
										<div class="block__panel--heading">
											<div class="col-4">
												<h4 class="block__panel--title"><i class="icon icon-car"></i> Editar</h4>
											</div>

											<div class="col-8 align-right">
												<a href="#this" class="btn btn-link">Excluir</a>
												<a href="#this" class="btn btn-link">Cancelar</a>
											</div>
										</div>

										<div class="block__panel--body">
											<form action="" method="POST">
												<div class="row">
													<div class="col-12 col-m-4">
														<label>Nome</label>
														<input type="text" class="form-style" value="BarraTáxi">
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Telefone</label>
														<input type="text" class="form-style" value="(11) 3344-5566">
														<a href="#this">+ Adicionar outro telefone</a>
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Email</label>
														<input type="text" class="form-style" value="barrataxi@gmail.com">
														<a href="#this">+ Adicionar outro telefone</a>
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Site</label>
														<input type="text" class="form-style" value="www.barrataxi.com.br">
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-2">
														<button type="submit" class="btn btn-blue btn-full">Salvar</button>
													</div>
												</div>
											</form>
										</div>
									</div>

									<br>

									<div class="block__panel">
										<div class="block__panel--heading">
											<div class="col-8">
												<h4 class="block__panel--title"><i class="icon icon-car"></i> Novo táxi</h4>
											</div>

											<div class="col-4 align-right">
												<a href="#this" class="btn btn-link">Cancelar</a>
											</div>
										</div>

										<div class="block__panel--body">
											<form action="" method="POST">
												<div class="row">
													<div class="col-12 col-m-4">
														<label>Nome</label>
														<input type="text" class="form-style">
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Telefone</label>
														<input type="text" class="form-style">
														<a href="#this">+ Adicionar outro telefone</a>
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Email</label>
														<input type="text" class="form-style">
														<a href="#this">+ Adicionar outro telefone</a>
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-4">
														<label>Site</label>
														<input type="text" class="form-style">
													</div>
												</div>

												<div class="row">
													<div class="col-12 col-m-2">
														<button type="submit" class="btn btn-blue btn-full">Salvar</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

<?php include("inc/footer.php"); ?>