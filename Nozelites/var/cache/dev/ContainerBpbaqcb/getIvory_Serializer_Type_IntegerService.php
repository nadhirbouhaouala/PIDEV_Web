<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.serializer.type.integer' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\TypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\IntegerType.php';

return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
