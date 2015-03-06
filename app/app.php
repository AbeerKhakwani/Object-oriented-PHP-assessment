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

		$Contact=new Contact($_POST['name'],$_POST['image'],$_POST['phone'],$_POST['email']);
		$Contact->save();
         return $app['twig']->render("created_contact.php", array("Contact1"=>$Contact));

});





return $app;

?>