<?php

namespace BiagriBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BiagriBundle\Entity\Tarifs;
use BiagriBundle\Form\TarifsType;

/**
 * Tarifs controller.
 *
 */
class TarifsController extends Controller
{
    /**
     * Lists all Tarifs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarifs = $em->getRepository('BiagriBundle:Tarifs')->findAll();

        return $this->render('B', array(
            'tarifs' => $tarifs,
        ));
    }

    /**
     * Creates a new Tarifs entity.
     *
     */
    public function newAction(Request $request)
    {
        $tarif = new Tarifs();
        $form = $this->createForm('BiagriBundle\Form\TarifsType', $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('tarifs_show', array('id' => $tarif->getId()));
        }

        return $this->render('BiagriBundle:tarifs:new.html.twig', array(
            'tarif' => $tarif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarifs entity.
     *
     */
    public function showAction(Tarifs $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);

        return $this->render('BiagriBundle:tarifs:show.html.twig', array(
            'tarif' => $tarif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tarifs entity.
     *
     */
    public function editAction(Request $request, Tarifs $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);
        $editForm = $this->createForm('BiagriBundle\Form\TarifsType', $tarif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('tarifs_edit', array('id' => $tarif->getId()));
        }

        return $this->render('BiagriBundle:tarifs:edit.html.twig', array(
            'tarif' => $tarif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tarifs entity.
     *
     */
    public function deleteAction(Request $request, Tarifs $tarif)
    {
        $form = $this->createDeleteForm($tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarif);
            $em->flush();
        }

        return $this->redirectToRoute('tarifs_index');
    }

    /**
     * Creates a form to delete a Tarifs entity.
     *
     * @param Tarifs $tarif The Tarifs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarifs $tarif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarifs_delete', array('id' => $tarif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
}
