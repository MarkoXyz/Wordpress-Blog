<?php
/**
Template Name: 自我介绍模版
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="主页">
    <meta name="description" content="主页">
    <link rel="icon" type="image/x-icon" href="https:///www.markoxu.com/wp-content/themes/kratos-pjax/static/images/favicon.ico">
    <link rel="stylesheet" href="https://www.markoxu.com/wp-content/themes/kratos-pjax/static/css/main.css">
    <link rel="stylesheet" href="https://www.markoxu.com/wp-content/themes/kratos-pjax/static/css/font-awesome.min.css">
    <script src="https://www.markoxu.com/wp-content/themes/kratos-pjax/static/js/jquery.min.js"></script>
</head>

<body>
    <div class="loading" style="display: none;">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <div class="bak" style="background-image: url(https:///www.markoxu.com/wp-content/themes/kratos-pjax/static/images/login-background.jpg);"></div>
    <main>
        <div class="content">
            <div class="left">
                <div class="avatar">
                    <img src="https:///www.markoxu.com/wp-content/themes/kratos-pjax/static/images/gravatar.png">
                </div>
                <ul class="menu">
                    <li>
                        <a goto="#home" class="active">HOME</a>
                    </li>
                    <li>
                        <a goto="#archives">ARCHIVES</a>
                    </li>
                    <li>
                        <a goto="#about">ABOUT</a>
                    </li>
                    <li>
                        <a goto="#donate">DONATE</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <section id="home" class="active">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <div class="items">
                        <a href="<?php echo get_bloginfo('url'); ?>" target="_blank" rel="noopener">
                            <i class="fa fa-home"></i>
                            <span>Blog</span>
                        </a>
                        <a href="https://github.com/MarkoXyz" target="_blank" rel="noopener">
                            <i class="fa fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="mailto:markoxyz94@gmail.com" target="_blank" rel="noopener">
                            <i class="fa fa-envelope"></i>
                            <span>E-Mail</span>
                        </a>
                        <a href="https://weibo.com" target="_blank" rel="noopener">
                            <i class="fa fa-weibo"></i>
                            <span>Weibo</span>
                        </a>                        
                        <a href="https://twitter.com" target="_blank" rel="noopener">
                            <i class="fa fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="https://www.facebook.com" target="_blank" rel="noopener">
                            <i class="fa fa-facebook-official"></i>
                            <span>Facebook</span>
                        </a>
                    </div>
                </section>
                <section id="archives">
                    <h1>近期文章</h1>
                    <ul class="archive-list">
                    </ul>
                </section>
                <section id="about">
                    <h1>关于</h1>
                    <p>我</p>
                </section>
                <section id="donate">
                    <h1> !</h1>
                    <div class="donate-img-box">
                        <img src="https:///www.markoxu.com/wp-content/themes/kratos-pjax/static/images/default-nothing.png" height=150 width=150>
                    </div>
                </section>
            </div>
        </div>
        <footer>
        </footer>
    </main>
    <script src="https://www.markoxu.com/wp-content/themes/kratos-pjax/static/js/main.js"></script>
</body>

</html>