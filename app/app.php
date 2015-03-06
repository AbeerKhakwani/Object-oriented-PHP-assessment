<?php

require_once __DIR__ ."/../vendor/autoload.php";
require_once __DIR__ ."/../src/contact.php";

session_start();
if (empty($_SESSION['list_of_contacts']))
{
	$_SESSION['list_of_contacts']=array();
}

$app= new Silex\Application();

 $app->register (new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=> __DIR__.'/../views'
    ));



$app->get("/", function() use ($app){   
      return $app['twig']->render("home.php", array("allContacts"=> Contact::getAll()));

});

$app->get("/create_contact", function() use ($app){   
      return $app['twig']->render("create_contact.php");

});

$app->post("/created_contact", function() use ($app){ 
     if (!empty($_POST['name']) || !empty($_GET['image']) || !empty($_POST['phone']) || !empty($_POST['email']))  {

       $Contact=new Contact($_POST['name'],$_POST['image'],$_POST['phone'],$_POST['email']);
		$Contact->save();
         return $app['twig']->render("created_contact.php", array("Contact1"=>$Contact));


     }                               

      	else{
		
          return $app['twig']->render("error.php");

     }

});


$app->post("/delete_contacts", function() use ($app){   
      return $app['twig']->render("clear.php", array("delete"=> Contact:: deleteAll()));

});


$app->get("/search", function() use ($app){   
      return $app['twig']->render("search.php");

});

$app->get("/search_results", function() use ($app){   
	 $contact_search_results= array();
     $contact=Contact::getAll();

        foreach($contact as $contacts)
        {
          $name= $contacts->getname();
          $search= $_GET['search'];

         if(mb_stripos($name,$search))
         {          
            array_push($contact_search_results, $contacts);
         }

        }
      return $app['twig']->render("search_results.php" ,array("search_results"=> $contact_search_results));

});


return $app;

?>