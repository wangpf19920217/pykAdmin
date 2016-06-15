<style>
  #vld-tooltip {
    position: absolute;
    z-index: 1000;
    padding: 5px 10px;
    background: #F37B1D;
    min-width: 150px;
    color: #fff;
    transition: all 0.15s;
    box-shadow: 0 0 5px rgba(0,0,0,.15);
    display: none;
  }

  #vld-tooltip:before {
    position: absolute;
    top: -8px;
    left: 50%;
    width: 0;
    height: 0;
    margin-left: -8px;
    content: "";
    border-width: 0 8px 8px;
    border-color: transparent transparent #F37B1D;
    border-style: none inset solid;
  }
</style>

<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表单</strong> / <small>form</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs="">
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">基本信息</a></li>
      <li class=""><a href="#tab2">详细描述</a></li>
      <li class=""><a href="#tab3">SEO 选项</a></li>
    </ul>

    <div class="am-tabs-bd" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
      <div class="am-tab-panel am-fade am-active am-in" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">所属类别</div>
          <div class="am-u-sm-10">
            <select>
              <option value="option1">选项一...</option>
              <option value="option2">选项二.....</option>
              <option value="option3">选项三........</option>
            </select>
          </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">显示状态</div>
          <div class="am-u-sm-10">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs am-active">
                <input type="radio" name="options" id="option1"> 正常
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="radio" name="options" id="option2"> 待审核
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="radio" name="options" id="option3"> 不显示
              </label>
            </div>
          </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">推荐类型</div>
          <div class="am-u-sm-10">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="checkbox"> 允许评论
              </label>
              <label class="am-btn am-btn-default am-btn-xs am-active">
                <input type="checkbox"> 置顶
              </label>
              <label class="am-btn am-btn-default am-btn-xs am-active">
                <input type="checkbox"> 推荐
              </label>
              <label class="am-btn am-btn-default am-btn-xs am-active">
                <input type="checkbox"> 热门
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input type="checkbox"> 轮播图
              </label>
            </div>
          </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-2 am-text-right">
            发布时间
          </div>
          <div class="am-u-sm-10">
            <form action="" class="am-form am-form-inline">
              <div class="am-form-group am-form-icon">
                <i class="am-icon-calendar"></i>
                <input type="text" data-am-datepicker class="am-form-field am-input-sm" placeholder="时间">
              </div>
            </form>
          </div>
        </div>

      </div>

      <div class="am-tab-panel am-fade" id="tab2">
        <form class="am-form">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">
              文章标题
            </div>
            <div class="am-u-sm-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-u-sm-6">*必填，不可重复</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">
              文章作者
            </div>
            <div class="am-u-sm-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-u-sm-6">选填</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">
              信息来源
            </div>
            <div class="am-u-sm-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-u-sm-6">选填</div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-2 am-text-right">
              内容摘要
            </div>
            <div class="am-u-sm-4">
              <input type="text" class="am-input-sm">
            </div>
            <div class="am-u-sm-6">不填写则自动截取内容前255字符</div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              内容描述
            </div>
            <div class="am-u-sm-10">
              <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
            </div>
          </div>

        </form>
      </div>

      <div class="am-tab-panel am-fade" id="tab3">
        <form class="am-form">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-4 am-u-end">
              <textarea rows="4"></textarea>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="am-margin">
    <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>

	<ol class="am-breadcrumb">
	  <li><a href="index.php" class="am-icon-home">首页</a></li>
	  <li><a href="#" title="表格表单">分类</a></li>
	  <li class="am-active">input</li>
	</ol>
	<ol>
		<li>
			<h1>表单部分</h1>
		</li>
		<li>
			<h1><legend>显示验证提示信息</legend></h1>
			<form action="" class="am-form" id="doc-vld-msg">
				  <fieldset>
				    <div class="am-form-group">
				      <label for="doc-vld-name-2-1">用户名：</label>
				      <input type="text" id="doc-vld-name-2-1" minlength="3" placeholder="输入用户名（至少 3 个字符）" required/>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-vld-email-2-1">邮箱：</label>
				      <input type="email" id="doc-vld-email-2-1" data-validation-message="自定义提示信息：输入地球上的电子邮箱撒" placeholder="输入邮箱" required/>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-vld-url-2-1">网址：</label>
				      <input type="url" id="doc-vld-url-2-1" placeholder="输入网址" required/>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-vld-age-2-1">年龄：</label>
				      <input type="number" class=""  id="doc-vld-age-2-1" placeholder="输入年龄  18-120" min="18" max="120" required />
				    </div>
				
				    <div class="am-form-group">
				      <label class="am-form-label">爱好：</label>
				      <label class="am-checkbox-inline">
				        <input type="checkbox" value="橘子" name="docVlCb" minchecked="2" maxchecked="4" required> 橘子
				      </label>
				      <label class="am-checkbox-inline">
				        <input type="checkbox" value="苹果" name="docVlCb"> 苹果
				      </label>
				      <label class="am-checkbox-inline">
				        <input type="checkbox" value="菠萝" name="docVlCb"> 菠萝
				      </label>
				      <label class="am-checkbox-inline">
				        <input type="checkbox" value="芒果" name="docVlCb"> 芒果
				      </label>
				      <label class="am-checkbox-inline">
				        <input type="checkbox" value="香蕉" name="docVlCb"> 香蕉
				      </label>
				    </div>
				
				    <div class="am-form-group">
				      <label>性别： </label>
				      <label class="am-radio-inline">
				        <input type="radio"  value="" name="docVlGender" required> 男
				      </label>
				      <label class="am-radio-inline">
				        <input type="radio" name="docVlGender"> 女
				      </label>
				      <label class="am-radio-inline">
				        <input type="radio" name="docVlGender"> 其他
				      </label>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-select-1-1">下拉单选框</label>
				      <select id="doc-select-1-1" required>
				        <option value="">-=请选择一项=-</option>
				        <option value="option1">选项一...</option>
				        <option value="option2">选项二.....</option>
				        <option value="option3">选项三........</option>
				      </select>
				      <span class="am-form-caret"></span>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-select-2-1">多选框</label>
				      <select multiple class="" id="doc-select-2-1" minchecked="2" maxchecked="4">
				        <option>1</option>
				        <option>2</option>
				        <option>3</option>
				        <option>4</option>
				        <option>5</option>
				      </select>
				    </div>
				
				    <div class="am-form-group">
				      <label for="doc-vld-ta-2-1">评论：</label>
				      <textarea id="doc-vld-ta-2-1" minlength="10" maxlength="100"></textarea>
				    </div>
				
				    <button class="am-btn am-btn-secondary" type="submit">提交</button>
				  </fieldset>
				</form>
		</li>
				
				
				<li>
					<form action="" class="am-form" id="form-with-tooltip">
						  <fieldset>
						    <legend>定义 Tooltip</legend>
						    <div class="am-form-group">
						      <label for="doc-vld-name-2-0">用户名：</label>
						      <input type="text" id="doc-vld-name-2-0" minlength="3"
						             placeholder="输入用户名（至少 3 个字符）" required/>
						    </div>
						
						    <div class="am-form-group">
						      <label for="doc-vld-pwd-1-0">密码：</label>
						      <input type="password" id="doc-vld-pwd-1-0" placeholder="6 位数字的银行卡密码" pattern="^\d{6}$" required data-foolish-msg="把 IQ卡密码交出来！"/>
						    </div>
						
						    <button class="am-btn am-btn-secondary" type="submit">提交</button>
						  </fieldset>
						</form>
				</li>
				<li>
					<h1>验证状态的类</h1>
					<form class="am-form">
					  <div class="am-form-group am-form-success am-form-icon am-form-feedback">
					    <input type="text" class="am-form-field" placeholder="验证成功">
					    <span class="am-icon-check"></span>
					  </div>
					  <div class="am-form-group am-form-warning am-form-icon am-form-feedback">
					    <input type="text" class="am-form-field" placeholder="验证警告">
					    <span class="am-icon-warning"></span>
					  </div>
					  <div class="am-form-group am-form-error am-form-icon am-form-feedback">
					    <input type="text" class="am-form-field" placeholder="验证失败">
					    <span class="am-icon-times"></span>
					  </div>
					</form>
				</li>
				<li>
					<h1>小徽章</h1>
					<span class="am-badge">1</span>
					<span class="am-badge am-badge-primary">2</span>
					<span class="am-badge am-badge-secondary">3</span>
					<span class="am-badge am-badge-success">4</span>
					<span class="am-badge am-badge-warning">5</span>
					<span class="am-badge am-badge-danger">6</span>
					<span class="am-badge am-badge-success">Allmobilize</span>
					<br>
					<a class="am-badge am-badge-primary am-round">Free</a>
					<a class="am-badge am-badge-secondary am-round">Secondary</a>
					<a class="am-badge am-badge-success am-radius">Success</a>
					<a class="am-badge am-badge-warning am-radius">Warning</a>
					<a class="am-badge am-badge-danger">Danger</a>
				</li>
				<li>
					<h1>上传控件</h1>
					<div class="am-form-group am-form-file"><button type="button" class="am-btn am-btn-default am-btn-sm"><i class="am-icon-cloud-upload"></i> 选择要上传的文件</button> <input type="file" multiple="multiple"></div>
				</li>
				<li>
					<label class="am-checkbox am-secondary">
				  <input type="checkbox" value="" data-am-ucheck> 没有选中
				</label>
				<label class="am-checkbox am-secondary">
				  <input type="checkbox" checked="checked" value="" data-am-ucheck checked>
				  已选中
				</label>
				
				<label class="am-radio am-secondary">
				  <input type="radio" name="radio3" value="" data-am-ucheck> 未选中
				</label>
				<label class="am-radio am-secondary">
				  <input type="radio" name="radio3" value="" data-am-ucheck checked> 已选中
				</label>
				
				<p>下面的例子<code>minchecked="2" maxchecked="4"</code> 属性来控制多选</p>
					<form class="am-form" data-am-validator>
					  <div class="am-form-group">
					    <h3>装备<sup class="am-text-danger">*</sup> （至少 2 项，至多 4 项）</h3>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="ip" data-am-ucheck required minchecked="2" maxchecked="4"> iPhone
					    </label>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="im" data-am-ucheck> iMac
					    </label>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="mbp" data-am-ucheck> Macbook Pro
					    </label>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="sf" data-am-ucheck> 苏菲·麻索
					    </label>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="sur" data-am-ucheck> Surface
					    </label>
					    <label class="am-checkbox">
					      <input type="checkbox" name="cbx" value="rb" data-am-ucheck> Razer Blade
					    </label>
					  </div>
					
					  <div class="am-form-group">
					    <h3>性别 <sup class="am-text-danger">*</sup></h3>
					    <label class="am-radio">
					      <input type="radio" name="radio10" value="male" data-am-ucheck required> 男
					    </label>
					    <label class="am-radio">
					      <input type="radio" name="radio10" value="female" data-am-ucheck> 女
					    </label>
					    <label class="am-radio">
					      <input type="radio" name="radio10" value="pig" data-am-ucheck> 人妖
					    </label>
					    <div>
					      <div><button type="submit" class="am-btn am-btn-primary">提交</button></div>
					</form>
				</li>
			</ul>
	</ol>
