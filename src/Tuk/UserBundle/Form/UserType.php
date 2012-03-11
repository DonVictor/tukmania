<?php
//Definir Estrucutra del formulario
namespace Tuk\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    		$min_year = date('Y', strtotime('- 100 years'));
    		$max_year = date('Y', strtotime('- 10 years'));
    		$years = range($min_year, $max_year);
    		foreach($years as $year){
    			$range[$year] = $year;
    		}

        $builder
            ->add('names')
            ->add('last_names')
            ->add('dni')            
    				->add('birthday_at', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-mm-dd',
                'required' => false
    				))
            ->add('location_id', 'hidden')
        ;
    }

    public function getName()
    {
        return 'user';
    }
}
