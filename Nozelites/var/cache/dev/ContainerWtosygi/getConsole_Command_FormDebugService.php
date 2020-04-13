<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\Command\\DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'UserBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'], [0 => 'UserBundle\\Form\\RegistrationType', 1 => 'UserBundle\\Form\\ProfilType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 6 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 7 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 8 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 9 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 10 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
