<!-- //autoloading classes .. includ une seule fois  -->
<?php
session_start();
require_once './bootstrap.php';
spl_autoload_register('autoload');

function autoload($class_name)
{

    $array_paths = array(
        'database/', 'app/classe/', 'models/', 'controllers/',
    );

    $parts = explode('\\', $class_name);
    //change  l'anti selash a slash
    $name = array_pop($parts);

    foreach ($array_paths as $parth) {
        //recuperer les classe qui se forme chemain
        $file = sprintf($parth . '%s.php', $name);
        if (is_file($file)) {
            include_once $file;
        }
    }

}

?>