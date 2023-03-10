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
            <?php include(ROOT_PATH . "/app/partials/adminHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/adminSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4>用户列表</h4>  
                    <?php include(ROOT_PATH . "/app/partials/messages.php");?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">用户名</th>
                                <th scope="col">用户类型</th>
                                <th scope="col">状态</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach($admin_users as $key => $user):?>
                                <tr>
                                    <td><?php echo $user['username'];?></td>
                                    <td>                                    
                                        <div class="link-bottom-line row">
                                            <div>
                                                <?php if($user['admin'] == '1'):?>
                                                    <span style="background-color:orangered;"></span>   
                                                    <span>管理员</span>   
                                                <?php else:?>
                                                    <span style="background-color:cadetblue;"></span>   
                                                    <span>普通用户</span>   
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </td>
                                    <?php if(true):?>
                                        <td>正常</td>
                                    <?php else:?>
                                        <td>封禁</td>
                                    <?php endif;?>
                                    <?php if(true): ?> <!-- 这里admin写上"无"就行 -->
                                        <td>禁言</td> 
                                    <?php else:?>
                                        <td>解封</td>
                                    <?php endif;?>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


