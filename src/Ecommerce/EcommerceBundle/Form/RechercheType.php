<?php
/**
 * Created by PhpStorm.
 * User: samar ferchichi
 * Date: 8/24/2018
 * Time: 5:20 AM
 */


namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recherche','text', array('attr'=>array('class'=>'input-medium search-query')));

    }
    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche';
    }


}