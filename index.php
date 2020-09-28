<!DOCTYPE html>
<html>

    <head>

        <title>JSON in PHP And JavaScript</title>

        <!-- Include AJAX -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    </head>

    <body>

        <center>
            <h1>JSON in PHP and JavaScirpt</h1>
            <h2>Part 3: JSON.stringify and json_decode</h2>
        </center>

    </body>

    <script type="text/javascript">
        
        // Create a blank object
        var emp1 = {};

        emp1.id = 1;
        emp1.name = 'Kiran';
        emp1.address = '48 Rowan Court';

        console.log(emp1);

        $.ajax(
        {
            url: "readJson.php",
            method: "post",
            data: emp1,
            success: function(res)
            {
                console.log(res);
            }
        })

    </script>

</html>
