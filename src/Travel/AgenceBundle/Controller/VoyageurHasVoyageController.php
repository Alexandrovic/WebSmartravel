<?php

namespace Travel\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Travel\AgenceBundle\Entity\VoyageurHasVoyage;
use Travel\AgenceBundle\Form\VoyageurHasVoyageType;

/**
 * VoyageurHasVoyage controller.
 *
 */
class VoyageurHasVoyageController extends Controller
{

    /**
     * Lists all VoyageurHasVoyage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TravelAgenceBundle:VoyageurHasVoyage')->findAll();

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new VoyageurHasVoyage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new VoyageurHasVoyage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('travel_voypropose_show', array('id' => $entity->getId())));
        }

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a VoyageurHasVoyage entity.
    *
    * @param VoyageurHasVoyage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(VoyageurHasVoyage $entity)
    {
        $form = $this->createForm(new VoyageurHasVoyageType(), $entity, array(
            'action' => $this->generateUrl('travel_voypropose_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new VoyageurHasVoyage entity.
     *
     */
    public function newAction()
    {
        $entity = new VoyageurHasVoyage();
        $form   = $this->createCreateForm($entity);

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a VoyageurHasVoyage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing VoyageurHasVoyage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a VoyageurHasVoyage entity.
    *
    * @param VoyageurHasVoyage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VoyageurHasVoyage $entity)
    {
        $form = $this->createForm(new VoyageurHasVoyageType(), $entity, array(
            'action' => $this->generateUrl('travel_voypropose_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing VoyageurHasVoyage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TravelAgenceBundle:VoyageurHasVoyage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('travel_voypropose_edit', array('id' => $id)));
        }

        return $this->render('TravelAgenceBundle:VoyageurHasVoyage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a VoyageurHasVoyage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TravelAgenceBundle:VoyageurHasVoyage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VoyageurHasVoyage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('travel_voypropose'));
    }

    /**
     * Creates a form to delete a VoyageurHasVoyage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('travel_voypropose_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
