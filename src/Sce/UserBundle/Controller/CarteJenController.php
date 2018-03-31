<?php

namespace Sce\UserBundle\Controller;

use Sce\UserBundle\Entity\CarteJen;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cartejen controller.
 *
 */
class CarteJenController extends Controller
{
    /**
     * Lists all carteJen entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carteJens = $em->getRepository('UserBundle:CarteJen')->findAll();

        return $this->render('UserBundle:Cartejen:index.html.twig', array(
            'carteJens' => $carteJens,
        ));
    }

    /**
     * Creates a new carteJen entity.
     *
     */
    public function newAction(Request $request)
    {
        $carteJen = new Cartejen();
        $form = $this->createForm('Sce\UserBundle\Form\CarteJenType', $carteJen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carteJen);
            $em->flush();

            return $this->redirectToRoute('cartejen_show', array('id' => $carteJen->getId()));
        }

        return $this->render('UserBundle:Cartejen:new.html.twig', array(
            'carteJen' => $carteJen,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carteJen entity.
     *
     */
    public function showAction(CarteJen $carteJen)
    {
        $deleteForm = $this->createDeleteForm($carteJen);

        return $this->render('UserBundle:Cartejen:show.html.twig', array(
            'carteJen' => $carteJen,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carteJen entity.
     *
     */
    public function editAction(Request $request, CarteJen $carteJen)
    {
        $deleteForm = $this->createDeleteForm($carteJen);
        $editForm = $this->createForm('Sce\UserBundle\Form\CarteJenType', $carteJen);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cartejen_edit', array('id' => $carteJen->getId()));
        }

        return $this->render('UserBundle:Cartejen:edit.html.twig', array(
            'carteJen' => $carteJen,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a carteJen entity.
     *
     */
    public function deleteAction(Request $request, CarteJen $carteJen)
    {
        $form = $this->createDeleteForm($carteJen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carteJen);
            $em->flush();
        }

        return $this->redirectToRoute('cartejen_index');
    }

    /**
     * Creates a form to delete a carteJen entity.
     *
     * @param CarteJen $carteJen The carteJen entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CarteJen $carteJen)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cartejen_delete', array('id' => $carteJen->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
