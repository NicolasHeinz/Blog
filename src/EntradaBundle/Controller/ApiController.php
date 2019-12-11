<?php

namespace EntradaBundle\Controller;

use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use EntradaBundle\Entity\Entrada;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;


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
            $response = new Response();
            $entradasArray = [];

            foreach ($entradas as $entrada){

                array_push($entradasArray, [
                    'id' => $entrada->getId(),
                    'autor' => $entrada->getAutor(),
                    'titulo'=> $entrada->getTitulo(),
                    'cuerpo' => $entrada->getCuerpo(),
                    'created_date' => $entrada->getFechaCreacion()
                ]);
            }

            $response = new JsonResponse($entradasArray);

            return $response;
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

        $response = new Response();

        if($entradas){
            $response = new JsonResponse([
                'id' => $entradas->getId(),
                'autor' => $entradas->getAutor(),
                'titulo' => $entradas->getTitulo(),
                'cuerpo' => $entradas->getCuerpo(),
                'created_date' => $entradas->getFechaCreacion()
            ]);

            return $response;
        }

        throw new BadRequestHttpException('No existe el Post',
            null,
            400
        );
    }

    public function saveEntradaAction(Request $request)
    {
        if( ($request->get('autor') != null) &&
            ($request->get('titulo') != null) &&
            ($request->get('cuerpo') != null) ){

            $entrada = new Entrada();

            $entrada->setAutor($request->get('autor'));
            $entrada->setTitulo($request->get('titulo'));
            $entrada->setCuerpo($request->get('cuerpo'));
            $entrada->setFechaCreacion(new DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();
            $em->getConnection()->close();

            $response = new Response();

            $response = new JsonResponse([
                'id' => $entrada->getId(),
                'autor' => $entrada->getAutor(),
                'titulo' => $entrada->getTitulo(),
                'cuerpo' => $entrada->getCuerpo(),
                'created_date' => $entrada->getFechaCreacion()
            ]);

            return $response;
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

        $response = new Response();

        if($entrada){
            $entrada->setAutor($request->get('autor'));
            $entrada->setTitulo($request->get('titulo'));
            $entrada->setCuerpo($request->get('cuerpo'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();
            $em->getConnection()->close();

            $response = new JsonResponse([
                'id' => $entrada->getId(),
                'autor' => $entrada->getAutor(),
                'titulo' => $entrada->getTitulo(),
                'cuerpo' => $entrada->getCuerpo(),
                'created_date' => $entrada->getFechaCreacion()
            ]);

            return $response;
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

        $response = new Response();

        if ($entrada){
            $em = $this->getDoctrine()->getManager();
            $em->remove($entrada);
            $em->flush();
            $em->getConnection()->close();

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