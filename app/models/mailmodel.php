<?php

    class mailmodel extends DModel{

        public function sendMail($to,$subject,$message,$headers){
            $result = mail($to,$subject,$message,$headers);
            return $result;
        }
    }

?>