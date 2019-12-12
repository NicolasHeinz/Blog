<?php
namespace LoginBundle\Controller;

use EntradaBundle\Entity\AccessToken;
use LoginBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;


/**
* @Route("/token")
*/

class TokenController extends Controller
{
    public function generateTokenAction(Request $request){

        $accessTokenRepository = $this->getDoctrine()
            ->getRepository(AccessToken::class);

        $userRepository = $this->getDoctrine()
            ->getRepository(User::class);

        $user = $userRepository->findOneBy(
            [
                'email' => $request->request->get('email'),
                'password' => $request->request->get('password'),
                'active' => true
            ]
        );

        if ($user){

            $tokenExist = $accessTokenRepository->findOneBy(
                [
                    'userId' =>$user->getId()
                ]
            );

            if ($tokenExist){
                return new JsonResponse(
                    [
                        'Status' => 'Exito',
                        'Token' => $tokenExist->getToken()
                    ]
                );
            }

            $token = new AccessToken();
            $token->setUserId($user->getId());
            $token->setToken("token".$user->getId());
            $token->setScope('admin');
            $token->setExpiresAt(0);
            $token->setClient�id(1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($token);
            $em->flush();
            $em->clear();

            return new JsonResponse(
                [
                    'Status' => 'Exito',
                    'Token' => $token->getToken()
                ]
            );
        }

        throw new BadRequestHttpException(
            'No Existe el Usuario',
            null,
            400
        );
    }
}