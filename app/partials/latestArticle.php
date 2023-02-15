<!--这里是最近发布栏-->
<div class="container-fluid">
    <div class="mt-5 mb-2 p-2 text-center bg-primary text-light"><h3><b>最新发布</b></h3></div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php include("./app/database/connect.php");?>
        <?php
        $sql="select * from `articles`";
        $result=mysqli_query($conn,$sql);
        if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['article_id'];
            $article_topic=$row['article_topic'];
            $article_image=$row['article_image'];
            $article_name=$row['article_name'];
            $article_desc=$row['article_desc'];
            $article_author=$row['article_author'];
            $article_timeUpdate=$row['article_timeUpdate'];
            echo '<div class="col">
            <div class="card articleCard">
            <div class="row">
                <div class="col-md-6">
                <img src='.$article_image.' class="card-img-top latest-article-img" alt="...">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <p><span class="badge bg-info">'.$article_topic.'</span><p>
                    <h5 class="card-title"><b><a href="article.php?article_id='.$id.'">'.$article_name.'</a></b></h5>
                    <p class="card-text">
                    更新于 <small class="text-muted">'.$article_timeUpdate.'&nbsp;&nbsp;</small>
                    <img class="comment-img" src="./assets/images/comment.png" alt="">
                    <small class="text-muted">12</small>
                    </p>
                    <p class="card-text">'.substr($article_desc,0,272).'...</p>
                    <p class="card-text"><img class="user-img" src="./assets/images/userprofile.png" alt="">&nbsp;&nbsp;<small class="text-muted">'.$article_author.'</small></p>
                </div>
                </div>
            </div>
            </div>
        </div>';
        }
        }
        ?>
    </div>
</div>
