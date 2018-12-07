<?php exit;?>0015677660608883d606db9939e4c90471763c177024s:6431:"a:2:{s:8:"template";s:6367:"﻿<?php $__Template->display("themes/mobile/head"); ?>

<body>

<?php $__Template->display("themes/mobile/header"); ?>

<h3 class="am-margin-vertical-sm am-text-center am-text-lg">近期热点</h3>

<section class="slider-box">
    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"slider", "order"=>"orders asc", "limit"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
    <a href="<?php echo $list["link"];?>" title="<?php echo $list["title"];?>">
        <img src="<?php echo $list["pc_slider"];?>" class="am-img-responsive am-center" />
        <div class="am-text-sm am-padding-xs am-text-truncate"><?php echo $list["title"];?></div>
    </a>
    <?php } ?>
</section>

<section class="banner-news am-padding-sm">
    <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"slider", "order"=>"orders desc", "limit"=>3));  if(is_array($listList)) foreach($listList as $list){ ?>
    <article class="am-padding-xs">
        <a href="<?php echo $list["link"];?>" title="<?php echo $list["title"];?>">
            <div>
                <img src="<?php echo $list["pc_slider"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                <span class="am-text-center am-text-xs"><?php echo $list["label"];?></span>
            </div>

            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-margin-vertical-0 am-text-xs description"><?php echo $list["description"];?></p>
            </div>
        </a>
    </article>
    <?php } ?>


</section>

<h2 class="bg-title am-text-center am-margin-vertical-0 am-padding-sm institute"><a href="/page-Vshengtaiyanjiuyuan.html">V生态研究院 <span class="checkit">more</span></a></h2>

<section class="institute-article am-padding-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>"13", "expand_id"=>2, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <article class="am-padding-sm">
        <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>">
            <div>
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
            </div>

            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-margin-vertical-0 am-text-xs description"><?php echo $list["details"];?></p>
                <p class="am-margin-vertical-0 am-text-xs date"><?php echo date('Y-m-d',$list["time"]);?></p>
            </div>
        </a>
    </article>
    <?php } ?>

    <!--<a href="" class="more am-text-center am-text-sm am-center">查看更多</a>-->
</section>

<h2 class="bg-title am-text-center am-margin-vertical-0 am-padding-sm institute-stuff"><a href="/page-Vshengtaiyanjiuyuan.html">V生态科学家 <span class="checkit">more</span></a></h2>

<section class="institute-article am-padding-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>4, "expand_id"=>3, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <article class="am-padding-sm">
        <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>">
            <div>
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
            </div>

            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-margin-vertical-0 am-text-xs description"><?php echo $list["job"];?></p>
                <p class="am-margin-vertical-0 am-text-xs description"><?php echo $list["details"];?></p>
            </div>
        </a>
    </article>
    <?php } ?>


    <!--<a href="" class="more am-text-center am-text-sm am-center">查看更多</a>-->
</section>

<h2 class="bg-title am-text-center am-margin-vertical-0 am-padding-top-xs"><a href="/list-yishengjunxiaobaike.html">益生菌小百科 <span class="checkit black">more</span></a></h2>

<section class="baike am-padding-sm">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>5, "expand_id"=>2, "limit"=>"3", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <article class="am-padding-vertical-sm am-padding-horizontal-xs">
        <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>">
            <div>
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
            </div>

            <div class="am-padding-left-sm">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                <p class="am-margin-vertical-0 am-text-xs description"><?php echo $list["details"];?></p>
            </div>
        </a>
    </article>
    <?php } ?>

    <!--<a href="" class="more am-text-center am-text-sm am-center">查看更多</a>-->
</section>

<h2 class="bg-title am-text-center am-margin-vertical-0 am-padding-top-xs"><a href="/page-jiankangyongciguanxindu.html">健康用词关心度排行榜 <span class="checkit">more</span></a></h2>

<section class="phrase am-padding-sm">

    <ul class="am-avg-sm-3" onclick="location='/page-jiankangyongciguanxindu.html'">
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"Vwords", "order"=>"data_id asc", "limit"=>11));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li class="am-margin-vertical-xs">
            <p class="am-margin-vertical-xs am-text-xs"><span><?php echo $list["data_id"];?></span> <?php echo $list["words"];?></p>
        </li>
        <?php } ?>
    </ul>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>
";s:12:"compile_time";i:1536230060;}";