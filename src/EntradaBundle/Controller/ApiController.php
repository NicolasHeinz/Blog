<?php

namespace EntradaBundle\Controller;

use DateTime;
use LoginBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use EntradaBundle\Entity\Entrada;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


/**
 * @Route("/api")
 */

class ApiController extends Controller
{
    public function showEntradasAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);

        $entradas = $repository->findAll();

        if ($entradas){

            $entradasArray = [];

            foreach ($entradas as $entrada){

                array_push($entradasArray, [
                    'id' => $entrada->getId(),
                    'user' => $entrada->getUser(),
                    'titulo'=> $entrada->getTitulo(),
                    'cuerpo' => $entrada->getCuerpo(),
                    'created_date' => $entrada->getFechaCreacion()
                ]);
            }
            return new JsonResponse($entradasArray);
        }

        throw new BadRequestHttpException(
            'No ahi Pots.',
            null,
            400
        );
    }

    public function showEntradaAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);

        $entradas = $repository->find($id);

        if($entradas){

            $arr = [
                'id' => $entradas->getId(),
                'user' => $entradas->getUser(),
                'titulo' => $entradas->getTitulo(),
                'cuerpo' => $entradas->getCuerpo(),
                'created_date' => $entradas->getFechaCreacion()
            ];

            return new JsonResponse(
                 ['Entradas' => $arr]
            );
        }

        throw new NotFoundHttpException('No existe el Post',
            null,
            404
        );
    }

    public function saveEntradaAction(Request $request)
    {
        if( ($request->get('user_id') != null) &&
            ($request->get('titulo') != null) &&
            ($request->get('cuerpo') != null) ){

            $user = $this->getDoctrine()
                ->getRepository(User::class)
                ->find($request->get('user_id'));

            $entrada = new Entrada();

            $entrada->setUser($user);
            $entrada->setTitulo($request->get('titulo'));
            $entrada->setCuerpo($request->get('cuerpo'));
            $entrada->setFechaCreacion(new DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->merge($entrada);
            $em->flush();
            $em->clear();

            return new JsonResponse([
                'id' => $entrada->getId(),
                'user' => $entrada->getUser()->getId(),
                'titulo' => $entrada->getTitulo(),
                'cuerpo' => $entrada->getCuerpo(),
                'created_date' => $entrada->getFechaCreacion()
            ]);
        }

        throw new BadRequestHttpException(
            'Faltan datos para crear el Post.',
            null,
            400
        );
    }

    public function editEntradaAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);
        $entrada = $repository->find($request->get('id'));

        if( (!empty($entrada)) &&
            ($entrada->getUser()->getId() == $request->get('user_id'))){

            $entrada->setTitulo($request->get('titulo'));
            $entrada->setCuerpo($request->get('cuerpo'));

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $em->clear();

            return new JsonResponse([
                'id' => $entrada->getId(),
                'user' => $entrada->getUser()->getId(),
                'titulo' => $entrada->getTitulo(),
                'cuerpo' => $entrada->getCuerpo(),
                'created_date' => $entrada->getFechaCreacion()
            ]);
        }

        throw new BadRequestHttpException(
            'No existe el Post. No se pudo editar el mismo',
            null,
            400
        );
    }

    public function deletEntradaAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);
        $entrada = $repository->find($id);

        if ($entrada){
            $em = $this->getDoctrine()->getManager();
            $em->remove($entrada);
            $em->flush();
            $em->clear();

            return new Response(
                new JsonResponse(['Status'=>'Borrado con Exito'])
            );
        }

        throw new BadRequestHttpException(
            'No existe el Post. No se pudo borrar el Post',
            null,
            400
        );
    }
}