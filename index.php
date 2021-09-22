<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerador de Currículo</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>

	<div id="topo">
		<header>
			<h1 id="titulo">GERADOR DE CURRICULUM VITAE GRÁTIS</h1><br><br>
		</header>
		<header>
			<h4 id="subtitulo">SEJA BEM-VINDO(A)! PREENCHA AS INFORMAÇÕES ABAIXO PARA GERAR SEU CURRÍCULO:</h4><br>
		</header>	
	</div>

	<form action="gerar.php" method="POST">

		<section>
			<header>
				<h5 class="nomegrupo">1. DADOS PESSOAIS</h5>
			</header>

			<fieldset class="grupo">
				<div class="campo">
					<label for="nome"> Nome Completo:</label>
					<input type="text" name="nome" id="nome" required>
				</div>

				<div class="campo">
					<label for="nacionalidade"> Nacionalidade:</label>
					<input type="text" name="nacionalidade" id="nacionalidade" required>
				</div>

				<div class="campo">
					<label for="idade"> Idade:</label>
					<input type="text" name="idade" id="idade" required>
				</div>

				<div class="opcao">
					<label for="sexo">Sexo:</label>
					<input type="radio" name="sexo" id="masculino" value="masculino">
					<label form="masculino">Masculino</label>
					<input type="radio" name="sexo" id="feminino" value="feminino">
					<label form="feminino">Feminino</label>
				</div>

				<div class="campo">
					<label for="estadocivil" name="estadocivil">Estado Civil:</label>
						<select name="estadocivil">
						<option selected="" value="">Selecione uma opção</option>
						<option value="solteiro">Solteiro(a)</option>
					    <option value="casado">Casado(a)</option>
					    <option value="divorciado">Divorciado(a)</option>
					    <option value="viuvo">Viúvo(a)</option>
					    </select>
				</div>
				
				<div class="campo">
					<label for="endereco">Endereço:</label>
					<input type="text" name="endereco" id="endereço" required>
				</div>
				
				<div class="campo">
					<label for="estado">Estado:</label>
					<select " id="estado", name="estado">
						<option selected="" value="">Selecione o Estado (UF)</option>
						<option value="AC">Acre</option>
					    <option value="AL">Alagoas</option>
					    <option value="AP">Amapá</option>
					    <option value="AM">Amazonas</option>
					    <option value="BA">Bahia</option>
					    <option value="CE">Ceará</option>
					    <option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
					    <option value="GO">Goiás</option>
					    <option value="MA">Maranhão</option>
					    <option value="MT">Mato Grosso</option>
					    <option value="MS">Mato Grosso do Sul</option>
					    <option value="MG">Minas Gerais</option>
					    <option value="PA">Pará</option>
					    <option value="PB">Paraíba</option>
					    <option value="PR">Paraná</option>
					    <option value="PE">Pernambuco</option>
					    <option value="PI">Piauí</option>
					    <option value="RJ">Rio de Janeiro</option>
					    <option value="RN">Rio Grande do Norte</option>
					    <option value="RS">Rio Grande do Sul</option>
					    <option value="RO">Rondônia</option>
					    <option value="RR">Roraima</option>
					    <option value="SC">Santa Catarina</option>
					    <option value="SP">São Paulo</option>
					    <option value="SE">Sergipe</option>
					    <option value="TO">Tocantins</option>
					    <option value="EX">Estrangeiro</option>
					</select>
				</div>

				<div class="campo">
					<label for="cidade">Cidade:</label>
					<input type="text" name="cidade", id="cidade" required>
				</div>

				<div class="campo">
					<label for="celular">Celular:</label>
					<input type="text" name="celular", id="celular" required>
				</div>

				<script type="text/javascript">
				$("#celular").mask("(00)00000-0000");
				</script>

				<div class="campo">
					<label for="email">E-mail:</label>
					<input type="email" name="email", id="email" required>
				</div>
			</fieldset>
		 	
		</section>
		<br>
		<section>
			<header>
				<h5 class="nomegrupo">2. OBJETIVO</h5>
			</header>

			<fieldset class="grupo">
				<textarea rows="1" style="width: 26cm" name="objetivo" id="OBJETIVO"></textarea>
			</fieldset>
		
		</section>
		<br>
		<section>
			<header>
				<h5 class="nomegrupo">3. FORMAÇÃO ACADÊMICA</h5>
			</header>
		
			<fieldset class="grupo" id="formacao">
				
				<div id="formacao-campo" name="formacao-campo">

					<div class="campo">
						<label for="curso">Curso:</label>
						<input type="text" name="curso", id="curso">
					</div>

					<div class="campo">
						<label for="instituicao">Instituição:</label>
						<input type="text" name="instituicao", id="instituicao">
					</div>

					<div class="campo">
						<label for="conclusao">Conclusão:</label>
						<input type="number" min="1900" max="2030" name="conclusao" id="conclusao">
					</div>
				
				</div>
			</fieldset>

			<button type="button" id="add-form">+</button>

			<script type="text/javascript">
				$("#add-form").click(function(){
					$("#formacao-campo:last").clone(true).appendTo("#formacao:last");
					});
			</script>

		</section>	
		<br>
		<section>
			<header>
				<h5 class="nomegrupo">4. EXPERIÊNCIA PROFISSIONAL</h5>
			</header>
		
			<fieldset class="grupo" id="experiencia">
				
				<div id="exp-campo" name="exp-campo">
					<div class="campo">
						<label>Empresa:</label>
						<input type="text" name="empresa", id="empresa">
					</div>

					<div class="campo">
						<label>Cargo:</label>
						<input type="text" name="cargo", id="cargo">
					</div>

					<div class="campo">
						<label>Início:</label>
						<input type="number" min="1900" max="2030" name="inicio", id="inicio">
					</div>

					<div class="campo">
						<label>Término:</label>
						<input type="number" min="1900" max="2030" name="termino", id="termino">
					</div>

					<div class="campo">
						<label>Principais atividades desenvolvidas:</label>
						<input type="text" name="atividades", id="atividades">
					</div>
				</div>
			</fieldset>

			<button type="button" id="add-exp">+</button>

			<script type="text/javascript">
				$("#add-exp").click(function(){
					$("#exp-campo:last").clone(true).appendTo("#experiencia:last");
					});
			</script>


		</section>
		<br>
		<section>
			<header>
				<h5 class="nomegrupo">5. QUALIFICAÇÕES E ATIVIDADES COMPLEMENTARES</h5>
			</header>

			<fieldset class="grupo">
				<div id="qualificacoes-campo">
					<textarea rows="1" style="width: 26cm" name="qualificacoes" id="qualificacoes"></textarea>
				</div>
			</fieldset>
		</section>

		<section>
			<br>
			<button class="botao" type="submit">GERAR CURRÍCULO</button>
		</section>	
	
	</form>
</body>
</html>