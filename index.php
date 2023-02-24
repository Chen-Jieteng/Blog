<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
$posts = selectAll('posts', ['published' => 1]);
/* $posts = getPublishedPosts(); */

$posts = array();
if(isset($_POST['search-term'])){
  $posts = searchPosts($_POST['search-term']);
}
//else{
  /* $posts = getPublishedPosts(); */
//}

?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <html>
        <body>
            <div class="container-fluid">
                <!--这里是Navigation-->
                <?php include(ROOT_PATH . "/app/partials/header.php");?>
                <?php include(ROOT_PATH . "/app/partials/messages.php");?>
                <!--这里是头条-->

                <div class="container-fluid">
                  <div class="row pt-3">
                    <?php
                      $sql = "SELECT * FROM posts WHERE published='1' ORDER BY id DESC LIMIT 1";
                      $stmt = $pdo->query($sql);
                      $post = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="col-md-12 h-100 d-flex align-items-center justify-content-center index-post">
                      <div class="card p-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="card-body">
                                <p><span class="badge bg-primary">最新发布</span><p>
                                <h3 class="card-title"><b><a href="post.php?id=<?php echo $post['id'];?>">
                                <?php echo $post['name'];?>
                              </b></a></h3>
                                <p class="card-text">
                                    更新时间: <small class="text-muted"><?php echo date('Y年n月j日', strtotime($post['update_time']));?></small><br>
                                    <small class="text-muted">
                                      <?php 
                                        $sql = "SELECT t.name AS topic_parent
                                        FROM posts p
                                        JOIN topics t ON p.parent_topic_id = t.id
                                        WHERE p.id = {$post['id']}";
                                        $stmt = $pdo->query($sql);
                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                        echo $row['topic_parent'];
                                      ?>
                                       - 
                                      <?php 
                                        $sql = "SELECT t.name AS topic_name
                                        FROM posts p
                                        JOIN topics t ON p.topic_id = t.id
                                        WHERE p.id = {$post['id']}";
                                        $stmt = $pdo->query($sql);
                                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                        echo $row['topic_name'];
                                      ?>
                                    </small>
                                </p>
                                <p class="card-text">
                                  <?php echo $post['description'];?>
                                </p>
                                </div>
                            </div>
                          <div class="col-md-7">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" class="img-fluid rounded-start  index-post-img" alt="头条">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--这里是文章分类栏-->
                <div class="container-fluid">
                  <div class="row row-cols-1 row-cols-md-4 g-4 pt-5 text-center">
                    <div class="col-md-3">
                      <div class="card categCard">
                        <img src="./assets/images/image 1.png" class="card-img-top article-categ-img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><b>技术笔记</b></h5>
                          <p class="card-text">包括25篇关于计算机学习和实践过程中如何探索解决方案、故障排除和案例学习的文章和笔记 </p>
                          <a class="btn btn-secondary" href="<?php echo BASE_URL . '/publish.php'?>" role="button">所有文章</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card categCard">
                        <img src="./assets/images/image 2.png" class="card-img-top article-categ-img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><b>数据科学</b></h5>
                          <p class="card-text">内有20篇数据科学分析，人工智能，深度学习，挖掘及机器学习等文章及学习笔记</p>
                          <a class="btn btn-secondary" href="<?php echo BASE_URL . '/publish.php'?>" role="button">所有文章</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card categCard">
                        <img src="./assets/images/image 3.png" class="card-img-top article-categ-img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><b>UI/UX</b></h5>
                          <p class="card-text">包括10篇关于人机交互(HCI)，UI/UX，平台研究及其他网络交互技术的文章和学习笔记</p>
                          <a class="btn btn-secondary" href="<?php echo BASE_URL . '/publish.php'?>" role="button">所有文章</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card categCard">
                        <img src="./assets/images/image 4.png" class="card-img-top article-categ-img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><b>自然语言</b></h5>
                          <p class="card-text">内有50篇与人类语言：汉语、英语、古文明语言等相关的研究文章和学习笔记</p>
                          <a class="btn btn-secondary" href="<?php echo BASE_URL . '/publish.php'?>" role="button">所有文章</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--这里是最近发布栏-->
                <div class="mt-5 mb-2 p-2 text-center bg-primary text-light">
                  <h3><b>最新发布</b></h3>
                </div>
                
                <?php include(ROOT_PATH . '/app/partials/latestArticle.php');?>

                <!--这里是自我介绍-->
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
                <!--这里是footers-->
                <?php include(ROOT_PATH . "/app/partials/footer.php");?>
            </div>
        </body>
    </html>