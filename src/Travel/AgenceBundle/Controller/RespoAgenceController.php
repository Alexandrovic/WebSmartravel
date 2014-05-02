<?php

namespace Travel\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Travel\AgenceBundle\Entity\RespoAgence;
use Travel\AgenceBundle\Form\RespoAgenceType;

/**
 * RespoAgence controller.
 *
 */
class RespoAgenceController extends Controller
{

    /**
     * Lists all RespoAgence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAgenceBundle:RespoAgence')->findAll();

        return $this->render('TravelAgenceBundle:RespoAgence:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RespoAgence entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RespoAgence();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('travel_agence_show', array('id' => $entity->getId())));
        }

        return $this->render('TravelAgenceBundle:RespoAgence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a RespoAgence entity.
    *
    * @param RespoAgence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(RespoAgence $entity)
    {
        $form = $this->createForm(new RespoAgenceType(), $entity, array(
            'action' => $this->generateUrl('travel_agence_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RespoAgence entity.
     *
     */
    public function newAction()
    {
        $entity = new RespoAgence();
        $form   = $this->createCreateForm($entity);

        return $this->render('TravelAgenceBundle:RespoAgence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RespoAgence entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:RespoAgence:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing RespoAgence entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:RespoAgence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RespoAgence entity.
    *
    * @param RespoAgence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RespoAgence $entity)
    {
        $form = $this->createForm(new RespoAgenceType(), $entity, array(
            'action' => $this->generateUrl('travel_agence_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RespoAgence entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:RespoAgence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RespoAgence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('travel_agence_edit', array('id' => $id)));
        }

        return $this->render('TravelAgenceBundle:RespoAgence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RespoAgence entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAgenceBundle:RespoAgence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RespoAgence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('travel_agence'));
    }

    /**
     * Creates a form to delete a RespoAgence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('travel_agence_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
