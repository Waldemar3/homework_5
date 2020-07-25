<?php
class myAutoload
{
    private $prefixes = [];

    public function addNamespace(string $namespace, string $prefix)
    {
        $this->prefixes[$namespace][] = $prefix;
    }

    public function register()
    {
        spl_autoload_register(array($this, 'loadFile'));
    }

    private function loadFile($class){

        $classExplode = explode("\\", $class);

        $this->mappedFile(
            str_replace(end($classExplode), "", $class),
            end($classExplode)
        );
    }

    private function mappedFile($namespace, $class){

        if(!isset($this->prefixes[$namespace])){
            return false;
        }

        foreach ($this->prefixes[$namespace] as $prefix) {

            $file = $prefix . str_replace('\\', '/', $class . '.php');

            if(file_exists($file)){
                require $file;
            }

        }
    }
}

$autoloader = new myAutoload();
$autoloader->addNamespace('App\\', '../src/');
$autoloader->register();

/* Пример создания неймспейсов(можно создать несколько):

$autoloader->addNamespace('App\\', '../src/');
$autoloader->addNamespace('App\application\\', '../src/');

('App\application\\' два бэкслеша в конце обязательны
 */
