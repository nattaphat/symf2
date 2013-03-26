<?php
// src/Acme/TaskBundle/Controller/DefaultController.php
namespace Acme\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
// add this new use statement at the top of the class
use Acme\TaskBundle\Form\Type\TaskType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeTaskBundle:Default:index.html.twig', array('name' => $name));
    }
    
    //This example shows you how to build your form directly in the controller
    //Later, you'll learn how to build your form in a standalone class, which is 
    //recommended as your form becomes reusable.
    
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
    
        $form = $this->createFormBuilder($task)
        ->add('task', 'text',array('label'  => 'Task--'))
        //->add('dueDate', 'date')
        ->add('dueDate', 'date',array(
                    'widget' => 'single_text',
                    'label'  => 'Due Date--')
                )
        ->getForm();
    
//         return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
//                 'form' => $form->createView(),
//         ));
        
        return $this->render('AcmeTaskBundle:Default:new2.html.twig', array(
                'form' => $form->createView(),
        ));
    }
    
    public function new2Action(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $task = new Task();
    
        $form = $this->createFormBuilder($task)
        ->add('task', 'text')
        //->add('dueDate', 'date')
        ->add('dueDate', 'date', array('widget' => 'single_text'))
        ->getForm();
    
        if ($request->isMethod('POST')) {
            $form->bind($request);
    
            if ($form->isValid()) {
                // perform some action, such as saving the task to the database
    
                return $this->redirect($this->generateUrl('task_success'));
            }
        }
    
        // ...
    }
    
    
    //Benefit is can use any where in project
    public function newTaskFromClsAction()
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        
        $form = $this->createForm(new TaskType(), $task);
        
        //$form->get('dueDate')->getData();
//         if ($request->isMethod('POST')) {
//             $form->bind($request);
        
//             // data is an array with "name", "email", and "message" keys
//             $data = $form->getData();
//         }

        //or
        
        //$this->get('request')->request->get('name');
        
//         use Symfony\Component\Validator\Constraints\Length;
//         use Symfony\Component\Validator\Constraints\NotBlank;
        
//         $builder
//         ->add('firstName', 'text', array(
//                 'constraints' => new Length(array('min' => 3)),
//         ))
//         ->add('lastName', 'text', array(
//                 'constraints' => array(
//                         new NotBlank(),
//                         new Length(array('min' => 3)),
//                 ),
//         ))
//         ;
        return $this->render('AcmeTaskBundle:Default:new2.html.twig', array(
                'form' => $form->createView(),
        ));

    }
}
