<?php exit;?>00156776334681b8ac28c8a11aa45aea0871638faca4s:1663:"a:2:{s:8:"template";s:1599:"<?php $__Template->display("themes/mobile/head"); ?>

<body>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-09-06/8785c562866d40ee0d531e9d9ace7be0.jpg" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />

<p class="am-margin-vertical-xs am-text-xs am-padding-horizontal-sm am-padding-top-xs"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

<h3 class="am-margin-top-sm am-margin-bottom-xs am-text-center am-text-lg"><?php echo $categoryInfo["name"];?></h3>

<section class="institute-article am-padding-horizontal-sm am-padding-top-xs am-padding-bottom-sm">
    <?php foreach ($pageList as $vo) { ?>
    <article class="am-padding-xs">

        <a href="<?php echo $vo["aurl"];?>">
            <div>
                <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" class="am-img-responsive" />
            </div>


            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $vo["title"];?></p>
                <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $vo["details"];?></p>
                <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo date('Y-m-d',$vo["time"]);?></p>
            </div>
        </a>

    </article>
    <?php } ?>
    <div class="pagination am-text-center am-margin-vertical-lg"><?php echo $page;?></div>
</section>



<?php $__Template->display("themes/mobile/foot"); ?>
";s:12:"compile_time";i:1536227346;}";