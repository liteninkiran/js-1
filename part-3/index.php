<!DOCTYPE html>
<html>

    <head>

        <title>JSON in PHP And JavaScript</title>

        <!-- Include AJAX -->
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>

    </head>

    <body>

        <center>
            <h1>JSON in PHP and JavaScirpt</h1>
            <h2>Part 3: JSON.stringify and json_decode</h2>
        </center>

    </body>

    <script type="text/javascript">
        
        // Create a blank objects
        var emp1 = {};
        var emp2 = {};

        // Create empty array
        var emps = [];

        // Define properties for employee 1
        emp1.id = 1;
        emp1.name = 'Kiran';
        emp1.address = '48 Rowan Court';

        // Define properties for employee 2
        emp2.id = 2;
        emp2.name = 'Derek';
        emp2.address = '48 Rowan Court';

        // Add objects to array
        emps.push(emp1);
        emps.push(emp2);

        // Output to console screen
        console.log(emps);

        $.ajax(
        {
            url: "readJson.php",
            method: "post",
            data: { emps : JSON.stringify(emps) },
            success: function(res)
            {
                console.log(res);
            }
        })

    </script>

</html>
