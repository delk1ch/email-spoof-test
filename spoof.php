<?php
    
    #SET ME
    $to = '';
    $from = '';
    $body = 'This is an email spoofing test. Find out more at: https://github.com/kristovatlas/email-spoof-test';
    $subject = 'Email spoof test attempt via spoof.php';
    
    $headers = getHeaders($from);
    
    $result = mail($to, $subject, $body, $headers);
    
    if ($result)
    {
        echo "\tMail was accepted to be sent by the local mail server. :)\n";
    }
    else
    {
        echo "\tMail was rejected for sending by the local mail server. :(\n";
    }
    
    function getHeaders($from_address)
    {
        return "From:$from_address\r\nReply-To:$from_address\r\nReturn-path:$from_address";
    }
?>