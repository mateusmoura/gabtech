<?php include("inc/header.php"); ?>

			<main role="main" class="page__list">
				<div class="page__header">
					<div class="page__title">
						<div class="center">
							<div class="row">
								<div class="col-7 col-m-9">
									<h2>Demandas</h2>
								</div>

								<div class="col-5 col-m-3 align-right">
									<a href="#this" class="btn btn-success">Nova demanda</a>
								</div>
							</div>
						</div>
					</div>

					<div class="center">
						<div class="page__menu">
							<a href="#" class="page__menu--item page__menu--item-active">Todas</a>
							<a href="#" class="page__menu--item">Atrasadas <span class="badge bg-verde">3</span></a>
							<a href="#" class="page__menu--item">Concluídas</a>
						</div>
					</div>
				</div>

				<div class="page__content">
					<hr class="block__filter--line">

					<div class="center">
						<div class="block__filter">
							<div class="row">
								<div class="col-8">
									<button type="button" class="btn btn-white btn-icon block__filter--btn-open"><i class="icon icon-filter"></i> Filtros</button>
									<button type="button" class="btn btn-white btn-icon block__filter--btn-close"><i class="icon icon-arrow-top"></i> <i class="icon icon-arrow-left"></i> Fechar filtro</button>
								</div>

								<div class="col-4 align-right">
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

						<div class="block__filter--wrap">
							<div class="block__filter--options">
								<div class="block__collapse block__collapse--open">
									<div class="block__collapse--title">
										<a href="#this">Informações gerais</a>
										<span class="block__collapse--less">-</span>
										<span class="block__collapse--more">+</span>
									</div>

									<div class="block__collapse--content">
										<div class="row">
											<div class="col-12">
												<label>Palavras-chave</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Obra, Construção, etc.">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Tipo de cadastro</label>

												<select name="label17" id="dado-label17" class="form-style">
													<option value="">Selecione</option>
													<option>Valor 1</option>
													<option>Valor 2</option>
													<option>Valor 3</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Data de entrada</label>

												<div class="input-icon right">
													<i class="icon icon-calendar"></i>
													<input type="text" name="label26" id="dado-label26" class="form-style required mask-date datepicker" placeholder="Ex: 15/08/2015">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Data limite</label>

												<div class="input-icon right">
													<i class="icon icon-calendar"></i>
													<input type="text" name="label27" id="dado-label27" class="form-style required mask-date datepicker" placeholder="Ex: 19/08/2015">
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="block__collapse">
									<div class="block__collapse--title">
										<a href="#this">Tipo de demanda</a>
										<span class="block__collapse--less">-</span>
										<span class="block__collapse--more">+</span>
									</div>

									<div class="block__collapse--content">
										<div class="row">
											<div class="col-12">
												<label>Área de interesse</label>

												<select name="label17" id="dado-label17" class="form-style">
													<option value="">Selecione</option>
													<option>Valor 1</option>
													<option>Valor 2</option>
													<option>Valor 3</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Tipo</label>

												<select name="label17" id="dado-label17" class="form-style">
													<option value="">Selecione</option>
													<option>Valor 1</option>
													<option>Valor 2</option>
													<option>Valor 3</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Orgão reponsável</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Digite o nome">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="block__collapse">
									<div class="block__collapse--title">
										<a href="#this">Solicitante</a>
										<span class="block__collapse--less">-</span>
										<span class="block__collapse--more">+</span>
									</div>

									<div class="block__collapse--content">
										<div class="row">
											<div class="col-12">
												<label>Solicitante</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Digite o nome">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Município</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Digite o nome">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<label>Interessados</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Digite o nome">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="block__collapse">
									<div class="block__collapse--title">
										<a href="#this">Informações adicionais</a>
										<span class="block__collapse--less">-</span>
										<span class="block__collapse--more">+</span>
									</div>

									<div class="block__collapse--content">
										<div class="row">
											<div class="col-12">
												<label>Responsável</label>

												<div class="block__input--includes">
													<div class="block__input--data">
														<input type="text" class="form-style autocomplete" placeholder="Digite o nome">
														<button type="button" class="btn btn-icon btn-more">+</button>
													</div>

													<div class="block__input--list"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-12">
										<button type="button" class="btn btn-blue btn-full btn-filter">Filtrar</button>

										<button type="button" class="btn btn-icon btn-blue btn-full btn-label">Gerar etiquetas <i class="icon icon-label"></i></button>
									</div>
								</div>
							</div>
						</div>

						<div class="block__table">
							<div class="block__table--actions">
								<ul class="list-none">
									<li>
										<div class="checkbox">
											<input type="checkbox" name="label60" id="dado-label60">
											<label for="dado-label60">&nbsp;</label>
										</div>
									</li>
									<li>
										<button type="button" class="btn btn-icon">
											<i class="icon icon-star"></i>
										</button>
									</li>

									<li>
										<button type="button" class="btn btn-icon">
											<i class="icon icon-trash"></i>
										</button>
									</li>
								</ul>
							</div>

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

							<div class="block__pagination align-center">
								<button type="button" class="btn btn-icon btn-gray disabled"><i class="icon icon-arrow-left"></i></button>
								<p class="block__pagination--index"><span>1 - 5</span> de 11</p>
								<button type="button" class="btn btn-icon btn-gray"><i class="icon icon-arrow-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</main>

<?php include("inc/footer.php"); ?>