<?php

$navigationArray = array(
    //Adding to this array readjusts CSS tweaks. Please don't
    array('text' => 'Changes',        'url' => 'changes.php', 'linkClass' => 'menuLink', 'id' => 'changeMenu'),
    array('text' => 'Other Students', 'url' => 'http://ncprofretterer.onucs.org/StudentWork.html" target="_blank', 'linkClass' => 'menuLink'),
    array('method' => 'special') //Assignments drop down menu
);

$assignmentsArray = array(
    array('text' => 'Hello, World!','url' => 'assignments/helloWorld/helloWorld.html" target="_blank'),
    array('text' => 'Mimic an Ad',  'url' => 'assignments/advert/advert.html" target="_blank'),
    array('text' => 'JS Exercises', 'url' => 'assignments/jsExercises/jsIndex.html" target="_blank'),
    array('text' => 'SQL Table',    'url' => 'databaseIndex.php')
    //add here to extend menu list
);

?>