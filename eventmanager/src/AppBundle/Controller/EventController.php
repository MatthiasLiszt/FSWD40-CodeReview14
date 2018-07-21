<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Event_class;


class EventController extends Controller {

/**

 * @Route("/viewEvent")

 */

public function viewEvent(){
 $page="<style>.eventview td{padding-left: 3em;}</style>";
 $page.="<table class='eventview'><th><h1>".$_GET['name']." id".$_GET['id']."</h1></th>";
 $page.="<tr><td><img src='".$_GET['image']."'></td><td>".$_GET['startdate']." - ".$_GET['enddate'];
 $page.="<p>".$_GET['description']."</p><p>capcity : ".$_GET['capacity']."</p>";
 $page.="<p>".$_GET['email']."</p><p>".$_GET['phonenumber']."</p><p>".$_GET['address']."</p>";
 $page.="<p>".$_GET['url']."</p><p>".$_GET['type']."</p>";
 $page.="</td></tr></table>";

 return new Response($page);
}

 /**

 * @Route("/eventjson")

 */

 public function eventJson()

 {
 $query=["id" => 3];
 $repository = $this->getDoctrine()->getRepository('AppBundle:Event_class');
 //$myevent=$repository->findOneBy($query);
 $allEvents=$repository->findAll();

 $EventList=[];

 foreach($allEvents as $Event )
  {
   $object = (object) ['id' => $Event->getId(), 'name' => $Event->getName(), 'startdate' => $Event->getStartdate(),
                        'enddate' => $Event->getEnddate(), 'description' => $Event->getDescription(),
                         'image' => $Event->getImage(), 'capacity' => $Event->getCapacity(), 'email' => $Event->getEmail(),
                        'phonenumber' => $Event->getPhonenumber(), 'address' => $Event->getAddress(), 
                        'url' => $Event->getUrl(), 'type' => $Event->getType()];
   array_push($EventList,$object);
  }

 
 return new Response(json_encode($EventList));
 }

 /**

 * @Route("/43a7b9e3886a3312/addEventForm")

 */

 public function addEventForm()
  {
   return $this->render('eventmanager/addEvent.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
  }

 /**

 * @Route("/43a7b9e3886a3312/addEvent")

 */

 public function addEvent()
  {$evento=new Event_class();
   $evento->setName($_GET['name']);
   $startdate = new \DateTime($_GET['startdate']);
   $evento->setStartdate($startdate);
   $enddate = new \DateTime($_GET['enddate']);
   $evento->setEnddate($enddate);
   $evento->setImage($_GET['image']);
   $evento->setCapacity((int)$_GET['capacity']);
   $evento->setEmail($_GET['email']);
   $evento->setPhonenumber($_GET['phonenumber']);
   $evento->setUrl($_GET['url']);
   $evento->setType($_GET['eventtype']);
   $evento->setAddress($_GET['address']);
   $evento->setDescription($_GET['description']);
   
   $doct = $this->getDoctrine()->getManager();
   $doct->persist($evento);
   $doct->flush();
   return new Response('added new Event'.$evento->getId()); 
  }

 /**

 * @Route("/43a7b9e3886a3312/editEventForm")

 */

 public function editEventForm()
  {$id=(int)$_GET['id'];
   $query=["id" => $id];
   $repository = $this->getDoctrine()->getRepository('AppBundle:Event_class');
   $Event=$repository->findOneBy($query);

   $evento = (object) ['id' => $Event->getId(), 'name' => $Event->getName(), 'startdate' => $Event->getStartdate(),
                        'enddate' => $Event->getEnddate(), 'description' => $Event->getDescription(),
                         'image' => $Event->getImage(), 'capacity' => $Event->getCapacity(), 'email' => $Event->getEmail(),
                        'phonenumber' => $Event->getPhonenumber(), 'address' => $Event->getAddress(), 
                        'url' => $Event->getUrl(), 'type' => $Event->getType()];
   
  return $this->render('eventmanager/editEvent.html.twig', ['data' => $evento]);
  }

 /**

 * @Route("/43a7b9e3886a3312/editEvent")

 */

 public function editEvent()  
  {
   $id=(int)$_GET['id'];
   $query=["id" => $id];
   $em = $this->getDoctrine()->getManager();
   //$repository = $this->getDoctrine()->getRepository('AppBundle:Event_class');
   $evento=$em->getRepository('AppBundle:Event_class')->find($id);
   
   
   $evento->setName($_GET['name']);
   $startdate = new \DateTime($_GET['startdate']);
   $evento->setStartdate($startdate);
   $enddate = new \DateTime($_GET['enddate']);
   $evento->setEnddate($enddate);
   $evento->setImage($_GET['image']);
   $evento->setCapacity((int)$_GET['capacity']);
   $evento->setEmail($_GET['email']);
   $evento->setPhonenumber($_GET['phonenumber']);
   $evento->setUrl($_GET['url']);
   $evento->setType($_GET['eventtype']);
   $evento->setAddress($_GET['address']);
   $evento->setDescription($_GET['description']);

   $em->flush();
   return new Response('saved changes to event '.$evento->getId());
  }

 /**

 * @Route("/43a7b9e3886a3312/deleteEvent")

 */

 public function deleteEvent()
  {$id=(int)$_GET['id'];
   $em = $this->getDoctrine()->getManager();
   $evento = $em->getRepository('AppBundle:Event_class')->find($id);
   $em->remove($evento);
   $em->flush();
   return new Response('event '.$id.' has been deleted');
  }

}