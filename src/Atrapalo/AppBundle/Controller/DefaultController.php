<?php

namespace Atrapalo\AppBundle\Controller;

use Atrapalo\AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/edit")
     * @Template()
     */
    public function editAction()
    {
        $entity = $this->getDoctrine()->getRepository('AtrapaloAppBundle:Product')->find(1);

        $form = $this->createFormBuilder($entity)
            ->add('name')
            ->add('price')
            ->add('createdAt')
            ->add('save', 'submit')
            ->getForm()
        ;

        return [
            'product_form' => $form->createView()
        ];
    }
}
