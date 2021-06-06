<?php

include_once '../php/model/user.php';
include_once '../php/database.php';
include_once '../html/gimGeometrie.php';

function showGeometrieGimnaziu(){

$database = new Database();
$db = $database->connect();


$sql = "SELECT ID, title, text_problem, score FROM geometrie_gimnaziu";
$result = $db->prepare($sql);
$result->execute();

    if($result-> rowCount() > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo
        "<tr>
                <td>". $row["ID"] ."</td>
                <td>" . $row["title"] ."</td>
                <td>" . $row["text_problem"] . "</td>
                <td>" . $row["score"] ."</td>
                <td class='tess'>
                <div>
                    <input id='" . $row["ID"] . "' type='text' class='input-raspuns' name='tt' placeholder='Raspuns...'>
                    <input type='hidden' id='custId-". $row['ID'] ."' name='custId' value='" . $row['ID'] ."'>
                    <input name='function-submit' type='submit' onclick='z(" . $row['ID'] . ")'></i>
                    <i class='fa fa-check-circle' id='check-". $row['ID'] ."' style='font-size:48px;color:red;display:none;'></i>
                </div>
                </td>
            </tr>";
        }
    }   
} 