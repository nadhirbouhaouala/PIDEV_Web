<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.renderer.html.stylesheet_tag' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\AbstractRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Html\\AbstractTagRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Html\\StylesheetTagRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.tag']) ? $this->services['ivory.google_map.helper.renderer.html.tag'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Html_TagService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.html.stylesheet']) ? $this->services['ivory.google_map.helper.renderer.html.stylesheet'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService.php')) && false ?: '_'});
