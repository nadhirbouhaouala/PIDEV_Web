<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.map_bound' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\MapBoundSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.map_bound']) ? $this->services['ivory.google_map.helper.renderer.map_bound'] : $this->load('getIvory_GoogleMap_Helper_Renderer_MapBoundService.php')) && false ?: '_'});
