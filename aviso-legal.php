<?php $base_dir = dirname(__FILE__);
require "$base_dir/lib/head.php";
require "$base_dir/lib/header.php";?> 
<main class="container">
	<div class="estaticos">
		<?php $web = $_SERVER['HTTP_HOST'];?>
		<h1>Aviso Legal</h1>
		<p>Para dar cumplimiento a lo establecido en la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico, a continuación se indican los datos de información general de este sitio web:</p>
		<p>El presente aviso legal regula los Términos y Condiciones de uso de la página web <?= $web;?> (en lo sucesivo, “el sitio web”), de la que es responsable <?= $conf_titular;?>, con NIF <?= $conf_nif;?> y dirección fiscal en <?= $conf_direccion;?>.</p>
		<p>La utilización de la página web le atribuye la condición de usuario de la misma (en adelante, “el Usuario”) e implica la aceptación plena y sin reservas de todas y cada una de las disposiciones incluidas en el presente aviso legal publicado por <?= $conf_empresa;?> (en adelante <?= $conf_alias;?>) en el momento en el que el Usuario acceda a la página web. </p>
		<p><?= $conf_alias;?> se reserva el derecho de efectuar sin previo aviso las modificaciones que considere oportunas en esta página web, pudiendo cambiar, suprimir o añadir tanto los contenidos y servicios que se presten a través de la misma como la forma en la que éstos aparezcan presentados o localizados en su web.</p>
		<p>El Usuario se compromete a utilizar el Portal, los Servicios, los Contenidos y estas Condiciones Generales de conformidad con la ley, la moral, las buenas costumbres y el orden público. Se obliga a usar el Portal, los Servicios y los Contenidos de forma diligente, correcta y lícita.</p>
		<h3>Propiedad intelectual e industrial</h3>
		<p><?= $conf_alias;?> es titular del nombre de dominio <a target="_blank" href="./"><?= $web;?></a>. El sitio web en su totalidad, incluyendo sin exclusión alguna su diseño, estructura y distribución, textos y contenidos, logotipos, marcas, botones, imágenes, dibujos, código fuente, así como todos los derechos de propiedad intelectual e industrial y cualquier otro signo distintivo, pertenecen o tienen como cesionario a <?= $conf_alias;?> o, en su caso, a las personas físicas o jurídicas que figuran como autores o titulares de los derechos, o de sus licenciantes.</p>
		<p>El usuario se compromete a respetar estos derechos. Podrá visualizar los elementos del sitio web e incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, única y exclusivamente, para su uso personal y privado, quedando por tanto terminantemente prohibida la transformación, distribución, comunicación pública, puesta a disposición o cualquier otra forma de explotación, así como su modificación, alteración o descompilación.</p>
		<p>Respecto de los contenidos de la web se reconoce el derecho de cita, por lo que podrán ser reproducidos y utilizados con los fines que se consideren oportunos incluyendo siempre la fuente y el nombre del autor. Los derechos de explotación sobre los mencionados contenidos corresponden en exclusiva a <?= $conf_alias;?>, por lo que no podrá utilizarlos en ningún caso con ánimo de lucro sin consentimiento del autor.</p>
		<p>Las descargas de material gráfico y publicaciones se realiza bajo las condiciones siguientes:</p>
		<ul>
			<li>No Comercial. No puede utilizar el material para una finalidad comercial.</li>
			<li>Sin Obra Derivada. Si remezcla, transforma o crea a partir del material, no puede difundir el material modificado.</li>
			<li>Reconocimiento. Debe reconocer adecuadamente la autoría.</li>
			<li>Los derechos de propiedad intelectual de las obras fotográficas y plásticas en las publicaciones y material gráfico pertenecen al titular correspondiente, tal y como se indica en cada caso (pie de foto y/o créditos).</li>
		</ul>
		<p><?= $conf_alias;?> no asumirá responsabilidad alguna respecto de los derechos de propiedad intelectual o industrial titularidad de terceros que se vean infringidos por un usuario.</p>
		<p>Para cualquier información sobre este particular, puede usted dirigirse por escrito a la siguiente dirección de correo electrónico: <?= $conf_mail;?>.</p>
		<h3>Enlaces</h3>
		<p>El sitio web puede poner a disposición de los usuarios dispositivos técnicos de enlace (links, banners o botones), que permiten a los usuarios acceder a sitios web pertenecientes o gestionados por terceros. Por consiguiente, <?= $conf_alias;?> no será responsable respecto a la información que se halle fuera de esta web y que no esté gestionada por su webmaster.</p>
		<p>El Usuario debe tener en cuenta que <?= $conf_alias;?> no es responsable de las prácticas de privacidad de esas otras webs. Recomendamos a los usuarios que sean conscientes de que al utilizar uno de estos links están abandonando nuestra web y que lean las políticas de privacidad de esas otras webs, en especial si se recaban en ellas datos personales.</p>
		<h3>Direcciones IP y cookies</h3>
		<p>Debido a los protocolos de comunicación existentes en Internet, cuando el Usuario visita nuestra página web, <?= $conf_alias;?> recibe automáticamente la dirección IP (Internet Protocol) que le ha sido asignada a su ordenador por su Proveedor de Acceso. El registro de dicha dirección IP sirve sólo para fines exclusivamente internos, como son las estadísticas de acceso a este sitio web. Como regla general, la dirección IP para un mismo usuario es distinta de una conexión a Internet a otra, con lo que no es posible rastrear los hábitos de navegación a través de la web por un determinado usuario.</p>
		<p><?= $conf_alias;?> puede utilizar cookies cuando un usuario navega por sus sitios y páginas web con la finalidad de optimizar la navegación por la misma. Las cookies que se puedan utilizar en la web se asocian únicamente con el navegador de un ordenador determinado (un usuario anónimo), y no proporcionan por sí mismas ningún dato personal del usuario. Las cookies tienen fines exclusivamente internos, como son las estadísticas de acceso a la web. Las cookies utilizadas no pueden leer los archivos cookies creados por otros proveedores o sitios web. El Usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla de la recepción de cookies y para impedir la instalación de cookies en su disco duro. El Usuario puede consultar las instrucciones y manuales de su navegador para ampliar esta información.</p>
		<h3>¿Qué es una cookie?</h3>
		<p>Las cookies son cadenas de información (solo texto) que guardamos en tu ordenador de sobremesa, portátil o dispositivo móvil (cada uno de ellos, “Dispositivo”) cuando visitas un sitio web. A continuación, cada vez que vuelvas a visitar ese sitio web, tu navegador web vuelve a enviar estas cookies a dicho sitio web, o a otro sitio web que reconozca estas cookies. Puedes encontrar más información sobre las cookies en <a target="_blank" href="http://www.allaboutcookies.org">www.allaboutcookies.org</a> y <a target="_blank" href="http://youronlinechoices.eu/">www.youronlinechoices.eu</a>.</p>
		<p>Las cookies son muy útiles, y pueden usarse para diferentes motivos, como permitirte navegar entre páginas con más eficacia, al recordar tus preferencias, acelerando y facilitando así tu interacción con el sitio web. Algunas veces, las cookies se utilizan para contribuir a garantizar que la publicidad que ves online sea relevante para tus gustos e intereses.</p>
		<h3>Instalación y almacenamiento de cookies</h3>
		<p>Las cookies pueden instalarse tanto para el sitio web que estás visitando (“cookies de origen”) como para sitios web de terceros que tienen contenido en el sitio web que estás visitando (“cookies de terceros”).</p>
		<p>Pueden guardarse mientras visitas la web, o para repetidas visitas. Utilizaremos los siguientes términos para describir el almacenamiento de cookies:</p>
		<ul>
			<li>Cookie de sesión: cookie que nos permite monitorizar tus acciones durante una sesión de navegador. Una sesión de navegador comienza cuando abres la ventana del navegador, y finaliza cuando la cierras. Las cookies de sesión se crean de forma temporal, y se borran una vez se cierra la ventana del navegador.</li>
			<li>Cookie permanente: cookie que permanece en tu Dispositivo durante el periodo de tiempo especificado en la cookie, y que se activa cada vez que visitas el sitio web en el que se creó dicha cookie en particular.</li>
		</ul>
		<h3>Diferentes tipos de cookies</h3>
		<p>Hay cuatro tipos principales de cookies:</p>
		<ol>
			<li>Cookies estrictamente necesarias: estas cookies son esenciales para que puedas navegar y utilizar las funciones de un sitio web, o para obtener los servicios que solicitas. Por ejemplo, para recordar artículos que has metido en un carrito de la compra online. No necesitamos tu consentimiento para utilizar este tipo de cookies.</li>
			<li>Cookies de funcionalidad: estas cookies permiten que el sitio web recuerde las elecciones que haces (como tu nombre de usuario, tu idioma o la zona en la que te encuentras), y ofrecen funciones mejores y más personales. Por ejemplo, un sitio web puede ofrecerte informes locales sobre el clima o el tráfico utilizando una cookie que almacena información sobre la zona en la que te encuentras; o puede recordar los cambios que has hecho al tamaño del texto, la letra y otras partes de los sitios web que puedes personalizar, así como ofrecerte servicios que has solicitado, como ver un vídeo o comentar la entrada de un blog. La información que recogen estas cookies es anónima, y no puede seguir tu actividad en otros sitios web.</li>
			<li>Cookies de ejecución: estas cookies recopilan información acerca de cómo utilizas un sitio web, por ejemplo, las páginas que visitas más a menudo, o si recibes mensajes de error. Estas cookies no recogen información que te identifique. Toda la información recogida por estas cookies es agregada y, por tanto, anónima. Solo se utilizan para mejorar el modo de funcionamiento del sitio web.</li>
			<li>Cookies publicitarias: estas cookies se utilizan para mostrarte publicidad relevante para tus gustos e intereses. También se utilizan para limitar el número de veces que ves un mismo anuncio publicitario y, además, ayudan a medir la eficacia de una campaña de publicidad. Las redes publicitarias suelen ser las encargadas de instalarlas, con permiso del operador del sitio web. Estas cookies recuerdan que ya has visitado un sitio web con anterioridad, y comparten esta información con otras organizaciones, como los anunciantes. Muy a menudo, las cookies publicitarias están enlazadas con la funcionalidad del sitio web proporcionada por la otra organización</li>
		</ol>
		<h3>Cómo utilizamos nosotros las cookies</h3>
		<p>Por lo general, nuestras páginas web utilizan muy pocas cookies. Y la mayor parte de ellas, salvo en casos puntuales, se usan para la generación de estadísticas de visita.</p>
		<ol>
			<li>Cookies estrictamente necesarias. En este sitio web no es necesario usar este tipo de cookies, por lo que no existe ninguna.</li>
			<li>Cookies de funcionalidad. Nosotros utilizamos las siguientes cookies de funcionalidad de origen:
				<ol class="letras">
					<li>Politica_cookies: esta cookie nos permite detectar si has visto la información sobre la cookie, y evita que el sitio web vuelva a mostrar el banner. Se trata de una cookie permanente con una duración de 1 año.</li>
					<li>Nosotros no utilizamos cookies de funcionalidad de terceros.</li>
				</ol>
			</li>
			<li>Cookies de ejecución. A veces, utilizamos las siguientes cookies de ejecución de terceros en nuestras páginas web para objetivos internos, con el objeto de poder mejorar tu experiencia como usuario:
				<ol class="letras">
					<li>Google Analytics: Google Analytics es un servicio de analítica web proporcionado por Google, Inc. (<a target="_blank" href="http://www.google.com/analytics/">http://www.google.com/analytics/</a>). Google Analytics instala cookies para evaluar nuestros servicios online y nuestras aplicaciones móviles, y para proporcionarnos informes acerca del uso que hace el usuario de ellos. También usamos Google Analytics para realizar experimentos de contenido y así poder comprobar y mejorar nuestras páginas web. Google Analytics utiliza tanto cookies de sesión como cookies permanentes. Estas últimas suelen tener una duración que va desde los seis meses hasta los dos años.</li>
					<li>Ten en cuenta que no utilizamos ninguna cookie de analítica para recopilar información personal que te identifique. No obstante, podemos combinar tus datos de registro con la información que obtenemos de los servicios de analítica mencionados anteriormente, con el objetivo de analizar el uso que haces de nuestros servicios.</li>
				</ol>
			</li>
		</ol>
		<p>Excepto en los casos descritos anteriormente, nunca compartimos con terceros la información recogida con cookies.</p>
		<h3>Cómo configurar los ajustes de tus cookies</h3>
		<p>Puedes administrar y controlar la configuración de tus cookies de varias formas. No olvides que, si borras o bloqueas cookies, algunas o todas las páginas web que visites (o funciones de dichas páginas) no funcionarán correctamente o tan eficazmente como antes.</p>
		<p>Si deshabilitas nuestra cookie “politica_cookies” o si borras todas las cookies, no se guardarán tus preferencias y se te informará sobre nuestras cookies cada vez que visites nuestra web.</p>
		<p>Por el momento no es técnicamente posible configurar los ajustes de tus cookies exclusivamente para nuestras páginas web. No obstante, puedes configurarlas desde tu navegador web, así como desde las páginas web de aquellos terceros que instalen cookies en tu dispositivo a través de nuestras páginas web.</p>
		<h3>Deshabilitar cookies desde tu navegador web</h3>
		<p>La mayoría de los navegadores web te proporcionarán información general sobre cookies, permitiéndote ver qué cookies tienes, permitiéndote borrarlas todas o por separado, y permitiéndote bloquear o permitir cookies de todas las páginas web o de páginas web seleccionadas individualmente. También puedes deshabilitar cookies publicitarias de terceros por separado.</p>
		<p>Ten en cuenta que si configuras tus ajustes de cookies desde tu navegador web, los cambios afectarán a todas las páginas web que visites (no solo las nuestras), a no ser que borres o bloquees cada cookie por separado.</p>
		<p>Por lo general, encontrarás información sobre cookies en el apartado de "Ayuda" del navegador web. A continuación te ofrecemos algunos enlaces a los apartados de "Ayuda" de los navegadores web más comunes:</p>
		<ul>
			<li>Internet Explorer - <a target="_blank" href="http://support.microsoft.com/kb/196955">Enlace</a></li>
			<li>Windows Phone - <a target="_blank" href="http://www.microsoft.com/windowsphone/en-us/howto/wp7/web/changing-privacy-and-other-browser-settings.aspx">Enlace</a></li>
			<li>Google Chrome - <a target="_blank" href="http://support.google.com/chrome/bin/answer.py?hl=en&answer=95647">Enlace</a></li>
			<li>Google Android - <a target="_blank" href="http://support.google.com/android/?hl=en">Enlace</a></li>
			<li>Mozilla Firefox - <a target="_blank" href="http://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer?redirectlocale=en-US&redirectslug=Cookies">Enlace</a></li>
			<li>Opera - <a target="_blank" href="http://www.opera.com/browser/tutorials/security/privacy/">Enlace</a></li>
			<li>Safari - <a target="_blank" href="http://www.apple.com/support/safari/">Enlace</a></li>
			<li>Blackberry - <a target="_blank" href="http://docs.blackberry.com/en/smartphone_users/deliverables/32004/Browser_settings_32784_11.jsp">Enlace</a></li>
		</ul>
		<h3>Deshabilitar cookies de terceros</h3>
		<p>Puedes deshabilitar las cookies de Adobe Flash Player de terceros visitando el siguiente enlace:<br><a target="_blank" href="http://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html">http://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html</a></p>
		<p>Puedes evitar que las cookies de ejecución de terceros que utilizamos guarden la información de tus movimientos en la web de forma anónima (tal y como se detalla en "Cómo utilizamos nosotras las cookies") visitando la página web de la compañía correspondiente:</p>
		<ul>
			<li>Google-Analytics - <a target="_blank" href=" https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a></li>
		</ul>
		<p>Por favor, recuerda que si deshabilitas las cookies de ejecución mencionadas, no podemos saber lo que te gusta o no te gusta de nuestras páginas. Así nos resulta más difícil mejorar nuestro sitio web y mejorar tu experiencia de usuario.</p>
		<h3>Exención de responsabilidad por el funcionamiento del sitio web</h3>
		<p><?= $conf_alias;?> no garantiza que el sitio web vaya a funcionar constante, fiable y correctamente, sin retrasos o interrupciones, por lo que no se hace responsable de los daños y perjuicios que puedan derivarse de los posibles fallos en disponibilidad y continuidad técnica del sitio web.</p>
		<p><?= $conf_alias;?> no se responsabiliza por cualquier daño y/o perjuicio y/o beneficio dejado de obtener por el usuario o cualquier otro tercero que se vea perjudicado a consecuencia de cualquier circunstancia de fuerza mayor, caso fortuito, fallo o error de las líneas de comunicación, o de la prestación defectuosa del servicio o fallo en la red de Internet.</p>
		<p><?= $conf_alias;?> no controla ni garantiza la ausencia de virus ni de otros elementos en los Contenidos que puedan producir alteraciones en el sistema informático (software y hardware) o en los documentos electrónicos y ficheros almacenados en el sistema informático del Usuario.</p>
	</div>
</main>
<?php require "$base_dir/lib/footer.php";
require "$base_dir/lib/foot.php";?> 