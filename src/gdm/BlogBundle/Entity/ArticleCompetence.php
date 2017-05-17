<?php

namespace gdm\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCompetence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gdm\BlogBundle\Entity\ArticleCompetenceRepository")
 */
class ArticleCompetence
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="gdm\BlogBundle\Entity\Article")
    */
    private $article;

    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="gdm\BlogBundle\Entity\Competence")
    */
    private $competence;

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \gdm\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
     */
    public function setArticle(\gdm\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \gdm\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set competence
     *
     * @param \gdm\BlogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\gdm\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;
    
        return $this;
    }

    /**
     * Get competence
     *
     * @return \gdm\BlogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}