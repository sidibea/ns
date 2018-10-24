<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.toolbar_manager' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManager.php';

$this->services['fos_ck_editor.toolbar_manager'] = $instance = new \FOS\CKEditorBundle\Model\ToolbarManager();

$instance->setToolbars(array('my_toolbar_1' => array(0 => array(0 => 'Source', 1 => '-', 2 => 'Save'), 1 => array(0 => 'Bold', 1 => '-', 2 => 'Italic', 3 => '-', 4 => 'Strike'), 2 => array(0 => 'Maximize'))));

return $instance;