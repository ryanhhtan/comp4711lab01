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
        // put your code here
        // echo "I am out there ... I live";
        
        include('Student.php');

        $students = array();

        // Add first student into the students array.
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; 

        // Add seconde student into the students array.
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;


        // Add my info into the students array.
        $me = new Student();
        $me->surname = "Tan";
        $me->first_name = "Hai Hua";
        $me->add_email('school', 'htan45@my.bcit.ca');
        $me->add_grade(90);
        $students['b721'] = $me;

        ksort($students);

        foreach($students as $student) {
            echo $student->toString(); 
        }
        ?>
    </body>
</html>
