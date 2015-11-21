<?php include("inc/header_form.php"); ?>

			<main role="main" class="page__form">
				<div class="page__form--header">
					<div class="center">
						<div class="row">
							<div class="col-12">
								<h2>Nova Demanda</h2>

								<!-- <div class="block__message">
									<div class="row">
										<div class="col-11">
											<div class="block__message--text">
												<p>Dados salvos com sucesso.</p>
											</div>
										</div>

										<div class="col-1">
											<a href="#this" class="btn btn-link btn-icon btn-close" title="Fechar"><i class="icon icon-close-c"></i></a>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>

				<div class="page__form--content">
					<div class="center">
						<div class="block__collapse block__collapse--open" data-closeothers="true">
							<div class="row">
								<div class="col-12 col-m-4">
									<div class="block__collapse--title">
										<a href="#this"><i class="bullet bullet-num border-blue">1</i> Informações gerais <span class="btn-edit">Editar</span></a>
									</div>
								</div>

								<div class="col-12 col-m-8">
									<div class="block__collapse--content">
										<form class="validate" action="#url" method="POST" data-ajax="true" data-callfn="registerChangeStep">
											<div class="row">
												<div class="col-12 col-m-3">
													<label class="no-margin-top">Tipo de cadastro</label>
												</div>

												<div class="col-12 col-m-7">
													<div class="radio">
														<input type="radio" name="tipo" id="dado-recurso" checked="checked">
														<label for="dado-recurso" class="sublabel">Recurso</label>
													</div>

													<div class="radio">
														<input type="radio" name="tipo" id="dado-outros">
														<label for="dado-outros" class="sublabel">Outros</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Título<span>Campo obrigatório</span></label>
												</div>

												<div class="col-12 col-m-7">
													<input type="text" class="form-style required" placeholder="">
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Data de entrada</label>
												</div>

												<div class="col-12 col-m-3">
													<div class="input-icon right">
														<i class="icon icon-calendar"></i>
														<input type="text" name="label26" id="dado-label26" class="form-style required mask-date datepicker" placeholder="Ex: 15/08/2015">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Data Limite</label>
												</div>

												<div class="col-12 col-m-3">
													<div class="input-icon right">
														<i class="icon icon-calendar"></i>
														<input type="text" name="label27" id="dado-label27" class="form-style required mask-date datepicker" placeholder="Ex: 15/08/2015">
													</div>
												</div>
											</div>

											<div class="row row-relative">
												<div class="message-to-save col-m-3">
													<p>Aperte Enter</p>
												</div>
												<div class="col-12 col-m-3">
													<button type="submit" class="btn btn-blue btn-full btn-next"><i class="icon icon-arrow-bottom-b"></i>Continuar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="block__collapse" data-closeothers="true">
							<div class="row">
								<div class="col-12 col-m-4">
									<div class="block__collapse--title">
										<a href="#this"><i class="bullet bullet-num border-blue">2</i> Tipo de demanda</a>
									</div>
								</div>

								<div class="col-12 col-m-8">
									<div class="block__collapse--content">
										<form class="validate" action="#url" method="POST" data-ajax="true" data-callfn="registerChangeStep">
											<div class="row">
												<div class="col-12 col-m-3">
													<label>Tipo</label>
												</div>

												<div class="col-12 col-m-7">
													<select name="label17" id="dado-label17" class="form-style required">
														<option value="">Selecione</option>
														<option>Valor 1</option>
														<option>Valor 2</option>
														<option>Valor 3</option>
													</select>

													<a href="#this">+ Incluir novo tipo</a>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Área de interesse</label>
												</div>

												<div class="col-12 col-m-7">
													<select name="label18" id="dado-label18" class="form-style required">
														<option value="">Selecione</option>
														<option>Valor 1</option>
														<option>Valor 2</option>
														<option>Valor 3</option>
													</select>

													<a href="#this">+ Incluir nova área de interesse</a>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Orgão responsável</label>
												</div>

												<div class="col-12 col-m-7">
													<select name="label19" id="dado-label19" class="form-style required">
														<option value="">Selecione</option>
														<option>Valor 1</option>
														<option>Valor 2</option>
														<option>Valor 3</option>
													</select>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label class="no-margin-top">Finalidade do recurso</label>
												</div>

												<div class="col-12 col-m-7">
													<div class="radio">
														<input type="radio" name="tipo" id="dado-aquisicao" checked="checked">
														<label for="dado-aquisicao" class="sublabel">Aquisição de bens</label>
													</div>

													<div class="radio">
														<input type="radio" name="tipo" id="dado-projetos">
														<label for="dado-projetos" class="sublabel">Projetos e obras</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Valor do recurso</label>
												</div>

												<div class="col-12 col-m-3">
													<input type="text" class="form-style mask-money required" placeholder="">
												</div>
											</div>

											<div class="row row-relative">
												<div class="message-to-save col-m-3">
													<p>Aperte Enter</p>
												</div>
												<div class="col-12 col-m-3">
													<button type="submit" class="btn btn-blue btn-full btn-next"><i class="icon icon-arrow-bottom-b"></i>Continuar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="block__collapse" data-closeothers="true">
							<div class="row">
								<div class="col-12 col-m-4">
									<div class="block__collapse--title">
										<a href="#this"><i class="bullet bullet-num border-blue">3</i> Solicitante</a>
									</div>
								</div>

								<div class="col-12 col-m-8">
									<div class="block__collapse--content">
										<form class="validate" action="#url" method="POST" data-ajax="true" data-callfn="registerChangeStep">
											<div class="row">
												<div class="col-12 col-m-3">
													<label>Solicitante</label>
												</div>

												<div class="col-12 col-m-7">
													<input type="text" class="form-style required" placeholder="">

													<a href="#this">+ Adicionar novo solicitante</a>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Município</label>
												</div>

												<div class="col-12 col-m-7">
													<input type="text" class="form-style required" placeholder="">
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Interessado</label>
												</div>

												<div class="col-12 col-m-7">
													<input type="text" class="form-style required" placeholder="">

													<a href="#this">+ Adicionar novo interessado</a>
												</div>
											</div>

											<div class="row row-relative">
												<div class="message-to-save col-m-3">
													<p>Aperte Enter</p>
												</div>
												<div class="col-12 col-m-3">
													<button type="submit" class="btn btn-blue btn-full btn-next"><i class="icon icon-arrow-bottom-b"></i>Continuar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="block__collapse" data-closeothers="true">
							<div class="row">
								<div class="col-12 col-m-4">
									<div class="block__collapse--title">
										<a href="#this"><i class="bullet bullet-num border-blue">4</i> Informações adicionais</a>
									</div>
								</div>

								<div class="col-12 col-m-8">
									<div class="block__collapse--content">
										<form class="validate" action="#url" method="POST" data-ajax="true" data-callfn="registerChangeStep">
											<div class="row">
												<div class="col-12 col-m-3">
													<label>Responsável</label>
												</div>

												<div class="col-12 col-m-7">
													<input type="text" class="form-style required" placeholder="">

													<a href="#this">+ Adicionar outro responsável</a>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Informações adicionais</label>
												</div>

												<div class="col-12 col-m-7">
													<textarea class="form-style" col="5" row="10"></textarea>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-m-3">
													<label>Anexos</label>
												</div>

												<div class="col-12 col-m-7">
													<div class="block__list--archives">
														<ul>
															<li>
																<div class="block__list--archives-item">
																	<div class="col-2 col-m-3">
																		<span class="block__list--archives-ext">DOC</span>
																	</div>

																	<div class="col-9 col-m-8">
																		<p class="block__list--archives-name">nome-do-arquivo.doc</p>
																	</div>

																	<div class="col-1 col-m-1">
																		<a href="#this" class="btn btn-link btn-icon btn-remove"><i class="icon icon-close-b"></i></a>
																	</div>
																</div>
															</li>

															<li>
																<div class="block__list--archives-item">
																	<div class="col-2 col-m-3">
																		<span class="block__list--archives-ext">PDF</span>
																	</div>

																	<div class="col-9 col-m-8">
																		<p class="block__list--archives-name">nome-do-arquivo-grande-tem-que-colocar-pontos-via-css</p>
																	</div>

																	<div class="col-1 col-m-1">
																		<a href="#this" class="btn btn-link btn-icon btn-remove"><i class="icon icon-close-b"></i></a>
																	</div>
																</div>
															</li>
														</ul>
													</div>

													<a href="#this">+ Anexar novo arquivo</a>
												</div>
											</div>

											<div class="row row-relative">
												<div class="message-to-save col-m-3">
													<p>Aperte Enter</p>
												</div>
												<div class="col-12 col-m-3">
													<button type="submit" class="btn btn-blue btn-full btn-save"><i class="icon icon-check"></i>Salvar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

<?php include("inc/footer.php"); ?>