<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.subscriber.api_javascript' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\DelegateSubscriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\AbstractDelegateSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Subscriber\\ApiJavascriptSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.api']) ? $this->services['ivory.google_map.helper.renderer.api'] : $this->load('getIvory_GoogleMap_Helper_Renderer_ApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.javascript_tag']) ? $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService.php')) && false ?: '_'});
