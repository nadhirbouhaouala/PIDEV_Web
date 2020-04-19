<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.overlay.polyline' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\Overlay\\PolylineSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\AbstractCollector.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Collector\\Overlay\\PolylineCollector.php';

return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.polyline']) ? $this->services['ivory.google_map.helper.collector.overlay.polyline'] : ($this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector())) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.polyline']) ? $this->services['ivory.google_map.helper.renderer.overlay.polyline'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService.php')) && false ?: '_'});
