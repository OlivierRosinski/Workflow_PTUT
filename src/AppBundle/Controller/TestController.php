<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 3:27 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\ConstraintViolation;


class TestController
{
    public function myFunctionAction(): Response {

        return $this->render('@App/coucou.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);

        /* return new Response("Notre propre Hello World !");
            # Un objet Response contient toutes les informations qui doivent être renvoyées au
            # client à partir d'une requête donnée.
            # Le constructeur prend jusqu'à trois arguments: le contenu de la réponse, le code
            # d'état et un tableau d'en-têtes HTTP:
            # https://symfony.com/doc/3.4/components/http_foundation.html
        */
    }
}
