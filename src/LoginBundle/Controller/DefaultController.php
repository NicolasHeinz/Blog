<?php

namespace LoginBundle\Controller;

use LoginBundle\Entity\users;
use LoginBundle\Form\usersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Login/Default/index.html.twig');
    }

    public function registroAction(Request $request)
    {

        $usuario = new users();

        $form = $this->createForm(usersType::class,$usuario);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $usuario = $form->getData();

            $usuario->setCreatedDate(new \DateTime('now'));
            $usuario->setActive(true);
            $usuario->setRol("usuario");

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('@Login/Registro/registro.html.twig',array("form"=>$form->createView()));
    }

    public function singUpAction(Request $request)
    {

        $mail = $request->request->get('_username');
        $pass = $request->request->get('_password');

        $repository = $this->getDoctrine()->getRepository(users::class);

        $usuario = $repository->findBy([
            'email' => $mail,
            'password' => $pass
            ]);

        if( ($usuario != null) && ($usuario[0]->getActive() == true) ){

            $id =$usuario[0]->getId();

            return $this->redirectToRoute('home_homepage',compact('id'));
        }else{
            return $this->render('@Login/Default/index.html.twig');
        }

    }

    public function logoutAction(Request $request)
    {
        return $this->redirectToRoute('login');
    }

    public function editPerfilAction(Request $request)
    {
        $id = $request->request->get('_id');
        $nombre = $request->request->get('_nombre');
        $apellido = $request->request->get('_apellido');
        $email = $request->request->get("_email");
        $contraseña = $request->request->get('_contraseña');
        $nombreUsuario = $request->request->get('_nomusuario');

        $repository = $this->getDoctrine()->getRepository(users::class);

        $user = $repository->find($id);

        $user->setName($nombre);
        $user->setSurname($apellido);
        $user->setEmail($email);
        $user->setPassword($contraseña);
        $user->setUsername($nombreUsuario);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("home_homepage",compact("id"));

    }
}
