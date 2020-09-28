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
            <h2>Part 2: JSON.parse</h2>

<?php
            $emp = ["id" => 1, "name" => "Kiran", "address" => "48 Rowan Court"];
            $json = json_encode($emp);
            echo "<div id='emp' style='display:none'>" . $json . "</div>"
?>

        </center>

    </body>

    <script type="text/javascript">
        
        //var emp = <?php echo $json; ?>;
        var emp = JSON.parse(document.getElementById('emp').innerHTML);

        console.log(emp.id + ' - ' + emp.name + ' - ' + emp.address);

    </script>

</html>
