<?php  
 $connect = mysqli_connect("localhost", "root", "", "audit");  
 $query = "SELECT AuditType, count(*) as number FROM audit_main1 GROUP BY AuditType";  
 $result = mysqli_query($connect, $query);   
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
      <link rel="stylesheet" href="form1.css">
           <title>Visualization</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Audit Type', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["AuditType"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Audit Types',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           
           </script>  
      </head>  
      <body>  
      <script src="form1.js"></script>
           <br /><br />  
           <div class = "form__title" align="center">  
                <h3 align="center">Audit Modular Admin Visualization</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>
           </div>  
      </body>  
 </html>  