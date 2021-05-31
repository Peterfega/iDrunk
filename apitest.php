<?php $base_dir = dirname(__FILE__);

require_once "$base_dir/lib/consume_api.php";

//Cake Test
if (empty($cc)) {
	$cc = new cURLCake('JSON');
}

$request_data = [
	'repo' => 'Usuarios',
	'select' => ['nombre', 'apellidos', 'mail', 'active'],
	'contain' => [
		'Suscripciones' => [
			'select' => ['mail'],
			'where' => ['Suscripciones.active' => true]
		]
	],
	'where' => [
		'Usuarios.active' => true,
		'Usuarios.mailconfirm' => true
	]
];
$elementos = $cc->post('get_records', $request_data);
if ($elementos) {
	$elem = $elementos[0];
}


//Skyscanner Test
/*if (empty($cc) || $cc->expired_token()) {
	$cc = new cURLSkyscanner();
}

$_POST['query'] = 'sev';

$result = $cc->get("autosuggest/v1.0/{$cc->sky_country}/{$cc->sky_currency}/{$cc->sky_locale}?query={$_POST['query']}&apikey={$cc->token}");
$elementos = json_encode($result);

$request_data = [
	'query' => $_POST['query']
];*/


//AWS Test
/*if (empty($_SESSION['cc'])) {
	$cc = $_SESSION['cc'] = new cURLAws();
} else if (empty($cc)) {
	$cc = $_SESSION['cc'];
}

$elementos = $cc->get("clients");
$request_data = null;*/


require "$base_dir/lib/head.php";
require "$base_dir/lib/header.php";?> 
<main>
	<div class="container text-left">
		<pre>Request data: <?= var_dump($request_data);?></pre>
		<pre>Response data: <?= var_dump($elementos);?></pre>
	</div>
</main>
<?php require "$base_dir/lib/footer.php";
require "$base_dir/lib/foot.php";?> 