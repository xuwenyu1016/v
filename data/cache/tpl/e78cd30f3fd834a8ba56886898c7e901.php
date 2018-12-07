<?php exit;?>00157314958339f2f51bdbcf445c228b0bde297d5a19s:7903:"a:2:{s:8:"template";s:7839:"<?php $__Template->display("themes/default/head"); ?>

<body class="light-grey">

<?php $__Template->display("themes/default/header"); ?>

<section class="slider am-padding-top-xl am-padding-bottom-sm">
    <div class="am-container institute-big-slide">

        <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}' >
            <ul class="am-slides">
                <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"bSchoolSlide", "order"=>"ranks asc", "limit"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                    <li class="am-active"><a href="[data-tab-panel-0]">行业资讯</a></li>
                    <li class=""><a href="[data-tab-panel-1]">公司新闻</a></li>
                    <li class=""><a href="[data-tab-panel-2]">商学院</a></li>
                    <!--<li class=""><a href="[data-tab-panel-3]">V生态优势</a></li>-->
                </ul>
                <div class="am-tabs-bd">
                    <div data-tab-panel-0 class="am-tab-panel am-active am-padding-top-lg">
                        <section>

                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>15, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                            <a href="/list-hangyezixun.html" class="showList"> -- 查看更多 -- </a>

                        </section>
                    </div>
                    <div data-tab-panel-1 class="am-tab-panel am-padding-top-lg">
                        <section>

                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                            <a href="/list-gongsixinwen.html" class="showList"> -- 查看更多 -- </a>

                        </section>
                    </div>
                    <div data-tab-panel-2 class="am-tab-panel am-padding-top-lg">
                        <section>

                            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>17, "expand_id"=>2, "limit"=>"10", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
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
                            <a href="/list-shangxueyuan.html" class="showList"> -- 查看更多 -- </a>

                        </section>
                    </div>

                </div>
            </div>

            <aside>

                <section class="am-padding-sm">
                    <h2 class="am-margin-top-0 am-margin-bottom-sm am-padding-right-sm">V生态优势</h2>

                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>"18", "expand_id"=>2, "limit"=>"5", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
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
";s:12:"compile_time";i:1541613583;}";