<?php

use Illuminate\Database\Seeder;
use App\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => '¿Qué es un sistema de alarma?',
            'content' => 'Se denomina “sistema de alarma” a aquellos dispositivos antirrobo con aviso de peligros o intrusiones que se instalan para proteger un espacio concreto.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Qué es un sistema de alarma conectado a CRA(Central Receptora de Alarmas)?',
            'content' => 'Una Central Receptora de Alarmas o CRAes el lugar autorizado rara la recepción de avisos que los sistemas de alarma conectados realizan ante un salto de alarma. Los sistemas de alarma conectados son aquellos que ante un salto de alarma se conectan con la CRA. Desde la Central se procede a la verificación del aviso para cerciorarse de que hay una intrusión o peligro real activando automáticamente el protocolo, avisando a la Policía y al servicio de seguridad correspondiente en cada caso. Estos sistemas de alarmas están conectados a la CRA permanentemente, 365 días al año y 24 horas al día.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Puedo utilizar mi sistema de alarma con otro proveedor?',
            'content' => 'Normalmente cada proveedor instala sus propios componentes y configura el sistema para que se conecte con su CRA de manera exclusiva. Esto significa que cada empresa de alarma suele tener restringidos sus dispositivos para que funcionen únicamente bajo sus servicios. Por tanto, no suele ser posible reutilizar el equipo de alarmas con otro proveedor ni utilizar el mismo equipo como sistema de alarmas no conectado, es decir, sin aviso a CRA.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Puedo poner al guarda de seguridad de mi urbanización como contacto de una CRA (Central Receptora de Alarmas)?',
            'content' => 'El cliente elige quien debe ser el primero en ser avisado por la empresa de seguridad correspondiente en caso de producirse un salto de alarma. En caso de que el cliente resida en una urbanización que disponga de servicio propio de seguridad, es posible que el contacto de la empresa de alarmas sea el guarda de seguridad. En este caso, en el momento de producirse un salto de alarma, la Central Receptora verifica si se trata de un salto real, y en este caso, avisa al personal de seguridad de la urbanización, que podrá acudir a la vivienda a verificar presencialmente la intrusión.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Es necesario hacer obras para instalar una alarma?',
            'content' => 'La mayoría de las empresas de alarmas cuentan actualmente con sistemas de alarmas sin cables que no requieren obras para llevar a cabo su instalación. Normalmente la instalación de un sistema de alarma sin cables en un hogar o negocio lleva unas horas. Un técnico especializado se desplaza al lugar de la instalación y lleva a cabo la instalación en el mismo día, sin necesidad de obras ni de molestias para el cliente. En el caso de las alarmas cableadas, la instalación sí que conlleva un proceso más laborioso, ya que se necesita llevar a cabo las conexiones entre los elementos por medio de cables.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Puedo controlar la alarma desde mi móvil?',
            'content' => 'Algunos sistemas de alarma cuentan con aplicaciones móviles que permiten controlar la alarma desde un dispositivo móvil o tablet. Las ventajas principales son que el usuario puede:
                    Activar o desactivar la alarma de forma remota.
                    Activar o desactivar de forma parcial la protección de algunas partes de la casa o el negocio.
                    Si se cuenta con un detector con cámara, es posible obtener imágenes en tiempo real de lo que está pasando dentro del domicilio o negocio.
                    Estas prestaciones son muy útiles para tener control sobre la alarma y lo que ocurre en el domicilio en todo momento.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Qué ocurre con la alarma si se va la luz?',
            'content' => 'En el caso de las alarmas conectadas con la CRA, éstas detectan cualquier anomalía e informan a la Central Receptora de Alarmas de que se ha producido un corte en el suministro eléctrico. Además, la mayoría de sistemas de alarmas incorporan baterías externas de larga duración, por lo que si se va la luz o hay un sabotaje de la red eléctrica, mantendrá en funcionamiento la alarma para que siga teniendo conexión con la CRA. Algunos proveedores también ofrecen la instalación de alarmas en lugares sin servicio de luz contratado, provistas de baterías que suelen ser de zinc, un material robusto y duradero que asegura el funcionamiento del sistema durante un año.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Cuáles son las diferencias entre las alarmas inalámbricas y las alarmas con cable?',
            'content' => 'Los sistemas inalámbricos son más usuales en el hogar que en el negocio. La principal diferencia existente entre estos dos sistemas de alarmas es la vía por la que los elementos de la alarma están conectados entre sí. En una alarma inalámbrica, sus detectores se conectan con el módulo central vía radio. Por el contrario, en los sistemas de alarmas cableadas estos elementos están conectados físicamente a la central a través de cable. Esta diferencia conlleva que la instalación de las alarmas inalámbricas sea más sencilla que la de las cableadas, y también más económica, pero hay que tener en cuenta que la seguridad que ofrece un sistema cableado siempre es mayor, facilitando y agilizando la detección de cualquier intento de sabotaje. Debemos tomar en consideración que para la protección de instalaciones donde la Ley de Seguridad Privada determina como de Grado 3 (gasolineras, farmacias, salas de juego, joyerías…) se exige contar con un sistema cableado/mixto, pues no existe un sistema inalámbrico homologado.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Cuáles son las diferencias entre una alarma conectada y una alarma sin conexión?',
            'content' => 'Los sistemas de alarma conectados son aquellos que tienen conexión con la Central Receptora de Alarmas. Esta conexión es continua ya que la CRA trabaja los 365 días del año, 24horas al día, y se encarga de monitorizar cualquier señal que envíe la alarma y verificar si los saltos de alarmasson reales o no. El envío de información de los sistemas de alarmas a la CRA puede darse por diferentes vías. Algunas de ellas cuentan con doble vía de comunicación, lo que hace que los sistemas estén conectados sin interrupción. Disponer de un sistema de alarmas conectado hace que la protección sea continua y que el cliente cuente con el respaldo de la CRA ante cualquier salto de alarma, a través del envío de imágenes, verificación de salto real y aviso a la Policía. Por otro lado, los sistemas de alarmas no conectados no incluyen esta conexión a la Central Receptora de Alarmas (CRA) y, ante un salto de alarma, únicamente envían una señal de aviso al cliente. En cuanto a costes, los sistemas de alarmas no conectados son más económicos, ya que no cuentan con una cuota mensual, al no estar permanentemente conectados a una CRA.',
            'faq_category_id' => 1
        ]);
        Faq::create([
            'question' => '¿Cuándo va la Policía a mi hogar o negocio?',
            'content' => 'Ante un salto de alarma, la Central Receptora de Alarmas procederá inmediatamente a verificar si ha sido un salto real y, por tanto, hay una intrusión no deseada. En caso de disponer de servicio de vigilante propio, éste se desplaza al lugar donde ha saltado la alarma para llevar a cabo la verificación presencial. Igualmente, ante esta situación se notificade forma automática a los servicios policiales correspondientes para que intervengan. Es entonces cuando la Policía acudiría al domicilio o negocio.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Existe una alarma anti inhibidores?',
            'content' => 'La inhibición de frecuencia se produce utilizando un aparato que envía ondas con el fin de bloquear los sistemas de comunicación de los elementos de la alarma y así conseguir que ésta no funcione. Existen en el mercado proveedores de alarmas que protegen ante intentos de inhibición. Esto se consigue gracias a sistemas de comunicación alternativa que, en caso de que alguien utilice un inhibidor de frecuencia cerca de una alarma, consiguen que ésta pueda seguir enviando la señal de alarma a través de otra vía de comunicación. Por tanto, estos sistemas mandarán un aviso a la Central Receptora de Alarmas (CRA) si detectan que hay un intento de inhibición, lo que activará el protocolo de seguridad ante saltos de alarma.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Cuándo se activa un detector de una alarma?',
            'content' => 'Los detectores de alarma se activarán dependiendo del objetivo que los mismos tengan. Los detectores de alarmas más comunes son los detectores de movimiento (ya sean con cámara o sin ella). Estos detectores se activan al detectar una actividad inusual dentro de la estancia en la que se encuentran. Hay distintas tecnologías que hacen funcionar estos detectores, sea a través de infrarrojos o microondas, que detectan el cambio de temperatura, o rayos, que al ser atravesados harán que se active el detector y envíe un aviso. Otros detectores bastante comunes son los detectores de humo, que se activan al percibir la presencia de humo en la habitación; o los sensores de apertura de puertas, que se instalan en puertas y ventanas y se activarán ante accesos no deseados.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Los sistemas de alarma protegen cuando estoy dentro de casa?',
            'content' => 'Algunos sistemas de alarmas avanzados cuentan con la tecnología para activarla alarma de manera parcial en algunas estancias de la casa. De esta forma, cuando estemos dentro de nuestro domicilio podemos tener controladas las zonas más vulnerables. Esto se consigue mediante la activación parcial de determinados detectores, como el detector de apertura de ventanas. Además, también se pueden activar estancias de manera concreta de manera que si entrara un intruso mientras los inquilinos se encuentran dentro del domicilio, éstos estarían totalmente protegidos. Por ejemplo, si la actividad se localizara en el salón y quisiéramos dejar el detector de movimiento del pasillo activo, tenemos la opción.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Tengo que contratar la central receptora de alarmas y la alarma al mismo proveedor?',
            'content' => 'La Central Receptora de Alarmas es el lugar desde donde se monitorizan los saltos de alarma y donde se verifica si éstos son reales o no. Tras la verificación, es la CRA la que avisará automáticamente a los servicios policiales para que acudan al domicilio o negocio. La CRA debe estar homologada y reconocida por los servicios oficiales pero forma parte de la empresa privada que ofrece los servicios de alarmas, por lo que cada sistema de alarmas se conecta con su propia CRA, siendo diferente entre proveedores.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Qué diferencias hay entre comprar y alquilar una alarma?',
            'content' => 'Si estamos considerando la diferencia que existe entre comprar o alquilar los equipos de alarmas es porque estamos ante un sistema de alarmas conectado y con un servicio ofrecido por un proveedor de seguridad. Dependiendo del proveedor del servicio, se puede dar a elegir entre la posibilidad de alquilar o comprar elequipo. Las diferencias vienen sobre todo en los costes: en la compra del dispositivo se necesitará hacer una inversión inicial más alta que si alquilamos, ya que este coste se incluirá en la cuota mensual. Otro de los aspectos más significativos es que, por lo general, los equipos de alarma sólo son compatibles con los servicios de la empresa que los provee por lo que si optamos por comprar tenemos que tener claro que no podremos reutilizarlos si decidimos cambiar de proveedor.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Qué es la Ley de Seguridad Privada?',
            'content' => 'El Boletín Oficial del Estado número 83, de fecha 5 de abril de 2014, publicó la nueva Ley de Seguridad Privada, la Ley 5/2014, de 4 de abril, disposición general que deroga la anterior Ley 23/92. Esta ley entró en vigor el día 5 de junio de 2014, y tal y como se especifica en el apartado “objeto” de esta misma ley: Esta ley tiene por objeto regular la realización y la prestación por personas privadas, físicas o jurídicas, de actividades y servicios de seguridad privada que, desarrollados por éstos, son contratados, voluntaria u obligatoriamente, por personas físicas o jurídicas, públicas o privadas, para la protección de personas y bienes. Igualmente regula las investigaciones privadas que se efectúen sobre aquéllas o éstos. Todas estas actividades tienen la consideración de complementarias y subordinadas respecto de la seguridad pública. Asimismo, esta ley, en beneficio de la seguridad pública, establece el marco para la más eficiente coordinación de los servicios de seguridad privada con los de las Fuerzas y Cuerpos de Seguridad, de los que son complementarios. Así, en la Ley de Seguridad Privada, encontramos toda la regulación necesaria y actualizada para la realización de servicios y actividades de seguridad privada, así como la conexión y coordinación de ésta con los servicios oficiales.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Cuáles son los requisitos legales que deben cumplir las empresas de alarmas para la instalación de una alarma conectada a CRA?',
            'content' => 'Las empresas de seguridad que instalan los equipos de alarmas deben cumplir varias condiciones para poder conectar sus equipos a una Central Receptora de Alarmas, como estar inscritas en el registro correspondiente y contar con los certificados de instalación necesarios, así como llevar a cabo las revisiones preventivas marcadas en el artículo 3 de la Orden INT/316/2011 de la Ley de Seguridad Privada. Además, el equipo de alarma debe estar homologado y cumplir con las Normas que marca AENOR para garantizar la fiabilidad de estos sistemas de alarma.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Cómo afecta tener instalada una alarma a mi privacidad?',
            'content' => 'Si el sistema de alarma cuenta de un detector con cámara, al cliente le puede surgir la duda de si se pone en riesgo su privacidad dentro del espacio que se desea proteger. La respuesta es NO: la privacidad del entorno está totalmente a salvo. En cumplimiento con la normativa vigente, cuando un sistema de alarmas cuenta con una monitorización que implica grabación de imagen o captura fotográfica conectada con la Central Receptora de Alarmas, ésta no podrá acceder a las imágenes a menos que se dé un salto de alarma y que sea necesaria la verificación del mismo, o bien por petición expresa del cliente.Por tanto,el cliente de alarmas puede sentirse completamente seguro de que su privacidad no se verá mermada a causa de la monitorización realizada por su sistema de alarma. Además, las imágenes se almacenan siguiendo un sistema cifrado para que no sean accesibles, lo que refuerza todavía más la seguridad del cliente.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Qué componentes tiene un sistema de alarma conectado a CRA?',
            'content' => 'Los elementos de un sistema de alarma dependen de las características propias de cada casa o negocio. En base a ellas se configura el sistema que optimiza la seguridad del inmueble. Los elementos se pueden clasificar de la siguiente forma: Elementos centrales de la alarma. Todo sistema de alarma contará con un panel central desde donde se controla todo el funcionamiento de los demás elementos. Además, si se dispone de un sistema con conexión a Central Receptora de Alarmas (CRA), este panel será el que envíe el aviso ante un salto de alarma. En este panel se recoge toda la información procedente del resto de elementos. Además del panel central, se suele contar con un teclado desde el que el cliente podrá interactuar con el sistema de alarma y, en ocasiones, puede contar con teclas de aviso de emergencia que también se reciben desde la Central Receptora de Alarmas. Son los elementos que controlan cada estancia. Existen diferentes tipos de detectores, dependiente de la función que desempeñen. Los detectores de movimiento son los más comunes, y pueden tener cámara o no. Además,existen otros tipos de detectores y sensores, como los detectores de humo, sensores de rotura de cristal, detectores de inundación… que pueden complementar los sistemas de alarmas. Elementos disuasorios. Placas exteriores visibles que avisarán de que el espacio está protegido bajo un sistema de alarma y disuadirá a los posibles intrusos. Elementos periféricos. Toda alarma consta de una serie de elementos que ayudan a su Entre ellos podemos citar los tags de activación o desactivación de la alarma, mandos a distancia, batería, sirena, etc.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Cuál es el precio de una alarma conectada a CRA y qué incluye?',
            'content' => 'El precio de una alarma depende de cada caso. Normalmente es un precio que varía dependiendo de las características propias del inmueble o local, del número de detectores necesarios, del equipo que se adquiera, etc. En el caso de las alarmas conectadas a Central Receptora de Alarmas (CRA), lo más usual es que los elementos de la alarma se instalen en régimen de alquiler. En la cuota mensual de la alarma habrá que contar, por tanto, con el mantenimiento del equipo, más el servicio de conexión con la Central Receptora de Alarmas (CRA). Los proveedores de alarmas, por lo general, dan un precio único y ajustado a las necesidades de cada cliente, por lo que queda totalmente protegido. Además, en este precio se incluyen otros servicios de valor añadido, entre ellos: Instalación. El proveedor se encarga de analizar las características concretas de la casa o del negocio, dejando la alarma instalada y en funcionamiento. Si la conexión es inalámbrica, esta instalación será muy cómoda y rápida, ya que no será necesario hacer obras. Mantenimiento. Ante cualquier problema, el proveedor se encargará de que la alarma esté siempre en funcionamiento y el inmueble, protegido. Así, es posible detectar cualquier posible anomalía, ya se deba al funcionamiento propio de la alarma o sea a causa de un intento de sabotaje. Servicio ininterrumpido (24/7). El proveedor garantiza una protección ininterrumpida y servicio al cliente 24 horas los 365 días del año. Control a través de app o web. Algunos proveedores de alarmas incluyen en el precio de la alarma la posibilidad de controlar la alarma desde una app móvil o desde una web, haciendo que el cliente tenga siempre bajo control su domicilio o negocio. Además, con este servicio, es posible recibir imágenes de su domicilio o negocio en caso de salto de alarma. Dependiendo de cada proveedor, la protección puede verse reforzada con otros servicios complementarios que deberán añadirse al precio del servicio, como vigilantes que acudan al domicilio ante un salto de alarma, detectores de humo, protección ante incendios, inundaciones…',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Qué factores hay tener en cuenta al comparar sistemas de alarma para negocio?',
            'content' => 'Lo primero que tendremos que tener en cuenta a la hora de comparar sistemas de alarmas para un negocio es qué tipo de negocio queremos proteger, ya que según la normativa de Seguridad Privada, el tipo de alarma que debemos instalar depende del sector al que nos dediquemos. La ley distingue entre varios grados de seguridad, siendo los de grado 2 y 3 los que tendremos que tener en cuenta en el caso de alarmas para negocio: Grado 2, de riesgo bajo a medio. Se refiere a pequeños establecimientos o industrias que podrán optar por un sistema de alarma conectado a una Central Receptora de Alarmas (CRA). Grado 3, de riesgo medio/alto. Estos son establecimientos que están obligados a contar con un sistema de alarmas con conexión con una CRA. Estos son: gasolineras, joyerías, negocios de compra/venta de oro, estancos, farmacias, locales de cambio de divisas o bancos, entre otros. Una vez identificado el tipo de alarma que debemos instalar en el negocio, hay elementos que podemos comparar entre unos sistemas y otros, por ejemplo: El protocolo de seguridad ante un salto de alarma: si contamos con una alarma conectada a CRA, será importante tener claro cuál es el protocolo que el sistema de alarma seguirá ante un salto de alarma. Normalmente la CRA recibe el aviso, procede a la verificación de la alerta y avisa a la Policía. Tamaño del local: dependiendo de cómo sea el negocio tendremos que considerar unos sistemas de alarmas u otros. Por ejemplo,para un local pequeño un sistema inalámbrico en el que los elementos de la alarma se conectan con la central vía radiopodría ser suficiente. Si estamos ante un espacio mayor, debemos valorar la posibilidad de combinar el sistema anterior con uno cableado en el que la conexión se hace físicamente a la central. Tendremos que considerar qué otros sistemas complementarios son imprescindibles para la óptima seguridad de nuestro negocio, como personal de vigilancia, sensores de movimiento exterior, detectores de humos, protección contra incendios… Compara alarmas en Securmarket y consigue una guía de seguridad en la que te damos las claves para contratar alarmas para negocio.',
            'faq_category_id' => 2
        ]);
        Faq::create([
            'question' => '¿Qué factores hay que tener en cuenta al comparar sistemas de alarma para casa?',
            'content' => 'La primera reflexión que debemos hacer es si vamos a adquirir una alarma con conexión continua a una Central Receptora de Alarmas (CRA) o, por el contrario, vamos a optar por una alarma no conectada. Las primeras son los sistemas de alarmas recomendados si lo que se quiere es contar con una protección continua y respaldada por profesionales de la seguridad, que velen por nuestra casa y la seguridad de nuestra familia. En este caso, ante un salto de alarma, ésta se conecta automáticamente con la CRA y desde ahí se activa el protocolo de verificación y aviso a la policía en el caso de que sea necesario, por lo que la protección es constante. Las segundas son alarmas con una función meramente disuasoria, ya que al no estar conectadas a CRA, ante un salto de alarma harán sonar la sirena pero no se activará un protocolo de actuación. Si optamos por el sistema de alarma completo para casa con conexión a CRA, hay elementos muy importantes que se deben tener en cuenta a la hora de comparar entre diferentes sistemas y proveedores. Estos aspectos son: Propiedad o alquiler de los elementos de la alarma: los elementos de la alarma se pueden comprar o adquirir en régimen de alquiler. En este punto tendremos que tener en cuenta que raramente se pueden reutilizar los elementos de alarmas entre un proveedor y otro. Prestaciones: hay que tener en cuenta qué prestaciones ofrece cada proveedor o cada sistema de alarma dependiendo del grado de seguridad que queremos para nuestro hogar. Por ejemplo: Servicio de vigilantes propios, instalación, control vía app o web, comunicación única o doble de la señal de la alarma (GPRS / Ethernet), vídeo en alta calidad, etc. Precio: el coste depende de las características propias de cada casa, pero es un aspecto que se debe tener en cuenta ante una comparativa de sistemas de alarmas. Compara alarmas en Securmarket y consigue una guía de seguridad en la que te damos las claves para contratar alarmas para casa.',
            'faq_category_id' => 1
        ]);

    }
}

                                    