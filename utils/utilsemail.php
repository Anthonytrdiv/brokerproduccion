<?php
require_once("../controllers/flagsystem.php");
require_once("../utils/utils.php");
require_once("../modal/entityhashuser.php");
class email {

    function emailregister($emailto,$nombres,$iduser,$ta,$passaleatorio,$fecha){
        $flagsemail = new flags();
        /* variable $ta , es para verificar si la acción sera de insert o update en caso de recuperar contraseña
        1 = Insert 2 = Update
        */
       $userhash = new userhash();

       $userhash->registerhash($emailto,$passaleatorio,$fecha);

        
        // Vamos a crear un número aleatorio y convertirlo a encryptarlo e insertarlo en la tabla SQL


        /// Vamos a insertar en la base de datos de contraseñas como previa actualización
            
         
            
        
   
                    // Vamos a enviar un correo con los datos del usuario
               
                    $msg = "<div class=''>
            <div class='aHl'></div>
            <div id=':rh' tabindex='-1'></div>
            <div id=':um' class='ii gt'>
                <div id=':uj' class='a3s aXjCH '><u></u>
                    <div style='margin:0;padding:0;min-width:100%'>
                        <center style='width:100%;table-layout:fixed'>
                            <div style='max-width:600px'>
                                <table style='margin:0 auto;width:100%;max-width:600px;font-family:arial' align='center' cellpadding='0' cellspacing='0' border='0'>
                                    <tbody>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:0 50px;line-height:0;text-align:center'>
                                                <a href='#' target='_blank' data-saferedirecturl=''><img src='".$flagsemail->urlsite."/librerias/dist/img/user4-128x128.jpg' style='margin:0 auto;border:0;width:50%;max-width:120px' alt='' class='CToWUd'></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <p style='font-size:14px;color:#999;text-align:left'>¡Bienvenid@
                                                    <span>".$nombres."</span>!
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <p style='font-size:14px;color:#999;text-align:center'>".$flagsemail->bienvenida."</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;text-align:center'>
                                                <a style='font-size:18px;color:#fff;display:inline-block;padding:15px 20px;border-radius:25px;text-decoration:none;background:#cc0066;text-align:center' href='".$flagsemail->urlsite.$flagsemail->urlwebaactivate."?iduser=".$iduser."&token=".$passaleatorio."' target='_blank'>
                                                    ".$flagsemail->buttonactivate."
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                <h3 style='margin:15px 0;margin-bottom:0;text-align:center;color:#999;font-size:14px'>.$flagsemail->emailtext1.</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title1</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt1</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title2</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt2</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title3</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title3</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                                <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                    <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                    </div>
                                                    <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                        <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title4</h3>
                                                        <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->title4</p>
                                                    </div>
                                                    <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='text-align:center;padding:15px 50px'>
                                                <a style='display:inline-block;font-size:14px;color:#0099cc;border:2px solid #0099cc;padding:0px 20px;border-radius:25px;text-decoration:none' href='".$flagsemail->urlsite."' target='_blank' data-saferedirecturl='><span style=' font-size:40px;display:inline-block;vertical-align:middle;padding:0 5px;line-height:34px'>+</span> Ver más</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='padding:10px 50px'>
                                                <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>".$flagsemail->ftittle."</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:100%;height:auto;padding:10px 50px'>
                                                <table border='0' align='center' cellpadding='0' cellspacing='0' style='border-spacing:0;width:136px;margin:0 auto'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>2020 IBroker Go!</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </center>
        
                    </div>
                </div>
                <div class='adL'>
        
        
                </div>
            </div>
        </div>
        <div id=':rp' class='ii gt' style='display:none'>
            <div id=':ro' class='a3s aXjCH undefined'></div>
        </div>
        <div class='hi'></div>
        </div>";
                   
                    $header = "MIME-Version: 1.0" . "\r\n";
                    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
                    $header .= "From: ".$flagsemail->emailfrom . "\r\n";
                    $header .="Reply-To: ".$flagsemail->emailfrom . "\r\n";
                    $header .="X-Mailer: PHP/". phpversion();
                    $enviomail = mail($emailto,$flagsemail->asunto,$msg,$header);
                    if($enviomail){
                        return 1; // Envio correcto
                    }else{
                        return 0; // Error al envio
                    }
               

    }    
    function emailreset($name,$emailtoreset,$code){
        $flagsemail = new flags();
          /// Vamos a insertar en la base de datos de contraseñas como previa actualización
        
   
                    // Vamos a enviar un correo con los datos del usuario
               
                    $msgreset = "<div class=''>
                    <div class='aHl'></div>
                    <div id=':rh' tabindex='-1'></div>
                    <div id=':um' class='ii gt'>
                        <div id=':uj' class='a3s aXjCH '><u></u>
                            <div style='margin:0;padding:0;min-width:100%'>
                                <center style='width:100%;table-layout:fixed'>
                                    <div style='max-width:600px'>
                                        <table style='margin:0 auto;width:100%;max-width:600px;font-family:arial' align='center' cellpadding='0' cellspacing='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:0 50px;line-height:0;text-align:center'>
                                                        <a href='#' target='_blank' data-saferedirecturl=''><img src='".$flagsemail->urlsite."/librerias/dist/img/user4-128x128.jpg' style='margin:0 auto;border:0;width:50%;max-width:120px' alt='' class='CToWUd'></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <p style='font-size:14px;color:#999;text-align:left'>¡Bienvenid@
                                                            <span>".$name."</span>!
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <p style='font-size:14px;color:#999;text-align:center'>".$flagsemail->bienvenidareset."</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;text-align:center'>
                                                        <a style='font-size:18px;color:#fff;display:inline-block;padding:15px 20px;border-radius:25px;text-decoration:none;background:#cc0066;text-align:center' href='".$flagsemail->urlsitereset."' target='_blank'>
                                                            ".$flagsemail->buttonreseteo."
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                        <h3 style='margin:15px 0;margin-bottom:0;text-align:center;color:#999;font-size:14px'>.$flagsemail->emailtext1reset.</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                        <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                            <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                            </div>
                                                            <div style='letter-spacing:normal;display:inline-block;width:100%;max-width:387px;vertical-align:middle'>
                                                                <h3 style='color:#0099cc;font-size:18px;line-height:1.2;text-align:center;margin:5px 0'>$code</h3>
                                                                <p style='color:#999;font-size:12px;line-height:1.2;text-align:center;margin:5px 0'>$flagsemail->titlesubt1reset</p>
                                                            </div>
                                                            <hr style='width:100%;padding:10px 0;height:1px;border:0;border-bottom:1px solid #cccc'>
                                                        </div>
                                                       
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px;letter-spacing:-5px;text-align:center'>
                                                        <div style='width:49%;letter-spacing:normal;min-width:200px;display:inline-block'>
                                                            <div style='letter-spacing:normal;display:inline-block;vertical-align:middle;width:113px;text-align:center'>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
        
        
                                                <tr>
                                                    <td style='padding:10px 50px'>
                                                        <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>".$flagsemail->ftittle."</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <hr style='width:100%;height:1px;border:0;border-bottom:1px solid #cccc;margin:0;padding:0'>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style='width:100%;height:auto;padding:10px 50px'>
                                                        <table border='0' align='center' cellpadding='0' cellspacing='0' style='border-spacing:0;width:136px;margin:0 auto'>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style='color:#999;font-size:10px;line-height:1.2;text-align:center;margin:0'>2020 IBroker Go!</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </center>
                
                            </div>
                        </div>
                        <div class='adL'>
                
                
                        </div>
                    </div>
                </div>
                <div id=':rp' class='ii gt' style='display:none'>
                    <div id=':ro' class='a3s aXjCH undefined'></div>
                </div>
                <div class='hi'></div>
                </div>";
                   
                    $header = "MIME-Version: 1.0" . "\r\n";
                    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
                    $header .= "From: ".$flagsemail->emailfrom . "\r\n";
                    $header .="Reply-To: ".$flagsemail->emailfrom . "\r\n";
                    $header .="X-Mailer: PHP/". phpversion();
                    $enviomail = mail($emailtoreset,$flagsemail->asuntoreset,$msgreset,$header);
                    if($enviomail){
                        return 1; // Envio correcto
                    }else{
                        return 0; // Error al envio
                    }


    }