</div>
<script src="../../../../../pykAdminTest/Amazeui/assets/js/jquery.min.js"></script>
<script src="../../../../../pykAdminTest/amazeui-master/dist/js/amazeui.js"></script>
<script>
	$(function() {
	  $('#doc-vld-msg').validator({
	    onValid: function(validity) {
	      $(validity.field).closest('.am-form-group').find('.am-alert').hide();
	    },
	    onInValid: function(validity) {
	      var $field = $(validity.field);
	      var $group = $field.closest('.am-form-group');
	      var $alert = $group.find('.am-alert');
	      // 使用自定义的提示信息 或 插件内置的提示信息
	      var msg = $field.data('validationMessage') || this.getValidationMessage(validity);
	
	      if (!$alert.length) {
	        $alert = $('<div class="am-alert am-alert-danger"></div>').hide().
	          appendTo($group);
	      }
	
	      $alert.html(msg).show();
	    }
	  });
	});
</script>
————————————————————————————————————————————————————————————————————————
<script>
	$(function() {
	  var $form = $('#form-with-tooltip');
	  var $tooltip = $('<div id="vld-tooltip">提示信息！</div>');
	  $tooltip.appendTo(document.body);
	
	  $form.validator();
	
	  var validator = $form.data('amui.validator');
	
	  $form.on('focusin focusout', '.am-form-error input', function(e) {
	    if (e.type === 'focusin') {
	      var $this = $(this);
	      var offset = $this.offset();
	      var msg = $this.data('foolishMsg') || validator.getValidationMessage($this.data('validity'));
	
	      $tooltip.text(msg).show().css({
	        left: offset.left + 10,
	        top: offset.top + $(this).outerHeight() + 10
	      });
	    } else {
	      $tooltip.hide();
	    }
	  });
	});
</script>