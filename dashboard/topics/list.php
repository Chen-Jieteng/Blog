<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="../../assets/css/index.css">
        <link rel="stylesheet" href="../..//assets/css/login.css">
        <link rel="stylesheet" href="../..//assets/css/publish.css">
        <style>
            a{
                text-decoration: none;
                color: black;
            }
            thead{
                color:gray;
            }
            td{
                color:inherit;
            }
            tbody > tr > th{
                font-weight: normal;
            }
            span{
                height:9px;
                width:9px;
                flex:0 0 auto;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/adminHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/adminSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4>标签列表</h4>  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">标签名称</th>
                                <th scope="col">颜色</th>
                                <th scope="col">标签类型</th>
                                <th scope="col">归属模块</th>
                                <th scope="col">描述</th>
                                <th scope="col">设置日期</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">技术笔记</th>
                                <td><span style="background-color:orange"></span></td>
                                <td>无</td>
                                <td>无</td>
                                <td>记录和分享技术知识方面的笔记，包括个人笔记、团队知识库、技术文档等。技术笔记是一个非常有用的工具，可以帮助开发人员记录自己的思考过程、解决问题的方法、以及项目经验等。</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/dashboard/topics/edit.php'?>">编辑</a>
                                    <a href="#">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Java</th>
                                <td><span style="background-color:orange"></span></td>
                                <td>技术笔记</td>
                                <td>技术笔记</td>
                                <td>JavaJava是一种广泛使用的编程语言，由Sun Microsystems于1995年推出。它是一种面向对象的语言，广泛用于开发跨平台的应用程序，包括企业级应用、移动应用、Web应用和游戏等。</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/dashboard/topics/edit.php'?>">编辑</a>
                                    <a href="#">删除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


