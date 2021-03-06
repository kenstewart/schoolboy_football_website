<?php
require_once __DIR__ . '/../templates/_header.php';
?>

    <div id="column_container">
        <section class="left">
            <h1>Corduff Under 14s Results</h1><br/>

            <table width="100%" border="1" cellpadding="1" align="center">
                <?php
                $query = "SELECT date, home_team, home_team_score, status, away_team_score, away_team FROM 14results 
                      WHERE home_team = 'corduff' OR away_team = 'corduff'";

                $result = mysqli_query($db_link, $query) or die("SQL query failed");

                echo "<tr align='center'>\n";
                echo "<th>Date</th>";
                echo "<th>Home Team</th>";
                echo "<th></th>";
                echo "<th></th>";
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

            <a href="index.php?action=corduffu14">Back to Fixtures</a>

        </section>

        <section class="right">
            <h1>League Table</h1><br>
            <?php
            echo "<table width = '100%' border = '1' cellpadding = '1' align = 'center'>";

            $query = "SELECT team, played, won, drew, lost, goals_for, goals_against, goal_dif, points FROM teams 
                  WHERE age = 'u14' 
                  ORDER BY points DESC , goal_dif DESC , goals_for DESC , won DESC ";

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
