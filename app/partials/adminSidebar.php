<div class="sidebar text-center" id="side_nav">
    <div class="header-box px-2 pt-4">
        <?php if(isset($_SESSION['id'])): ?>
            <div class="pb-5">
                <img class="user-img" src="<?php echo BASE_URL . '/assets/images/userprofile.png'?>" alt="" style="width:3rem; height:3rem;">
                <h3><?php echo $_SESSION['username']; ?></h3> 
            </div>
            
            <ul class="list-unstyled px-2 text-muted">
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/admin/publishlist.php'?>" class="text-deoration-none">发布管理</a></li>
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/admin/userlist.php'?>" class="text-deoration-none">用户列表</a></li>
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/admin/usercreate.php'?>" class="text-deoration-none">用户添加</a></li>
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/topics/list.php'?>" class="text-deoration-none">标签列表</a></li>
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/topics/create.php'?>" class="text-deoration-none">标签添加</a></li>
                <li class="pb-2"><a href="<?php echo BASE_URL . '/dashboard/users/setting.php'?>" class="text-deoration-none">管理员设置</a></li>
            </ul>
        <?php else: ?>
            <div class="pt-5">
                <h5>请先登录</h5>
                <p class="text-muted">成功登录后可查看管理员信息，发布管理，用户管理，标签管理</p>
                <a class="" href="<?php echo BASE_URL . '/login.php'?>">登录</a></li>
            </div>
        <?php endif; ?>
    </div>
</div>