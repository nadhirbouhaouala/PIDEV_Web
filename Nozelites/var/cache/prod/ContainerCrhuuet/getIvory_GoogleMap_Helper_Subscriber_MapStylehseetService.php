<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.map_stylehseet' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\MapStylesheetSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.stylesheet_tag']) ? $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService.php')) && false ?: '_'});
