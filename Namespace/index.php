<?php
    require_once "src/Email/Envio.php";
    require_once "src/Email/Adaptadores/Mailgun/Adaptador.php";
    require_once "src/Email/Adaptadores/SES/Adaptador.php";

    use App\Email\Adaptadores\Mailgun\Adaptador as Mailgun;
    use App\Email\Adaptadores\SES\Adaptador as SES;

    $obj = new SES;
    $obj2 = new Mailgun;
    

    var_dump($obj);
    var_dump($obj2);