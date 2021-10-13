<?php 


$usr = strtolower($_POST['username']);
$pwd = $_POST['password'];

$users = [
  ["username" => "janedoe", "password" => "janethemane"],
  ["username" => "doge", "password" => "ichliebeshiba"],
  ["username" => "erik", "password" => "fyratimmaromdagen"]
];

$status = "";

if( isset($usr) && strlen($usr) > 2 ){

    foreach( $users as $user ){

        $username = strtolower($user['username']);
        $password = $user['password'];

        if( $username === $usr ){
            if ( $password === $pwd ) {
               $status = "Välkommen $username";
               break;
            }else{
                $status = "Fel lösenord";
                break;
            }
        }else{
            $status = "Fel användare";
        }
    }
}else{
    $status = "Ingen användare";
}
echo $status;
?>