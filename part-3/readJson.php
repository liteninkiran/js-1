<?php

    $str = $_POST['emps'];

    // Simulate an error
    $str = '[{"id":1,"name":"Kiran","address":"48 Rowan Court"},{"id":2,"name":"Derek","address":"48 Rowan Court"}]'; // Correct
    $str = "[{'id':1,'name':'Kiran','address':'48 Rowan Court'},{'id':2,'name':'Derek','address':'48 Rowan Court'}]"; // Incorrect

    // Use second argument to specify if an aray is returned instead of an object i.e. use $emp['name'] instead of $emp->name
    $emps = json_decode($str, false);

    if(json_last_error() == JSON_ERROR_NONE)
    {
        foreach($emps as $emp)
        {
            print_r($emp->name . '<br>');
        }
    }
    else
    {
        echo json_last_error_msg();
    }

?>