<?php

    require "../database/dbBrocker.php";
    require "../model/player.php";

    $db = new DBBrocker();

    $output = '';
    $order = $_POST["colOrder"];
    $colName = $_POST["colName"];

    if ($order == "desc") {
        $order = "asc";
    }
    else {
        $order = "desc";
    }

    $result = $db->sortPlayers($colName, $order);
    $output .= '<table id="player-table" class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col"><a id="shirt_number" class="col-sort" href="#" data-order="'.$order.'">#Broj</a></th>
                        <th scope="col"><a id="firstname" class="col-sort" href="#" data-order="'.$order.'">Ime</a></th>
                        <th scope="col"><a id="surname" class="col-sort" href="#" data-order="'.$order.'">Prezime</a></th>
                        <th scope="col"><a id="position" class="col-sort" href="#" data-order="'.$order.'">Pozicija</a></th>
                        <th scopre="col"><a id="number_appearance" class="col-sort" href="#" data-order="'.$order.'">Broj nastupa</a></th>
                        <th scope="col"><a id="number_of_goals" class="col-sort" href="#" data-order="'.$order.'">Golovi</a></th>
                        <th scope="col"><a id="number_of_assists" class="col-sort" href="#" data-order="'.$order.'">Asistencije</a></th>
                        <th scope="col"><a id="number_of_saves" class="col-sort" href="#" data-order="'.$order.'">Odbrane</a></th>
                    </tr>
                    </thead>';

    $output .= '</tbody>';
    while  ($row = $result->fetch_array()) {
        $output .= '<tr>
        <td>'.$row["shirt_number"].'</td>
        <td>'.$row["firstname"].'</td>
        <td>'.$row["surname"].'</td>
        <td>'.$row["position"].'</td>
        <td>'.$row["number_appearance"].'</td>
        <td>'.$row["number_of_goals"].'</td>
        <td>'.$row["number_of_assists"].'</td>
        <td>'.$row["number_of_saves"].'</td>
        </tr>';
    }

    $output .= '</tbody></table>';

    if ($result) {
        echo $output;
    }
    else {
        echo "Fail";
    }

?>