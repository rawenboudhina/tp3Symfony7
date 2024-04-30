<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
   
   /* #[Route('/{name}/{adr}', name: 'home')]*/



 /*public function home($name,$adr)
 
 /* return new Response('<h1>Ma première page Symfony</h1>');*/
 /*return $this->render('index.html.twig');*/
 
    /*return $this->render('index.html.twig', 
 ['name' => $name,'adresse' => $adr]);*/
/* public function home()

{
    return $this->render('articles/index.html.twig'); }

}*/
#[Route('/', name: 'home')]

public function home()
{
    $articles = ['Artcile1', 'Article 2', 'Article 3'];
    return $this->render('articles/index.html.twig', ['articles' => $articles]);
}
}

 
 

