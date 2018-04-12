<!DOCTYPE html>
<html>
<?php require_once "Database.php"; ?>
<?php require_once "chartDB.php"; ?>

<?php

//Get The Ticket information from the database on page load.
$c = new Chart();
$totalbugs = $c->countBugs(Database::getDb());
$openbugs = $c->countOpenBugs(Database::getDb());
$closedbugs = $c->countClosedBugs(Database::getDb());





?>
<head>
    <title>UAT Performance Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
   

    <link rel="stylesheet" href="styles/homepage.css" >
</head>
<body>

<header> <?php include "header.php"; ?></header>
<main>


  </head>
  <body>
    <div id="barchart_values" style="width: 600px; height: 400px;"></div>
  </body>


</main>
<footer><?php include "footer.php"; ?></footer>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


    function drawChart() 
    {
        var data = google.visualization.arrayToDataTable([
        ['Type', '#', { role: 'style' } ],
        ['Total Tickets', <?php echo $totalbugs[0]->total_bugs ?>, 'color: gray'],
        ['Open Tickets', <?php echo $openbugs[0]->open_bugs ?>, 'color: #76A7FA'],
        ['Closed Tickets', <?php echo $closedbugs[0]->closed_bugs ?>, 'color:green'],
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                        2]);

        var options = {
        title: "Ticket Statistics",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        };
        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
        chart.draw(view, options);
    }
  </script>
</body>
</html>