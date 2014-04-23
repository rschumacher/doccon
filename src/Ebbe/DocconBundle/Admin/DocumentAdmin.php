<?php

namespace Ebbe\DocconBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


//  * Id
// private $id;
//  * OneToMany(targetEntity="Edition", mappedBy="document")
// private $editions;
//  * Column(name="provider_org", type="string")
// private $providerOrg;
//  * Column(name="provider_info", type="string")
// private $providerInfo;
//  * Column(name="acceptor_org", type="string")
// private $acceptorOrg;
//  * Column(name="acceptor_info", type="string")
// private $acceptorInfo;
//  * Column(name="title", type="string", length=255)
// private $title;
//  * Column(name="version", type="string", length=32)
// private $version;
//  * Column(name="description", type="text")
// private $description;
//  * Column(name="stage_procedure", type="string", length=32)
// private $stageProcedure;
//  * Column(name="id_primavera", type="string", length=32)
// private $idPrimavera;
//  * Column(name="provider_doc_id", type="string", length=64)
// private $providerDocId;
//  * @ORM\Column(name="doc_for_reporting", type="boolean")
// private $docForReporting;
//  * @ORM\Column(name="doc_has_issues", type="boolean")
// private $docHasIssues;
//  * @ORM\Column(name="doc_deleted", type="boolean")
// private $docDeleted;
//  * @ORM\Column(name="project", type="string", length=64)
// private $project;
//  * @ORM\Column(name="category_app4", type="string", length=32)
// private $categoryApp4;
//  * @ORM\Column(name="ref_set_number", type="string", length=32)
// private $refSetNumber;
//  * @ORM\Column(name="relevance_s_sr_ns_od", type="boolean")
// private $relevanceSSrNsOd;
//  * @ORM\Column(name="doc_location", type="string")
// private $docLocation;



class DocumentAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('version')
            ->add('stageProcedure')
            ->add('idPrimavera')
            ->add('providerDocId')
            ->add('docForReporting')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('project')
            ->add('providerOrg')
            ->add('acceptorOrg')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            // ->add('id')
            // ->add('editions')
            ->addIdentifier('title')
            ->add('providerOrg')
            ->add('acceptorOrg')
            ->add('stageProcedure')
            ->add('docForReporting')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('project')
            ->add('relevanceSSrNsOd')
			
			
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    // 'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            // ->add('id')
		->with('Identification')
	        ->add('title')
	        ->add('version')
	        ->add('description')
	        ->add('project')
	        ->add('docLocation')
		->end()
		->with('Provider Information')
	        ->add('providerOrg')
	        ->add('providerDocId')
	        ->add('providerInfo')
		->end()
		->with('Acceptor Information')
	        ->add('acceptorOrg')
	        ->add('acceptorInfo')
		->end()
		->with('Review Process')
			->add('stageProcedure')
		->end()
		->with('various Attributes')
			->add('idPrimavera')
			->add('docForReporting')
			->add('docHasIssues')
			->add('docDeleted')
			->add('categoryApp4')
			->add('refSetNumber')
			->add('relevanceSSrNsOd')
		->end()
		// ->with('Editions')
		// 	->add('editions', 'sonata_type_model_list', array(
		// 	    'btn_add'       => 'Add new edition',      //Specify a custom label
		// 	    'btn_list'      => 'button.edition.list',     //which will be translated
		// 	    'btn_delete'    => false,             //or hide the button.
		// 	    'btn_catalogue' => 'SonataNewsBundle' //Custom translation domain for buttons
		// 	), array(
		// 	    'placeholder' => 'Select an edition'
		// 	))
		// ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
	        ->add('editions')
	        ->add('providerOrg')
	        ->add('providerInfo')
	        ->add('acceptorOrg')
	        ->add('acceptorInfo')
	        ->add('title')
	        ->add('version')
	        ->add('description')
	        ->add('stageProcedure')
	        ->add('idPrimavera')
	        ->add('providerDocId')
	        ->add('docForReporting')
	        ->add('docHasIssues')
	        ->add('docDeleted')
	        ->add('project')
	        ->add('categoryApp4')
	        ->add('refSetNumber')
	        ->add('relevanceSSrNsOd')
	        ->add('docLocation')
        ;
    }
}
