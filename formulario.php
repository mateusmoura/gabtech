<?php include("inc/header.php"); ?>

			<main role="main">
				<h1 class="h1">Formulário</h1>
				<div class="linha">
					<p>Explicação de como usar os elementos do formulário</p>
				</div>
				
				<form action="#url" method="POST" class="padded">
					<h2 class="h2 box">Input tipo texto</h2>

					<div class="linha box">
						<div class="col-6">
							<label for="dado-label">Normal</label>
							<input type="text" name="label" id="dado-label" placeholder="Dica para o usuário">
						</div>

						<div class="col-6">
							<label for="dado-label2">Desabilitado</label>
							<input type="text" name="label2" id="dado-label2" disabled placeholder="Dica para o usuário">
						</div>
					</div>

					<div class="linha box">
						<div class="col-6">
							<label for="dado-label3">Normal</label>
							<input type="text" name="label3" id="dado-label3" class="input-raio" placeholder="Dica para o usuário">
						</div>

						<div class="col-6">
							<label for="dado-label4">Desabilitado</label>
							<input type="text" name="label4" id="dado-label4" class="input-raio" placeholder="Dica para o usuário">
						</div>
					</div>

					<div class="linha box">
						<div class="col-6">
							<label for="dado-label5">Input com icone</label>
							<div class="input-icon">
								<i class="icon icon-busca"></i>
								<input type="text" name="label5" id="dado-label5" placeholder="Dica para o usuário">
							</div>
						</div>

						<div class="col-6">
							<label for="dado-label6">Input com icone direita</label>
							<div class="input-icon direita">
								<i class="icon icon-busca"></i>
								<input type="text" name="label6" id="dado-label6" placeholder="Dica para o usuário">
							</div>
						</div>
					</div>

					<div class="linha box">
						<div class="col-6">
							<label for="dado-label7">Input com icone</label>
							<div class="input-icon">
								<i class="icon icon-busca"></i>
								<input type="text" name="label7" id="dado-label7" class="input-raio" placeholder="Dica para o usuário">
								<i class="icon icon-refresh direita"></i>
							</div>
						</div>

						<div class="col-6">
							<label for="dado-label8">Input com icone direita</label>
							<div class="input-icon direita">
								<i class="icon icon-busca"></i>
								<input type="text" name="label8" id="dado-label8" class="input-raio" placeholder="Dica para o usuário">
							</div>
						</div>
					</div>

					<h2 class="h2">Inputs Mascaras</h2>

					<div class="linha box">
						<div class="col-3">
							<label for="dado-label9">Telefone:</label>
							<input type="text" name="label9" id="dado-label9" class="mask-telefone" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							<label for="dado-label10">CPF</label>
							<input type="text" name="label10" id="dado-label10" class="mask-cpf" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							<label for="dado-label11">CNPJ</label>
							<input type="text" name="label11" id="dado-label11" class="mask-cnpj" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							<label for="dado-label12">CEP</label>
							<input type="text" name="label12" id="dado-label12" class="mask-cep" placeholder="Dica para o usuário">
						</div>
					</div>

					<div class="linha box">
						<div class="col-3">
							<label for="dado-label13">Data</label>
							<input type="text" name="label13" id="dado-label13" class="mask-data" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							<label for="dado-label14">Somente numeros:</label>
							<input type="text" name="label15" id="dado-label14" class="numeros" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							<label for="dado-label15">Criar mascara personalizada</label>
							<input type="text" name="label15" id="dado-label15" class="mask-personalizado" data-mascara="999.9/9999.9.99" placeholder="Dica para o usuário">
						</div>
						<div class="col-3">
							
						</div>
					</div>

					<h2 class="h2 box">Input Upload</h2>

					<div class="linha box">
						<div class="col-12">
							<div class="box-upload">
								<input type="file" name="label16">
							</div>
						</div>
					</div>

					<h2 class="h2 box">Select</h2>

					<div class="linha box">
						<div class="col-6">
							<label for="dado-label17">Select</label>
							<select name="label17" id="dado-label17">
								<option value="">Selecione</option>
								<option>Valor 1</option>
								<option>Valor 2</option>
								<option>Valor 3</option>
							</select>
						</div>

						<div class="col-6">
							<label for="dado-label18">Select</label>
							<select name="label18" id="dado-label18" disabled>
								<option value="">Selecione</option>
								<option>Valor 1</option>
								<option>Valor 2</option>
								<option>Valor 3</option>
							</select>
						</div>
					</div>

					<h2 class="h2 box">Checkbox e Radio</h2>

					<div class="linha box">
						<div class="col-3">
							<div class="checkbox">
								<input type="checkbox" name="label19" id="dado-label19">
								<label for="dado-label19">Opção Selecionada</label>
							</div>
						</div>
						<div class="col-3">
							<div class="checkbox">
								<input type="checkbox" name="label20" id="dado-label20" disabled>
								<label for="dado-label20">Opção Selecionada</label>
							</div>
						</div>

						<div class="col-3">
							<div class="radio">
								<input type="radio" name="label21" id="dado-label21">
								<label for="dado-label21">Opção Selecionada</label>
							</div>
						</div>

						<div class="col-3">
							<div class="radio">
								<input type="radio" name="label22" id="dado-label22" disabled>
								<label for="dado-label22">Opção Selecionada</label>
							</div>
						</div>
					</div>
				</form>

				<form action="#url" method="POST" class="padded validar">
					<h2 class="h2 box">Modelo de Formulário</h2>

					<div class="view">
						<div class="linha separar">
							<div class="col-11">
								<h1 class="h2-form"><i class="bullet bullet-num borda-cinza"><i class="icon icon-correto"></i></i> Tipo de demanda</h1>

								<div class="linha paddedx2">
									<div class="col-12">
										<p class="inline padded">Tipo: <span>Programa de Governo</span></p>
										<p class="inline padded">Área de interesse: <span>15/10/2014</span></p>
										<p class="inline padded">Destino da solicitação: <span>Ministério do Esporte</span></p>
									</div>
								</div>
							</div>

							<div class="col-1">
								<a href="#this" class="cor-verde">Editar</a>
							</div>
						</div>
					</div>

					<div class="view">
						<div class="linha paddedx4">
							<div class="col-6">
								<h1 class="h2-form"><i class="bullet bullet-num borda-verde">1</i> Tipo de demanda</h1>
							</div>

							<div class="col-6">
								<div class="linha box">
									<div class="col-12">
										<label for="dado-label23">Assunto</label>
										<input type="text" name="label23" id="dado-label23" class="required" placeholder="Construção de praça, Compra de equipamentos, etc.">
									</div>
								</div>

								<div class="linha box">
									<div class="col-12">
										<label for="dado-label25">Telefone</label>
										<input type="text" name="label25" id="dado-label25" placeholder="" class="mask-telefone required">
									</div>
								</div>

								<div class="linha box">
									<div class="col-4">
										<label for="dado-label24">Data de entrega</label>
										<div class="input-icon direita">
											<i class="icon icon-calendario direita"></i>
											<input type="text" name="label24" id="dado-label24" class="mask-data required">
										</div>
									</div>
								</div>

								<div class="linha">
									<div class="col-4">
										<button type="submit" class="btn btn-verde"><i class="icon icon-setabaixo"></i> Continuar</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="view">
						<div class="linha paddedx4">
							<div class="col-6">
								<h1 class="h2-form"><i class="bullet bullet-num borda-cinza">2</i> Tipo de demanda</h1>
							</div>
						</div>
					</div>

					<div class="view">
						<div class="linha paddedx4">
							<div class="col-6">
								<h1 class="h2-form"><i class="bullet bullet-num borda-cinza">3</i> Solicitante</h1>
							</div>
						</div>
					</div>

					<div class="view">
						<div class="linha paddedx4">
							<div class="col-6">
								<h1 class="h2-form"><i class="bullet bullet-num borda-cinza">4</i> Informações adicionais</h1>
							</div>
						</div>
					</div>

					<div class="view">
						<div class="linha paddedx4">
							<div class="col-6">
								<h1 class="h2-form"><i class="bullet bullet-num borda-cinza">5</i> Anexos</h1>
							</div>
						</div>
					</div>
				</form>
			</main>

<?php include("inc/footer.php"); ?>