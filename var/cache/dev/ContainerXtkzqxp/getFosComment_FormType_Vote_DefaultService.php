<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_comment.form_type.vote.default' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/comment-bundle/Form/VoteType.php';

return $this->services['fos_comment.form_type.vote.default'] = new \FOS\CommentBundle\Form\VoteType('FOS\\CommentBundle\\Entity\\Vote');