    function newserviceemail($fecha,$detalleservicio,$precio,$nombresol,$emailtowork){
        $msgnewservice = "<tbody>
        <tr>
            <td>
                <table style='width:600px;margin:auto;background-color:#ffffff' class='m_2152376260082570328email-container' width='600' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center'>
                    <tbody>
                        <tr>
                            <td bgcolor='#02b875'>
                                <table dir='ltr' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#02b875' align='center'>
                                    <tbody>
                                        <tr>
                                            <td colspan='2' height='10'></td>
                                        </tr>
                                        <tr>
                                            <td width='42%' valign='middle' align='right'>
                                                <a href='https://ibrokergo.com/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://bnc.lt/olxhome-pe?CRM-crm_id%3D67%26CRM-call_to_action_reference%3DhomePage%26CRM-action%3Duser_confirmation%26CRM-country-id%3D167%26CRM-transaction-id%3D967098960&amp;source=gmail&amp;ust=1591749331185000&amp;usg=AFQjCNGFz-F7hkpmCCl6kMeWaVr2N_-iGw'><img src='https://ibrokergo.com/bienvenido/frontend/assets/img/logobig.png' alt='OLX' style='border:none;outline:none;text-decoration:none;margin:auto;vertical-align:middle' class='CToWUd' width='61' height='61' border='0'></a>
                                            </td>
                                            <td width='4%' height='4%'>&nbsp;</td>
                                            <td width='54%' valign='middle' align='left'>
                                                <font size='2'><a href='https://ibrokergo.com' style='border:0;color:#ffffff;font-family:Arial,sans-serif;font-size:14px!important' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://bnc.lt/olxhome-pe?CRM-crm_id%3D67%26CRM-call_to_action_reference%3DhomePage%26CRM-action%3Duser_confirmation%26CRM-country-id%3D167%26CRM-transaction-id%3D967098960&amp;source=gmail&amp;ust=1591749331185000&amp;usg=AFQjCNGFz-F7hkpmCCl6kMeWaVr2N_-iGw'>#<strong>Nuevo Servicio</strong>Apurate<strong>o</strong>te</a></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='2' height='10'></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height='20'></td>
                        </tr>
                        <tr>
                            <td style='text-align:center' valign='middle' align='center'>
                                <font size='6'><strong style='font-size:32px!important;font-family:Arial,sans-serif;color:#02b875'> ¡Hola!<br>!Te estan solicitando!</strong></font>
                            </td>
                        </tr>
                        <tr>
                            <td height='20'></td>
                        </tr>
                        <tr>
                            <td align='center'>
                                <table width='80%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                    <tbody>
                                        <tr>
                                            <td colspan='3' style='text-align:center'>
                                                <font style='font-size:16px!important;font-family:Arial,sans-serif;color:#4a4a4a' size='3'>Te han generado un nuevo Servicio el <strong>".$fecha." de ".$nombresol."</strong><br>Detalle del Servicio : ".$detalleservicio."</font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height='20'></td>
                                        </tr>
                                        <tr>
                                            <td width='48%' valign='top' align='center'>
    
    
    
    
                                                <div style='border-radius:3px;background:#02b875;text-align:center' valign='middle'>
                                                    <a href='https://ibrokergo.com/bienvenido/logingo.php' style='background:#02b875;border-top:14px solid #02b875;border-bottom:14px solid #02b875;color:#ffffff;font-family:Arial,sans-serif;font-size:17px!important;line-height:1;text-align:center;text-decoration:none;display:block;border-radius:4px;width:100%' target='_blank' data-saferedirecturl=''>
                                                        &nbsp; Ver más detalle - Logueate &nbsp;
                                                    </a>
                                                </div>
    
                                            </td>
                                            <td width='4%' height='4%'>&nbsp;</td>
                                            <td width='48%' valign='top' align='center'>
    
                                                <div style='border-radius:3px;background:#02b875;text-align:center' valign='middle'>
                                                    <a  style='background-color:#ffffff;border:2px solid #02b875;padding:12px 0px;color:#02b875;font-family:Arial,sans-serif;font-size:17px!important;line-height:1;text-align:center;text-decoration:none;display:block;border-radius:4px;width:100%'  data-saferedirecturl=''>
                                                        &nbsp;&nbsp; Precio inicial.: ".$precio." &nbsp;&nbsp;
                                                    </a>
                                                </div>
    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height='20'></td>
                        </tr>
                        <tr>
                            <td valign='middle' align='center'>
                            </td>
                        </tr>
    
                        <tr>
                            <td height='20' bgcolor='#ffffff' align='center'></td>
                        </tr>
                        <tr>
                            <td bgcolor='#ffffff' align='center'>
                                <table width='90%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                    <tbody>
                                        <tr>
                                            <td width='6%' height='4%'>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td width='85' valign='top'><img src='https://ci5.googleusercontent.com/proxy/QGHZVVd5C55fHKAgjop-HWfc-5EX13dVkv79BpWgQ-SaEZg3wITOu0jPhH996miSLJzRU44zLqDPuMDP8W0xnIz5joIi4n945KHIXo3KYWeyEuX_ZpOiDBb095NiPA=s0-d-e1-ft#http://image.info.olx.com.ar/lib/fe8d13727563037f7c/m/1/seguridad-icono.png' alt='' style='border:none;outline:none;text-decoration:none;margin:auto' class='CToWUd' width='85' height='85' border='0'></td>
                                            <td width='6%' height='4%'>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td valign='middle' align='left'>
                                                <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <font style='font-family:Arial,sans-serif;font-size:22px!important;color:#02b875;line-height:1' size='3'>Queremos que tengas una<br>
                                                                    <b>mejor experiencia</b><br>
                                                                </font>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height='10'></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign='middle'> <a style='color:#4a4a4a;font-family:Arial,sans-serif;font-size:14px!important;line-height:1;text-align:left;text-decoration:none;display:block;width:100%;color:#4a4a4a!important'  data-saferedirecturl=''>
                                                                    Recuerda que debes cerrar tus solicitudes <b>Para que más clientes te contacten</b>
                                                                </a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td height='50'></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width='6%' height='4%'>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
    
    
                    </tbody>
                </table>
                <table style='width:600px;margin:auto' class='m_2152376260082570328email-container' width='600' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                        <tr>
                            <td>
                                <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                                    <tbody>
                                        <tr>
                                            <td height='20'></td>
                                        </tr>
                                        <tr>
                                            <td style='text-align:center' align='center'>
    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height='20'></td>
                                        </tr>
                                        <tr>
                                            <td style='text-align:center;color:#777777;font-family:Arial,sans-serif;font-size:13px!important' align='center'> Por favor no respondas a este correo.<br>
                                                Envia tus quejas o recomendaciones<br>
                                                a <a  style='color:#777777;text-decoration:underline' target='_blank' data-saferedirecturl=''>contacto@ibroker.com</a>. </td>
                                        </tr>
                                        <tr>
                                            <td height='20'></td>
                                        </tr>
    
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td height='20'></td>
        </tr>
    </tbody>";
    $flagsemail = new flags();
    
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $header .= "From: ".$flagsemail->emailnewservice . "\r\n";
    $header .="Reply-To: ".$flagsemail->emailnewservice . "\r\n";
    $header .="X-Mailer: PHP/". phpversion();
    $enviomailwork = mail($emailtowork,$flagsemail->asuntonewservice,$msgnewservice,$header);
    if($enviomailwork){
        return 1; // Envio correcto
    }else{
        return 0; // Error al envio
    }


    }
}

?>