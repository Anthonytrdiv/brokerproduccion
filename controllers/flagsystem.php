<?php
class flags{

    // Aqui debe ser de 12 - Ya que en la busqueda de resultados sera en bloque de 12 registros - Para la prueba colocaremo 2
    // Este Flag es de configuración del sistema para mostrar el total del resultado de la busqueda que realiza el usuario en el front
    // flag se usa en resultableespecialista.php
    public $flagviewregister = 8;

    // Flag que controla los tamaños de las caja de texto y los nombres
    // Caja de titulo
    public $tamanotitulos = 20;
    // Caja de descripcion
    public $tamanodescripcion = 56;
    // Flags estados tickets
    public $flagestaabierto = 1;
    public $flagestacerrado = 2;
    public $flagestintermedio = 3;
    public $flagestanotconcluido=4;
    //FIN Flags estados tickets
    // Tipo e contratacion si es directo o Subasta D = Directo / S=SUBASTA
    public $flagdirecto="D";
    public $flagsubasta="S";

    // Tipo de usuarios 1 = Cliente | 2 = Especialista
    public $flaguserclie = 1;
    public $flaguserespe = 2;

    // nropuntadefecto si esque no fue concluido el servicio por x razones
    public $puntaje = 0;

    // Flag de tipo de error de servicio no concluido
    public $flagnoconcluido = 99; // Por defecto 

    // flag estrellas
    public $flagcovid = "tempcovid";
    public $flagpoints = "points";

    // limitador del nro de de veces que va a parecer el modal id01 que es la bienvenida
    public $id01 = 3;

    //Flags envio Email

    public $emailfrom = "token@ibrokergo.com";
    public $asunto = "Link Activar Usuario - IBrokerGo!";
    public $urlsite = "https://ibrokergo.com";
    public $bienvenida = "Estamos muy felices de que formes parte de la comunidad de <strong>IBROKER GO!</strong>. Solo necesitas activar tu cuenta para terminar tu proceso de afiliacion.¡Falta muy poco!";
    public $buttonactivate = "Activar tu cuenta";
    public $emailtext1 = "Conoce los beneficios de ser Socio de <strong>IBROKERGO*:</strong>";
    public $title1 = "100% Digital";
    public $titlesubt1 = "Encuentra especialistas que solventen tus necesidades";
    public $title2 = "Si eres especialista";
    public $titlesubt2 = "Si eres especialista , recibe trabajos por parte de varios clientes.";
    public $title3 = "Si eres Cliente";
    public $titlesubt3 = "Encuentra especialistas de varios servicios que cumplan con buena calidad y precio.";
    public $title4 = "Especialista - Cliente";
    public $titlesubt4 = "Lleguen a acuerdos para terminar un servicio cumpliendo con calidad y precio.";
    public $ftittle = "Para poder acceder a todas las funcionalidades , no te olvides de registrar tus datos personales.";

    // Flags activate usuario
    public $urlwebaactivate = "/activate/usertoken.php";
    // Estados de usuarios 1: Activado 2 : Bloqueado 3: Eliminado 4:Activando Usuario
    public $useractivado = 1;
    public $userbloqueado = 2;
    public $userdelete = 3;
    public $useractivandouser = 4;

    // Flags email reset

     public $urlsitereset = "https://ibrokergo.com/bienvenido/resetoken.php";
     public $bienvenidareset = "Has solicitado el reseteo de tu password en IBROKERGO! , sigue el link indicado e ingresa el Token";
     public $buttonreseteo = "Link de Reseteo";
     public $emailtext1reset = "Tu Token es :";
     public $titlesubt1reset = "Sigue el link e ingresa el token , gracias";
     public $asuntoreset = "Link de Reseteo de Usuario - IBrokerGo!";

     //Flags Nuevo Servicio
     public $asuntonewservice = "IBROKERGO - Te han generado un nuevo Servicio";
     public $emailnewservice = "trabajo@ibrokergo.com";
    }
?>