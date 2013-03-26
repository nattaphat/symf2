<?php
// src/Acme/TaskBundle/Form/Type/TaskType.php
namespace Acme\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('task');
        $builder->add('dueDate', null, array('widget' => 'single_text'));
        $builder->add('agreeWith', 'checkbox',array(
                'label'  => 'Agree With',
                'mapped' => false //In cases where you need extra fields in 
                                  //the form (for example: a "do you agree with 
                                  //these terms" checkbox) that will not be 
                                  //mapped to the underlying object, you need 
                                  //to set the mapped option to false:
            )
        );
    }

    public function getName()
    {
        return 'task';
    }
}