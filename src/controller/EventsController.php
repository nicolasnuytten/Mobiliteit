<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index(){
    $number = 3;
    $events = $this->eventDAO->randomWithLimit($number);
    $this->set('events', $events);

    if (!empty($_POST['postcode'])) {
      $conditions[] = array(
        'field' => 'postal',
        'comparator' => 'like',
        'value' => $_POST['postcode']
      );
      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
    }
  }

  public function detail() {
    $conditions = array();
    if(!empty($_GET['id'])) {
      $id = $_GET['id'];
      $event = $this->eventDAO->search($conditions);
      $this->set('event', $event[$id - 1]);
    }
    $number = 3;
    $id = $_GET['id'];
    $events = $this->eventDAO->randomWithLimitNotId($number, $id);
    $this->set('events', $events);
  }

  public function actie() {
    if(empty($_GET['search'])){
      $conditions = array();
      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
      $tags = $this->eventDAO->tags();
      $this->set('tags', $tags);
    }

    if (!empty($_GET['postcode'])) {
      $conditions[] = array(
        'field' => 'postal',
        'comparator' => 'like',
        'value' => $_GET['postcode']
      );
      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
    }

    if (!empty($_GET['search']))  {
      $conditions[] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_GET['search']
      );
      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
    }

    if (!empty($_GET['date'])) {
      $conditions[] = array(
        'field' => 'start',
        'comparator' => 'like',
        'value' =>  $_GET['date']
      );
      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
    }

    if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($events);
      exit();
    }
    if(!empty($_POST)){
      if(!empty($_POST['postcode'])){
        // example: search on postal code
        $conditions[] = array(
          'field' => 'postal',
          'comparator' => 'like',
          'value' => $_POST['postcode']
        );
      }
      // example: search on title
      if(!empty($_POST['search'])){
        $conditions[] = array(
          'field' => 'title',
          'comparator' => 'like',
          'value' => $_POST['search']
        );

      }
      if(!empty($_POST['date'])){
        $conditions[] = array(
          'field' => 'start',
          'comparator' => 'like',
          'value' => $_POST['date']
        );
      }

      $events = $this->eventDAO->search($conditions);
      $this->set('events', $events);
    }

    //
    //   // $conditions[] = array(
    //   //   'field' => 'city',
    //   //   'comparator' => 'like',
    //   //   'value' => $_POST['search']
    //   // );
    //
    //   //example: search on organiser_id
    //   // $conditions[] = array(
    //   //   'field' => 'organiser_id',
    //   //   'comparator' => '=',
    //   //   'value' => 1
    //   // );
    //
      // $conditions[] = array(
      //    'field' => 'tag',
      //    'comparator' => 'like',
      //    'value' => $_POST['search']
      //  );
      //
      //  $conditions[] = array(
      //      'field' => 'organiser',
      //      'comparator' => 'like',
      //      'value' => $_POST['search']
      //    );


    //
    //   // $date = date_format($_POST['date'], 'Y-m-d H:i:s');
    //   // echo $date;
    //   // $conditions[] = array(
    //   //   'field' => 'start',
    //   //   'comparator' => '=',
    //   //   'value' => $date
    //   // );
    //   // echo $_POST['date'];
    //   // $conditions[] = array(
    //   //   'field' => 'start',
    //   //   'comparator' => '=',
    //   //   'value' => $_POST['date']
    //   // );
    //
    //   //example: search on organiser name
    //   // $conditions[] = array(
    //   //   'field' => 'organiser',
    //   //   'comparator' => 'like',
    //   //   'value' => $_POST['search']
    //   // );
    //
    //   //example: search on city name
    //   // $conditions[] = array(
    //   //   'field' => 'city',
    //   //   'comparator' => 'like',
    //   //   'value' => $_POST['search']
    //   // );
    //   //
    //   // //example: search on tag name
    //   // $conditions[] = array(
    //   //   'field' => 'tag',
    //   //   'comparator' => '=',
    //   //   'value' => $_POST['search']
    //   // );
    //
    //   //example: 1-day events on september 17
    //   // $conditions[] = array(
    //   //   'field' => 'start',
    //   //   'comparator' => '>=',
    //   //   'value' => '2018-09-17 00:00:00'
    //   // );
    //   // $conditions[] = array(
    //   //   'field' => 'end',
    //   //   'comparator' => '<=',
    //   //   'value' => '2018-09-17 23:59:59'
    //   // );
    //
    //   //example: events on september 17 (includes multi-day events)
    //   // $conditions[] = array(
    //   //   'field' => 'start',
    //   //   'comparator' => '<=',
    //   //   'value' => '2018-09-17 23:59:59'
    //   // );
    //   // $conditions[] = array(
    //   //   'field' => 'end',
    //   //   'comparator' => '>=',
    //   //   'value' => '2018-09-17 00:00:00'
    //   // );
    //
    //   //example: search on organiser, with certain end date + time
    //   // $conditions[] = array(
    //   //   'field' => 'organiser',
    //   //   'comparator' => 'like',
    //   //   'value' => $_POST['search']
    //   // );
    //   // $conditions[] = array(
    //   //   'field' => 'end',
    //   //   'comparator' => '=',
    //   //   'value' => '2018-09-16 18:00:00'
    //   // );
    //
    //
    //
    // }

  }

}
