<?php exit;?>00156663313759f52416594896271d9970bfe27ea985s:1034:"a:2:{s:8:"template";s:971:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong><?php echo $name;?><?php echo $formInfo["name"];?></strong>
        </div>
        <div class="panel-body">
            <?php echo $html;?>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="fieldset_id" type="hidden" value="<?php echo $formInfo["fieldset_id"];?>">
                <input type="hidden" name="data_id" type="hidden" value="<?php echo $info["data_id"];?>">
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxFormPage();
    });
</script>";s:12:"compile_time";i:1535097137;}";