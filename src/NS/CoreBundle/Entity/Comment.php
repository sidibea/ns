<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/14/18
 * Time: 6:59 PM
 */

namespace NS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="NS\CoreBundle\Entity\Thread")
     */
    protected $thread;
}
