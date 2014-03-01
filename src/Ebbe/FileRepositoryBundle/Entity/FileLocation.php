<?php

namespace Ebbe\FileRepositoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileLocation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\FileRepositoryBundle\Entity\FileLocationRepository")
 */
class FileLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="topical_discipline", type="string", length=255)
     */
    private $topicalDiscipline;

    /**
     * @var string
     *
     * @ORM\Column(name="topical_subdiscipline", type="string", length=255)
     */
    private $topicalSubdiscipline;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_id", type="string")
     */
    private $docId;


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
     * Set type
     *
     * @param string $type
     * @return FileLocation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return FileLocation
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set topicalDiscipline
     *
     * @param string $topicalDiscipline
     * @return FileLocation
     */
    public function setTopicalDiscipline($topicalDiscipline)
    {
        $this->topicalDiscipline = $topicalDiscipline;

        return $this;
    }

    /**
     * Get topicalDiscipline
     *
     * @return string 
     */
    public function getTopicalDiscipline()
    {
        return $this->topicalDiscipline;
    }

    /**
     * Set topicalSubdiscipline
     *
     * @param string $topicalSubdiscipline
     * @return FileLocation
     */
    public function setTopicalSubdiscipline($topicalSubdiscipline)
    {
        $this->topicalSubdiscipline = $topicalSubdiscipline;

        return $this;
    }

    /**
     * Get topicalSubdiscipline
     *
     * @return string 
     */
    public function getTopicalSubdiscipline()
    {
        return $this->topicalSubdiscipline;
    }

    /**
     * Set docId
     *
     * @param string $docId
     * @return FileLocation
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * Get docId
     *
     * @return string 
     */
    public function getDocId()
    {
        return $this->docId;
    }
}
