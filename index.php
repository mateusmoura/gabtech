<?php include("inc/header.php"); ?>

			<main role="main" class="page__list">
				<div class="page__header">
					<div class="page__title">
						<div class="center">
							<div class="row">
								<div class="col-7">
									<h2>Demandas</h2>
								</div>

								<div class="col-5">
									<a href="#this" class="btn btn-success">Nova demanda</a>
								</div>
							</div>
						</div>
					</div>

					<div class="center">
						<div class="page__menu">
							<a href="#" class="page__menu--item page__menu--item-active">Todas</a>
							<a href="#" class="page__menu--item">Atrasadas</a>
							<a href="#" class="page__menu--item">Concluídas</a>
						</div>
					</div>
				</div>

				<div class="page__content">
					<div class="center">
						<div class="block__filter">
							<div class="row">
								<div class="col-6">
									<button type="button" class="btn btn-white btn-icon"><i class="icon icon-filter"></i> Filtros</button>
								</div>

								<div class="col-6 align-right">
									<button type="button" class="btn btn-icon block__filter--show"><i class="icon icon-search"></i></button>

									<form class="block__filter--form" action="/" method="GET">
										<div class="row">
											<div class="col-12">
												<div class="input-icon">
													<i class="icon icon-search"></i>
													<input type="text" name="label7" id="dado-label7" class="form-style" placeholder="Buscar">
													<a href="#this" class="icon icon-close right block__filter--close"></a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="block__table">
							<div class="table-responsive">
								<table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
									<thead>
										<tr>
											<th></th>
											<th data-priority="1">Protocolo</th>
											<th data-priority="1">Título</th>
											<th data-priority="2">Tipo</th>
											<th data-priority="3">Solicitante</th>
											<th data-priority="3">Município</th>
											<th data-priority="6">Data limite</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label1" id="dado-label1">
													<label for="dado-label1">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Recurso</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>

										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label2" id="dado-label2">
													<label for="dado-label2">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Outros</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label3" id="dado-label3">
													<label for="dado-label3">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Recurso</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>

										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label4" id="dado-label4">
													<label for="dado-label4">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Outros</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label5" id="dado-label5">
													<label for="dado-label5">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Recurso</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>

										<tr>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="label6" id="dado-label6">
													<label for="dado-label6">&nbsp;</label>
												</div>
											</td>
											<td>0001-15</td>
											<td>Construção da quadra de futebol na...</td>
											<td>Outros</td>
											<td>Prefeito José Eduardo asd asasdfasdf asdfasdf</td>
											<td>São Bernardo do Campos asdfasdf asdfasdf</td>
											<td>25/09/2015</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="block__table--actions">

							</div>
						</div>
					</div>
				</div>
			</main>

<?php include("inc/footer.php"); ?>