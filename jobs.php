<?php

class Job{
    private $title;
    public $description;
    public $visible;
    public $months;


    public function setTitle($t){
        $this->title = $t;
    }
    public function getTitle(){
        return $this->title;
    }
    
}




$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->setTitle = 'This is awesone Job Senior xd!!';
$job1->visible = true;
$job1->months = '13';

$job2 = new Job();
$job2->setTitle('Python Dev');
$job2->description = 'This is awesone Job Senior xd!!';
$job2->visible = true;
$job2->months = '24';

$jobs =[
    $job1,
    $job2
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


   function getDuration($months){
    $years =  floor($months / 12);
    $extraMonths = $months % 12;
     
    if($years < 1){
       return "$extraMonths months";
     }elseif ($extraMonths < 1) {
       return "$years years";
     }else {
      return "$years years $extraMonths months";
     }  
  }
  
  function printJob($job){
    if ($job->visible == false) {
      return;
    }
    //contenido de la funcion
    echo '<li class = "work-position">';
    echo '<h5>' . $job->getTitle() .'</h5>';
    echo '<p>' . $job->description .'</p>';
    echo '<p>' . getDuration($job->months) .'</p>';
    //echo '<p>' . $totalMonths .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }


