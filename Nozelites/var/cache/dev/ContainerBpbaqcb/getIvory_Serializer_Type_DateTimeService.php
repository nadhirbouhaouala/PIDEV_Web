<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.serializer.type.date_time' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\TypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\DateTimeType.php';

return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'Europe/Berlin');
