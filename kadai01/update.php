<?php
//functions.phpを呼び込む
include('functions.php');
//もし
if (
    
    !isset($_POST['name'])     || 
    !isset($_POST['url']) || 
    $_POST['name']==''         ||
    $_POST['url']==''
) {
    exit('ParamError');
}
$id = $_POST['id'];
$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];
$pdo = db_conn();
//php02_tableのid名が同じところに、カラム名task=:a1, deadline=:a2, comment=:a3を上書きする
$sql = 'UPDATE gs_bm_table SET name=:a1, url=:a2, comment=:a3 WHERE id =:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: select.php');
    exit;
}
