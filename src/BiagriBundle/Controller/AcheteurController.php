<?php

namespace BiagriBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BiagriBundle\Entity\Acheteur;
use BiagriBundle\Form\AcheteurType;

/**
 * Acheteur controller.
 *
 */
class AcheteurController extends Controller
{
   

    /**
     * Creates a new Acheteur entity.
     *
     */
    public function newAction(Request $request)
    {
        $acheteur = new Acheteur();
        $form = $this->createForm('BiagriBundle\Form\AcheteurType', $acheteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acheteur);
            $em->flush();

            return $this->redirectToRoute('acheteur_show', array('id' => $acheteur->getId()));
        }

        return $this->render('BiagriBundle:acheteur:new.html.twig', array(
            'acheteur' => $acheteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acheteur entity.
     *
     */
    public function showAction(Acheteur $acheteur)
    {
        $deleteForm = $this->createDeleteForm($acheteur);

        return $this->render('BiagriBundle:acheteur:show.html.twig', array(
            'acheteur' => $acheteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acheteur entity.
     *
     */
    public function editAction(Request $request, Acheteur $acheteur)
    {
        $deleteForm = $this->createDeleteForm($acheteur);
        $editForm = $this->createForm('BiagriBundle\Form\AcheteurType', $acheteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acheteur);
            $em->flush();

            return $this->redirectToRoute('acheteur_edit', array('id' => $acheteur->getId()));
        }

        return $this->render('BiagriBundle:acheteur:edit.html.twig', array(
            'acheteur' => $acheteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Acheteur entity.
     *
     */
    public function deleteAction(Request $request, Acheteur $acheteur)
    {
        $form = $this->createDeleteForm($acheteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acheteur);
            $em->flush();
        }

        return $this->redirectToRoute('acheteur_index');
    }

    /**
     * Creates a form to delete a Acheteur entity.
     *
     * @param Acheteur $acheteur The Acheteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Acheteur $acheteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acheteur_delete', array('id' => $acheteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
