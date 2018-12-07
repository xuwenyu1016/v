<?php exit;?>0015664535560ed45bfd4d6bd550587b1651c80cef52s:8038:"a:2:{s:8:"template";s:7974:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url('performance');?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong>性能设置</strong>
        </div>
        <div class="panel-body">
           <div class="form-group">
                <div class="label">
                    <label>网站模式</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['DEBUG']){ ?>
                            <label class="button active"><input name="DEBUG" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DEBUG" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 调试模式</label>
                            <?php if (!$info['DEBUG']){ ?>
                            <label class="button active"><input name="DEBUG" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="DEBUG" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 上线模式</label>
                        </div>
                        <div class="input-note">调整为上线模式后所有错误页面将统一处理为404</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">伪静态开关</label>
                </div>
                <div class="field">
                   <div class="button-group button-group-small radio">
                            <?php if ($info['REWRITE_ON']){ ?>
                            <label class="button active"><input name="REWRITE_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="REWRITE_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['REWRITE_ON']){ ?>
                            <label class="button active"><input name="REWRITE_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="REWRITE_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                <div class="input-note">请查看 <a href="#" class="text-main" target="_blank">【URL规则】</a> 说明</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>日志记录</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['LOG_ON']){ ?>
                            <label class="button active"><input name="LOG_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="LOG_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['LOG_ON']){ ?>
                            <label class="button active"><input name="LOG_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="LOG_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">记录网站出错日志</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>API模式</label>
                </div>
                <div class="field">
                        <div class="button-group button-group-small radio">
                            <?php if ($info['API_ON']){ ?>
                            <label class="button active"><input name="API_ON" value="true" checked="checked" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="API_ON" value="true" type="radio">
                            <?php } ?>
                            <span class="icon icon-check"></span> 开启</label>
                            <?php if (!$info['API_ON']){ ?>
                            <label class="button active"><input name="API_ON" checked="checked" value="false" type="radio">
                            <?php }else{ ?>
                            <label class="button"><input name="API_ON" value="false" type="radio">
                            <?php } ?>
                            <span class="icon icon-times"></span> 关闭</label>
                        </div>
                        <div class="input-note">关闭/开启api接口</div>
                    </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>加密KEY</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="SAFE_KEY" name="SAFE_KEY" size="60" datatype="s" value="<?php echo $info["SAFE_KEY"];?>">
                    <div class="input-note">用户外部通讯的加密基准</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>COOKIE前缀</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="SAFE_KEY" name="COOKIE_PREFIX" size="60" datatype="s" value="<?php echo $info["COOKIE_PREFIX"];?>">
                    <div class="input-note">避免多个站点冲突</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>API密钥</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="API_TOKEN" name="API_TOKEN" size="60" datatype="s" value="<?php echo $info["API_TOKEN"];?>">
                    <a class="button bg-main" id="reset" href="javascript:;">重新随机</a>
                    <div class="input-note">api链接的token</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxForm();
        $("#reset").on('click',function(){
            var info = _getRandomString(25);
            $("#API_TOKEN").val(info);
        })
        function _getRandomString(len) {
            len = len || 32;
            var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
            var maxPos = $chars["length"];
            var pwd = '';
            for (i = 0; i < len; i++) {
                pwd += $chars["charAt"](Math.floor(Math.random() * maxPos));
            }
            return pwd;
        }
    });
</script>";s:12:"compile_time";i:1534917556;}";