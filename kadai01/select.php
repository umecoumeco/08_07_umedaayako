<?php
//functions.phpを読み込む
include('functions.php');
//dbにつなぎます
$pdo = db_conn();
//php02_tableから全部(*)を呼びます。 ※特定のカラム名を呼びたいときは、＊にカラム名をいれる
$sql = 'SELECT * FROM gs_bm_table';
//sqlを実行するための準備
$stmt = $pdo->prepare($sql);
//sqlに従って、pdoを実行させる
$status = $stmt->execute();
//viewの変数を用意する
$view='';
//中身がエラーのときは、エラー文を出して終了。
if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
//成功した場合は、指定したものをviewの中にいれてあげる    
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { //fetchはとれた文だけ繰り返して入れる。最後０件になったら終わりを返す
        $view .= '<li class="list-group-item">';
        $view .= '<p>'.$result['name'].'-'.$result['url'].'-'.$result['comment'].'</p>';
        $view .= '<a href="detail.php?id='.$result['id'].'" class="badge badge-primary">Edit</a>';
        $view .= '<a href="delete.php?id='.$result['id'].'" class="badge badge-danger">Delete</a>';
        $view .= '</li>';
    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>todoリスト表示</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ブックマーク一覧</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">ブックマーク登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">ブックマーク一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div>
        <ul class="list-group">
            <?=$view?>
        </ul>
    </div>

</body>

</html>