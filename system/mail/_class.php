<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

interface interMail{

     /**
     * - Será responsável por tratar as informações e criar um html legível para que seja enviado pro e-mail
     * 
     */
    public function scopoMail($result);

    /**
     * - É o método responsável por tratar e lidar com as configurações e no final, disparar o e-mail.
     * 
     */
    public function SendMail();

    

}

class Mail implements interMail{
    private $from;
    private $to;
    private $assunt;
    private $userSMTP;
    private $message;

    function __get($index)
    {
        return $this->$index;
    }

    function __set($index, $value)
    {
        $this->$index = $value;
    }

    public function scopoMail($result){
       return " <table style='background: #daf0eeed; font-family: system-ui; padding: 10px;'>
                <thead >
                    <tr>
                        <th colspan='2' style='text-align:center'>
                            <h2>ANÁLISE DE COVID DE ".strtoupper($result->user->nome)." </h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style='text-align:center'>
                        <td colspan='2'>
                            <p><strong>INFORMAÇÕES DO PACIENTE</strong></p><br>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 5px 0;'>
                            <p><Strong>NOME: </strong> ".$result->user->nome."</p>
                        </td>
                        <td style='padding: 5px 0;'>
                            <p><Strong>CPF: </strong> ".$result->user->cpf."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 5px 0;'>
                            <p><Strong>TELEFONE: </strong> ".$result->user->telefone."</p>
                        </td>
                        <td style='padding: 5px 0;'>
                            <p><Strong>E-MAIL: </strong> ".$result->user->email."</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' style='text-align:center'>
                            <br>
                            <br>
                            <hr>
                            <p><strong>QUESTIONÁRIO:</strong></p><br>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Dores no Corpo (Body Pain):</strong> <br> R: ".$result->sintomas->dores_corpo."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Tosse (Cough): </strong> <br> R:".$result->sintomas->tosse."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Coriza (Runny Nose): </strong> <br> R:".$result->sintomas->coriza."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Falta de ar (Shortness of Breathe): </strong><br> R: ".$result->sintomas->falta_ar."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Perda de olfato (Loss of Smell): </strong><br> R: ".$result->sintomas->olfato."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Perda de paladar (Loss of Taste): </strong><br> R: ".$result->sintomas->paladar."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Dor de garganta (Sore Throat): </strong> <br> R:".$result->sintomas->garganta."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Fraqueza (Weakness) : </strong> <br> R:".$result->sintomas->fraqueza."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Febre (Fever): </strong> <br> R:".$result->sintomas->febre."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Espirros (Sneezes): </strong> <br> R:".$result->sintomas->espirro."</p>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Calafrios (Chills): </strong> <br> R:".$result->sintomas->calafrios."</p>
                        </td>
                        <td style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Diarréia (Diarrhea): </strong> <br> R:".$result->sintomas->diarreia."</p>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan='2' style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Teve contato com alguém que teve os sintomas mencionados acima ?<br>
                            Have you had contact with someone who had the symptoms mentioned above?: </strong> <br> R:".$result->sintomas->contatos_sintomas."</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' style='padding: 10px 0;'>
                            <p style='line-height: 20px;'><Strong>Temperatura corporal maior que 36,9º?<br>
                            Body temperature greater than 36.9 ºC (98.42 ºF)?: </strong> <br> R:".$result->sintomas->temperatura."</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        ";
    }

    public function SendMail(){

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug =  FALSE; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $this->userSMTP->host;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $this->userSMTP->user;                     //SMTP username
            $mail->Password   = $this->userSMTP->password;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = $this->userSMTP->port ? $this->userSMTP->port : 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($this->from->mail, $this->from->name);
            foreach($this->to as $value){
                $mail->addAddress($value->mail, $value->name);     //Add a recipient
            }
           
           // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $this->assunt;
            $mail->Body    = $this->message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

         
            $mail->send();
            header('location: '.ADMIN);
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}