<?php exit;?>001573122041222519ac6acfc4e49f2deb582b0c95c0s:6396:"a:2:{s:8:"template";s:6332:"<?php $__Template->display("themes/mobile/head"); ?>

<body>

<?php $__Template->display("themes/mobile/header"); ?>

<div data-am-widget="slider" class="am-slider am-slider-c2" data-am-slider='{&quot;directionNav&quot;:false}' >
    <ul class="am-slides">
        <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"bSchoolSlide", "order"=>"ranks asc", "limit"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li>
            <a href="<?php echo $list["link"];?>">
                <img src="<?php echo $list["mobile_slider"];?>">
                <div class="am-slider-desc am-text-sm"><?php echo $list["briefTitle"];?></div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<p class="am-margin-vertical-xs am-text-xs am-padding-horizontal-sm am-padding-top-xs"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?><span> > </span><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

<section class="bschool-time-boxes am-padding-horizontal-sm am-padding-bottom-sm">

    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>"18", "expand_id"=>2, "limit"=>"2", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <a href="<?php echo $list["aurl"];?>">
        <p class="time-box am-margin-0">
            <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
        </p>
        <article>
            <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["details"];?></p>
        </article>
    </a>
    <?php } ?>
</section>

<section class="institute am-padding-bottom-sm">
    <div data-am-widget="tabs" class="am-tabs am-tabs-default">
        <ul class="am-tabs-nav am-cf am-avg-sm-4">
            <li class="am-active"><a href="[data-tab-panel-0]" class="am-text-sm">行业资讯</a></li>
            <li class=""><a href="[data-tab-panel-1]" class="am-text-sm">公司新闻</a></li>
            <li class=""><a href="[data-tab-panel-2]" class="am-text-sm">商学院</a></li>
            <!--<li class=""><a href="[data-tab-panel-3]" class="am-text-sm">V生态优势</a></li>-->
        </ul>
        <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active">
                <article>
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>15, "expand_id"=>2, "limit"=>"15", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["aurl"];?>">
                        <div>
                            <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                        </div>


                        <div class="am-padding-left-sm">
                            <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["details"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo date('Y-m-d',$list["time"]);?></p>
                        </div>
                    </a>
                    <?php } ?>


                </article>

                <a href="/list-hangyezixun.html" class="showMore am-margin-top-sm">查看更多</a>
            </div>
            <div data-tab-panel-1 class="am-tab-panel ">
                <article>
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>16, "expand_id"=>2, "limit"=>"15", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["aurl"];?>">
                        <div>
                            <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                        </div>


                        <div class="am-padding-left-sm">
                            <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["details"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo date('Y-m-d',$list["time"]);?></p>
                        </div>
                    </a>
                    <?php } ?>
                </article>

                <a href="/list-gongsixinwen.html" class="showMore am-margin-top-sm">查看更多</a>
            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
                <article>
                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>17, "expand_id"=>2, "limit"=>"15", "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <a href="<?php echo $list["aurl"];?>">
                        <div>
                            <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                        </div>


                        <div class="am-padding-left-sm">
                            <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["details"];?></p>
                            <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo date('Y-m-d',$list["time"]);?></p>
                        </div>
                    </a>
                    <?php } ?>
                </article>

                <a href="/list-shangxueyuan.html" class="showMore am-margin-top-sm">查看更多</a>
            </div>

        </div>
    </div>

</section>



<?php $__Template->display("themes/mobile/foot"); ?>
";s:12:"compile_time";i:1541586041;}";