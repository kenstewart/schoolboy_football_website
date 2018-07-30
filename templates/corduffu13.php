<?php
require_once __DIR__ . '/../templates/_header.php';
?>

    <div id="column_container">
        <section class="left">
            <h1>Corduff Under 13s Fixtures</h1><br/>

            <table width="100%" border="1" cellpadding="1" align="center">
                <?php
                $query = "SELECT date, home_team, status, away_team FROM 13fixtures 
                      WHERE home_team = 'corduff' OR away_team = 'corduff'";

                $result = mysqli_query($db_link, $query) or die("SQL query failed");

                echo "<tr align='center'>\n";
                echo "<th>Date</th>";
                echo "<th>Home Team</th>";
                echo "<th></th>";
                echo "<th>Away Team</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)){ //looping through the rows
                    echo "<tr>";
                    foreach ($row as $col_value){ //looping through each column of the selected row
                        $col_value_upper = ucfirst($col_value);
                        echo "<td align='center'>$col_value_upper</td>"; //printing the column value
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            
            <a href="index.php?action=corduffu13results">View past Results</a>

        </section>

        <section class="right">
            <?php
            echo "<table width = '100%' border = '1' cellpadding = '1' align = 'center'>";

            $query = "SELECT team, played, won, drew, lost, goals_for, goals_against, goal_dif, points FROM teams 
                  WHERE age = 'u13' 
                  ORDER BY points, goal_dif, goals_for, won DESC";

            $result = mysqli_query($db_link, $query) or die("SQL query failed");

            echo "<tr align='center'>\n";
            echo "<th>Team</th>";
            echo "<th>Played</th>";
            echo "<th>Won</th>";
            echo "<th>Drew</th>";
            echo "<th>Lost</th>";
            echo "<th>Goals For</th>";
            echo "<th>Goals Against</th>";
            echo "<th>Goal Dif</th>";
            echo "<th>Points</th>";
            echo "</tr>\n";

            while ($row = mysqli_fetch_assoc($result)) { //looping through the rows
                echo "<tr>";
                foreach ($row as $col_value) { //looping through each column of the selected row
                    $col_value_upper = ucfirst($col_value);
                    echo "<td align = 'center'>$col_value_upper</td>"; //printing the column value
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </section>
    </div>


<?php
require_once __DIR__ . '/../templates/_footer.php';
