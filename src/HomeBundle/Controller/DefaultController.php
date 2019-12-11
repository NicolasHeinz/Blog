<?php

namespace HomeBundle\Controller;


use EntradaBundle\Entity\Entrada;
use EntradaBundle\Form\EntradaType;
use EntradaBundle\Repository\EntradaRepository;
use Kilik\TableBundle\Components\Column;
use Kilik\TableBundle\Components\Filter;
use Kilik\TableBundle\Components\Table;
use LoginBundle\Entity\User;
use LoginBundle\Form\usersType;
use LoginBundle\Repository\usersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package HomeBundle\Controller
 */

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

      /** @var EntradaRepository $repositoryUser */
        $repositoryEntrada = $this->getDoctrine()
            ->getRepository(Entrada::class);

        $entrada  = new Entrada();

        $entradas = $repositoryEntrada->getAllEntradas();

        $formEntrada = $this->createForm(EntradaType::class,$entrada);

        $formEntrada->handleRequest($request);

        if($formEntrada->isSubmitted() && $formEntrada->isValid()){

            $serviceTransfor = $this->get('app.transform_text');

            $id_entrada = $request->get('_id_entrada');

            $entrada = $formEntrada->getData();

            $repository = $this->getDoctrine()
                ->getRepository(Entrada::class);

            $entradaPorEditar = $repository->find($id_entrada);

            $entradaPorEditar->setTitulo(
                $serviceTransfor->TransformText($entrada->getTitulo())
            );

            $entradaPorEditar->setCuerpo(
                $serviceTransfor->TransformText($entrada->getCuerpo())
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($entradaPorEditar);
            $em->flush();
        }

        return $this->render('@Home/Default/index.html.twig',[
            'entradas' => $entradas,
            'formEntrada' => $formEntrada->createView()
            ]
        );
    }

    public function profileAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository(User::class);

        $usuario = new User();

        $form = $this->createForm(usersType::class,$usuario);

        $roles = [usersRepository::USER_ROL,usersRepository::USER_ADMIN];
        $Status = [usersRepository::USER_ALTA,usersRepository::USER_BAJA];

        $user = $repository->find($request->get('id'));

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $usuarioDatos = $form->getData();

            $user->setName($usuarioDatos->getName());
            $user->setSurname($usuarioDatos->getSurname());
            $user->setEmail($usuarioDatos->getEmail());
            $user->setPassword($usuarioDatos->getPassword());
            $user->setUsername($usuarioDatos->getUsername());

            if($request->getSession()->get('rol') ==
                usersRepository::USER_ADMIN){

                $activo= $request->request->get('_select_active');
                $rol = $request->request->get('_select_rol');

                if($activo == "Alta"){
                    $activo = true;
                }elseif($activo == "Baja"){
                    $activo = false;
                }

                $user->setActive($activo);
                $user->setRol($rol);

                if($user->getId() == $request->getSession()->get('id')){
                    $request->getSession()->set('rol',$rol);
                    $request->getSession()->set('activo',$activo);
                }
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("home_homepage");
        }

        return $this->render('@Home/Perfil/perfil.html.twig',[
            'user' => $user,
            'roles' => $roles,
            'status'=> $Status,
            'form' => $form->createView()
            ]
        );
    }

    public function profileHomeAction(Request $request)
    {
        /** @var EntradaRepository $repository */
        $repository = $this->getDoctrine()
            ->getRepository(Entrada::class);

        $entradas = $repository->findByAutor(
            $request->getSession()->get('id')
        );

        $entrada  = new Entrada();

        $formEntradaProfile =
            $this->createForm(EntradaType::class,$entrada);

        $formEntradaProfile->handleRequest($request);

        if($formEntradaProfile->isSubmitted() &&
            $formEntradaProfile->isValid()  ){

            $serviceTransfor = $this->get('app.transform_text');

            $id_entrada = $request->get('_id_entrada');

            $entrada = $formEntradaProfile->getData();

            $repository = $this->getDoctrine()
                ->getRepository(Entrada::class);

            $entradaPorEditar = $repository->find($id_entrada);

            $entradaPorEditar->setTitulo(
                $serviceTransfor->TransformText($entrada->getTitulo())
            );

            $entradaPorEditar->setCuerpo(
                $serviceTransfor->TransformText($entrada->getCuerpo())
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($entradaPorEditar);
            $em->flush();
        }

        return $this->render('@Home/Perfil/home_perfil.html.twig',[
                'entradas' => $entradas,
                'formEntrada' => $formEntradaProfile->createView()
            ]
        );
    }


    public function tableUsersTable()
    {
        $queryBuilder = $this->getDoctrine()
            ->getRepository(User::class)->getQueryTable();

        $table = (new Table())
            ->setRowsPerPage(10)
            ->setId('table_users')
            ->setPath($this->generateUrl('list_user_ajax'))
            ->setQueryBuilder($queryBuilder, 'u')
            ->setTemplate('@Home/t/_defaultTableAlt.html.twig')
            ->addColumn(
                (new Column())->setLabel('ID')
                    ->setSort(['u.id' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.id')
                            ->setName('u_id')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Nombre')
                    ->setSort(['u.name' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.name')
                            ->setName('u_name')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Apellido')
                    ->setSort(['u.surname' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.surname')
                            ->setName('u_surname')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Email')
                    ->setSort(['u.email' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.email')
                            ->setName('u_email')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Nombre Usuario')
                    ->setSort(['u.username' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.username')
                            ->setName('u_username')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Contraseña')
                    ->setSort(['u.password' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.password')
                            ->setName('u_password')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Fecha Creacion')
                    ->setSort(['u.createdDate' => 'asc'])
                    ->setDisplayFormat(Column::FORMAT_DATE)
                    ->setDisplayFormatParams('d/m/Y')
                    ->setFilter(
                        (new Filter())
                            ->setField('u.createdDate')
                            ->setName('u_createdDate')
                            ->setDataFormat(Filter::FORMAT_DATE)
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Activo')
                    ->setSort(['u.active' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.active')
                            ->setName('u_active')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Rol')
                    ->setSort(['u.rol' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.rol')
                            ->setName('u_rol')
                    )
            );

        return $table;
    }

    public function ajaxListUserAction(Request $request)
    {
        return $this->get('kilik_table')->handleRequest(
            $this->tableUsersTable(),
            $request
        );
    }

    public function listAction(Request $request)
    {
        return $this->render(
            '@Home/Tablas/userlista.html.twig', [
                'table'=> $this->get('kilik_table')->createFormView(
                    $this->tableUsersTable()
                )
            ]
        );
    }
}
