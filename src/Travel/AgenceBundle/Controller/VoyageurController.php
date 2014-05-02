<?php

namespace Travel\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Travel\AgenceBundle\Entity\Voyageur;
use Travel\AgenceBundle\Form\VoyageurType;

/**
 * Voyageur controller.
 *
 */
class VoyageurController extends Controller
{

    /**
     * Lists all Voyageur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAgenceBundle:Voyageur')->findAll();

        return $this->render('TravelAgenceBundle:Voyageur:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Voyageur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Voyageur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('travel_voyageur_show', array('id' => $entity->getId())));
        }

        return $this->render('TravelAgenceBundle:Voyageur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Voyageur entity.
    *
    * @param Voyageur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Voyageur $entity)
    {
        $form = $this->createForm(new VoyageurType(), $entity, array(
            'action' => $this->generateUrl('travel_voyageur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Voyageur entity.
     *
     */
    public function newAction()
    {
        $entity = new Voyageur();
        $form   = $this->createCreateForm($entity);

        return $this->render('TravelAgenceBundle:Voyageur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Voyageur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:Voyageur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Voyageur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:Voyageur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Voyageur entity.
    *
    * @param Voyageur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Voyageur $entity)
    {
        $form = $this->createForm(new VoyageurType(), $entity, array(
            'action' => $this->generateUrl('travel_voyageur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Voyageur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:Voyageur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Voyageur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('travel_voyageur_edit', array('id' => $id)));
        }

        return $this->render('TravelAgenceBundle:Voyageur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Voyageur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAgenceBundle:Voyageur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Voyageur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('travel_voyageur'));
    }

    /**
     * Creates a form to delete a Voyageur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('travel_voyageur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
