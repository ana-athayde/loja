<html>

<head>
	<title>Minha Loja</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>

<body>
<header>
	<h1>Super Loja</h1>
</header>

<nav>

	<ul class="menu">

	<li><a href="index.html">Home<a></li>
	
	<li>Clientes
		<ul class="submenu">
		<li><a href="cadastrar.html">Cadastrar<a></li>
		<li><a href="consultar.html">Consultar<a></li>
		</ul>
	</li>

	<li>Produtos
		<ul class="submenu">
		<li><a href="../produtos/cadastrar.html">Cadastrar<a></li>
		<li><a href="../produtos/consultar.html">Consultar<a></li>
		</ul>
	</li>
	</ul>

</nav>

<article class="listar_produtos">
<h2>Listar Clientes</h2>

<table>	
	<?php include "suporte_listar.php"; ?>
</table>

</article>

<footer>
<p>&copy; 2018 Superloja.com. Todos os direitos reservados.</p>
</footer>

</body>
</html>