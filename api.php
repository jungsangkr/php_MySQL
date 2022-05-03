<?php include 'db.php'; ?>
<?php
function getAllTest($db) {
    $sql = "SELECT * FROM hyaa_directions";
    $result = array();
    $stmt = $db->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['id']] = $row;
    }
    return $result;
}
function saveExchange($db, $give, $get, $id) {
    $sql = "UPDATE hyaa_directions
            SET new_parser_actions_give = :new_parser_actions_give, new_parser_actions_get = :new_parser_actions_get
            WHERE id = :id";
    $stmt =$db->prepare($sql);
    $stmt->bindValue(':new_parser_actions_give', $give, PDO::PARAM_STR);
    $stmt->bindValue(':new_parser_actions_get', $get, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
}
