<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_comment.manager.comment.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/Model/CommentManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/Model/CommentManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/Entity/CommentManager.php';

return $this->services['fos_comment.manager.comment.default'] = new \FOS\CommentBundle\Entity\CommentManager(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_comment.sorting_factory']) ? $this->services['fos_comment.sorting_factory'] : $this->load('getFosComment_SortingFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_comment.entity_manager']) ? $this->services['fos_comment.entity_manager'] : $this->load('getFosComment_EntityManagerService.php')) && false ?: '_'}, 'NS\\CoreBundle\\Entity\\Comment');
