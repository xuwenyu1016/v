<?php exit;?>00156880840151675d729f473750a83c1ee8132fadd1s:1948:"a:2:{s:8:"template";s:1884:"<?php $__Template->display("themes/mobile/head"); ?>

<body>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/assets/image/26.png" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

<section class="paragraph am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-xs am-text-xs am-padding-bottom-xs"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <h2 class="am-margin-top-0 am-margin-bottom-sm am-text-center am-text-lg"><?php echo $contentInfo["title"];?></h2>

    <article class="am-center">
        <p class="am-text-center am-margin-vertical-sm">来源：<?php echo $contentInfo["copyfrom"];?></p>
        <?php echo $contentInfo["content"];?>
    </article>

    <ul class="am-avg-sm-1 am-padding-vertical-sm bottomIndex">
        <li>
            <div class="am-text-sm am-text-truncate"><span>上一篇：</span>
                <?php if (empty($prevInfo['aurl'])){ ?>
                <a class="am-link-muted am-text-truncate">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted "><?php echo $prevInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
        <li>

            <div class="am-text-sm am-text-truncate"><span>下一篇：</span>
                <?php if (empty($nextInfo['aurl'])){ ?>
                <a class="am-link-muted am-text-truncate">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted "><?php echo $nextInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
    </ul>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>
";s:12:"compile_time";i:1537272401;}";