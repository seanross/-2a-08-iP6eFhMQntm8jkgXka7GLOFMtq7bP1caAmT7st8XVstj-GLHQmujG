<?php

namespace Entity;

/**
 * Post
 *
 * @Table(name="forum_post_tb")
 * @Entity
 */
class ForumPostTb extends BaseTb {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="MisUserProfileTb")
     * @JoinColumn(name="user_profiles_id", referencedColumnName="id")
     */
    private $misUserProfileTb;

    /**
     *
     *  @ManyToOne(targetEntity="ForumTb");
     *  @JoinColumn(name="forum_id", referencedColumnName="id")
     */
    private $forumTb;

    /**
     * @var string
     *
     * @Column(name="content", type="text", nullable=false)
     */
    private $content;


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
     * Assign the Post to a UserProfileTb
     *
     * @param   UserProfileTb $misUserProfileTb
     * @return  void
     */
    public function setMisUserProfileTb(MisUserProfileTb $misUserProfileTb)
    {
        $this->misUserProfileTbProfileTb = $misUserProfileTb;

        // The association must be defined in both directions
        if ( ! $misUserProfileTb->getForumPostTb()->contains($this))
        {
            $misUserProfileTb->addForumPostTb($this);
        }
    }

    /**
     * Get UserProfileTb
     *
     * @return UserProfileTb
     */
    public function getMisUserProfileTb()
    {
        return $this->misUserProfileTb;
    }

    /**
     * Assign the forum to forumpost
     *
     * @param   Entity\Forum $forum
     * @return  void
     */
    public function setForumTb(ForumTb $forumTb)
    {
        $this->forumTb = $forumTb;

        // The association must be defined in both directions
        if ( ! $forumTb->getForumPostTb()->contains($this))
        {
            $forumTb->addForumPostTb($this);
        }
    }

    /**
     * Get ForumTb
     *
     * @return ForumTb
     */
    public function getForumTb()
    {
        return $this->forumTb;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
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
}
