<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_comment.listener.thread_permalink' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/EventListener/ThreadPermalinkListener.php';

return $this->services['fos_comment.listener.thread_permalink'] = new \FOS\CommentBundle\EventListener\ThreadPermalinkListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});