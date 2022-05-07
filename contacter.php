<?php
    require_once(__DIR__.'/vendor/autoload.php');
    use \Mailjet\Resources;

    define('API_USER','0b8a0215ff2ac5f0e49043ded14ce765');
    define('API_LOGIN','');
    $mj = new \Mailjet\Client('API_USER','API_LOGIN',true,['version' => 'v3.1']);

    if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $body = [
                'Messages' => [
                  [
                    'From' => [
                      'Email' => "maxime.lombardglz@gmail.com",
                      'Name' => "Maxime"
                    ],
                    'To' => [
                      [
                        'Email' => "maxime.lombardglz@gmail.com",
                        'Name' => "Maxime"
                      ]
                    ],
                    'Subject' => "Demande de contact / Embauchement",
                    'TextPart' => "$email, $message",
                  ]
                ]
              ];
              $response = $mj->post(Resources::$Email, ['body' => $body]);
              $response->success();
              echo "Email envoyé avec succès!";

        }else{
            echo "Cet email n'est pas valide";
        }


    }else{
        header('location:index.php');
        die();
    }
