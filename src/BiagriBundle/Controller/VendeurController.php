<?php

namespace BiagriBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BiagriBundle\Entity\Vendeur;
use BiagriBundle\Form\VendeurType;

/**
 * Vendeur controller.
 *
 */
class VendeurController extends Controller
{
    

    /**
     * Creates a new Vendeur entity.
     *
     */
    public function newAction(Request $request)
    {
        $vendeur = new Vendeur();
        $form = $this->createForm('BiagriBundle\Form\VendeurType', $vendeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vendeur);
            $em->flush();

            return $this->redirectToRoute('vendeur_show', array('id' => $vendeur->getId()));
        }

        return $this->render('BiagriBundle:vendeur:new.html.twig', array(
            'vendeur' => $vendeur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vendeur entity.
     *
     */
    public function showAction(Vendeur $vendeur)
    {
        $deleteForm = $this->createDeleteForm($vendeur);

        return $this->render('vendeur/show.html.twig', array(
            'vendeur' => $vendeur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vendeur entity.
     *
     */
    public function editAction(Request $request, Vendeur $vendeur)
    {
        $deleteForm = $this->createDeleteForm($vendeur);
        $editForm = $this->createForm('BiagriBundle\Form\VendeurType', $vendeur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vendeur);
            $em->flush();

            return $this->redirectToRoute('vendeur_edit', array('id' => $vendeur->getId()));
        }

        return $this->render('BiagriBundle:vendeur:edit.html.twig', array(
            'vendeur' => $vendeur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Vendeur entity.
     *
     */
    public function deleteAction(Request $request, Vendeur $vendeur)
    {
        $form = $this->createDeleteForm($vendeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vendeur);
            $em->flush();
        }

        return $this->redirectToRoute('vendeur_index');
    }

    /**
     * Creates a form to delete a Vendeur entity.
     *
     * @param Vendeur $vendeur The Vendeur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vendeur $vendeur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vendeur_delete', array('id' => $vendeur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
