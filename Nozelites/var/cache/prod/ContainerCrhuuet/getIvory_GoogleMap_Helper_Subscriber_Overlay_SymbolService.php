<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.overlay.symbol' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\Overlay\\SymbolSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.collector.overlay.symbol']) ? $this->services['ivory.google_map.helper.collector.overlay.symbol'] : $this->load('getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.symbol']) ? $this->services['ivory.google_map.helper.renderer.overlay.symbol'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService.php')) && false ?: '_'});
