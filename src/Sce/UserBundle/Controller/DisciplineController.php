<?php

namespace Sce\UserBundle\Controller;

use Sce\UserBundle\Entity\Discipline;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Discipline controller.
 *
 */
class DisciplineController extends Controller
{
    /**
     * Lists all discipline entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $disciplines = $em->getRepository('UserBundle:Discipline')->findAll();

        return $this->render('UserBundle:Discipline:index.html.twig', array(
            'disciplines' => $disciplines,
        ));
    }

    /**
     * Creates a new discipline entity.
     *
     */
    public function newAction(Request $request)
    {
        $discipline = new Discipline();
        $form = $this->createForm('Sce\UserBundle\Form\DisciplineType', $discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discipline);
            $em->flush();

            return $this->redirectToRoute('discipline_show', array('id' => $discipline->getId()));
        }

        return $this->render('UserBundle:Discipline:new.html.twig', array(
            'discipline' => $discipline,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a discipline entity.
     *
     */
    public function showAction(Discipline $discipline)
    {
        $deleteForm = $this->createDeleteForm($discipline);

        return $this->render('UserBundle:Discipline:show.html.twig', array(
            'discipline' => $discipline,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing discipline entity.
     *
     */
    public function editAction(Request $request, Discipline $discipline)
    {
        $deleteForm = $this->createDeleteForm($discipline);
        $editForm = $this->createForm('Sce\UserBundle\Form\DisciplineType', $discipline);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('discipline_edit', array('id' => $discipline->getId()));
        }

        return $this->render('UserBundle:Discipline:edit.html.twig', array(
            'discipline' => $discipline,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a discipline entity.
     *
     */
    public function deleteAction(Request $request, Discipline $discipline)
    {
        $form = $this->createDeleteForm($discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($discipline);
            $em->flush();
        }

        return $this->redirectToRoute('discipline_index');
    }

    /**
     * Creates a form to delete a discipline entity.
     *
     * @param Discipline $discipline The discipline entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Discipline $discipline)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('discipline_delete', array('id' => $discipline->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
