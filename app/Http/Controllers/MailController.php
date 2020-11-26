<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail from BOUTA REDA',
            'body'  => '\tMonsieur REDA BOUTA,\n\t

            Numéro de référence : 911678\n
            
            Bonjour,\n
            
            Nous avons d\'accusé réception de dossier de candidature et nous voudrions vérifier vos critères de sélection concernant une éventuelle candidature d’immigration d\'emploi au Canada et commencer votre processus si vos critères correspondent à la demande gouvernementale et au service de NII-CANADA.
            
            Il est très important que vous répondiez à cet e-mail en complétant vos informations manquantes ci-dessous.
            
           \n -Numéro de téléphone principal : 00-
            
           \n   -Numéro de téléphone alternatif : 00-
            
           \n -Emploi actuel:
            
           \n -Salaire mensuel:
            
           \n  -Niveau d\'éducation:
            
           \n  -Niveau d\'anglais :
            
           \n    -Quelles sont vos motivations :
            
           \n  Il est crucial que nous puissions vous joindre le plus rapidement possible car votre demande est en attente depuis quelques temps déjà dans notre système.
            
           \n Veuillez répondre à cet e-mail et nous indiquer le meilleur jour et heure pour vous contacter.
            
           \n  Cordialement,
            
           \n  Département d\'emploi NII pour le Canada.
            
            '
        ];

        Mail:: to("reda19burn1997@gmail.com")->send(new TestMail($details));

        return "Email Sent";
    }
}
