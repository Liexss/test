<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>杭师大志愿管理系统</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="script/index.js"></script>
                        
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img id="icon" alt="Brand" src="../image/icon.jpg">
          </a>
        </div>
        <p id="title" class="navbar-text">杭师大志愿管理系统</p>
    </nav>

    <div class="container">
        <h3 class="glyphicon glyphicon-user">人员信息管理</h3>
        <div id="table">
            <table class="table table-striped">
                <tr>
                    <td>编号</td>
                    <td>账号</td>
                    <td>姓名</td>
                    <td>操作</td>
                </tr>
                <?php 
                    Show();
                ?>
            </table>
        </div>

        <div id="footer" class="footer row">
            <button id="Add" type='button' class='btn btn-success' data-toggle='modal' data-target='#infoboxAdd'>Add</button>
            <button id="Query" type='button' class='btn btn-primary' data-toggle='modal' data-target='#infoboxQuery'>Query</button>
        </div>
        
    </div>

    <div class="modal fade" id="infoboxAdd" tabindex="-1" role="dialog" aria-labelledby="infoboxAdd">
        <div class="modal-dialog" role='document'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times</button>
                    <h4 class="modal-title" id="infoboxLabel">新增人员信息</h4>
                </div>

                <div class="modal-body">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;账号:<input type="text" id="accountAdd"></input></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码:<input type="password" id="passwordAdd"></input></p>
                    <p>再次输入:<input type="password" id="passwordAddAgain"></input></p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;权限:
                        <input name="rootInput" type="radio" id="inputAdmin">管理者</input>
                        <input name="rootInput" type="radio" id="inputUser">普通用户</input>    
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名:<input type="text" id="nameAdd"></input></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性别:
                        <input name="sexInput" type="radio" id="inputM">男</input>
                        <input name="sexInput" type="radio" id="inputF">女</input>   
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年龄:<input type="text" id="ageAdd"></input></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;居住地:<input type="text" id="residenceAdd"></input></p>
                    <p>联系电话:<input type="text" id="telephoneAdd"></input></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="Add()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="infoboxQuery" tabindex="-1" role="dialog" aria-labelledby="infoboxQuery">
        <div class="modal-dialog" role='document'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times</button>
                    <h4 class="modal-title" id="infoboxLabel">查询人员信息</h4>
                </div>

                <div class="modal-body">
                    <p>根据</p>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div><!-- /btn-group -->
                          <input type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
