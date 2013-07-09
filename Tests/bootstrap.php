<?php

spl_autoload_register(function($class) {

  foreach (array('classes', 'traits') as $dir) {
    $file = "$dir" .DIRECTORY_SEPARATOR . "$class.php";
    if (is_readable($file)) {
      require $file;
    }
  }

}, true, false);

/**
 * For autoloading namespaced classes
 */
spl_autoload_register(function($class) {
    
    $className = ltrim($class, '\\');
    if ($lastNsPos = strripos($className, '\\')) {
        $className = substr($className, $lastNsPos + 1);
        
        $file = "classes" .DIRECTORY_SEPARATOR . "$className.php";
        if (is_readable($file)) {
            require $file;
        }
        
    }
   
}, true, false);