<?php

namespace Siteadmin3Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Siteadmin3Bundle\Entity\Siteadmin3;
use Siteadmin3Bundle\Form\Siteadmin3Type;

/**
 * Siteadmin3 controller.
 *
 */
class Siteadmin3Controller extends Controller
{

    /**
     * Lists all Siteadmin3 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $siteadmin3s = $em->getRepository('Siteadmin3Bundle:Siteadmin3')->findAll();

        return $this->render('Siteadmin3Bundle:siteadmin3:index.html.twig', array(
            'siteadmin3s' => $siteadmin3s,
        ));
    }

    /**
     * Creates a new Siteadmin3 entity.
     *
     */
    public function newAction(Request $request)
    {
        $siteadmin3 = new Siteadmin3();
        $form = $this->createForm('Siteadmin3Bundle\Form\Siteadmin3Type', $siteadmin3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($siteadmin3);
            $em->flush();

            return $this->redirectToRoute('siteadmin3_show', array('id' => $siteadmin3->getId()));
        }

        return $this->render('Siteadmin3Bundle:siteadmin3:new.html.twig', array(
            'siteadmin3' => $siteadmin3,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Siteadmin3 entity.
     *
     */
    public function showAction(Siteadmin3 $siteadmin3)
    {
        $deleteForm = $this->createDeleteForm($siteadmin3);

        return $this->render('Siteadmin3Bundle:siteadmin3:show.html.twig', array(
            'siteadmin3' => $siteadmin3,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Siteadmin3 entity.
     *
     */
    public function editAction(Request $request, Siteadmin3 $siteadmin3)
    {
        $deleteForm = $this->createDeleteForm($siteadmin3);
        $editForm = $this->createForm('Siteadmin3Bundle\Form\Siteadmin3Type', $siteadmin3);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($siteadmin3);
            $em->flush();

            return $this->redirectToRoute('siteadmin3_edit', array('id' => $siteadmin3->getId()));
        }

        return $this->render('Siteadmin3Bundle:siteadmin3:edit.html.twig', array(
            'siteadmin3' => $siteadmin3,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Siteadmin3 entity.
     *
     */
    public function deleteAction(Request $request, Siteadmin3 $siteadmin3)
    {
        $form = $this->createDeleteForm($siteadmin3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($siteadmin3);
            $em->flush();
        }

        return $this->redirectToRoute('siteadmin3_index');
    }

    /**
     * Creates a form to delete a Siteadmin3 entity.
     *
     * @param Siteadmin3 $siteadmin3 The Siteadmin3 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Siteadmin3 $siteadmin3)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('siteadmin3_delete', array('id' => $siteadmin3->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
