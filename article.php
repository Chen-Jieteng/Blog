<?php include("path.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <html>
        <body>
            <!-- PHP codes -->
            <?php include("./app/database/connect.php");?>
            <?php
            $id=$_GET['article_id'];
            $sql="Select * from `articles` where article_id=$id";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $article_topic=$row['article_topic'];
                $article_subtopic=$row['article_subtopic'];
                $article_image=$row['article_image'];
                $article_name=$row['article_name'];
                $article_desc=$row['article_desc'];
                $article_author=$row['article_author'];            
                $article_body=$row['article_body'];
                $article_timeUpdate=$row['article_timeUpdate'];
                $article_timeStamp=$row['article_timeStamp'];
            }
            ?>
            <!-- HTML codes -->
            <div class="container-fluid">
                <?php include(ROOT_PATH . "/partials/header.php");?>
                <div class="container-fluid">
                    <div class="row text-light mt-3 mb-3" style="background-color:plum">
                        <div class="col-md-2 pt-3">
                            <p><b>分类：</b><?php echo $article_topic ;?></p>
                        </div>
                        <div class="col-md-10 pt-3">
                            <p><b>子分类：</b><?php echo $article_subtopic ;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <?php echo '<img src='.$article_image.'>';?>
                    </div>
                        <div class="row">
                            <div class="col-md-5">
                                <h1 style="font-size:45px"><b><?php echo $article_name ;?></b></h1>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <p><b>文章背景：<br></b><?php echo $article_desc ;?></p>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="user-img" src="./assets/images/userprofile.png" alt="" style="width:3rem; height:3rem;">
                                    </div>
                                    <div class="col-md-3">
                                        <p><b>作者：</b><?php echo $article_author ;?><br>
                                        <b>IP：</b>加拿大</p>
                                    </div>                                
                                    <div class="col-md-8">
                                        <p><b>发布时间：</b><?php echo $article_timeStamp ;?><br>
                                        <b>更新时间：</b><?php echo $article_timeUpdate ;?></p>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <p><?php echo nl2br($article_body);?></p>
                    </div>
                    <div style="color:orange">
                        <p>
                        特别声明：以上文章内容仅代表作者本人观点。
                        如有作品版权、内容或其它相关问题请及时联系本站处理。
                        </p>
                    </div>

                    <!--这里是评论区-->
                    <div class="row mt-3 mb-3">
                        <h5>评论列表(3条)</h5>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <p><b>Edwin</b></p>
                                </div>
                                <div class="row">
                                    <p>我很欣赏你的文章，求更新</p>
                                </div>
                                <div class="row">
                                    <small class="text-muted">30分钟前&nbsp;加拿大</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!--这里是最近发布栏-->
                <?php include(ROOT_PATH . "/partials/latestArticle.php") ?>
            <!--这里是订阅-->
            <div class="row pt-5 pb-5 text-light">
                <div class="col-md-12" style="background-color:cornflowerblue">
                    <div style="text-align:center">
                        <div class="row mt-2"><h3>关于订阅</h3></div>
                        <div class="row">
                            <p>
                            欢迎访问我的个人数据博客，如果您觉得满意的话可以通过下面的订阅框，输入个人电子邮箱地址订阅，新文章发布会通过邮件的形式通知您。
                            </p>
                        </div>
                    </div>
                    <div class="row subsribe mb-2">
                        <form class="d-flex">
                            <input type="email" class="form-control me-2" id="exampleFormControlInput1" placeholder="请输入您的个人邮箱地址">
                            <button type="submit" class="btn btn-success">订阅</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php include(ROOT_PATH . "/partials/footer.php");?>
        </body>
    </html>