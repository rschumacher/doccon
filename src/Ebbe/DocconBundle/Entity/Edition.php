<?php

namespace Ebbe\DocconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\DocconBundle\Entity\EditionRepository")
 */
class Edition
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
     * @var Document
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="editions")
     */
    private $document;
    
    /**
     * @var string
     * @ORM\Column(name="provider_lead", type="string")
     */
    private $providerLead;

    /**
     * @var boolean
     * @ORM\Column(name="doc_resubmitted", type="boolean", nullable=true)
     */
    private $docResubmitted;

    /**
     * @var string
     * @ORM\Column(name="serial_number", type="string", length=255, nullable=true)
     */
    private $serialNumber;

    /**
     * @var string
     * @ORM\Column(name="project_phase", type="string", length=32, nullable=true)
     */
    private $projectPhase;

    /**
     * @var string
     * @ORM\Column(name="project_subphase", type="string", length=32, nullable=true)
     */
    private $projectSubphase;

    /**
     * @var string
     * @ORM\Column(name="project_package", type="string", length=32, nullable=true)
     */
    private $projectPackage;

    /**
     * @var string
     * @ORM\Column(name="version", type="string", length=32, nullable=true)
     */
    private $version;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="acceptor_lead", type="string")
     */
    private $acceptorLead;

    /**
     * @var string
     * @ORM\Column(name="formality", type="string", length=32, nullable=true)
     */
    private $formality;

    /**
     * @var string
     * @ORM\Column(name="stage_procedure", type="string", length=32, nullable=true)
     * reflects which stage procedure is being followed for this edition
     */
    private $stageProcedure;

    /**
     * @var string
     * @ORM\Column(name="current_stage", type="string", length=32)
     * reflects which review stage this edition is currently (60%, 70% or so)
     */
    private $currentStage;

    
    function __construct() {
        $this->projectPhase = "n/pp";
        $this->projectSubphase = "n/psp";
        $this->projectPackage = "n/ppkg";
        $this->version = "n/v";
        $this->providerLead = "n/lead";
        $this->acceptorLead = "n/lead";
        $this->stageProcedure = "60-100% full";
        $this->currentStage = "60%";
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
     * Set document
     *
     * @param Document $document
     * @return Edition
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return Document 
     */
    public function getDocument()
    {
        return $this->document;
    }
    
    /**
     * Get document title
     *
     * @return string 
     */
    public function getDocumentTitle()
    {
        return $this->getDocument() ? $this->getDocument()->getTitle() : "not_doc";
    }
    
    /**
     * Get document title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->getDocumentTitle();
    }
    
    /**
     * Get document title
     *
     * @return string 
     */
    public function getDocumentName()
    {
        return $this->getDocumentTitle();
    }
    
    
    /**
     * Get providerOrg
     *
     * @return string
     */
    public function getProviderOrg()
    {
        return $this->getDocument() ? $this->getDocument()->getProviderOrg() : null;
    }
    
    public function getProviderName()
    {
        return  $this->getProviderOrg() ? $this->getProviderOrg()->getName() : "not_avail";
    }
    
    /**
     * Set providerLead
     *
     * @param string $providerLead
     * @return Edition
     */
    public function setProviderLead($providerLead)
    {
        $this->providerLead = $providerLead;

        return $this;
    }

    /**
     * Get providerLead
     *
     * @return string 
     */
    public function getProviderLead()
    {
        return $this->providerLead;
    }


    /**
     * Set docResubmitted
     *
     * @param boolean $docResubmitted
     * @return Edition
     */
    public function setDocResubmitted($docResubmitted)
    {
        $this->docResubmitted = $docResubmitted;

        return $this;
    }

    /**
     * Get docResubmitted
     *
     * @return boolean 
     */
    public function getDocResubmitted()
    {
        return $this->docResubmitted;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Edition
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }


    /**
     * Set projectPhase
     *
     * @param string $projectPhase
     * @return Edition
     */
    public function setProjectPhase($projectPhase)
    {
        $this->projectPhase = $projectPhase;

        return $this;
    }

    /**
     * Get projectPhase
     *
     * @return string 
     */
    public function getProjectPhase()
    {
        return $this->projectPhase;
    }

    /**
     * Set projectSubphase
     *
     * @param string $projectSubphase
     * @return Edition
     */
    public function setProjectSubphase($projectSubphase)
    {
        $this->projectSubphase = $projectSubphase;

        return $this;
    }

    /**
     * Get projectSubphase
     *
     * @return string 
     */
    public function getProjectSubphase()
    {
        return $this->projectSubphase;
    }

    /**
     * Set projectPackage
     *
     * @param string $projectPackage
     * @return Edition
     */
    public function setProjectPackage($projectPackage)
    {
        $this->projectPackage = $projectPackage;

        return $this;
    }

    /**
     * Get projectPackage
     *
     * @return string 
     */
    public function getProjectPackage()
    {
        return $this->projectPackage;
    }
    
    public function getProjectSummary()
    {
        $p = $this->getDocument() ? $this->getDocument()->getProject() : null;
        $s = (string) $p;
        if ($this->getProjectPhase()) {
            $s = sprintf("%s (%s", $s, $this->getProjectPhase());
            if ($this->getProjectSubphase()) {
                $s = sprintf("%s, %s)", $s, $this->getProjectSubphase());
            } else {
                $s .= ")";
            }
        }
        if ($this->getProjectPackage()) {
            $s = sprintf("%s; %s", $s, $this->getProjectPackage());
        }
        return $s;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Edition
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
     * Get editions
     *
     * @return \stdClass 
     */
    public function getOtherEditions()
    {
        $editions = $this->getDocument()->getEditions();
        $editions->remove($this);
        return $editions;
    }

    /**
     * Set title
     *
     * @param string $name
     * @return Edition
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get acceptorOrg
     *
     * @return string 
     */
    public function getAcceptorOrg()
    {
        return $this->getDocument() ? $this->getDocument()->getAcceptorOrg() : "no_org";
    }

    /**
     * Set acceptorLead
     *
     * @param string $acceptorLead
     * @return Edition
     */
    public function setAcceptorLead($acceptorLead)
    {
        $this->acceptorLead = $acceptorLead;

        return $this;
    }

    /**
     * Get acceptorLead
     *
     * @return string 
     */
    public function getAcceptorLead()
    {
        return $this->acceptorLead;
    }

    /**
     * Set formality
     *
     * @param string $formality
     * @return Edition
     */
    public function setFormality($formality)
    {
        $this->formality = $formality;

        return $this;
    }

    /**
     * Get formality
     *
     * @return string 
     */
    public function getFormality()
    {
        return $this->formality;
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
     * Set currentStage
     *
     * @param string $currentStage
     * @return Edition
     */
    public function setCurrentStage($currentStage)
    {
        $this->currentStage = $currentStage;

        return $this;
    }

    /**
     * Get currentStage
     *
     * @return string 
     */
    public function getCurrentStage()
    {
        return $this->currentStage;
    }
}
