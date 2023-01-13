<?php
namespace Src;

use Src\Helpers\SocialFacade;
use function DI\create;
use DI\ContainerBuilder;


class App{


    public $map = [
      'Social' => SocialFacade::class,
    ];

    public function bind($name){

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions($this->map);

        $container = $containerBuilder->build();

        $facade = $container->get(SocialFacade::class);


    }
}
