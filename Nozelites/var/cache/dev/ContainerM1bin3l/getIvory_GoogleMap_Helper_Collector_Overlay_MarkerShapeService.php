<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.collector.overlay.marker_shape' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\AbstractCollector.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\Overlay\\MarkerShapeCollector.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\Overlay\\MarkerCollector.php';

return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector(${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.marker']) ? $this->services['ivory.google_map.helper.collector.overlay.marker'] : ($this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector())) && false ?: '_'});
