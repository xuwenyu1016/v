<?php exit;?>00156760097832b9fc6dfd50b436930738cebf8d54b8s:1293:"a:2:{s:8:"template";s:1229:"<div class="am-margin-top-sm sidebar-box">
    <div class="am-text-center am-text-lg"><b>近期文章</b></div>
    <div class="pl">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"15,16,17,5,13,14", "image"=>"true", "limit"=>"3"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <ul class="am-avg-md-2 am-margin-vertical-sm">
            <li class="am-padding-right-xs am-padding-vertical-xs">
                <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>">
                    <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" />
                </a>
            </li>
            <li class="am-padding-vertical-xs">
                <a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>" class="am-link-muted">
                    <p class="am-text-sm am-text-truncate am-margin-top-xs am-margin-bottom-0"><?php echo $list["title"];?></p>
                    <p class="description am-text-xs am-margin-top-0 am-margin-bottom-xs"><?php echo $list["description"];?></p>
                </a>
            </li>
        </ul>
        <?php } ?>
    </div>
</div>";s:12:"compile_time";i:1536064978;}";