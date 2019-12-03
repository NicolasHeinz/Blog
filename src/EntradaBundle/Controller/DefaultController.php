<?php

namespace EntradaBundle\Controller;

use EntradaBundle\Entity\Entrada;
use EntradaBundle\Form\EntradaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $id = $request->get('id');

        $entrada = new Entrada();

        $form = $this->createForm(EntradaType::class,$entrada);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $entrada = $form->getData();

            $entrada->setAutor($id);
            $entrada->setFechaCreacion(new \DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();

            return $this->redirectToRoute('home_homepage',compact('id'));
        }

        return $this->render('@Entrada/Default/index.html.twig',array("form"=>$form->createView()));
    }

    public function newBlogAction(){

        return $this->render('@Home/Default/index.html.twig');
    }

    public function editEntradaAction(Request $request){
        $path= substr($request->headers->get('referer'),-18,13);

        $id = $request->request->get('_id');
        $id_entrada = $request->request->get('_id-editado');
        $titulo = $request->request->get('_titulo-editado');
        $cuerpo = $request->request->get('_cuerpo-editado');

        $repository = $this->getDoctrine()->getRepository(Entrada::class);

        $entradaEditada = $repository->find($id_entrada);

        $entradaEditada->setTitulo($titulo);
        $entradaEditada->setCuerpo($cuerpo);

        $em = $this->getDoctrine()->getManager();
        $em->persist($entradaEditada);
        $em->flush();


        if($path == "profile/home/"){
            return $this->redirectToRoute('home_profile',compact('id'));
        }else{
            return $this->redirectToRoute('home_homepage',compact('id'));
        }

    }


    public function deletEntradaAction(Request $request){

        $id = $request->request->get('_id');
        $id_entrada = $request->request->get('_id-eliminar');

        $em = $this->getDoctrine()->getManager();
        $entradaPorEliminar = $em->getRepository(Entrada::class)->find($id_entrada);

        $em->remove($entradaPorEliminar);
        $em->flush();

        $this->addFlash('info', 'Registro borrado');

        return $this->redirectToRoute('home_homepage',compact('id'));
    }
}
