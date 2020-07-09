<?php
if ($_POST){
    $slanjePoruka= '';
    $imaGreska=1;

    if ($_POST['name'] === ''){
        $slanjePoruka="Unesite ime!";
    } else if ($_POST['email'] === ''){
        $slanjePoruka="Unesite imejl adresu!";
    } else if ($_POST['message'] === ''){
        $slanjePoruka="Unesite poruku!";
    } else {
        $imaGreska=0;
    }

    if(!$imaGreska){
        $emailAdresa = 'aleksaeric2001@gmail.com';
        $emailNaslov = $_POST['subject'];
        $emailPoruka = $_POST['message'];
    
        $emailOd = $_POST['name'] . '<' . $_POST['email'] . '>';
        $emailHeader = 'From: ' . $emailOd . "\r\n". 
                       'Reply-To: ' . $emailOd . "\r\n";
        
        if(mail($emailAdresa, $emailNaslov, $emailPoruka, $emailHeader)){
            echo "<script type='text/javascript'>window.top.location='feedback_sent.php';</script>"; exit;
        }else {
            echo "<script type='text/javascript'>window.top.location='feedback_error.php';</script>"; exit;
            $imaGreska=1;
        }
        echo "<div>$sistemPoruka</div>";
        if ($imaGreska){
            echo "<script type='text/javascript'>window.top.location='feedback_error.php';</script>"; exit;
        }
    }
}
?>


