<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_comment.form_factory.thread' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/FormFactory/ThreadFormFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/FormFactory/ThreadFormFactory.php';

return $this->services['fos_comment.form_factory.thread'] = new \FOS\CommentBundle\FormFactory\ThreadFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, 'FOS\\CommentBundle\\Form\\ThreadType', 'fos_comment_thread');