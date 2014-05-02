<?php

namespace Travel\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Travel\AgenceBundle\Entity\Hotels;
use Travel\AgenceBundle\Form\HotelsType;

/**
 * Hotels controller.
 *
 */
class HotelsController extends Controller
{

    /**
     * Lists all Hotels entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAgenceBundle:Hotels')->findAll();

        return $this->render('TravelAgenceBundle:Hotels:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hotels entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hotels();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('travel_hotel_show', array('id' => $entity->getId())));
        }

        return $this->render('TravelAgenceBundle:Hotels:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Hotels entity.
    *
    * @param Hotels $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Hotels $entity)
    {
        $form = $this->createForm(new HotelsType(), $entity, array(
            'action' => $this->generateUrl('travel_hotel_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hotels entity.
     *
     */
    public function newAction()
    {
        $entity = new Hotels();
        $form   = $this->createCreateForm($entity);

        return $this->render('TravelAgenceBundle:Hotels:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hotels entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:Hotels:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Hotels entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:Hotels:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hotels entity.
    *
    * @param Hotels $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hotels $entity)
    {
        $form = $this->createForm(new HotelsType(), $entity, array(
            'action' => $this->generateUrl('travel_hotel_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hotels entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Hotels')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hotels entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('travel_hotel_edit', array('id' => $id)));
        }

        return $this->render('TravelAgenceBundle:Hotels:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hotels entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAgenceBundle:Hotels')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hotels entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('travel_hotel'));
    }

    /**
     * Creates a form to delete a Hotels entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('travel_hotel_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
