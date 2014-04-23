<?php

namespace Ebbe\DocconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\DocconBundle\Entity\DocumentRepository")
 */
class Document
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
     * @var Edition
     *
     * @ORM\OneToMany(targetEntity="Edition", mappedBy="document")
     */
    private $editions;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_org", type="string")
     */
    private $providerOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_info", type="string", nullable=true)
     */
    private $providerInfo;

    /**
     * @var string
     * @ORM\Column(name="acceptor_org", type="string")
     */
    private $acceptorOrg;
    
    /**
     * @var string
     * @ORM\Column(name="acceptor_info", type="string", nullable=true)
     */
    private $acceptorInfo;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="version", type="string", length=32, nullable=true)
     */
    private $version;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="stage_procedure", type="string", length=32, nullable=true)
     * specifies which stage procedure to be applied to this document by default
     */
    private $stageProcedure;

    /**
     * @var string
     *
     * @ORM\Column(name="id_primavera", type="string", length=32, nullable=true)
     */
    private $idPrimavera;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_doc_id", type="string", length=64, nullable=true)
     */
    private $providerDocId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc_for_reporting", type="boolean", nullable=true)
     */
    private $docForReporting;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_has_issues", type="boolean", nullable=true)
     */
    private $docHasIssues;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc_deleted", type="boolean", nullable=true)
     */
    private $docDeleted;
    
    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=64, nullable=true)
     */
    private $project;

    /**
     * @var string
     * @ORM\Column(name="category_app4", type="string", length=16, nullable=true)
     */
    private $categoryApp4;

    /**
     * @var string
     * @ORM\Column(name="ref_set_number", type="string", length=32, nullable=true)
     */
    private $refSetNumber;

    /**
     * @var string
     * @ORM\Column(name="relevance_s_sr_ns_od", type="boolean", nullable=true)
     */
    private $relevanceSSrNsOd;

    /**
     * @var \stdClass
     * @ORM\Column(name="doc_location", type="string", nullable=true)
     */
    private $docLocation;



    /**
     * constructor
     *
     */
    function __construct() {
        $this->editions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->docForReporting = true;
        $this->docHasIssues = false;
        $this->docDeleted = false;
        $this->relevanceSSrNsOd = false;
        $this->idPrimavera = "n/id";
        $this->providerDocId = "n/id";
        $this->project = "n/p";
        $this->refSetNumber = "n/ref";
        $this->docLocation = "n/loc";
    }
    
    public function __toString()
    {
        return sprintf("%s (%s)",
                $this->getTitle(), $this->getProviderOrg());
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
     * Set editions
     *
     * @param Edition $editions
     * @return Document
     */
    public function setEditions($editions)
    {
        $this->editions = $editions;

        return $this;
    }

    /**
     * Get editions
     *
     * @return Edition 
     */
    public function getEditions()
    {
        return $this->editions;
    }

    /**
     * Set providerOrg
     *
     * @param string $providerOrg
     * @return Document
     */
    public function setProviderOrg($providerOrg)
    {
        $this->providerOrg = $providerOrg;

        return $this;
    }

    /**
     * Get providerOrg
     *
     * @return string 
     */
    public function getProviderOrg()
    {
        return $this->providerOrg;
    }

    /**
     * Set providerInfo
     *
     * @param string $providerInfo
     * @return Document
     */
    public function setProviderInfo($providerInfo)
    {
        $this->providerInfo = $providerInfo;

        return $this;
    }

    /**
     * Get providerInfo
     *
     * @return string 
     */
    public function getProviderInfo()
    {
        return $this->providerInfo;
    }

    /**
     * Set acceptorOrg
     *
     * @param string $acceptorOrg
     * @return Document
     */
    public function setAcceptorOrg($acceptorOrg)
    {
        $this->acceptorOrg = $acceptorOrg;

        return $this;
    }

    /**
     * Get acceptorOrg
     *
     * @return string 
     */
    public function getAcceptorOrg()
    {
        return $this->acceptorOrg;
    }

    /**
     * Set acceptorInfo
     *
     * @param string $acceptorInfo
     * @return Document
     */
    public function setAcceptorInfo($acceptorInfo)
    {
        $this->acceptorInfo = $acceptorInfo;

        return $this;
    }

    /**
     * Get acceptorInfo
     *
     * @return string 
     */
    public function getAcceptorInfo()
    {
        return $this->acceptorInfo;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return string
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Document
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Document
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set stageProcedure
     *
     * @param string $stageProcedure
     * @return Edition
     */
    public function setStageProcedure($stageProcedure)
    {
        $this->stageProcedure = $stageProcedure;

        return $this;
    }

    /**
     * Get stageProcedure
     *
     * @return string 
     */
    public function getStageProcedure()
    {
        return $this->stageProcedure;
    }
    

    /**
     * Set docHasIssues
     *
     * @param string $docHasIssues
     * @return Edition
     */
    public function setDocHasIssues($docHasIssues)
    {
        $this->docHasIssues = $docHasIssues;

        return $this;
    }

    /**
     * Get docHasIssues
     *
     * @return string 
     */
    public function getDocHasIssues()
    {
        return $this->docHasIssues;
    }

    /**
     * Set docDeleted
     *
     * @param boolean $docDeleted
     * @return Edition
     */
    public function setDocDeleted($docDeleted)
    {
        $this->docDeleted = $docDeleted;

        return $this;
    }

    /**
     * Get docDeleted
     *
     * @return boolean 
     */
    public function getDocDeleted()
    {
        return $this->docDeleted;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return string
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }
    

    /**
     * Set idPrimavera
     *
     * @param string $idPrimavera
     * @return Edition
     */
    public function setIdPrimavera($idPrimavera)
    {
        $this->idPrimavera = $idPrimavera;

        return $this;
    }

    /**
     * Get idPrimavera
     *
     * @return string 
     */
    public function getIdPrimavera()
    {
        return $this->idPrimavera;
    }

    /**
     * Set providerDocId
     *
     * @param string $providerDocId
     * @return Edition
     */
    public function setProviderDocId($providerDocId)
    {
        $this->providerDocId = $providerDocId;

        return $this;
    }

    /**
     * Get providerDocId
     *
     * @return string 
     */
    public function getProviderDocId()
    {
        return $this->providerDocId;
    }

    /**
     * Set categoryApp4
     *
     * @param string $categoryApp4
     * @return Edition
     */
    public function setCategoryApp4($categoryApp4)
    {
        $this->categoryApp4 = $categoryApp4;

        return $this;
    }

    /**
     * Get categoryApp4
     *
     * @return string 
     */
    public function getCategoryApp4()
    {
        return $this->categoryApp4;
    }

    /**
     * Set refSetNumber
     *
     * @param string $refSetNumber
     * @return Edition
     */
    public function setRefSetNumber($refSetNumber)
    {
        $this->refSetNumber = $refSetNumber;

        return $this;
    }

    /**
     * Get refSetNumber
     *
     * @return string 
     */
    public function getRefSetNumber()
    {
        return $this->refSetNumber;
    }

    /**
     * Set relevanceSSrNsOd
     *
     * @param string $relevanceSSrNsOd
     * @return Edition
     */
    public function setRelevanceSSrNsOd($relevanceSSrNsOd)
    {
        $this->relevanceSSrNsOd = $relevanceSSrNsOd;

        return $this;
    }

    /**
     * Get relevanceSSrNsOd
     *
     * @return string 
     */
    public function getRelevanceSSrNsOd()
    {
        return $this->relevanceSSrNsOd;
    }

    /**
     * Set docLocation
     *
     * @param \stdClass $docLocation
     * @return Edition
     */
    public function setDocLocation($docLocation)
    {
        $this->docLocation = $docLocation;

        return $this;
    }

    /**
     * Get docLocation
     *
     * @return \stdClass 
     */
    public function getDocLocation()
    {
        return $this->docLocation;
    }




    /**
     * Set docForReporting
     *
     * @param boolean $docForReporting
     * @return Edition
     */
    public function setDocForReporting($docForReporting)
    {
        $this->docForReporting = $docForReporting;

        return $this;
    }

    /**
     * Get docForReporting
     *
     * @return boolean 
     */
    public function getDocForReporting()
    {
        return $this->docForReporting;
    }
}
