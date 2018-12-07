<?php exit;?>0015731218922936a6633082403b673252ac64eba448s:8825:"a:2:{s:8:"template";s:8761:"<?php $__Template->display("themes/default/head"); ?>

<body class="light-grey">

<?php $__Template->display("themes/default/header"); ?>

<section class="slider am-padding-top-xl am-padding-bottom-sm">
    <div class="am-container institute-big-slide">

        <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}' >
            <ul class="am-slides">
                <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"instituteSlide", "order"=>"ranks asc", "limit"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li>
                    <article class="slider-container">
                        <a href="<?php echo $list["link"];?>">
                            <img src="<?php echo $list["PC_img"];?>" class="am-img-responsive" title="<?php echo $list["description"];?>" alt="<?php echo $list["description"];?>" />
                            <div class="title">

                                <h2 class="am-margin-vertical-sm"><?php echo $list["briefTitle"];?></h2>
                                <p class="am-margin-vertical-sm"><?php echo $list["description"];?></p>
                                <span class="more am-margin-top-xl am-text-center">READ MORE</span>
                            </div>
                        </a>
                    </article>
                </li>
                <?php } ?>

            </ul>
        </div>


    </div>
</section>

<main class="institute-main">
    <div class="am-container">

        <p class="am-margin-vertical-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>


        <div class="institute-container">
            <div data-am-widget="tabs" class="am-tabs am-tabs-default">
                <ul class="am-tabs-nav am-cf">
                    <li class="am-active"><a href="[data-tab-panel-0]">益生菌小百科</a></li>
                    <li class=""><a href="[data-tab-panel-1]">益生菌适用症</a></li>
                    <li class=""><a href="[data-tab-panel-2]">益生菌和肠道健康</a></li>
                </ul>
                <div class="am-tabs-bd">
                    <div data-tab-panel-0 class="am-tab-panel am-active am-padding-top-lg">
                        <section>
                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>5, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <article>
                                <a href="<?php echo $list["aurl"];?>">
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>">

                                    <div>
                                        <p class="am-text-truncate am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                        <p class="details am-margin-vertical-xs"><?php echo $list["details"];?></p>
                                        <p class="am-text-xs am-margin-bottom-0 am-margin-top-sm"><?php echo date('Y-m-d',$list["time"]);?></p>
                                    </div>
                                </a>
                            </article>
                            <?php } ?>
                            <a href="/list-yishengjunxiaobaike.html" class="showList"> -- 查看更多 -- </a>



                        </section>

                    </div>
                    <div data-tab-panel-1 class="am-tab-panel am-padding-top-lg">

                        <section>

                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <article>
                                <a href="<?php echo $list["aurl"];?>">
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>">

                                    <div>
                                        <p class="am-text-truncate am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                        <p class="details am-margin-vertical-xs"><?php echo $list["details"];?></p>
                                        <p class="am-text-xs am-margin-bottom-0 am-margin-top-sm"><?php echo date('Y-m-d',$list["time"]);?></p>
                                    </div>
                                </a>
                            </article>
                            <?php } ?>
                            <a href="/list-yishengjunshiyongzheng.html" class="showList"> -- 查看更多 -- </a>

                        </section>

                    </div>
                    <div data-tab-panel-2 class="am-tab-panel am-padding-top-lg">
                        <section>

                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>14, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <article>
                                <a href="<?php echo $list["aurl"];?>">
                                    <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>">

                                    <div>
                                        <p class="am-text-truncate am-margin-vertical-xs"><?php echo $list["title"];?></p>
                                        <p class="details am-margin-vertical-xs"><?php echo $list["details"];?></p>
                                        <p class="am-text-xs am-margin-bottom-0 am-margin-top-sm"><?php echo date('Y-m-d',$list["time"]);?></p>
                                    </div>
                                </a>
                            </article>
                            <?php } ?>
                            <a href="/list-yishengjunhechangdaojiankang.html" class="showList"> -- 查看更多 -- </a>

                        </section>
                    </div>
                </div>
            </div>

            <aside>

                <section class="am-padding-sm am-margin-bottom-lg">
                    <h2 class="am-margin-top-0 am-margin-bottom-sm am-padding-right-sm">V生态科学家</h2>
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>4, "expand_id"=>3, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <article>
                        <a href="<?php echo $list["aurl"];?>" class="scientists">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>">

                            <div class="am-padding-left-sm">
                                <p class="am-text-truncate am-margin-vertical-xs am-text-center"><b><?php echo $list["title"];?></b></p>
                                <p class="am-text-xs am-margin-bottom-0 am-margin-top-xs"><?php echo $list["description"];?></p>
                            </div>
                        </a>
                    </article>
                    <?php } ?>
                </section>


                <section class="am-padding-sm">

                    <h2 class="am-margin-top-0 am-margin-bottom-sm">健康用词关心度排行榜</h2>

                    <ul class="am-avg-sm-2 am-margin-top-sm am-padding-top-xs ranking-lists" onclick="location='/page-jiankangyongciguanxindu.html'">
                        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"Vwords", "order"=>"data_id asc", "limit"=>11));  if(is_array($listList)) foreach($listList as $list){ ?>
                        <li class="am-padding-left-xs am-margin-vertical-xs">
                            <p class="am-margin-vertical-xs"><span class="am-text-sm"><?php echo $list["data_id"];?></span> <a><?php echo $list["words"];?></a></p>
                        </li>
                        <?php } ?>

                    </ul>

                </section>



            </aside>

        </div>


    </div>
</main>


<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>
";s:12:"compile_time";i:1541585892;}";