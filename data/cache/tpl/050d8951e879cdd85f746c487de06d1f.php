<?php exit;?>001567676912bc52ea56d4c44d546a66511a027caeb9s:2131:"a:2:{s:8:"template";s:2067:"<?php $__Template->display("themes/default/head"); ?>

<body>

<?php $__Template->display("themes/default/header"); ?>

<img src="/assets/image/24.jpg" alt="<?php echo $contentInfo["title"];?>" />

<section class="paragraph am-padding-bottom-xl am-padding-top-sm">
    <div class="am-container">

        <p class="am-margin-vertical-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <h2 class="am-margin-top-0 am-margin-bottom-lg am-text-center am-text-xl"><?php echo $contentInfo["title"];?></h2>

        <ul class="am-avg-sm-2 para-blocks">
           <li>
               <article class="am-center">
                   <?php echo $contentInfo["content"];?>
               </article>
           </li>

            <li>
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

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1536140912;}";