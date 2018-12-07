<?php exit;?>001566885090c41057a415392fb9a2af073b20298f7as:1562:"a:2:{s:8:"template";s:1498:"<?php $__Template->display("themes/mobile/head"); ?>

<body>

<?php $__Template->display("themes/mobile/header"); ?>

<img src="/assets/image/26.png" class="am-img-responsive am-center" />

<section class="paragraph am-padding-sm">

    <h2 class="am-margin-top-0 am-margin-bottom-sm am-text-center am-text-lg"><?php echo $contentInfo["title"];?></h2>

    <article class="am-center">
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
";s:12:"compile_time";i:1535349090;}";