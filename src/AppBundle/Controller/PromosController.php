<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Promos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Promo controller.
 *
 * @Route("admin/promotion")
 */
class PromosController extends Controller
{
    /**
     * Lists all promo entities.
     *
     * @Route("/", name="promotion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promos = $em->getRepository('AppBundle:Promos')->findAll();

        return $this->render('promos/index.html.twig', array(
            'promos' => $promos,
        ));
    }

    /**
     * Creates a new promo entity.
     *
     * @Route("/new", name="promotion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $promos = new Promos();
        $form = $this->createForm('AppBundle\Form\PromosType', $promos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $nomDuFichier = md5(uniqid()) . '.' . $promos->getImage()->getClientOriginalExtension();
            $promos->getImage()->move('upload/promos', $nomDuFichier);
            $promos->setImage($nomDuFichier);
            $em = $this->getDoctrine()->getManager();
            $em->persist($promos);
            $em->flush($promos);

//            return $this->redirectToRoute('promotion_show', array('id' => $promos->getId()));
        }

        return $this->render('promos/new.html.twig', array(
            'promo' => $promos,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a promo entity.
     *
     * @Route("/{id}", name="promotion_show")
     * @Method("GET")
     */
    public function showAction(Promos $promo)
    {
        $deleteForm = $this->createDeleteForm($promo);

        return $this->render('promos/show.html.twig', array(
            'promo' => $promo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing promo entity.
     *
     * @Route("/{id}/edit", name="promotion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Promos $promos)
    {
        $deleteForm = $this->createDeleteForm($promos);
        $editForm = $this->createForm('AppBundle\Form\PromosType', $promos);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $nomDuFichier = md5(uniqid()) . '.' . $promos->getImage()->getClientOriginalExtension();
            $promos->getImage()->move('upload/promos', $nomDuFichier);
            $promos->setImage($nomDuFichier);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('promotion_edit', array('id' => $promos->getId()));
        }

        return $this->render('promos/edit.html.twig', array(
            'promo' => $promos,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a promo entity.
     *
     * @Route("/{id}", name="promotion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Promos $promo)
    {
        $form = $this->createDeleteForm($promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promo);
            $em->flush($promo);
        }

        return $this->redirectToRoute('promotion_index');
    }

    /**
     * Creates a form to delete a promo entity.
     *
     * @param Promos $promo The promo entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Promos $promo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('promotion_delete', array('id' => $promo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
