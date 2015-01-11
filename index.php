<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php'); // import Student.php class
        $students = array();    // create student array to store each student 

        // add 1st student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; // give the student an index

        // add 2nd student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;    
        
        // add 3rd student
        $third = new Student();
        $third->surname = "Parry";
        $third->first_name = "Jim";
        $third->add_email('work', 'jim_parry@bcit.ca');
        $third->add_grade(85);
        $students['p789'] = $third;
        
        ksort($students); // the sorting function, in alphabetic order

        foreach ($students as $student) { // print each student in a format
            echo $student->toString();
        }
        ?>
    </body>
</html>
