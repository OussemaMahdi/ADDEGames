<?php

namespace Sce\UserBundle\Controller;

use Sce\UserBundle\Entity\Mission;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Mission controller.
 *
 */
class MissionController extends Controller
{
    /**
     * Lists all mission entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $missions = $em->getRepository('UserBundle:Mission')->findAll();

        return $this->render('UserBundle:Mission:index.html.twig', array(
            'missions' => $missions,
        ));
    }

    /**
     * Creates a new mission entity.
     *
     */
    public function newAction(Request $request)
    {
        $mission = new Mission();

        $form = $this->createForm('Sce\UserBundle\Form\MissionType', $mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //++++++++++++++++++++++++++++++++++++++++++++++++++
            $images = $form->get('images')->getData() ;
            foreach ($images as $image) {
                $image->setMission($mission);
                $mission->addImage($image);
            }
            
            //++++++++++++++++++++++++++++++++++++++++++++++++++
            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();

            return $this->redirectToRoute('mission_show', array('id' => $mission->getId()));
        }

        return $this->render('UserBundle:Mission:new.html.twig', array(
            'mission' => $mission,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mission entity.
     *
     */
    public function showAction(Mission $mission)
    {
        $deleteForm = $this->createDeleteForm($mission);

        return $this->render('UserBundle:Mission:show.html.twig', array(
            'mission' => $mission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mission entity.
     *
     */
    public function editAction(Request $request, Mission $mission)
    {
        $deleteForm = $this->createDeleteForm($mission);
        $editForm = $this->createForm('Sce\UserBundle\Form\MissionType', $mission);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mission_edit', array('id' => $mission->getId()));
        }

        return $this->render('UserBundle:Mission:edit.html.twig', array(
            'mission' => $mission,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mission entity.
     *
     */
    public function deleteAction(Request $request, Mission $mission)
    {
        $form = $this->createDeleteForm($mission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mission);
            $em->flush();
        }

        return $this->redirectToRoute('mission_index');
    }

    /**
     * Creates a form to delete a mission entity.
     *
     * @param Mission $mission The mission entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mission $mission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mission_delete', array('id' => $mission->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
