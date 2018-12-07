<?php exit;?>001567765026b0e79b2596cfe11646dbf1b435c3eb5ds:742:"a:2:{s:8:"template";s:679:"<section class="pros-body am-padding-bottom-xl">
    <div class="am-container am-padding-xl">

        <h2>健康用词关心度排行榜</h2>

        <ul class="am-avg-sm-3 am-padding-top-sm am-padding-horizontal-lg concerns-rankings">
            <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"Vwords", "order"=>"data_id asc", "limit"=>11));  if(is_array($listList)) foreach($listList as $list){ ?>
            <li><p><span><?php echo $list["data_id"];?></span> <?php echo $list["words"];?></p></li>
            <?php } ?>
            <!--<li><p><span>12</span> more</p></li>-->
        </ul>
    </div>
</section>";s:12:"compile_time";i:1536229026;}";