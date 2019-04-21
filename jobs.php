<?php

class Job{
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description){
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t){
        if ($t == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        } 
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString(){
        $years =  floor($this->months / 12);
        $extraMonths = $this->months % 12;
         
        if($years < 1){
           return "$extraMonths months";
         }elseif ($extraMonths < 1) {
           return "$years years";
         }else {
          return "$years years $extraMonths months";
         }  
      }
}




$job1 = new Job('PHP Developer','This is awesone Job Senior xd!!');
$job1->months = '13';

$job2 = new Job('Python Dev','This is awesone Job Senior xd!!');
$job2->months = '24';

$job3 = new Job('Devops','This is awesone Job Senior xd!!');
$job3->months = '31';

$jobs =[
    $job1,
    $job2,
    $job3
    /*[
     'title' => 'PHP Developer',
     'description' => 'This is awesone Job Senior xd!!',
     'visible' => true,
     'months' => 16,
    ],
    [
     'title' => 'Python Dev',
     'description' => 'This is awesone Job Senior xd!!',
     'visible' => true,
     'months' => 14,
    ],
    [
     'title' => 'Devops',
     'description' => 'This is awesone Job Senior xd!!',
     'visible' => true,
     'months' => 5,
    ],
    [
     'title' => 'Angular Dev',
     'description' => 'This is awesone Job Senior xd!!',
     'visible' => true,
     'months' => 24,
    ],
    [
     'title' => 'Frontend dev',
     'description' => 'This is awesone Job Senior xd!!',
     'visible' => true,
     'months' => 13,
    ] */
   ];



  
  function printJob($job){
    if ($job->visible == false) {
      return;
    }
    //contenido de la funcion
    echo '<li class = "work-position">';
    echo '<h5>' . $job->getTitle() .'</h5>';
    echo '<p>' . $job->description .'</p>';
    echo '<p>' . $job->getDurationAsString() .'</p>';
    //echo '<p>' . $totalMonths .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }


