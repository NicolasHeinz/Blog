<?php

namespace HomeBundle\Controller;


use EntradaBundle\Entity\Entrada;
use HomeBundle\Services\FileManager;
use Kilik\TableBundle\Components\Column;
use Kilik\TableBundle\Components\Filter;
use Kilik\TableBundle\Components\Table;
use LoginBundle\Entity\users;
use LoginBundle\LoginBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
        $p = $this->get('app.prueba');
        $mensaje = $p->sendMenssage("Hola soy un servicio");



        $id = $request->get('id');

        $repositoryUser = $this->getDoctrine()->getRepository(users::class);

        $em = $this->getDoctrine()->getManager();

        $queryEntradas = $em->createQuery(
            'SELECT e
            FROM EntradaBundle:Entrada e
            Join LoginBundle:users u
            IN u.id = e.autor
            WHERE u.active = 1'
        );

        $entradas = $queryEntradas->getResult();

        $isAdmin = $repositoryUser->find($id)->getRol();

        return $this->render('@Home/Default/index.html.twig',compact('id','entradas','isAdmin','mensaje'));
    }

    public function profileAction($id)
    {

        $repository = $this->getDoctrine()->getRepository(users::class);

        $user = $repository->find($id);

        $nombre = $user->getName();
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $surname = $user->getSurname();
        $nombreusuario = $user->getUsername();

        return $this->render('@Home/Perfil/perfil.html.twig',compact('id','nombre','email','pass','surname','nombreusuario'));
    }

    public function profileHomeAction(Request $request)
    {
        $id = $request->get('id');

        $repository = $this->getDoctrine()->getRepository(Entrada::class);
        $entradas = $repository->findByAutor($id);

        return $this->render('@Home/Perfil/home_perfil.html.twig',compact('entradas','id'));
    }


    public function tableUsersTable()
    {
        $queryBuilder = $this->getDoctrine()->getRepository('LoginBundle:users')
            ->createQueryBuilder('u')->select('u');

        $table = (new Table())
            ->setRowsPerPage(10)
            ->setId('table_users')
            ->setPath($this->generateUrl('list_user_ajax'))
            ->setQueryBuilder($queryBuilder, 'u')
            ->addColumn(
                (new Column())->setLabel('Nombre')
                            ->setSort(['u.name' => 'asc'])
                            ->setFilter(
                                (new Filter())
                                    ->setField('u.name')
                                    ->setName('u_name')
                            )
            );
//            ->addColumn(
//                (new Column())->setLabel('Apellido')
//                    ->setSort(['u.surname' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.surname')
//                            ->setName('u_surname')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Email')
//                    ->setSort(['u.email' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.email')
//                            ->setName('u_email')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Nombre Usuario')
//                    ->setSort(['u.username' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.username')
//                            ->setName('u_username')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Contraseña')
//                    ->setSort(['u.password' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.password')
//                            ->setName('u_password')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Fecha Creacion')
//                    ->setSort(['u.created_date' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.created_date')
//                            ->setName('u_created_date')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Activo')
//                    ->setSort(['u.active' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.active')
//                            ->setName('u_active')
//                    )
//            )
//            ->addColumn(
//                (new Column())->setLabel('Rol')
//                    ->setSort(['u.rol' => 'asc'])
//                    ->setFilter(
//                        (new Filter())
//                            ->setField('u.rol')
//                            ->setName('u_rol')
//                    )
//            );

        return $table;
    }

    public function _listUserAction(Request $request)
    {
        return $this->get('kilik_table')->handleRequest(
            $this->tableUsersTable(),
            $request
        );
    }

    public function listAction()
    {
        return $this->render('@Home/Tablas/userlista.html.twig', ['table'=> $this->get('kilik_table')->createFormView($this->tableUsersTable())]);
    }
}
