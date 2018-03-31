<?php

namespace Sce\UserBundle\Controller;

use Sce\UserBundle\Entity\Jen;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Jen controller.
 *
 */
class JenController extends Controller
{
    /**
     * Lists all jen entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jens = $em->getRepository('UserBundle:Jen')->findAll();

        return $this->render('UserBundle:Jen:index.html.twig', array(
            'jens' => $jens,
        ));
    }

    /**
     * Creates a new jen entity.
     *
     */
    public function newAction(Request $request)
    {
        $jen = new Jen();
        $form = $this->createForm('Sce\UserBundle\Form\JenType', $jen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //+++++++++++++++++++++++++++++

            if(!$jen->getCreateurs()->contains($this->getUser())){
                $jen->addCreateur($this->getUser());  
            }
            
            foreach ($form->get('missions')->getData() as $mission) {
                foreach ($mission->getImages() as $image) {
                    $image->setMission($mission);
                }
                $mission->setJen($jen);
                $jen->addMission($mission);
            }

            //+++++++++++++++++++++++++++++

            $em = $this->getDoctrine()->getManager();
            $em->persist($jen);
            $em->flush();

            return $this->redirectToRoute('jen_edit', array('id' => $jen->getId()));
            //return $this->redirectToRoute('jen_show', array('id' => $jen->getId()));
        }

        return $this->render('UserBundle:Jen:new.html.twig', array(
            'jen' => $jen,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a jen entity.
     *
     */
    public function showAction(Jen $jen)
    {
        $deleteForm = $this->createDeleteForm($jen);

        return $this->render('UserBundle:Jen:show.html.twig', array(
            'jen' => $jen,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing jen entity.
     *
     */
    public function editAction(Request $request, Jen $jen)
    {
        $deleteForm = $this->createDeleteForm($jen);
        $editForm = $this->createForm('Sce\UserBundle\Form\JenType', $jen);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            //+++++++++++++++++++++++++++++
            if(!$jen->getCreateurs()->contains($this->getUser())){
                $jen->addCreateur($this->getUser());  
            }
            
            foreach ($editForm->get('missions')->getData() as $mission) {
                foreach ($mission->getImages() as $image) {
                    $image->setMission($mission);
                }
                $mission->setJen($jen);
                $jen->addMission($mission);
            }

            //+++++++++++++++++++++++++++++

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('jen_show', array('id' => $jen->getId()));
        }

        return $this->render('UserBundle:Jen:edit.html.twig', array(
            'jen' => $jen,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a jen entity.
     *
     */
    public function deleteAction(Request $request, Jen $jen)
    {
        $form = $this->createDeleteForm($jen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($jen);
            $em->flush();
        }

        return $this->redirectToRoute('jen_index');
    }

    /**
     * Creates a form to delete a jen entity.
     *
     * @param Jen $jen The jen entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Jen $jen)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jen_delete', array('id' => $jen->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
