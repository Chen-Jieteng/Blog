<div class="sidebar text-center" id="side_nav">
    <div class="header-box px-2 pt-4">
        <?php if(isset($_SESSION['id'])): ?>
            <div class="pb-5">
                <img class="user-img" src="<?php echo BASE_URL . '/assets/images/userprofile.png'?>" alt="" style="width:3rem; height:3rem;">
                <h3><a href="<?php echo BASE_URL . '/dashboard/users/userprofile.php'?>"><?php echo $_SESSION['username']; ?></a></h3> 
            </div>
            
            <ul class="list-unstyled px-2 text-muted">
                <li class="pb-5"><a href="<?php echo BASE_URL . '/dashboard/publish/list.php'?>" class="text-deoration-none">发过的文章</a></li>
                <li class="pb-5"><a href="<?php echo BASE_URL . '/dashboard/publish/list.php'?>" class="text-deoration-none">发过的动态</a></li>
                <li class="pb-5"><a href="<?php echo BASE_URL . '/dashboard/publish/list.php'?>" class="text-deoration-none">发过的项目</a></li>
                <li class="pb-5"><a href="<?php echo BASE_URL . '/dashboard/users/setting.php'?>" class="text-deoration-none">用户设置</a></li>
            </ul>
        <?php else: ?>
            <div class="pt-5">
                <h5>请先登录</h5>
                <p class="text-muted">成功登录后可查看您发过的文章，动态，项目以及用户设置</p>
                <a class="" href="<?php echo BASE_URL . '/login.php'?>">登录</a></li>
                <a class="" href="<?php echo BASE_URL . '/signup.php'?>">注册</a></li>
            </div>
        <?php endif; ?>
    </div>
</div>