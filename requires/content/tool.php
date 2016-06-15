<!-- tool 插件-->
<div class="admin-content am-padding">
	<ol>
		<li>
			<h1>
				Cookie 
			</h1>
			操作方法封装，via Nicholas C. Zakas。
			<br />调用接口：<code>$.AMUI.utils.cookie</code>。<br />
			<blockquote>
				cookie.set(name, value, expires, path, domain, secure) - 设置 cookie；<br />
				cookie.get(name) - 获取 cookie；<br />
				cookie.unset(name, path, domain, secure) - 删除 cookie
			</blockquote>
			
		</li>
		<li>
			<div class="am-input-group">
			  <input type="text" class="am-form-field" id="doc-qr-text">
			      <span class="am-input-group-btn">
			        <button class="am-btn am-btn-default" type="button" id="doc-gen-qr">生成</button>
			      </span>
			</div>
			<div id="doc-qrcode" style="margin-top: 5px;" class="am-text-center"></div>
		</li>
		<li>
			<h1>
				FastClick 移动端防止click延迟
			</h1>
			<code>
				$(function() {<br />
				  $.AMUI.FastClick.attach(document.body);<br />
				});
			</code>
		</li>
	</ol>
</div>
<?php
	include_once('requires/html/javascript.php');
?>	
<script>
  $(function() {
    var $input = $('#doc-qr-text');
    $qr = $('#doc-qrcode');

    function makeCode(text) {
      $qr.empty().qrcode(text);
    }

    $input.val(location.href);
    makeCode(location.href);

    $('#doc-gen-qr').on('click', function() {
      makeCode($input.val());
    });

    $input.on('focusout', function() {
      makeCode($input.val());
    });
  });
</script>