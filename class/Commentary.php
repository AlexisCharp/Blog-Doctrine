<?php

/** @Entity @Table(name="commentaries") **/

class Commentary {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $text;
    /** @Column(type="datetime") **/
    private $datepost;
    /**
     * @ManyToOne (targetEntity="Utilisateur")
     * @JoinColumn (nullable=false)
    **/
    private $utilisateur;
    /**
     * @ManyToOne (targetEntity="Article")
     * @JoinColumn (nullable=false)
    **/
    private $article;


    public function getId()
    {
        return $this->id;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur($usr)
    {
        $this->utilisateur = $usr;
        return $this;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * Set datepost.
     *
     * @param \DateTime|null $datepost
     *
     * @return Message
     */
    public function setDatepost($datepost = null)
    {
        $this->datepost = $datepost;

        return $this;
    }

    /**
     * Get datepost.
     *
     * @return \DateTime|null
     */
    public function getDatepost()
    {
        return $this->datepost;
    }
}
