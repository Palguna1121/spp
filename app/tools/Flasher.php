<?php 

class Flasher 
{
    public static function set($type, $message)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message
        ];
    }
    
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            $type = $_SESSION['flash']['type'];
            $message = $_SESSION['flash']['message'];

            echo <<<html
                <div class="alert alert-$type">$message</div>
            html;

            unset($_SESSION['flash']);
        }
    }

}