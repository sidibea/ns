<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_comment.listener.thread_counters' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/EventListener/ThreadCountersListener.php';

return $this->services['fos_comment.listener.thread_counters'] = new \FOS\CommentBundle\EventListener\ThreadCountersListener(${($_ = isset($this->services['fos_comment.manager.comment.default']) ? $this->services['fos_comment.manager.comment.default'] : $this->load('getFosComment_Manager_Comment_DefaultService.php')) && false ?: '_'});
