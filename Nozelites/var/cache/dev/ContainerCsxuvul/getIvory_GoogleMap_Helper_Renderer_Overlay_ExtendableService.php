<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.google_map.helper.renderer.overlay.extendable' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Overlay\\Extendable\\ExtendableRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\google-map\\src\\Helper\\Renderer\\Overlay\\Extendable\\ExtendableRenderer.php';

$this->services['ivory.google_map.helper.renderer.overlay.extendable'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer();

$a = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.path']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.position']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService.php')) && false ?: '_'};

$instance->setRenderer('Ivory\\GoogleMap\\Layer\\KmlLayer', ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService.php')) && false ?: '_'});
$instance->setRenderer('Ivory\\GoogleMap\\Layer\\HeatmapLayer', ${($_ = isset($this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer']) ? $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] : $this->load('getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService.php')) && false ?: '_'});
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\EncodedPolyline', $a);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polyline', $a);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polygon', $a);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\InfoWindow', $b);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Marker', $b);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Circle', $c);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\GroundOverlay', $c);
$instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Rectangle', $c);

return $instance;
