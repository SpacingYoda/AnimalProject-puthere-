<?php // !!FAILED AND IS  NOT PART OF THE CODE!!
if ($_POST['submit']){
    $key = $_POST['key'];
    $query = $pdo->prepare('SELECT * FROM animals WHERE gname LIKE :keyword OR sname LIKE :keyword ORDER BY gname');
    $query->bindValue(':keyword', '&'.$key.'&', PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll();
    $rows = $query->rowCount();

}