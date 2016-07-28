<?php

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>ロット番号検索</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/search.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="page-header">
        <h1>ロット番号検索</h1>
        <p class="lead">牛肉トレーサビリティ：値付ロットナンバーから個体識別番号検索</p>
      </div>

      <div class="row">
        <div class="col-sm-12">
      <h3>値付ロットナンバー入力</h3>
      <form>
        <div class="form-group">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>検索</button>
            </span>
            </div>
        </div>
      </form>
    </div>
</div>

<?php
?>
        <hr />
<?php
?>
      <div class="row">
        <div class="col-sm-12">
      <h3>検索結果</h3>
        <table class="table table-bordered">
            <thead>
                <th colspan="4" class="text-center bg-default">個体識別番号</th>
            </thead>
            <tbody>
                <tr>
                    <td>0423506738</td>
                    <td>0613604435</td>
                    <td>0265013470</td>
                    <td>0282411044</td>
                </tr>
                <tr>
                    <td>1111111111</td>
                    <td>2222222222</td>
                    <td>3333333333</td>
                    <td>4444444444</td>
                </tr>
            </tbody>
        </table>
        </div>
      </div>
      </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-sm-12">
      <a href="http://www.id.nlbc.go.jp/top.html" class="btn btn-default btn-lg btn-block" role="button"><u>個体識別番号で検索</u></a>
      <p class="text-center">http://www.id.nlbc.go.jp/top.html</p>
      </div>
      </div>
<?php
?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
