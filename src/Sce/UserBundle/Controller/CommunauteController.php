<?php

namespace Sce\UserBundle\Controller;

use Sce\UserBundle\Entity\Communaute;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Communaute controller.
 *
 */
class CommunauteController extends Controller
{
    /**
     * Lists all communaute entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $communautes = $em->getRepository('UserBundle:Communaute')->findAll();

        return $this->render('UserBundle:Communaute:index.html.twig', array(
            'communautes' => $communautes,
        ));
    }

    /**
     * Creates a new communaute entity.
     *
     */
    public function newAction(Request $request)
    {
        $communaute = new Communaute();
        $form = $this->createForm('Sce\UserBundle\Form\CommunauteType', $communaute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($communaute);
            $em->flush();

            return $this->redirectToRoute('communaute_show', array('id' => $communaute->getId()));
        }

        return $this->render('UserBundle:Communaute:new.html.twig', array(
            'communaute' => $communaute,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a communaute entity.
     *
     */
    public function showAction(Communaute $communaute)
    {
        $deleteForm = $this->createDeleteForm($communaute);

        return $this->render('UserBundle:Communaute:show.html.twig', array(
            'communaute' => $communaute,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing communaute entity.
     *
     */
    public function editAction(Request $request, Communaute $communaute)
    {
        $deleteForm = $this->createDeleteForm($communaute);
        $editForm = $this->createForm('Sce\UserBundle\Form\CommunauteType', $communaute);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('communaute_edit', array('id' => $communaute->getId()));
        }

        return $this->render('UserBundle:Communaute:edit.html.twig', array(
            'communaute' => $communaute,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a communaute entity.
     *
     */
    public function deleteAction(Request $request, Communaute $communaute)
    {
        $form = $this->createDeleteForm($communaute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($communaute);
            $em->flush();
        }

        return $this->redirectToRoute('communaute_index');
    }

    /**
     * Creates a form to delete a communaute entity.
     *
     * @param Communaute $communaute The communaute entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Communaute $communaute)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('communaute_delete', array('id' => $communaute->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
