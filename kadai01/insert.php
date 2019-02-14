<?php
//functions.phpのファイルを読み込む（関数が書いてある）
include('functions.php');
//もし
if (
//issetでtaskというカラムがあるかどうかの確認
//''で空かどうかを確認
!isset($_POST['name']) || $_POST['name']=='' ||
//issetでdeadlineという変数があるかどうかの確認
//''で空かどうかを確認
!isset($_POST['url']) || $_POST['url']==''
) {
//★パラムエラーと表示して処理ストップ
    exit('ParamError');
}
//POSTなので中身見えないようにしてtaskという変数に入っている内容をtaskに入れる
$task = $_POST['name'];
//POSTなので中身見えないようにしてdeadlineという変数に入っている内容をdeadlineに入れる
$deadline = $_POST['url'];
//POSTなので中身見えないようにしてcommentという変数に入っている内容をcommentに入れる
$comment = $_POST['comment'];
//db_conn()関数を変数に入れる
$pdo = db_conn();//ここにnewPDOが返ってくる
//php02_tableのテーブルにid:何も入れない、task:a1を入れる、deadline：a2, comment:a3、indateに今の時間を入れる
$sql ='INSERT INTO gs_bm_table(id, name, url, comment, indate)
VALUES(NULL, :a1, :a2, :a3, sysdate())';
//ここは呪文です
$stmt = $pdo->prepare($sql); //->は「.」と同じ prepareは「準備する」
$stmt->bindValue(':a1', $task, PDO::PARAM_STR); //PRAMの形が文字列ならSTR,数字ならINT
$stmt->bindValue(':a2', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$status = $stmt->execute();  //executeは 準備したstmtをinsert（実行）してtrueかfalseを返す

//ステータスがfalseのときはエラーをだして、  （boolは正誤true,false）
if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
//そうじゃないときは、index.phpへリダイレクト！
    header('Location: index.php');
}
