<?php
   require("navbar.php");
   $myAge = 32;
   $myName = 'Sola';
   $myStatement = 'Welcome';
   $isAllowed = false;
   echo(2==='2');
   $gender = 'bobrisky';
//    if($gender=='male'){
//     echo "Na man you be";
//    }else if($gender=="female"){
//     echo "The gender that gave apple to Adam and caused all this rogbodiyan";
//    }else{
//     echo "Depart from me, i know you not";
//    }
    // for ($i=1; $i <11 ; $i++) { 
    //     echo $i;
    // }
    // $a=1;
    // while ($a <= 10) {
    //  echo($a);
    //  $a++;
    // }
    //    Arrays - indexed Array(array), Associative array(object), mixed array(array of object)

    // $allNames = ["Gebu","Paalu","Basiti"];
    // $allNames[] = "Emmanueli";
    // array_push($allNames,"Seyi");
    // print_r($allNames);
    // array_pop($allNames); //array.pop
    // print_r($allNames);
    // echo(count($allNames)); //array.length
    // $geebu = [
    //     "firstname" => "Geebu",
    //     "lastname" => "Adedibu",
    //     "email"=>"geebu1@gmail.com",
    //     "password"=>"fish"
    // ];
    // echo($geebu["firstname"]);
    
    $allStudents = [
        [
            "firstname"=>"Gabriel",
            "lastname"=>"Adedibu",
            "email"=>"gabdibu@gmail.com",
            "password"=>"fish"
        ],
        [
            "firstname"=>"Samson",
            "lastname"=>"Adedibu",
            "email"=>"okodelilah@gmail.com",
            "password"=>"delilahleavemyhairalone"
        ]
        ];
    echo($allStudents[1]["email"]);

    for ($i=0; $i < count($allStudents) ; $i++) { 
         echo $i;
         echo($allStudents[$i]["email"]);
    }
?>