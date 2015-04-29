<?php

$navigationArray = array(
    //Adding to this array readjusts CSS tweaks. Please don't
    ['text' => 'Changes',        'url' => 'changes.php', 'linkClass' => 'menuLink', 'id' => 'changeMenu'],
    ['text' => 'Other Students', 'url' => 'http://ncprofretterer.onucs.org/StudentWork.html" target="_blank', 'linkClass' => 'menuLink'],
    ['dropList' => 'assignments'], //Assignments drop down menu
    ['dropList' => 'projects']
);

$assignmentsArray = [
    ['text' => 'Hello, World!','url' => 'assignments/helloWorld/helloWorld.html" target="_blank'],
    ['text' => 'Mimic an Ad',  'url' => 'assignments/advert/advert.html" target="_blank'],
    ['text' => 'JS Exercises', 'url' => 'assignments/jsExercises/jsIndex.html" target="_blank'],
    ['text' => 'SQL Table',    'url' => 'database.php'],
    ['text' => 'JQuery Fun',   'url' => 'jqueryFunctions.php']
    //add here to extend menu list
];

$projectsArray = [
    ['text' => 'MP4', 'url' => 'pokagonDownload.php']
]

?>