<?php exit;?>001568808826118de95001a15c8a860061dd1e9d25a2s:2521:"a:2:{s:8:"template";s:2457:"<?php $__Template->display("themes/default/head"); ?>

<body>

<?php $__Template->display("themes/default/header"); ?>

<img src="/assets/image/24.jpg" alt="<?php echo $contentInfo["title"];?>" />

<section class="paragraph am-padding-bottom-xl am-padding-top-sm">
    <div class="am-container">

        <p class="am-margin-vertical-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <ul class="am-avg-sm-2 para-blocks">
            <li>
                <h2 class="am-margin-top-sm am-margin-bottom-sm am-text-center am-text-xl"><?php echo $contentInfo["title"];?></h2>

                <article class="am-center">
                    <p class="am-text-center am-margin-vertical-sm">来源：<?php echo $contentInfo["copyfrom"];?></p>
                    <?php echo $contentInfo["content"];?>
                </article>
            </li>

            <li class="am-padding-top-xl">
                <?php $__Template->display("themes/default/sidebar"); ?>
            </li>
        </ul>



        <ul class="am-avg-sm-2 am-padding-vertical-sm bottomIndex">
            <li>
                <div class="am-text-truncate"><span>上一篇：</span>
                    <?php if (empty($prevInfo['aurl'])){ ?>
                    <a class="am-link-muted am-text-truncate">暂无</a>
                    <?php }else{ ?>
                    <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted "><?php echo $prevInfo["title"];?></a>
                    <?php } ?>
                </div>
            </li>
            <li>

                <div class="am-text-truncate"><span>下一篇：</span>
                    <?php if (empty($nextInfo['aurl'])){ ?>
                    <a class="am-link-muted am-text-truncate">暂无</a>
                    <?php }else{ ?>
                    <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted "><?php echo $nextInfo["title"];?></a>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </div>
</section>



<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>

<!--<script>-->
    <!--$(document).ready(function () {-->
        <!--$(".navList li:nth-child(3) a").addClass("active");-->
        <!--$(".navList-foot li:nth-child(3) a").addClass("active");-->
    <!--})-->
<!--</script>-->";s:12:"compile_time";i:1537272826;}";