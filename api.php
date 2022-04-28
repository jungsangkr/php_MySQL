<?php

function getAllTest($db) {

    $sql = "SELECT * FROM hyaa_directions";
    $result = array();
    $stmt = $db->prepare($sql);
    //print_r($stmt);
    $stmt->execute();
   /*echo "<pre>";
        print_r($res);
    echo "</pre>";*/
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['id']] = $row;
    }

    return $result;
    
}



function saveExchange($db, $new_parser_actions_give, $new_parser_actions_get, $id) {
    $sql = "UPDATE hyaa_direction
            SET new_parser_actions_give = :new_parser_actions_give, new_parser_actions_get = :new_parser_actions_get
            WHERE id = :id";
    $stmt =$this->$db->prepare($sql);
    $stmt->bindValue(':new_parser_actions_give', $new_parser_actions_give, PDO::PARAM_STR);
    $stmt->bindValue(':new_parser_actions_get', $new_parser_actions_get, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
}
