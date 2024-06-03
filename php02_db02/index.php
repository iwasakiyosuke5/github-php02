<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>データ登録</title>
  <link rel="stylesheet" href="css/range.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <style>
        .spinner {
            display: none;
            border: 16px solid black;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            /* width: 120px;
            height: 120px; */
            /*下記はバージョン違い  */

            width: 6em;
            height: 6em;
            margin-top: -3.0em;
            margin-left: -3.0em;
            /* border-radius: 50%;
            border: 0.25em solid #ccc;
            border-top-color: #333; */
            animation: spin 500ms linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script>
        function showSpinner() {
            document.getElementById("spinner").style.display = "block";
        }
    </script>
</head>
<body id="main">

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div id="spinner" class="spinner"></div>
<div>
  <div>
  <form method="post" action="insert.php" onsubmit="showSpinner()">
  <div class="jumbotron">

   <fieldset>
    <div>
    <legend>気になった論文を登録しよう</legend>
     <label>Title：<input type="text" name="title" required></label><br>
     <label>Author：<input type="text" name="auther" required></label><br>
     <label>Jurnal：<input type="text" name="jurnal" required></label><br>
     <label>Publication Year：<input type="text" name="pYear" required></label><br>
     <label>DOI：<input type="text" name="doi" required></label>   国際的識別子DOI（Digital Object Identifier）DOIの前に「https://doi.org/」をつけることでURLとして機能<br>
     <label>Interest level：<select name="level" id="">
        <option value="★☆☆☆☆">★☆☆☆☆</option>
        <option value="★★☆☆☆">★★☆☆☆</option>
        <option value="★★★☆☆">★★★☆☆</option>
        <option value="★★★★☆">★★★★☆</option>
        <option value="★★★★★">★★★★★</option>
     </select></label><br>
     <label>Abstract on Abstract：<br><textArea name="abstract" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </div>
  </fieldset>
  </div>
</form>

  </div>

</div>

<!-- Main[End] -->


</body>
</html>
