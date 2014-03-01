<?php

namespace Project\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Project\UserBundle\Entity\UserInformation;
use Project\UserBundle\Form\UserInformationType;
use Project\ExperienceBundle\Entity\Experience;

/**
 * UserInformation controller.
 *
 * @Route("/project_user_information")
 */
class UserInformationController extends Controller
{

    /**
     * Lists all UserInformation entities.
     *
     * @Route("/", name="project_user_information")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProjectUserBundle:UserInformation')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new UserInformation entity.
     *
     * @Route("/", name="project_user_information_create")
     * @Method("POST")
     * @Template("ProjectUserBundle:UserInformation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new UserInformation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_user_information_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a UserInformation entity.
    *
    * @param UserInformation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(UserInformation $entity)
    {
        $form = $this->createForm(new UserInformationType(), $entity, array(
            'action' => $this->generateUrl('project_user_information_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UserInformation entity.
     *
     * @Route("/new", name="project_user_information_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UserInformation();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a UserInformation entity.
     *
     * @Route("/{id}", name="project_user_information_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $informations = $em->getRepository('ProjectUserBundle:UserInformation')->find($id);
        $educations = $informations->getEducation();
        $experiences = $informations->getExperience();
        
        if (!$informations) {
            throw $this->createNotFoundException('Unable to find UserInformation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $informations,
            'educations'  => $educations,
            'experiences' => $experiences,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing UserInformation entity.
     *
     * @Route("/{id}/edit", name="project_user_information_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjectUserBundle:UserInformation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserInformation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a UserInformation entity.
    *
    * @param UserInformation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UserInformation $entity)
    {
        $form = $this->createForm(new UserInformationType(), $entity, array(
            'action' => $this->generateUrl('project_user_information_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UserInformation entity.
     *
     * @Route("/{id}", name="project_user_information_update")
     * @Method("PUT")
     * @Template("ProjectUserBundle:UserInformation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjectUserBundle:UserInformation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserInformation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('project_user_information_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a UserInformation entity.
     *
     * @Route("/{id}", name="project_user_information_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProjectUserBundle:UserInformation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UserInformation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('project_user_information'));
    }

    /**
     * Creates a form to delete a UserInformation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('project_user_information_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
