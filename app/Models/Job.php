<?php

require_once 'BaseElement.php';

class Job extends BaseElement{
    public function __construct($title, $description){
        $newTitle  = 'Job: ' . $title;
        $this->title = $newTitle;
        $this->description = $description;
    }



    public function getDurationAsString(){
        $years =  floor($this->months / 12);
        $extraMonths = $this->months % 12;
         
        if($years < 1){
           return "Job duration: $extraMonths months";
         }elseif ($extraMonths < 1) {
           return "Job duration: $years years";
         }else {
          return "Job duration: $years years $extraMonths months";
         }  
      }


}