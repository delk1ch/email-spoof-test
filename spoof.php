<?php
    
    #SET ME
    $to = 'delk1ch99@gmail.com';
    $from = 'delk1ch@staff.its.utexas.edu';
    $body = 'BABO NACIJE';
    $subject = 'DJE CE KO?';
    
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
