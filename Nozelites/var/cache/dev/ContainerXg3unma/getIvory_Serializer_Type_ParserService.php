<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory.serializer.type.parser' shared service.

include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\Parser\\TypeParserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\Parser\\TypeParser.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\lexer\\lib\\Doctrine\\Common\\Lexer\\AbstractLexer.php';
include_once $this->targetDirs[3].'\\vendor\\egeloen\\serializer\\src\\Type\\Parser\\TypeLexer.php';

return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser(${($_ = isset($this->services['ivory.serializer.type.lexer']) ? $this->services['ivory.serializer.type.lexer'] : ($this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer())) && false ?: '_'});
