<?php

/**
 * Created by PhpStorm.
 * User: Win10
 * Date: 12.11.2017
 * Time: 21:06
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class WebPagesAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('pageTitle', 'text')
            ->add('twigs','entity',
                array(
                    'class' => 'AppBundle\Entity\Twigs',
                    'choice_label' => 'Twig Name',
                    'multiple' => true,
                )
            )
            ->add('pageKeyWord', 'text', array(

                'required' => false,
                'empty_data' => '',

            ))
            ->add('pageDescription', 'text', array(

                'required' => false,
                'empty_data' => '',

            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('pageTitle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('pageTitle',null,array(
                'editable' => true,
            ))
            ->addIdentifier('pageKeyWord')
            ->addIdentifier('pageDescription')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;

    }
}