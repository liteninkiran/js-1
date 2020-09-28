<?php

    // Use second argument to specify if an aray is returned instead of an object i.e. use $emp['name'] instead of $emp->name
    $emps = json_decode($_POST['emps'], false);

    foreach($emps as $emp)
    {
        print_r($emp->name . '<br>');
    }

?>