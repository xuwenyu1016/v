<?php exit;?>0015695879676097ea30c1e666c358510942a43be9a9s:2875:"a:2:{s:8:"template";s:2811:"<?php $__Template->display("themes/default/head"); ?>

<body class="light-grey">

<?php $__Template->display("themes/default/header"); ?>

<img src="/assets/image/37.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />


<main class="institute-main am-padding-top-sm">
    <div class="am-container">

        <p class="am-margin-vertical-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="institute-container">

            <section class="institute-main">
                <?php foreach ($pageList as $vo) { ?>
                <article>
                    <a href="<?php echo $vo["aurl"];?>">
                        <img src="<?php echo $vo["image"];?>" class="am-img-responsive" alt="<?php echo $vo["title"];?>">

                        <div>
                            <p class="am-text-truncate am-margin-vertical-xs"><?php echo $vo["title"];?></p>
                            <p class="details am-margin-vertical-xs"><?php echo $vo["details"];?></p>
                            <p class="am-text-xs am-margin-bottom-0 am-margin-top-sm"><?php echo date('Y-m-d',$vo["time"]);?></p>
                        </div>
                    </a>
                </article>
                <?php } ?>

                <div class="pagination am-text-center am-margin-top-lg am-margin-bottom-xl"><?php echo $page;?></div>
            </section>


            <aside>

                <section class="am-padding-sm">
                    <h2 class="am-margin-top-0 am-margin-bottom-sm am-padding-right-sm">研究院近期文章</h2>

                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>"5,13,14", "expand_id"=>2, "limit"=>"5", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <article>
                        <a href="<?php echo $list["aurl"];?>">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>">

                            <div class="am-padding-left-sm">
                                <p class="am-text-truncate am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                <p class="am-text-xs am-margin-bottom-0 am-margin-top-sm"><?php echo date('Y-m-d',$list["time"]);?></p>
                            </div>
                        </a>
                    </article>
                    <?php } ?>
                </section>




            </aside>

        </div>


    </div>
</main>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>
";s:12:"compile_time";i:1538051967;}";