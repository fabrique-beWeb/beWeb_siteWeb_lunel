<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Partenaire;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controleur CRUD des partenaires.
 *
 * @Route("admin/partenaires")
 */
class PartenairesController extends Controller {

    /**
     * Lists all sponsors.
     *
     * @Route("/", name="partenaire_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $partenaires = $em->getRepository('AppBundle:Partenaire')->findAll();

        return $this->render('partenaires/index.html.twig', array(
                    'partenaires' => $partenaires,
        ));
    }

    /**
     * Creates a new sponsor.
     *
     * @Route("/new", name="partenaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $partenaires = new Partenaire();
        $form = $this->createForm('AppBundle\Form\PartenaireType', $partenaires);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $nomDuFichier = md5(uniqid()) . '.' . $partenaires->getLogo()->getClientOriginalExtension();
            $partenaires->getLogo()->move('upload/partenaire', $nomDuFichier);
            $partenaires->setLogo($nomDuFichier);
            $em = $this->getDoctrine()->getManager();
            $em->persist($partenaires);
            $em->flush($partenaires);

//            return $this->redirectToRoute('promotion_show', array('id' => $promos->getId()));
        }

        return $this->render('partenaires/new.html.twig', array(
                    'partenaires' => $partenaires,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sponsor.
     *
     * @Route("/{id}", name="partenaire_show")
     * @Method("GET")
     */
    public function showAction(Partenaire $partenaires) {
        $deleteForm = $this->createDeleteForm($partenaires);

        return $this->render('partenaires/show.html.twig', array(
                    'partenaires' => $partenaires,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sponsor.
     *
     * @Route("/{id}/edit", name="partenaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Partenaire $partenaires) {
        $deleteForm = $this->createDeleteForm($partenaires);
        $editForm = $this->createForm('AppBundle\Form\PartenaireType', $partenaires);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $nomDuFichier = md5(uniqid()) . '.' . $partenaires->getLogo()->getClientOriginalExtension();
            $partenaires->getLogo()->move('upload/partenaire', $nomDuFichier);
            $partenaires->setLogo($nomDuFichier);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_edit', array('id' => $partenaires->getId()));
        }

        return $this->render('partenaires/edit.html.twig', array(
                    'partenaires' => $partenaires,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sponsor.
     *
     * @Route("/{id}", name="partenaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Partenaire $partenaires) {
        $form = $this->createDeleteForm($partenaires);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($partenaires);
            $em->flush($partenaires);
        }

        return $this->redirectToRoute('partenaire_index');
    }

    /**
     * Creates a form to delete a sponsor.
     *
     */
    private function createDeleteForm(Partenaire $partenaires) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('partenaire_delete', array('id' => $partenaires->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
