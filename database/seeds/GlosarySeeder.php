<?php

use Illuminate\Database\Seeder;
use App\Glosary;

class GlosarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        Glosary::create([
            'name' => 'Alarmas sin cuotas',
            'content' => 'El término “alarmas sin cuotas”  o “alarmas no conectadas a CRA” se refiere a aquellos sistemas de alarma que no van conectados a una Central Receptora de Alarmas. La Central Receptora de Alarmas es la encargada de monitorizar la señal de los sistemas y recibir los avisos de salto de alarma, así como activar los protocolos necesarios en caso de confirmarse el salto de alarmas, como el aviso a la Policía. Por tanto, en caso de intrusión en un local o vivienda que tenga instalada una alarma sin cuotas, el propio usuario recibirá un aviso en su teléfono móvil, pero el aviso no será recibido por ninguna empresa de seguridad ni por la Policía. Otra de las diferencias principales de estas alarmas respecto a las alarmas conectadas a CRA es que no tienen cuotas mensuales para el cliente. Al no existir la conexión con la Central ni el servicio de monitorización continuo, el usuario solo tiene que hacer frente al coste por la instalación del sistema.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Alarmas hogar y negocio | Polling alarmas | Alarmalia',
            'content' => 'El polling se trata de la técnica remota por la cual las empresas de alarmas verifican periódicamente que la señal de los elementos del sistema de alarmas funciona correctamente. El objetivo es descubrir si existe sabotaje del sistema. En caso de que la Central no reciba correctamente la señal, se envía un error de comunicación a la misma, y se pone en marcha el protocolo de seguridad necesario.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Alarmas para casa y negocio | Sirena alarmas | Alarmalia',
            'content' => 'La sirena es un elemento adicional del sistema de alarmas que puede ir por separado o integrado en otros elementos como el panel. Su objetivo es meramente disuasorio, es decir, pretende asustar al posible intruso para ahuyentarle y evitar que lleve a cabo el robo.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Alarmas de seguridad hogar y negocio | Disuasión | Alarmalia',
            'content' => 'La disuasión se refiere ala capacidad de provocar desánimo en un intruso mediante la indicación de que un inmueble cuenta con elementos de protección. Habitualmente el efecto disuasorio se consigue mediante la colocación delas placas de la compañía de alarmas en el exterior del inmueble, en lugares bien visibles. El intruso será más reticente a entrar en este tipo de viviendas o negocios protegidos. Otros elementos podrían conseguir un efecto disuasorio en el posible intruso: el barrio o urbanización en la que se sitúe la vivienda y su nivel de seguridad tienen efecto también sobre la probabibilidad de “éxito” de la intrusión.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Alarmas hogar y negocios | Comparar alarmas | Alarmalia',
            'content' => 'El sabotaje se produce cuando un intruso manipula una alarma o cualquier elemento de seguridad con la finalidad impedir que funcione correctamente. En el caso de las alarmas, el sabotaje impide que el sistema pueda enviar la señal a la central de alarmas, y por tanto, que desde la Central Receptora se verifique el salto y se envíe a la Policía. Uno de los métodos más habituales de sabotaje es el corte de electricidad. Un corte de electricidad se puede dar por un fallo de suministro o bien por un sabotaje. En ambos casos es necesario tener claro que las consecuencias son diferentes en caso de que disponga de un sistema de alarma inalámbrico o por cable. En el caso de sistemas de alarma inalámbricos, éstos suelen contar con baterías externas de larga duración que aseguran la conectividad del sistema en estos casos. Es importante tener en cuenta que la empresa de seguridad debe revisar esta batería periódicamente, para asegurar que funcione correctamente. Algunos sistemas de alarma inalámbricos permiten ser instalados en una vivienda o negocio sin luz al ser alimentados por baterías de elementos tan robustos y duraderos como el zinc. En el caso de sistemas de alarma cableados, el sabotaje consiste en el corte del cable de alguno de los elementos que está conectado físicamente a la central de alarmas. Si este hecho se produce, el sistema identifica el sabotaje y envía un aviso a la Central, indicando la zona saboteada. Para dificultar esta tarea a los intrusos es una buena práctica que la central esté oculta.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Alarma vía radio/inalámbricas',
            'content' => 'Las alarmas que funcionan mediante señal de radio, o alarmas inalámbricas, son aquellas en las que la alarma no está conectada físicamente a la central, lo que las diferencia de las alarmas por cable. Esta característica las convierte en más vulnerables a posibles interferencias en su señal de transmisión a la central. Estos sistemas de alarma normalmente transmiten las señales por radiofrecuencia, gracias a los detectores de movimiento -con o sin cámara- que emiten señales a la central o panel de la alarma, y que en caso de salto de alarma verificado envían un aviso a la Central Receptora de Alarmas (CRA). La instalación de las alarmas mediante señal de radio o inalámbricas es mucho más sencilla y rápida y no suele suponer obras, por lo que su coste también es inferior. Este tipo de alarmas suelen instalarse en hogares y también en negocios de tamaño pequeño o mediano, con necesidades de seguridad baja o moderada, es decir, localizaciones con necesidades de seguridad de grado 1 o 2.',
            'letter' => 1
        ]);
        Glosary::create([
            'name' => 'Cuotas de la alarma',
            'content' => 'Las empresas de seguridad que comercializan sistemas de alarma conectados a Central Receptora de Alarmas, suelen incluir dos tipos de cuotas en el precio de la alarma. 
            ¿Qué incluye el precio en cada una de las cuotas?
                – Cuota de alta del equipo. Incluye la consultoría de seguridad que realiza el comercial en el hogar o negocio, así como la instalación del mismo.
                – Cuota mensual del servicio. Incluye la conexión a la Central Receptora de Alarmas, 365 días al año, 24 horas, y la revisión y mantenimiento del sistema.
            La cuota mensual del servicio variará según el modelo de contratación del equipo de alarma. Algunas compañías de seguridad dan la opción de elegir entre alquilar el equipo o comprarlo.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Central Receptora de Alarmas',
            'content' => 'La Central Receptora de Alarmas (CRA) es el lugar donde se monitoriza continuamente la señal de los sistemas de alarma y donde se reciben los saltos de alarma. Además de la monitorización de los saltos de alarma, desde la Central se trabaja en la verificación de los mismos y, en caso de confirmarse la intrusión, en la activación del protocolo de seguridad necesario y aviso a la Policía. Es importante tener en cuenta que, para conectar un sistema de seguridad a una central de alarmas, la empresa correspondiente debe cumplir con varios requisitos establecidos por la ley: La empresa instaladora debe estar inscrita en el registro correspondiente.
                Los elementos que se instalen deben estar aprobados según lo que indica el artículo 3 de la Orden Ministerial INT/316/2011 (http://www.interior.gob.es/web/servicios-al-ciudadano/normativa/ordenes-int/orden-int-316-2011-de-1-de-febrero#art.%203) 
                La empresa debe contar con el certificado de instalación y realizar las revisiones preventivas de los equipos, tal y como se indica en los artículos 4 y 5 de la citada Orden Ministerial.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Central de alarmas / Panel',
            'content' => 'La central de alarmas es el corazón del sistema de alarma y su función es recibir las señales de los detectores de alarma y el resto de elementos del sistema de seguridad. En caso de salto de alarma, la central de alarmas es la encargada de dar aviso a la Central Receptora de Alarmas para que comience el protocolo de actuación necesario y aviso a la Policía. En el caso de alarmas inalámbricas, el sistema no va conectado físicamente a la central, al contrario que en los sistemas cableados, que sí están conectados físicamente y alimentados continuamente por la central. Esta central o panel puede instalarse mediante cableado o únicamente conectado a la corriente. En el primer caso, el panel no es portátil y se oculta, lo que supone un mayor nivel de seguridad; en el segundo caso, el usuario puede mover el panel de una habitación a otra en función de sus necesidades. Otra característica de algunos sistemas de alarma es que sus paneles tienen habla-escucha. Esto quiere decir que el panel es un elemento de comunicación en dos direcciones, desde la Central Receptora de Alarmas al usuario, y viceversa.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Comparador de alarmas | Intrusión alarmas | Alarmalia',
            'content' => 'La intrusión consiste en la entrada no autorizada de una persona en un hogar o negocio. En caso de disponer de un sistema de alarma, los detectores son los encargados de descubrir una intrusión y de activar los mecanismos necesarios para la puesta en marcha del protocolo de actuación necesario, en caso de salto de alarma verificado. La intrusión puede tener lugar en cualquiera de los accesos de la vivienda (puertas, ventanas, terraza, jardín…). Es importante contar con un experto de seguridad que pueda asesorar al cliente respecto al tipo y número de elementos de alarma necesarios en cada caso.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Comparador de alarmas | Glosario de Alarmas inhibición | Alarmalia',
            'content' => 'La inhibición es una de las posibles formas que tienen los intrusos de impedir que la señal de los detectores de alarma inalámbricos llegue a la central, y por tanto, se produzca el salto de alarma y la Central Receptora pueda verificarla y avisar a la Policía. Se realiza con inhibidores de señal, que son aparatos que emiten señales de interferencia en las bandas de frecuencia de la alarma, impidiendo la correcta emisión. Su objetivo es interrumpir las comunicaciones en ciertas frecuencias, introduciendo ruido, de forma que la banda se satura y no pueda recibir la información necesaria. El uso de aparatos inhibidores no está permitido para particulares. Tal y como indica la Unidad Central de Seguridad Privada del Ministerio de Interior en el informe UCSP Nº: 2010/009 (https://www.policia.es/org_central/seguridad_ciudadana/unidad_central_segur_pri/i_reservada/2010/2010_009.pdf), cualquier dispositivo inhibidor de frecuencia sólo puede ser utilizado por las Fuerzas y Cuerpos de Seguridad y Administraciones Públicas autorizadas.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Comparador de alarmas | Alarmas por cable | Alarmalia',
            'content' => 'Las alarmas por cable son aquellas en las que la alarma está conectada físicamente a la centrala través de cableado, en lugar de estar conectadas mediante sistema de radio o inalámbrico. Las alarmas por cable son totalmente resistentes a interferencias en la señal transferida a la central, por lo que no es posible que la señal sea inhibida. Además, al estar conectadas a la central, permiten detectar cualquier fallo de los elementos de forma inmediata. La instalación de este tipo de sistema de alarma sí requiere de obras, por lo que en caso de que acabes de adquirir una vivienda o local comercial y estés planteándote su instalación, lo mejor es que aproveches las obras y prepares la instalación para ello. Las alarmas por cable suelen instalarse en viviendas de tamaño medio o grande, y también en naves industriales, oficinas y negocios de gran tamaño. Es importante destacar que este tipo de alarmas es de obligatoria instalación en localizaciones con riesgo de grado 3 o 4 (alto o muy alto), tal y como se indica en el artículo 2 de la orden ministerial INT/316/2011',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Comparador de alarmas | CCTV alarmas | Alarmalia',
            'content' => 'CCTV (Circuito Cerrado de Televisión) es una tecnología de vídeovigilancia formada por una o varias cámaras situadas en diferentes habitáculos o ambientes de un hogar o negocio. Estos sistemas permiten un acceso continuo al usuario final de lo que está siendo grabado en cada una de las cámaras de seguridad. Normalmente este acceso a las imágenes se realiza desde un ordenador o desde una aplicación móvil específica para ello, facilitada por el proveedor de la solución. Estos sistemas son totalmente complementarios a cualquier sistema de alarma inalámbrica o por cable, y refuerzan el nivel de seguridad de los mismos. Además de las cámaras, esta tecnología incluye vídeo grabadores, donde se almacenan las imágenes grabadas por las cámaras del circuito. El grabador dispondrá de tantos canales de entrada de vídeo como necesitemos, en función del número de cámaras necesarias en cada sistema de vídeovigilancia.',
            'letter' => 3
        ]);
        Glosary::create([
            'name' => 'Detector de alarmas',
            'content' => 'Los detectores de alarma son el elemento clave en los sistemas de alarma. Son los encargados de descubrir cualquier movimiento no autorizado. Cuando cambia su estado, son los responsables de enviar la señal a la Central Receptora de Alarmas para que, en caso de alarma verificada, se ponga en marcha el protocolo correspondiente. Cada sistema de alarma trabaja con tecnologías diferentes: 
            – Las alarmas mediante señal de radio o inalámbricas normalmente detectan cambios de temperatura.
            – Las alarmas cableadas suelen incluir detectores de doble tecnología, con sensores que miden variaciones de temperatura y movimiento. Su tecnología es más precisa y permite evitar muchos saltos de alarma falsos, al tener que darse ambas condiciones para que salte.
            Los detectores pueden incluir cámara o no. Dependiendo del sistema de alarma la composición de los elementos suele variar, aunque la mayoría de instalaciones disponen de algún detector con cámara. En el caso de sistemas cableados, los detectores no tienen cámara, por lo que siempre hay que complementar el sistema con cámaras CCTV. A pesar de tratarse de doselementos independientes, se integran y se complementan entre ellos a la hora de enviar una señal de alarma. Además de los detectores de alarma existen en el mercado otro tipo de detectores que sirven de complemento de seguridad en una vivienda o negocio:
            – Detector de humos. Componente adicional del sistema de seguridad que detecta si existe humo en el ambiente y envía una señal de aviso.
            –  Detector de escapes de gas. Componente que detecta que existe fuga de gas en el aire.
            – Detector de inundaciones. Dispositivo que se instala cerca del suelo para poder detectar cualquier presencia de líquidos anormal.
            – Detector de rotura de cristal. Dispositivo que se instala en el techo o en una zona elevada de la pared, por encima del cristal que se quiere proteger, y detecta cualquier golpe en el vidrio, a través del ruido que produce.
            – Detector perimetral. Dispositivo capaz de detectar la presencia de intrusos antes de que accedan a la vivienda o negocio. Suelen instalarse en zonas al aire libre, como jardines o terrazas.',
            'letter' => 4
        ]);
        Glosary::create([
            'name' => 'Falso salto de alarma',
            'content' => 'Existen multitud de causas que pueden provocar un falso salto de alarma, pero entre ellos éstos serían las principales:
            – Errores humanos, por parte del usuario del sistema. Una de las causas más comunes es que el código introducido por el usuario a la hora de activar o desactivar el sistema no sea correcto, por lo que se produce el salto de alarma.
            – Ubicación de los detectores, No es muy común, pero podría darse la situación de que los detectores de alarma estuviesen situados en un lugar poco apropiado, en el que factores externos como el viento, el paso de una mascota o incluso el movimiento de una ventana, provocasen el salto del sensor.
            – Errores de verificación de la empresa de alarmas. Este tipo de errores no suelen darse en los sistemas de alarmas con vídeo verificación. La Central Receptora puede verificar de forma rápida que el salto es fallido, y por tanto, no avisar a la Policía.
            Gracias a las últimas actualizaciones de la Ley de Seguridad Privada, se ha conseguido reducir en gran medida los saltos de alarma falsos. Estos son los procedimientos principales por los que un salto de alarma se considera válido:
            – Se activen al menos 3 detectores de alarma en un periodo de tiempo determinado.
            – Exista vídeo verificación de al menos uno de los elementos detectores o cámaras de CCTV.
            – Exista un audio directo con la Central de Alarmas, previo y posterior al salto de alarma.
            – Haya verificación presencial del salto de alarma.',
            'letter' => 6
        ]);
        Glosary::create([
            'name' => 'Grado de seguridad de las alarmas',
            'content' => 'Los diferentes grados de seguridad de las alarmas están marcados por laOrden Ministerial INT/316/2011. En ella se indica cuál es la definición de los grados de seguridad, que clasifica del 1 al 4, siendo el 1 las de menor riesgo y el 4 las de mayor riesgo.
            Grado 1 o bajo riesgo: aplica a sistemas de alarma con señalización acústica, pero no conectados a una central de alarmas o centro de control.
            Grado 2 o de riesgo bajo-medio: aplica a viviendas y negocios pequeños, que deciden conectarse a una central de alarmas o centro de control. En localizaciones de grado 2 se recomienda contar con sistemas de vídeoverificación.
            Grado 3 o de riesgo medio-alto: aplica a aquellos establecimientos que la ley determina que deben incluir una serie de medidas de seguridad, así como industrias o locales comerciales a los que se exija conectar a una central receptora de alamas o centro de control. Por ejemplo, sectores con necesidades de grado 3 sería una joyería o una Administración de Lotería. En localizaciones de grado 3 es obligatorio contar con sistemas de vídeoverificación.
            Grado 4 o de riesgo alto: aplica a infraestructuras críticas, instalaciones militares (con materia explosivo reglamentado) o empresas de depósito de valores, efectivo, metales preciosos, explosivos o materias peligrosas, independientemente de que necesiten conexión con central de alarmas o centro de control.',
            'letter' => 7
        ]);
        Glosary::create([
            'name' => 'Servicio de Vigilantes propios',
            'content' => 'El servicio de Vigilantes propios se trata de un servicio de seguridad complementario al sistema de alarma, que consiste en el envío de un vigilante de seguridad al hogar o negocio del cliente en el momento en que se confirma el salto de alarma. Este vigilante se traslada personalmente al lugar de la intrusión, y junto a la Policía, será quien verifique la intrusión en la vivienda o local comercial.',
            'letter' => 20
        ]);
        Glosary::create([
            'name' => 'Sistema mixto (inalámbrico y cable)',
            'content' => 'Existen en el mercado sistemas mixtos que combinan elementos de sistemas de alarma inalámbricos y cableados. Los elementos inalámbricos son aquellos que no están conectados físicamente a la central, al contrario de los elementos por cable.',
            'letter' => 20
        ]);
        Glosary::create([
            'name' => 'Vídeo verificación',
            'content' => 'El procedimiento de vídeoverificación es uno de los marcados por la Ley de Seguridad Privada para que desde la Central Receptora de Alarmas se pueda confirmar si el salto de alarma es real. Es la forma más segura de verificar el salto de alarma, ya que consiste en comprobar a través de las cámaras del sistema -o de sus detectores con cámara- si efectivamente hay un intruso dentro de la vivienda o negocio. En el momento en que se produce el salto de alarma, las cámaras envían imágenes o vídeo a la Central Receptora, que se encarga de verificar si es real o no y de poner en marcha los protocolos de actuación necesarios.',
            'letter' => 23
        ]);
    }
}
