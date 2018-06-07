<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Lecture8Controller extends Controller
{
  
/**
 * @Route("/", name="homepage")
 */
  public function homepage()
  {
   
 return $this->render('lecture8/homepage.html.twig', 
[
      'title' => 'Úvodní stránka',
     
    ]);
   
 
    
  }
    /**
 * @Route("/about", name="about")
 */
  public function about() 
  {
    
     return $this->render('lecture8/about.html.twig', 
[
      'title' => 'O nás',
     
    ]);
    
  }
  
      /**
 * @Route("/contact", name="contact")
 */
  public function contact() 
  {
    
     return $this->render('lecture8/contact.html.twig', 
[
      'title' => 'Kontaktujte nás',
     'users' => [
       ['name' => 'Petr', 'phone' => '445', 'email' => 'sss@email.cz'],
       ['name' => 'Jan', 'phone' => '654', 'email' => 'ss@email.cz'],
       ['name' => 'Aleš', 'phone' => '548', 'email' => 'ddd@email.cz'],
       ['name' => 'Martina', 'phone' => '258', 'email' => 'sdfe@email.cz'],
     ]
    ]);
    
  }
  
}