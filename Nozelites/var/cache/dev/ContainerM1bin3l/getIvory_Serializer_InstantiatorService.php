<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.serializer.instantiator' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Instantiator\\InstantiatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Instantiator\\DoctrineInstantiator.php';

return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
