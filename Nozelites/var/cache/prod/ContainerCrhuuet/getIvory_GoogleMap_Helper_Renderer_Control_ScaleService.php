<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.renderer.control.scale' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\AbstractRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\AbstractJsonRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Control\\ControlRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Control\\ScaleControlRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\json-builder\\src\\JsonBuilder.php';

return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.json_builder']) ? $this->services['ivory.google_map.helper.json_builder'] : ($this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder())) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.position']) ? $this->services['ivory.google_map.helper.renderer.control.position'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Control_PositionService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.control.scale_style']) ? $this->services['ivory.google_map.helper.renderer.control.scale_style'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService.php')) && false ?: '_'});
