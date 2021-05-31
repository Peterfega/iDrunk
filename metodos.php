<?php $base_dir = dirname(__FILE__);
require "$base_dir/lib/head.php";
require "$base_dir/lib/header.php";?> 
<style>
    @media (max-width: 600px) {
        img {max-width: 100%;}
    }
</style>
<main>
    <section>
        <div class="title_franja position-relative mb-5">
            <div class="franjas_horz position-absolute z-index-1 h-100">
                <div class="row no-gutters align-items-center h-100">
                    <div class="col-12 line bg-primary"></div>
                    <div class="col-12 line bg-secondary"></div>
                    <div class="col-12 line bg-primary"></div>
                </div>
            </div>
            <div class="container text-left">
                <h1 class="bold text-primary d-inline-block mb-0 line-stretch position-relative z-index-2">Manual</h1>
            </div>
        </div>
        <div class="container">
            <div class="padding-left">
				<h2 class="text-left regular">Código, metodología y bibliografía</h2>
				<p class="text-left">iDrunk es una aplicación que mediante una formula sencilla para averiguar la cantidad de alcohol en sangre.</p>
                <p class="text-left">Esta apliacación ha sido desarollada en el IDE <a href="https://developer.android.com/studio?hl=es&gclid=Cj0KCQjw16KFBhCgARIsALB0g8JOJds0UHO3aQCIb3tkzXIe1P7qyBocnNodAXXJTh-EiyefKtsgHzwaAt0ZEALw_wcB&gclsrc=aw.ds" class="text-primary"><u>Android Studio</u></a> y usando el lenguaje de programación <span class="text-primary">Java</span>. A continuación explicaremos el código de la aplicación, dividiendolo en sus partes principales; datos sobre los métodos, fórmulas y alguna explicación biológica de porque se usan ciertas variables; por último haremos refencia a la bibliografía consultada</p>
                <h3 class="text-left text-primary regular"><u>Código</u></h3>
                <div class="row row-cols-1">
                    <div class="col-7">
                        <p class="text-left">Como se ha mencionado anteriormente, esta aplicación se desarrollo en Java, un lenguaje que compite contra el nuevo <span class="text-primary">Kotlin</span> a la hora de realizar aplicaciones en Android (entre otros). A pesar de las diversas opciones existentes he usado Java ya que me siento más familiarizado aunque el IDE de Andorid Studio permite convertir tu código a Kotlin de manera sencilla.</p>
                        <p class="text-left">Podriamos decir que mi aplicación se divide en 3 partes esenciales:</p>
                        <ul class="text-left">
                            <li><span class="text-primary">Pantalla de introducción</span></li>
                            <li><span class="text-primary">Menú principal</span></li>
                            <li><span class="text-primary">Lista interactiva</span></li>
                        </ul>
                        <p class="text-left">Iremos comentando cada parte con su código para entender como se realizaron estas secciones. Mostraremos las principales partes del codigo pero el codigo completo esta aquí.</p>
                    </div>
                    <div class="col-5">
                        <img src="<?= $base_url;?>/img/metodos/movil-cap-lil.jpg">
                    </div>
                </div>
                <h5 class="text-left text-primary regular">Pantalla de introducción</h5>
                <p class="text-left">Esta pantalla muestra el logo de la aplicacion sobre un fondo negro, esto especialemnte para remarcar los colores de la apliacación y porque de manera facil obtenemos un efecto que da mucho estilo a nuestra apliacación. Se utiliza el siguiente código:</p>
                <pre class="text-left text-primary">
                    <code>
                        private static int SPLASH_TIME_OUT=4000;

                        @Override
                        protected void onCreate(Bundle savedInstanceState) {
                            super.onCreate(savedInstanceState);
                            setContentView(R.layout.welcome_screen);
                            //noinspection deprecation
                            new Handler().postDelayed(new Runnable() {
                                @Override
                                public void run() {
                                    Intent inicio = new Intent(SplashIntro.this, MainMenu.class);
                                    startActivity(inicio);
                                    finish();
                                }
                            },SPLASH_TIME_OUT);
                        }
                    </code>
                </pre>
                <p class="text-left">Esta primera variable, expresada en milisegundos, será el tiempo que la pantalla de inicio tardará en desvanecerse y mostrar el menú. El otro elemento importante es la <span class="text-primary"><i>Handler class</i></span> la cual es similar a la clase <span class="text-primary"><i>Thread</i> (hilos)</span>, como podemos ver en la interfaz <span class="text-primary"><i>Runnable</i></span> o el método <span class="text-primary"><i>run()</i></span></p> 

                <h5 class="text-left text-primary regular">Menú principal</h5>
                <p class="text-left">El menú principal es el eje central de toda la app, ya que es donde se producen la introducción de datos y el acceso a la lista interactiva, este es su código:</p>
                <pre class="text-left text-primary">
                    <code>
                        public void acceder_listas(View view){
                            Intent listas = new Intent(MainMenu.this, ListaActivity.class);
                            startActivity(listas);
                            finish();
                        }

                        public void onRadioButtonClicked(View view) {
                            boolean checked = ((RadioButton) view).isChecked();
                            switch (view.getId()){
                                case R.id.btn_hombre:
                                    if(checked){
                                        c_dif = 0.7;
                                    }
                                    break;

                                case R.id.btn_mujer:
                                    if(checked){
                                        c_dif = 0.6;
                                    }
                                    break;

                                default:
                                    //Do nothing
                                    break;
                            };
                        }

                        public void calculo_alcholemia(View view){
                            try {
                                peso = Double.parseDouble(String.valueOf(dato_peso.getText()));

                                Double K = peso * c_dif;
                                tasa_alc = getIntent().getDoubleExtra("totalT", 10.00) / K;

                                System.out.println(getIntent().getDoubleExtra("totalT", 10.00));

                                if (tasa_alc < 0.15) {
                                    resultado.setText(getDosDecimales(tasa_alc) + " Seguro");
                                    resultado.setTextColor(Color.GREEN);
                                //TASA DE ALCOHOL RIESGOSA
                                } else if (tasa_alc >= 0.15 && tasa_alc <= 0.5) {
                                    resultado.setText(getDosDecimales(tasa_alc) + " Arriesgado");
                                    resultado.setTextColor(0xFFFFB900);

                                    Intent whatsapp_arriesgado = new Intent(Intent.ACTION_SEND);
                                    whatsapp_arriesgado.setType("text/plain");
                                    whatsapp_arriesgado.setPackage("com.whatsapp");
                                    whatsapp_arriesgado.putExtra(Intent.EXTRA_TEXT, "Mi tasa de alcoholemia un poco alta ("+tasa_alc+"g/l),por favor ponte en contacto conmigo");
                                    try {
                                        startActivity(whatsapp_arriesgado);
                                    } catch (android.content.ActivityNotFoundException ex) {
                                        ex.printStackTrace();
                                        Snackbar.make(view, "El dispositivo no tiene instalado WhatsApp", Snackbar.LENGTH_LONG).show();
                                    }
                                } else if (tasa_alc > 0.5){
                                    resultado.setText(getDosDecimales(tasa_alc) + " Peligroso");
                                    resultado.setTextColor(Color.RED);

                                    Intent whatsapp_peligroso = new Intent(Intent.ACTION_SEND);
                                    whatsapp_peligroso.setType("text/plain");
                                    whatsapp_peligroso.setPackage("com.whatsapp");
                                    whatsapp_peligroso.putExtra(Intent.EXTRA_TEXT, "Mi tasa de alcoholemia es alta ("+tasa_alc+"g/l), por favor contacta conmigo o alguien cercano.");
                                    try {
                                        startActivity(whatsapp_peligroso);
                                    } catch (android.content.ActivityNotFoundException ex) {
                                        ex.printStackTrace();
                                        Snackbar.make(view, "El dispositivo no tiene instalado WhatsApp", Snackbar.LENGTH_LONG).show();
                                    }
                                }
                            }catch (Exception e){
                                Toast.makeText(getApplicationContext(), "Revise que todos los datos se han rellenado", Toast.LENGTH_SHORT).show();
                            }

                        }
                    </code>
                </pre>
                <p class="text-left">Recordemos que esta app necesita 3 datos, peso, sexo y los gramos de alcohol puro, que seran obtenidos por la interfaz y sus <span class="text-primary"><i>EditText</i></span> o <span class="text-primary"><i>RadioButton</i></span>. Estos datos introducidos contienen o se le asignan datos numericos que formaran la ecuación final y nos dara el resultado en <span class="text-primary">gramos de alcohol puro por litro de sangre (g/l)</span>. En el codigo podemos ver como se recoje un dato numerico de un <span class="text-primary"><i>EditText</i></span>, que representará el valor del peso, o según el <span class="text-primary"><i>RadioButton</i></span> pulsado, que representa el sexo del usuario, el valor del coeficiente de difusión (c_dif) será uno u otro.</p> 
                <p class="text-left">También podemos observar comó según el valor de la tasa de alcoholemia el texto adquirirá un color y creará un mensaje para <span class="text-primary"><i>Whatsapp</i></span> en caso de que este instalado.</p>

                <h5 class="text-left text-primary regular">Lista interactiva</h5>
                <p class="text-left">Proximamente</p>
                <pre class="text-left text-primary">
                    <code>
                    Test
                    </code>
                </pre>
                <p class="text-left">En desarrollo</p> 

                <h3 class="text-left text-primary regular"><u>Metodología</u></h3>
                <div class="row row-cols-1">
                    <div class="col-5">
                        <img src="<?= $base_url;?>/img/metodos/method.png">
                    </div>
                    <div class="col-7">
                        <p class="text-left">Tras ver como funciona la app debemos centrarnos en las fórmulas y datos en los que hemos basado nuestros métodos de cálculo. Tras esta app los datos se han revisado, provado y contrastado en distintas páginas.</p>
                        <p class="text-left">Debemos hacer distinción entre dos variables y sus componentes, a la vez que explicamos como estas entran en juego. También daremos una explicación sencilla de porque se requieren ciertos datos.</p>
                </div>
            </div>

            <h5 class="text-left text-primary regular">Datos biológicos</h5>
            <p class="text-left">Nuestra apliacación calculará el alcohol en sangre en base a unos datos ofrecidos por el usuario, siendo estos su peso, sexo y la cantidad de alcohol ingerido:
                <ul class="text-left">
                    <li><span class="text-primary">Peso (en kg)</span>: El alcohol se distribuye a través del agua del organismo de manera relativamente homogénea. Dada una misma ingesta, cuanto mayor sea el contenido de líquido del organismo, menor será la tasa de alcoholemia resultante. De ahí que una persona de mayor peso tenga una tasa de alcoholemia menor, tras consumir la misma cantidad, que otra persona de menor peso.</li>
                    <li><span class="text-primary">Sexo</span>: Para responder a la pregunta ¿a quién afecta más el alcohol, a hombres o mujeres? Podemos empezar diciendo que cuando se bebe alcohol, los efectos del mismo dependen de varios factores, entre ellos la composición corporal y el peso. Esto se debe a que el alcohol se disuelve mejor en agua que en las grasas, por lo que en presencia de grasa, se distribuye en menor medida por los tejidos manteniéndose en la circulación. Siendo que las mujeres suelen tener mayor porcentaje en grasa, tienen una absorción más lenta. Este se define mediante una variable denominada "coeficiente de difusión".</li>
                    <li><span class="text-primary">Masa de alcohol puro (g)</span>: Este se calcula según los grados del alcohol, el volumen ingerido y la densidad del alcohol. Tras ingerir una bebida alcohólica, el alcohol pasa al sistema digestivo donde se absorbe rápidamente y se diluye dentro de la sangre provocando aumento progresivo de la alcoholemia. El organismo absorbe el alcohol 2 a 3 veces más rápido que lo elimina. Cada vaso suplementario aumenta muy rápidamente la alcoholemia.</li>
                </ul>
            </p>

            <h5 class="text-left text-primary regular">Fórmulas</h5>
            <p>A continuación explicaremos las 2 variables que entran en nuestra fórmula de cálculo y como de que se componen
                <ul class="text-left">
                    <li><span class="text-primary">T (alcoholemia)</span>: Tras ingerir una bebida alcohólica, el alcohol pasa al sistema digestivo donde se absorbe rápidamente y se diluye dentro de la sangre provocando aumento progresivo de la alcoholemia. El organismo absorbe el alcohol 2 a 3 veces más rápido que lo elimina. Cada vaso suplementario aumenta muy rápidamente la alcoholemia, se calcula así:<br><span class="text-primary">T= (grados alcohol / 100) x Volumen ingerido (en ml) x 0,8</span><br>Aquí entra en juego los grados del alcohol y la cantidad ingerida, pues cuanto más fuerte sea el licor y más cantidad se beba, mayor es la concentración de alcohol en sangre, y por último se multiplica por la densidad del alcohol (que generalmente es cercana o igual a 0,8).</li>
                    <li><span class="text-primary">K (componente físico)</span>: Aquí entran los anteriomente explicados coeficientes de difusión, que representan la facilidad con la que se disuelve un componente, y el peso de la persona. Su cálculo se realiza de la siguiente manera:<br><span class="text-primary">Peso de la persona(en kg) x coeficiente de difusión</span><br>Más detalles en nuestra bibliografía.</li>
                    <li><span class="text-primary">Fórmula final</span>: Después de unir todo usaremos esta fórmula:<br><span class="text-primary">Tasa de alcoholemia (en g/l de sangre)= T/K</span><br> Adjuntaremos una tabla orientativa de para ver algunos ejemplos.</li>
                </ul>
            </p>
            <img src="<?= $base_url;?>/img/metodos/cuadro-consumo.jpg">
            <p class="mini">Cuadro consumo en relación a las copas y el peso</p>

            <h3 class="text-left text-primary regular"><u>Bibliografía</u></h3>
            <h5 class="text-left text-primary regular">Datos sobre anatomía</h5>
                <ul class="text-left">
                    <li><a href="https://fehv.org/afecta-igual-alcohol-hombres-mujeres/" class="text-primary">fehv.org</a>, diferencias de absorción del alcohol entre sexos.</li>
                    <li><a href="https://www.tupunto.org/sustancias/alcohol-2/que-factores-influyen-en-la-absorcion-del-alcohol/#:~:text=Dada%20una%20misma%20ingesta%2C%20cuanto,otra%20persona%20de%20menor%20peso." class="text-primary">tupunto.org</a>, diferencias de absorción del alcohol entre sexos.</li>
                </ul>
            </p>

            <h5 class="text-left text-primary regular">Cálculo de tasa de alcoholemia</h5>
            <p class="text-left">IMPORTANTE!: Nuestras fórmulas fueron contrastadas con algunos profesionales como sanitarios, por lo que nuestra fórmula puede diferir de las mostradas a comtinuación, que sirvieron como orientación.
                <ul class="text-left">
                    <li><a href="https://www.blitzresults.com/es/tasa-de-alcoholemia/" class="text-primary">blitzresults.com</a>, calculadora de alcoholemia.</li>
                    <li><a href="https://www.pruebaderuta.com/que-es-y-como-se-calcula-la-tasa-de-alcoholemia.php" class="text-primary">pruebaderuta.com</a>, información sobre la tasa de alcoholemia.</li>
                </ul>
            </p>

            <h5 class="text-left text-primary regular">Otros términos</h5>
            <ul class="text-left">
                <li><a href="https://es.wikipedia.org/wiki/Coeficiente_de_difusión" class="text-primary">wikipedia.org</a>, explicación sobre el coeficiente de difusión.</li>
            </ul>
        </div>
    </section>
</main>


<?php require "$base_dir/lib/footer.php";
require "$base_dir/lib/foot.php";?> 