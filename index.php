<!DOCTYPE html>
<html>
<head>
   <title>MOPS International Metrics</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script
   src="https://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
   <script type="text/javascript" src="main.js"></script>
</head>
<body>
   <div>
      <p>Organizational Metrics</p>
      <p>FY 
         <?php echo date("Y"); ?></p>
         <img src="logo.png" alt="mops logo" width="100" height="100">
         <div id="groupYear">
         </div>
         <div class="container">
            <h1>please select the month that you want to see the report</h1>
            <h6>we pre-select some of the months for you.</h6>
            <br>
            <label>
               April <input type="checkbox" name="april" checked="checked" class="checkBoxClass">
            </label>
            <label>
               May <input type="checkbox" name="may" class="checkBoxClass">
            </label>
            <label>
               June <input type="checkbox" name="june"class="checkBoxClass">
            </label>
            <label>
               July <input type="checkbox" name="july" class="checkBoxClass">
            </label>
            <label>
               August <input type="checkbox" name="august" class="checkBoxClass">
            </label>
            <label>
               September <input type="checkbox" name="september" checked="checked" class="checkBoxClass">
            </label>
            <label>
               October <input type="checkbox" name="october" class="checkBoxClass">
            </label>
            <label>
               November <input type="checkbox" name="november" class="checkBoxClass">
            </label>
            <label>
               December <input type="checkbox" name="december" class="checkBoxClass">
            </label>
            <label>
               January <input type="checkbox" name="january" class="checkBoxClass">
            </label>
            <label>
               Februray <input type="checkbox" name="february" class="checkBoxClass">
            </label> 
            <label>
               March <input type="checkbox" name="march"checked="checked" class="checkBoxClass">
            </label>
            <label>
               Total <input type="checkbox" name="total" checked="checked" class="checkBoxClass">
            </label>
            <label>
               Click Here to Show All Months <input class="showAll" type="checkbox" name="showAll">
            </label>

            <label class="hideAll badge badge-danger">
               Hide All Months <input class="hideAll"  type="checkbox" name="hideAll">
            </label>
         </div>
         <div class="scrollmenu">
            <div class="tableInclude">
               <table class="table table-striped table-hover">
                  <thead>
                     <tr class="monthsRow">
                        <th class="description" colspan="8">Description</th>
                        <th class="april">April-18</th>
                        <th class="may">May-18</th>
                        <th class="june">Jun-18</th>
                        <th class="july">Jul-18</th>
                        <th class="august">Aug-18</th>
                        <th class="september">Sep-18</th>
                        <th class="october">Oct-18</th>
                        <th class="november">Nov-18</th>
                        <th class="december">Dec-18</th>
                        <th class="january">Jan-19</th>
                        <th class="february">Feb-19</th>
                        <th class="march">Mar-19</th>
                        <th class="total">Total</th>
                     </tr>
                  </thead>
                  <thead>
                     <tr class="goalActual">
                        <td class="one">&nbsp;</td>
                        <td class="two">&nbsp;</td>

                        <td class="april">Goal</td>
                        <td class="april">Actual</td>
                        <td class="april">Variance</td>

                        <td class="may">Goal</td>
                        <td class="may">Actual</td>
                        <td class="may">Variance</td>

                        <td class="june">Goal</td>
                        <td class="june">Actual</td>
                        <td class="june">Variance</td>

                        <td class="july">Goal</td>
                        <td class="july">Actual</td>
                        <td class="july">Variance</td>

                        <td class="august">Goal</td>
                        <td class="august">Actual</td>
                        <td class="august">Variance</td>

                        <td class="september">Goal</td>
                        <td class="september">Actual</td>
                        <td class="september">Variance</td>

                        <td class="october">Goal</td>
                        <td class="october">Actual</td>
                        <td class="october">Variance</td>

                        <td class="november">Goal</td>
                        <td class="november">Actual</td>
                        <td class="november">Variance</td>

                        <td class="december">Goal</td>
                        <td class="december">Actual</td>
                        <td class="december">Variance</td>

                        <td class="january">Goal</td>
                        <td class="january">Actual</td>
                        <td class="january">Variance</td>

                        <td class="february">Goal</td>
                        <td class="february">Actual</td>
                        <td class="february">Variance</td>

                        <td class="march">Goal</td>
                        <td class="march">Actual</td>
                        <td class="march">Variance</td>

                        <td class="total">Goal</td>
                        <td class="total">Actual</td>
                        <td class="total">Variance</td>

                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     error_reporting(E_ERROR | E_PARSE);
                     $dbhost = '127.0.0.1';
                     $dbuser = 'root';
                     $dbpass = '';
                     $dbname = 'mops';
                     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                  // Check connection
                     if(! $conn ) {
                        die('Could not connect: ' . mysqli_error());
                     }
                     // echo 'Connected successfully<br>';
                     $result = 'select metric_group_label from rpt_organizational_metric_group';
                     $metricData = mysqli_query($conn,$result);
                     foreach ($metricData as $value) {
                        echo '<tr>
                        <td id="metricLabel">&nbsp;</td>
                        <td class='.$value['metric_group_label'].'>'.$value['metric_group_label'].'</td>
                        </tr>';

                        $metricData = 'select * from rpt_organizational_metric m INNER JOIN rpt_organizational_metric_group g ON m.rpt_organizational_metric_group_id = g.rpt_organizational_metric_group_id where metric_group_label = "'.$value['metric_group_label'].'"';
                        $metricData = mysqli_query($conn,$metricData);
                     // var_dump($charteringData);
                        foreach ($metricData as $metric) {
                           echo '<tr>
                           <td>&nbsp;</td>
                           <td class='.$metric["field_type"] .'>' . $metric['metric_label'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['april_goal'] .'</td>
                           <td class='.$metric["field_type"] .'>' . $metric['april_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['april_result'] -  $metric['april_goal'] ,2) . '</td>

                           <td class='.$metric["field_type"] .'>' . $metric['may_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['may_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['may_result'] - $metric['may_goal'] ,2) . '</td>

                           <td class='.$metric["field_type"] .'>' . $metric['june_goal']. '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['june_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['june_result'] -$metric['june_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['july_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['july_result']. '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['july_result'] - $metric['july_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['august_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['august_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['august_result'] - $metric['august_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['september_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['september_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['september_result'] - $metric['september_goal'] ,2) . '</td>



                           <td class='.$metric["field_type"] .'>' . $metric['october_goal']. '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['october_result']. '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['october_result'] -  $metric['october_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['november_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['november_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['november_result'] - $metric['november_goal'] ,2) . '</td>



                           <td class='.$metric["field_type"] .'>' . $metric['december_goal']. '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['december_result']. '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['december_result'] - $metric['december_goal'] ,2) . '</td>



                           <td class='.$metric["field_type"] .'>' . $metric['january_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['january_result']. '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['january_result'] - $metric['january_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['february_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['february_result']. '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['february_result'] - $metric['february_goal'] ,2) . '</td>


                           <td class='.$metric["field_type"] .'>' . $metric['march_goal'] . '</td>
                           <td class='.$metric["field_type"] .'>' . $metric['march_result'] . '</td>
                           <td class='.$metric["field_type"] .'>' . round($metric['march_result'] - $metric['march_goal'] ,2) . '</td>

                           <td  id="goalTotal" class='.$metric["field_type"].'>' . round($metric['april_goal'] + $metric['may_goal'] + $metric['june_goal'] + $metric['july_goal'] + 
                            $metric['august_goal'] + $metric['september_goal'] + $metric['october_goal'] + $metric['november_goal'] +
                            $metric['december_goal'] + $metric['january_goal'] + $metric['february_goal'] +$metric['march_goal'],2) . '</td>

                           <td id="resultTotal" class='.$metric["field_type"].'>' . round($metric['april_result'] + $metric['may_result'] + $metric['june_result'] + $metric['july_result'] + 
                            $metric['august_result'] + $metric['september_result'] + $metric['october_result'] + $metric['november_result'] +
                            $metric['december_result'] + $metric['january_result'] + $metric['february_result'] + $metric['march_result'],2) . '</td>

                           <td id="grandTotal" class='.$metric["field_type"].'></td>

                           </tr>';   

                        }

                     }

                     ?>

                  </tbody>
               </table>
            </div>
         </body>
         </html>