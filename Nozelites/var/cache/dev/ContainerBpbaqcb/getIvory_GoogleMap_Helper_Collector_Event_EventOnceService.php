<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.collector.event.event_once' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\AbstractCollector.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\Event\\EventOnceCollector.php';

return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
