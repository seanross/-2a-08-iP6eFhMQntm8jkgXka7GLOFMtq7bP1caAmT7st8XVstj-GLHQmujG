<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * Forum
 *
 * @Table(name="forum_tb")
 * @Entity
 */
class ForumTb extends BaseTb{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="topic", type="string", length=255, nullable=false)
     */
    private $topic;

     /**
     * @var string
     *
     * @Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @OneToMany(targetEntity="ForumPostTb", mappedBy="forumTb")
     */
    protected $forumPostTb;

    /**
     * Initialize any collection properties as ArrayCollections
     *
     * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#initializing-collections
     *
     */
    public function __construct()
    {
        $this->forumPostTb = new ArrayCollection;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set topic
     *
     * @param string $topic
     * @return Forum
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    
        return $this;
    }

    /**
     * Get topic
     *
     * @return string 
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Forum
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add forumPostTb
     *
     * @param ForumPostTb $forumPostTb
     * @return ForumTb
     */
    public function addForumPostTb(Entity\ForumPostTb $forumPostTb)
    {
        $this->forumPostTb[] = $forumPostTb;
        return $this;
    }

    /**
     * Get forumPostTb
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getForumPostTb()
    {
        return $this->forumPostTb;
    }
}
