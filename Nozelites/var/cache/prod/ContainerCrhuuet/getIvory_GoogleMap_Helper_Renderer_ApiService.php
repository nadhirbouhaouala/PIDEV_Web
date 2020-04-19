<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.renderer.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\AbstractRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\ApiRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Formatter\\Formatter.php';

return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer(${($_ = isset($this->services['ivory.google_map.helper.formatter']) ? $this->services['ivory.google_map.helper.formatter'] : ($this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(false))) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.api_init']) ? $this->services['ivory.google_map.helper.renderer.api_init'] : $this->load('getIvory_GoogleMap_Helper_Renderer_ApiInitService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.loader']) ? $this->services['ivory.google_map.helper.renderer.loader'] : $this->load('getIvory_GoogleMap_Helper_Renderer_LoaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.requirement_loader']) ? $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory.google_map.helper.renderer.utility.source']) ? $this->services['ivory.google_map.helper.renderer.utility.source'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Utility_SourceService.php')) && false ?: '_'});
