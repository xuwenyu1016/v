<?php exit;?>0015677506053d5fc2b2a7e92d938457965189218712s:8501:"a:2:{s:8:"template";s:8437:"<?php $__Template->display("themes/default/head"); ?>

<body class="">

<?php $__Template->display("themes/default/header"); ?>

<section class="slider am-padding-vertical-xl">
    <div class="am-container">

        <h2 class="am-text-center am-margin-top-0 am-margin-bottom-lg am-text-xl">近期热点</h2>

        <div id="indexSlider" class="index-slider-container">
            <div class="hd">
                <ul class="am-padding-left-sm">
                    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"slider", "order"=>"orders asc", "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <a href="<?php echo $list["link"];?>">
                            <div>
                                <img src="<?php echo $list["smallPic"];?>" alt="<?php echo $list["title"];?>" />
                                <span class="am-text-xs am-text-center"><b><?php echo $list["label"];?></b></span>
                            </div>


                            <div class="am-padding-xs am-text-truncate">
                                <p class="am-margin-vertical-xs"><b class="am-text-truncate"><?php echo $list["title"];?></b></p>
                                <p class="am-margin-vertical-xs am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                            </div>
                        </a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="bd">
                <ul>
                    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"slider", "order"=>"orders asc", "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <!--<div class="bg"></div>-->
                        <div class="pic"><a href="<?php echo $list["link"];?>"><img src="<?php echo $list["pc_slider"];?>" class="am-img-responsive"/></a></div>
                        <div class="title">
                            <a href="<?php echo $list["link"];?>">
                                <h2 class="am-margin-vertical-sm"><?php echo $list["title"];?></h2>
                                <p class="am-margin-vertical-sm"><?php echo $list["description"];?></p>
                                <span class="more am-margin-top-xl am-text-center">READ MORE</span>
                            </a>

                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </div>
</section>

<section class="gallery-show am-padding-vertical-xl">
    <!--<p class="angle am-margin-0"></p>-->

    <div class="am-container">
        <ul class="am-avg-sm-2 gallery-container">
           <li class="am-padding-right-sm">
               <p class="gallery-title am-margin-top-sm am-text-center am-text-lg"><a href="/page-Vshengtaiyanjiuyuan.html">V生态研究院</a> <span></span></p>

               <ul class="am-avg-sm-2 am-padding-top-lg two-rows">
                   <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>"13", "expand_id"=>2, "limit"=>"6", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                   <li>
                       <article>
                           <a href="<?php echo $list["aurl"];?>">
                               <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                               <p class="am-margin-vertical-xs am-text-truncate am-padding-horizontal-xs"><b><?php echo $list["title"];?></b></p>
                               <p class="am-margin-vertical-xs description am-padding-horizontal-xs am-text-sm"><?php echo $list["details"];?></p>

                               <span class="am-text-xs am-padding-horizontal-xs"><?php echo date('Y-m-d',$list["time"]);?></span>
                           </a>
                       </article>
                   </li>
                   <?php } ?>

               </ul>
           </li>
            <li class="am-padding-left-sm">
                <p class="gallery-title am-margin-top-sm am-text-center am-text-lg"><a href="/page-Vshengtaiyanjiuyuan.html">V生态科学家</a> <span></span></p>

                <ul class="am-avg-sm-1 am-padding-top-lg">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>4, "expand_id"=>3, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li>
                        <article>
                            <a href="<?php echo $list["aurl"];?>">
                                <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $list["title"];?>" />
                                <p class="am-margin-vertical-xs am-text-truncate am-padding-horizontal-xs"><b><?php echo $list["title"];?>&nbsp;<?php echo $list["job"];?></b></p>
                                <p class="am-margin-vertical-xs description am-padding-horizontal-xs am-text-sm"><?php echo $list["details"];?></p>

                                <span class="am-text-xs am-padding-horizontal-xs">&nbsp;</span>
                            </a>
                        </article>
                    </li>
                    <?php } ?>
                </ul>

            </li>
        </ul>
    </div>
</section>

<section class="index-info am-padding-vertical-xl">
    <div class="am-container">
        <ul class="am-avg-sm-2">
            <li class="am-padding-right-sm">
                <h2 class="am-margin-top-0 am-margin-bottom-sm am-padding-right-sm">益生菌小百科</h2>

                <div class="info-container am-margin-top-sm am-padding-top-sm am-padding-right-sm">
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>5, "expand_id"=>2, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <article>
                        <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive" alt="<?php echo $media["title"];?>" />

                            <div class="am-padding-left-lg">
                                <p class="am-margin-vertical-xs am-text-truncate"><b><?php echo $list["title"];?></b></p>
                                <p class="am-margin-vertical-xs am-text-sm description"><?php echo $list["details"];?></p>
                                <span class="am-text-xs am-margin-top-sm am-padding-top-sm"><?php echo date('Y-m-d',$list["time"]);?></span>
                            </div>
                        </a>

                        <hr/>
                    </article>
                    <?php } ?>

                </div>

            </li>
            <li class="am-padding-left-sm">
                <h2 class="am-margin-top-0 am-margin-bottom-sm">健康用词关心度排行榜</h2>

                <ul class="am-avg-sm-2 am-margin-top-sm am-padding-top-xs ranking-lists" onclick="location='/page-jiankangyongciguanxindu.html'">
                    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"Vwords", "order"=>"data_id asc", "limit"=>11));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li class="am-padding-left-xs am-margin-vertical-xs">
                        <p class="am-margin-vertical-xs"><span class="am-text-sm"><?php echo $list["data_id"];?></span> <a><?php echo $list["words"];?></a></p>
                    </li>
                    <?php } ?>
                    <!--<li class="am-padding-left-xs am-margin-vertical-xs">-->
                        <!--<p class="am-margin-vertical-xs"><span class="am-text-sm">12</span> <a>more</a></p>-->
                    <!--</li>-->
                </ul>
            </li>
        </ul>
    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>

<?php $__Template->display("themes/default/foot"); ?>

";s:12:"compile_time";i:1536214605;}";