<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.serializer.type.object' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\TypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\ObjectType.php';

return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType(${($_ = isset($this->services['ivory.serializer.mapping.factory.default']) ? $this->services['ivory.serializer.mapping.factory.default'] : $this->load('getIvory_Serializer_Mapping_Factory_DefaultService.php')) && false ?: '_'});
