<?php

namespace Ebbe\DocconBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DeliveryAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('originatorOrg')
            ->add('originatorAuthor')
            ->add('originatorOwner')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('docResubmitted')
            ->add('docForReporting')
            ->add('serialNumber')
            ->add('docExisting')
            ->add('project')
            ->add('projectPhase')
            ->add('projectSubphase')
            ->add('projectPackage')
            ->add('idPrimavera')
            ->add('originatorDocId')
            ->add('originatorDocVersion')
            ->add('hasPreviousDelivery')
            ->add('previousDelivery')
            ->add('title')
            ->add('recipientOrganisation')
            ->add('recipientGroup')
            ->add('recipientLead')
            ->add('formality')
            ->add('reviewProcess')
            ->add('reviewCurrentStage')
            ->add('categoryApp4')
            ->add('refSetNumber')
            ->add('relevanceSSrNsOd')
            ->add('docLocation')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('originatorOrg')
            ->add('originatorAuthor')
            ->add('originatorOwner')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('docResubmitted')
            ->add('docForReporting')
            ->add('serialNumber')
            ->add('docExisting')
            ->add('project')
            ->add('projectPhase')
            ->add('projectSubphase')
            ->add('projectPackage')
            ->add('idPrimavera')
            ->add('originatorDocId')
            ->add('originatorDocVersion')
            ->add('hasPreviousDelivery')
            ->add('previousDelivery')
			->addIdentifier('title')
            ->add('recipientOrganisation')
            ->add('recipientGroup')
            ->add('recipientLead')
            ->add('formality')
            ->add('reviewProcess')
            ->add('reviewCurrentStage')
            ->add('categoryApp4')
            ->add('refSetNumber')
            ->add('relevanceSSrNsOd')
            ->add('docLocation')
			
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
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
			// ->add('id')
			->add('hasPreviousDelivery')
			->add('previousDelivery')
			->add('title')
		->end()
		->with('Attributes')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('docResubmitted')
            ->add('docForReporting')
            ->add('serialNumber')
            ->add('docExisting')
		->end()
		->with('Project')
			->add('project')
			->add('projectPhase')
			->add('projectSubphase')
			->add('projectPackage')
			->add('idPrimavera')
			->add('categoryApp4')
			->add('relevanceSSrNsOd')
		->end()
		->with('Originator')
			->add('originatorOrg')
			->add('originatorAuthor')
			->add('originatorOwner')
			->add('originatorDocId')
			->add('originatorDocVersion')
		->end()
		->with('Recipient')
			->add('recipientOrganisation')
			->add('recipientGroup')
			->add('recipientLead')
			->add('formality')
		->end()
		->with('Reviewers')
		->end()
		->with('Review Process')
			->add('reviewProcess')
			->add('reviewCurrentStage')
			->add('refSetNumber')
		->with('Reviewers')
			->add('docLocation')
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
            ->add('originatorOrg')
            ->add('originatorAuthor')
            ->add('originatorOwner')
            ->add('docHasIssues')
            ->add('docDeleted')
            ->add('docResubmitted')
            ->add('docForReporting')
            ->add('serialNumber')
            ->add('docExisting')
            ->add('project')
            ->add('projectPhase')
            ->add('projectSubphase')
            ->add('projectPackage')
            ->add('idPrimavera')
            ->add('originatorDocId')
            ->add('originatorDocVersion')
            ->add('hasPreviousDelivery')
            ->add('previousDelivery')
            ->add('title')
            ->add('recipientOrganisation')
            ->add('recipientGroup')
            ->add('recipientLead')
            ->add('formality')
            ->add('reviewProcess')
            ->add('reviewCurrentStage')
            ->add('categoryApp4')
            ->add('refSetNumber')
            ->add('relevanceSSrNsOd')
            ->add('docLocation')
        ;
    }
}
