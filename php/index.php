<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/indexx.css">
    <!-- Bootstrap -->
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->               
</head>
<body>
  <?php include("../mphp/nav.php"); ?>
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-10  col-md-offset-8">
          <div class="form-inline">
            <button type="button" class="btn btn-default" id="releasebtn">发布公告</button>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="输入公告关键字">
            <button type="button" class="btn btn-success">search</button>
          </div>
      </div>
      </div>
      <div class="row">
        <div class="panel panel-success" style="margin-top: 20px;">
          <div class="panel-heading">
            <h3 class="panel-title">公告列表</h3>
          </div>
           <div class="panel-body">
              <p>发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由,发布内容健康自由</p>
          </div>
          <ul class="list-group">
            <?php
                showannounce();
            ?>
            <li class="list-group-item" style="padding:0;">
              <div class="row text-center">
                <div class="col-md-4 col-md-offset-4" style="padding:0;">
                  <nav aria-label="Page navigation" >
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </li>

          </ul>
      </div>
      </div>
    </div>
     <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="../js/index.js" type="text/javascript"></script>
    <?php
      function showannounce(){
        include_once("connect.php");
        $sql="select b.theme,a.name,b.time from user as a right join announce as b on a.user_id=b.user_id";
        $result=mysqli_query($mysql,$sql);
        if($result){
          while($row=$result->fetch_row()){
            echo"<li class='list-group-item'>";
            echo" <div class='row'>";
            echo"<div class='col-md-2'>";
            echo"<a>{$row[0]}</a>";
            echo"</div>";
            echo"<div class='col-md-2 col-md-offset-5'>";
            echo"<p>{$row[2]}</p>";
            echo"</div>";
            echo"<div class='col-md-1'>";
            echo"<p>{$row[1]}</p>";
            echo"</div>";
            echo"<div class='col-md-1'>";
            echo"<a>编辑</a>";
            echo"</div>";
            echo"<div class='col-md-1'>";
            echo"<a>删除</a>";
            echo"</div>";
            echo"</div>";
            echo"</li>";
          }
        }
      }
    ?>
</body>
</html>
