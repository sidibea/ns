<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'NS\\UserBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Vich\\UploaderBundle\\Form\\Type', 4 => 'FOS\\UserBundle\\Form\\Type', 5 => 'FOS\\CKEditorBundle\\Form\\Type', 6 => 'FOS\\CommentBundle\\Form'), array(0 => 'NS\\UserBundle\\Form\\RegistrationType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 4 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 5 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 6 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 7 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 8 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 9 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 10 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 11 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 12 => 'FOS\\CommentBundle\\Form\\CommentType', 13 => 'FOS\\CommentBundle\\Form\\CommentableThreadType', 14 => 'FOS\\CommentBundle\\Form\\DeleteCommentType', 15 => 'FOS\\CommentBundle\\Form\\ThreadType', 16 => 'FOS\\CommentBundle\\Form\\VoteType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 7 => 'Craue\\FormFlowBundle\\Form\\Extension\\FormFlowFormExtension', 8 => 'Craue\\FormFlowBundle\\Form\\Extension\\FormFlowHiddenFieldExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
