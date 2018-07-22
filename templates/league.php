<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<h1>LEAGUE TABLE</h1>

<table>
    <tr>
        <th> Position </th>
        <th> Club </th>
        <th> Played </th>
        <th> Points </th>
    </tr>

    <?php
        foreach ($leagues as $league){
            print '<tr>';
            print '     <td>' . $league[0] . '</td>';
            print '     <td>' . $league[1] . '</td>';
            print '     <td>' . $league[2] . '</td>';
            print '     <td>' . $league[3] . '</td>';
            print '<tr>';
        }
    ?>

</table>

<?php

$query = "SELECT * FROM teams WHERE age = 'u13'";
$result = mysqli_query($db_link, $query);

while ($row=mysqli_fetch_array($result)){
    echo $row['team'];
    echo "<br/>";
}

require_once __DIR__ . '/../templates/_footer.php';