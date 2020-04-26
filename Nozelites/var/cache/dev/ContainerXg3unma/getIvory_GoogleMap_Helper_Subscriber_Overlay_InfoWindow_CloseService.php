<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.overlay.info_window.close' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\Overlay\\AbstractInfoWindowSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\Overlay\\InfoWindowCloseSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.info_window']) ? $this->services['ivory.google_map.helper.collector.overlay.info_window'] : $this->load('getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.info_window.close']) ? $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService.php')) && false ?: '_'});
