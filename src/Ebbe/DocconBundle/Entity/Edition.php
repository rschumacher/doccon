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
     * @var \stdClass
     *
     * @ORM\Column(name="originator_org", type="object")
     */
    private $originatorOrg;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="originator_author", type="object")
     */
    private $originatorAuthor;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="originator_owner", type="object")
     */
    private $originatorOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_has_issues", type="string", length=16)
     */
    private $docHasIssues;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc_deleted", type="boolean")
     */
    private $docDeleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc_resubmitted", type="boolean")
     */
    private $docResubmitted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc_for_reporting", type="boolean")
     */
    private $docForReporting;

    /**
     * @var string
     *
     * @ORM\Column(name="serial_number", type="string", length=255)
     */
    private $serialNumber;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="doc_existing", type="object")
     */
    private $docExisting;

    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=32)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="project_phase", type="string", length=32)
     */
    private $projectPhase;

    /**
     * @var string
     *
     * @ORM\Column(name="project_subphase", type="string", length=32)
     */
    private $projectSubphase;

    /**
     * @var string
     *
     * @ORM\Column(name="project_package", type="string", length=32)
     */
    private $projectPackage;

    /**
     * @var string
     *
     * @ORM\Column(name="id_primavera", type="string", length=32)
     */
    private $idPrimavera;

    /**
     * @var string
     *
     * @ORM\Column(name="originator_doc_id", type="string", length=64)
     */
    private $originatorDocId;

    /**
     * @var string
     *
     * @ORM\Column(name="originator_doc_version", type="string", length=32)
     */
    private $originatorDocVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_previous_edition", type="boolean")
     */
    private $hasPreviousEdition;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="previous_edition", type="object")
     */
    private $previousEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="recipient_organisation", type="object")
     */
    private $recipientOrganisation;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="recipient_group", type="object")
     */
    private $recipientGroup;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="recipient_lead", type="object")
     */
    private $recipientLead;

    /**
     * @var string
     *
     * @ORM\Column(name="formality", type="string", length=32)
     */
    private $formality;

    /**
     * @var string
     *
     * @ORM\Column(name="review_process", type="string", length=32)
     */
    private $reviewProcess;

    /**
     * @var string
     *
     * @ORM\Column(name="review_current_stage", type="string", length=32)
     */
    private $reviewCurrentStage;

    /**
     * @var string
     *
     * @ORM\Column(name="category_app4", type="string", length=32)
     */
    private $categoryApp4;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_set_number", type="string", length=32)
     */
    private $refSetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="relevance_s_sr_ns_od", type="string", length=16)
     */
    private $relevanceSSrNsOd;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="doc_location", type="object")
     */
    private $docLocation;


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
     * Set originatorOrg
     *
     * @param \stdClass $originatorOrg
     * @return Edition
     */
    public function setOriginatorOrg($originatorOrg)
    {
        $this->originatorOrg = $originatorOrg;

        return $this;
    }

    /**
     * Get originatorOrg
     *
     * @return \stdClass 
     */
    public function getOriginatorOrg()
    {
        return $this->originatorOrg;
    }

    /**
     * Set originatorAuthor
     *
     * @param \stdClass $originatorAuthor
     * @return Edition
     */
    public function setOriginatorAuthor($originatorAuthor)
    {
        $this->originatorAuthor = $originatorAuthor;

        return $this;
    }

    /**
     * Get originatorAuthor
     *
     * @return \stdClass 
     */
    public function getOriginatorAuthor()
    {
        return $this->originatorAuthor;
    }

    /**
     * Set originatorOwner
     *
     * @param \stdClass $originatorOwner
     * @return Edition
     */
    public function setOriginatorOwner($originatorOwner)
    {
        $this->originatorOwner = $originatorOwner;

        return $this;
    }

    /**
     * Get originatorOwner
     *
     * @return \stdClass 
     */
    public function getOriginatorOwner()
    {
        return $this->originatorOwner;
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
     * Set docExisting
     *
     * @param \stdClass $docExisting
     * @return Edition
     */
    public function setDocExisting($docExisting)
    {
        $this->docExisting = $docExisting;

        return $this;
    }

    /**
     * Get docExisting
     *
     * @return \stdClass 
     */
    public function getDocExisting()
    {
        return $this->docExisting;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return Edition
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
     * Set originatorDocId
     *
     * @param string $originatorDocId
     * @return Edition
     */
    public function setOriginatorDocId($originatorDocId)
    {
        $this->originatorDocId = $originatorDocId;

        return $this;
    }

    /**
     * Get originatorDocId
     *
     * @return string 
     */
    public function getOriginatorDocId()
    {
        return $this->originatorDocId;
    }

    /**
     * Set originatorDocVersion
     *
     * @param string $originatorDocVersion
     * @return Edition
     */
    public function setOriginatorDocVersion($originatorDocVersion)
    {
        $this->originatorDocVersion = $originatorDocVersion;

        return $this;
    }

    /**
     * Get originatorDocVersion
     *
     * @return string 
     */
    public function getOriginatorDocVersion()
    {
        return $this->originatorDocVersion;
    }

    /**
     * Set hasPreviousEdition
     *
     * @param boolean $hasPreviousEdition
     * @return Edition
     */
    public function setHasPreviousEdition($hasPreviousEdition)
    {
        $this->hasPreviousEdition = $hasPreviousEdition;

        return $this;
    }

    /**
     * Get hasPreviousEdition
     *
     * @return boolean 
     */
    public function getHasPreviousEdition()
    {
        return $this->hasPreviousEdition;
    }

    /**
     * Set previousEdition
     *
     * @param \stdClass $previousEdition
     * @return Edition
     */
    public function setPreviousEdition($previousEdition)
    {
        $this->previousEdition = $previousEdition;

        return $this;
    }

    /**
     * Get previousEdition
     *
     * @return \stdClass 
     */
    public function getPreviousEdition()
    {
        return $this->previousEdition;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Edition
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
     * Set recipientOrganisation
     *
     * @param \stdClass $recipientOrganisation
     * @return Edition
     */
    public function setRecipientOrganisation($recipientOrganisation)
    {
        $this->recipientOrganisation = $recipientOrganisation;

        return $this;
    }

    /**
     * Get recipientOrganisation
     *
     * @return \stdClass 
     */
    public function getRecipientOrganisation()
    {
        return $this->recipientOrganisation;
    }

    /**
     * Set recipientGroup
     *
     * @param \stdClass $recipientGroup
     * @return Edition
     */
    public function setRecipientGroup($recipientGroup)
    {
        $this->recipientGroup = $recipientGroup;

        return $this;
    }

    /**
     * Get recipientGroup
     *
     * @return \stdClass 
     */
    public function getRecipientGroup()
    {
        return $this->recipientGroup;
    }

    /**
     * Set recipientLead
     *
     * @param \stdClass $recipientLead
     * @return Edition
     */
    public function setRecipientLead($recipientLead)
    {
        $this->recipientLead = $recipientLead;

        return $this;
    }

    /**
     * Get recipientLead
     *
     * @return \stdClass 
     */
    public function getRecipientLead()
    {
        return $this->recipientLead;
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
     * Set reviewProcess
     *
     * @param string $reviewProcess
     * @return Edition
     */
    public function setReviewProcess($reviewProcess)
    {
        $this->reviewProcess = $reviewProcess;

        return $this;
    }

    /**
     * Get reviewProcess
     *
     * @return string 
     */
    public function getReviewProcess()
    {
        return $this->reviewProcess;
    }

    /**
     * Set reviewCurrentStage
     *
     * @param string $reviewCurrentStage
     * @return Edition
     */
    public function setReviewCurrentStage($reviewCurrentStage)
    {
        $this->reviewCurrentStage = $reviewCurrentStage;

        return $this;
    }

    /**
     * Get reviewCurrentStage
     *
     * @return string 
     */
    public function getReviewCurrentStage()
    {
        return $this->reviewCurrentStage;
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
}
