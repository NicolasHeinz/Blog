<?php

namespace EntradaBundle\Controller;

use DateTime;
use EntradaBundle\Entity\Entrada;
use EntradaBundle\Form\EntradaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $id = $request->getSession()->get('user')->getId();

        $entrada = new Entrada();

        $form = $this->createForm(EntradaType::class,$entrada);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $entrada = $form->getData();

            $serviceTransfor = $this->get('app.transform_text');

            $newTitle = $serviceTransfor->TransformText($entrada->getTitulo());
            $entrada->setTitulo($newTitle);

            $newBody = $serviceTransfor->TransformText($entrada->getCuerpo());
            $entrada->setCuerpo($newBody);

            $entrada->setUserId($id);
            $entrada->setFechaCreacion(new DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();

            return $this->redirectToRoute('home_profile');
        }

        return $this->render('@Entrada/Default/index.html.twig',[
            "form"=>$form->createView()
            ]
        );
    }

    public function editEntradaAction(Request $request){

        $serviceTransfor = $this->get('app.transform_text');

        $path= substr($request->headers->get('referer'),-13,13);

        $id_entrada = $request->request->get('_id_entrada');

        $titulo = $serviceTransfor->TransformText(
            $request->request->get('entradabundle_entrada')['titulo']
        );

        $cuerpo =$serviceTransfor->TransformText(
            $request->request->get('entradabundle_entrada')['cuerpo']
        );

        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);

        $entradaEditada = $repository->find($id_entrada);

        $entradaEditada->setTitulo($titulo);
        $entradaEditada->setCuerpo($cuerpo);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        if($path == "profile/home/"){
            return $this->redirectToRoute('home_profile');
        }

        return $this->redirectToRoute('home_homepage');
    }

    public function deletEntradaAction(Request $request){

        $id_entrada = $request->request->get('_id-eliminar');

        $em = $this->getDoctrine()->getManager();
        $entradaPorEliminar = $em->getRepository(Entrada::class)
                                ->find($id_entrada);

        $em->remove($entradaPorEliminar);
        $em->flush();

        $this->addFlash('info', 'Registro borrado');

        $path= substr($request->headers->get('referer'),-13,13);

        if($path == "profile/home/"){
            return $this->redirectToRoute('home_profile');
        }

        return $this->redirectToRoute('home_homepage');
    }
}
