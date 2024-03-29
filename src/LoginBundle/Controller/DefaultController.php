<?php

namespace LoginBundle\Controller;

use DateTime;
use LoginBundle\Entity\User;
use LoginBundle\Form\usersType;
use LoginBundle\Repository\usersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller
{
    public function indexAction(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        $usuario = new User();

        $form = $this->createForm(usersType::class,$usuario);

        return $this->render('@Login/Default/index.html.twig',[
                'form' => $form->createView(),
                'last_username' => $lastUsername,
                'error'         => $error,
            ]
        );
    }

    public function registroAction(Request $request)
    {
        $usuario = new User();

        $form = $this->createForm(usersType::class,$usuario);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $usuario = $form->getData();

            $usuario->setCreatedDate(new DateTime('now'));
            $usuario->setActive(false);
            $usuario->setRol(usersRepository::USER_ROL);

            $serviceGenerateCode = $this->get('app.generate_code');
            $usuario->setUserAccountId($serviceGenerateCode->GenerateCodeAccount());

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('@Login/Registro/registro.html.twig', [
            "form"=>$form->createView()
            ]
        );
    }

    public function logoutAction(Request $request)
    {
        $request->getSession()->clear();

        return $this->redirectToRoute('login');
    }

    public function recuperarAction(Request $request)
    {
        $usuario = new User();

        $form = $this->createForm(usersType::class,$usuario);

        $form->handleRequest($request);

        if($form->isSubmitted()){
           $usuario = $form->getData();

           $repositoryUser = $this->getDoctrine()
               ->getRepository(User::class);

           $usuarioBuscado = $repositoryUser->findOneBy([
               'email' => $usuario->getEmail()
               ]
           );

           if($usuarioBuscado){

              return $this->render(
                  '@Login\Recuperar\recuperar.html.twig',
                  [
                    'form' => null,
                    'password' => $usuarioBuscado->getPassword()
                  ]
              );
           }

        }

        return $this->render('@Login\Recuperar\recuperar.html.twig',[
                'form' => $form->createView(),
                'password' => null
            ]
        );
    }

    public function loginAction(Request $request)
    {
        $usuario = $request->request->get('users');

        $repository = $this->getDoctrine()
            ->getRepository(User::class);

        $usuarioLogin = $repository->findOneBy([
            'email' => $usuario['email'],
            'password' => $usuario['password'],
            'active' => true
        ]);

        if($usuarioLogin){

            $session = new Session();

            $session->clear();

            $session->set('user',$usuarioLogin);

            return $this->redirectToRoute('home_homepage');
        }
        return $this->redirectToRoute('login');
    }
}
