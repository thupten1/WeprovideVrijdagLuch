<?php
    class app
    {
        function __construct(){
            // Create connection
            $conn = new mysqli('wp02.weprovide.com', 'vrijdagmiddag_wp', 'aAyv616%rl9fC2&0', 'vrijdagmiddag_wp');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
        }
    }
    
?>