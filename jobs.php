<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';


$job1 = new Job('PHP Developer','This is awesone Job Senior xd!!');
$job1->months = '13';

$job2 = new Job('Python Dev','This is awesone Job Senior xd!!');
$job2->months = '24';

$job3 = new Job('Devops','This is awesone Job Senior xd!!');
$job3->months = '31';

$project1 = new Project('Project 1','Description 1');

$jobs = [
          $job1,
          $job2,
          $job3
   ];

   $projects = [
      $project1
   ];

  function printElement(Printable $job){
    if ($job->visible == false) {
      return;
    }
    //contenido de la funcion
    echo '<li class = "work-position">';
    echo '<h5>' . $job->getTitle() .'</h5>';
    echo '<p>' . $job->getDescription() .'</p>';
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


