<?php

namespace Ebbe\DocconBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

//  * Column(name="document", type="object")
// private $document;
//  * Column(name="provider_lead", type="object")
// private $providerLead;
//  * Column(name="doc_resubmitted", type="boolean")
// private $docResubmitted;
//  * Column(name="serial_number", type="string", length=255)
// private $serialNumber;
//  * Column(name="project_phase", type="string", length=32)
// private $projectPhase;
//  * Column(name="project_subphase", type="string", length=32)
// private $projectSubphase;
//  * Column(name="project_package", type="string", length=32)
// private $projectPackage;
//  * Column(name="version", type="string", length=32)
// private $version;
//  * Column(name="name", type="string", length=255)
// private $name;
//  * Column(name="acceptor_org", type="string")
// private $acceptorOrg;
//  * Column(name="acceptor_lead", type="object")
// private $acceptorLead;
//  * Column(name="formality", type="string", length=32)
// private $formality;
//  * Column(name="stage_procedure", type="string", length=32)
// private $stageProcedure;
//  * Column(name="current_stage", type="string", length=32)
// private $currentStage;


class EditionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('document')
            ->add('providerLead')
            ->add('docResubmitted')
            ->add('serialNumber')
            ->add('projectPhase')
            ->add('projectSubphase')
            ->add('projectPackage')
            ->add('version')
            ->add('name')
            // ->add('acceptorOrg')
            ->add('acceptorLead')
            ->add('formality')
            ->add('stageProcedure')
            ->add('currentStage')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            // ->add('id')
            ->addIdentifier('document')
            ->add('providerLead')
            ->add('docResubmitted')
            ->add('serialNumber')
            ->add('projectSummary')
            ->add('version')
            ->addIdentifier('name')
            ->add('acceptorOrg', 'string')
            ->add('acceptorLead')
            ->add('formality')
            ->add('stageProcedure')
            ->add('currentStage')
            
			
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
                ->add('document', 'sonata_type_model_list', array(
                    'btn_add'       => 'Add new documents',      //Specify a custom label
                    'btn_list'      => 'button.document.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                    'btn_catalogue' => 'SonataNewsBundle' //Custom translation domain for buttons
                ), array(
                    'placeholder' => 'Select a document'
                ))
                ->add('name')
                ->add('version')
		->end()
		->with('Project')
			->add('projectPhase')
			->add('projectSubphase')
			->add('projectPackage')
		->end()
		->with('Provider Information')
			->add('providerLead')
		->end()
		->with('Acceptor Information')
			// ->add('acceptorOrg', 'string')
			->add('acceptorLead')
		->end()
		->with('Review Process')
			->add('stageProcedure')
			->add('currentStage')
		->end()
		->with('various Attributes')
			->add('docResubmitted')
			->add('serialNumber')
			->add('formality')
		->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('document')
            ->add('providerLead')
            ->add('docResubmitted')
            ->add('serialNumber')
            ->add('projectPhase')
            ->add('projectSubphase')
            ->add('projectPackage')
            ->add('version')
            ->add('name')
            ->add('acceptorOrg', 'string')
            ->add('acceptorLead')
            ->add('formality')
            ->add('stageProcedure')
            ->add('currentStage')
        ;
    }
}
