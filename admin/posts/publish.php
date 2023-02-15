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
            .link-bottom-line span:first-of-type{
                height:9px;
                width:9px;
                flex:0 0 auto;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/publishHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/manageSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4>发过的文章</h4>  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">文章</th>
                                <th scope="col">评论</th>
                                <th scope="col">访问量</th>
                                <th scope="col">发布时间</th>
                                <th scope="col">修改时间</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">利用IBM Watson Studio系统预测以及分析未来房价
                                    <div class="link-bottom-line row">
                                        <div class="col-md-3">
                                            <span style="background-color:dodgerblue;"></span>   
                                            <span style="color:gray;">人工智能</span>   
                                        </div>
                                        <div class="col-md-3">
                                            <span style="background-color:cadetblue;"></span>   
                                            <span style="color:gray;">校园项目</span>   
                                        </div>
                                    </div>
                                </th>
                                <td>0</td>
                                <td>0</td>
                                <td>2022-12-26</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/admin/articles/edit.php'?>">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">阿伊努族语言的扩张与濒危，及其语法变化
                                    <div class="link-bottom-line row">
                                        <div class="col-md-3">
                                            <span style="background-color:darkgoldenrod;"></span>   
                                            <span style="color:gray;">自然语言</span>   
                                        </div>
                                    </div>
                                </th>
                                <td>0</td>
                                <td>0</td>
                                <td>2022-12-26</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/admin/articles/edit.php'?>">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">记录：校园技术和生活支持的软件设计小项目                    
                                    <div class="link-bottom-line row">
                                        <div class="col-md-3">
                                            <span style="background-color:orange;"></span>   
                                            <span style="color:gray;">Java</span>   
                                        </div>
                                        <div class="col-md-3">
                                            <span style="background-color:cadetblue;"></span>   
                                            <span style="color:gray;">校园项目</span>   
                                        </div>
                                    </div>
                                </th>
                                <td>0</td>
                                <td>0</td>
                                <td>2022-12-26</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/admin/articles/edit.php'?>">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">对AWS Route53服务所创建域名失效的故障排除和解决方案
                                    <div class="link-bottom-line row">
                                        <div class="col-md-3">
                                            <span style="background-color:khaki"></span>   
                                            <span style="color:gray;">AWS</span>
                                        </div>
                                        <div class="col-md-3">
                                            <span style="background-color:limegreen;"></span>   
                                            <span style="color:gray;">网络基础</span>   
                                        </div>
                                        <div class="col-md-3">
                                            <span style="background-color:lightsteelblue;"></span>   
                                            <span style="color:gray;">技术笔记</span>
                                        </div>
                                    </div>
                                </th>
                                <td>0</td>
                                <td>0</td>
                                <td>2022-12-26</td>
                                <td>2022-12-26</td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/admin/articles/edit.php'?>">删除</a>
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


