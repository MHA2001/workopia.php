<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 *
 */

function basePath($path=''){
    return __DIR__.'/'.$path;
}

/**
 * Load a view
 * @param mixed $name
 * @return void
 */

 function loadView($name){

    $viewPath = basePath("views/{$name}.view.php");
    if (file_exists($viewPath)){
        require $viewPath;
    }else{
        echo "View {$name} not found!";
    }
 }

 /**
 * Load a partial
 * @param mixed $name
 * @return void
 */

 function loadPartial($name){
    $partialPath = basePath("views/partials/{$name}.php");
    if(file_exists($partialPath)){
        require $partialPath;
    }else{
        echo "Partial {$name} not found!";
    }
 }