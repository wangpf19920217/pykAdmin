<!--js相关-->
/*
Amaze UI JS 插件，使用注意事项，以及 JS 插件介绍。*/
<?php
	include_once('requires/html/javascript.php');
?>
<div class="admin-content am-padding">
	<h1>
		注：部分需要JS调用 或回调处理交互 请酌情处理
	</h1>
	<ol>
		<li>
			<h1 class="help" title="注意溢出隐藏 overflow：hidden 会被遮罩">上拉下拉菜单<i class="am-text-danger">  注：元素展开是悬浮状态不占位 父元素注意不要溢出隐藏</i> </h1>
			 <div class="am-dropdown" data-am-dropdown>
			    <button class="am-btn am-btn-secondary am-dropdown-toggle" data-am-dropdown-toggle> <span class="am-icon-caret-down"></span></button>
			    <ul class="am-dropdown-content">
			      <li class="am-dropdown-header">标题</li>
			      <li><a href="#">快乐的方式不只一种</a></li>
			      <li class="am-active"><a href="#">最荣幸是</a></li>
			      <li><a href="#">谁都是造物者的光荣</a></li>
			      <li class="am-disabled"><a href="#">就站在光明的角落</a></li>
			      <li class="am-divider"></li>
			      <li><a href="#">天空海阔 要做最坚强的泡沫</a></li>
			    </ul>
			  </div>
		</li>
		<li>
			<h1>
				按钮<i class="am-text-danger">可根据状态判断执行结果</i> 
			</h1>
			<button type="button" class="am-btn am-btn-primary btn-loading-example">提交等待</button>
			<button type="button" class="am-btn am-btn-primary btn-loading-example" data-am-loading="{spinner: 'circle-o-notch', loadingText: '加载中...', resetText: '加载过了'}">加载</button>
			<button id="doc-single-toggle" type="button" class="am-btn am-btn-primary" data-am-button>选中/未选中</button>
			<code><br />	JS代码：<br />
				$('.btn-loading-example').click(function () {
				  var $btn = $(this)
				  $btn.button('loading');
				    setTimeout(function(){
				      $btn.button('reset');
				  }, 5000);
				});
			</code>
		</li>
		<li>
			<h1>折叠菜单</h1>
			<div class="am-panel-group" id="accordion">
			  <div class="am-panel am-panel-default">
			    <div class="am-panel-hd">
			      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
			        	切换1
			      </h4>
			    </div>
			    <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
			      <div class="am-panel-bd">
			     		   切换1
			      </div>
			    </div>
			  </div>
			  
			  <div class="am-panel am-panel-default">
			    <div class="am-panel-hd">
			      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">
			      		切换2
			      </h4>
			    </div>
			    <div id="do-not-say-2" class="am-panel-collapse am-collapse">
			      <div class="am-panel-bd">
			        	切换2
			      </div>
			    </div>
			  </div>
			</div>
			<br />
				<h2>展开控制器  <code class="help" title="标签元素上加入这段代码 找到相对应的元素">data-am-collapse="{target: '#collapse-nav'}"</code></h2>
			<button class="am-btn am-btn-primary" data-am-collapse="{target: '#company-nav'}">页面部分 <i class="am-icon-bars"></i></button>
			<button class="am-btn am-btn-primary" data-am-collapse="{target: '#company-nav1'}">表格表单 <i class="am-icon-bars"></i></button>
			<br />js调用
			<code><br />
			$('#company-nav').on('open.collapse.amui', function() {<br />
				  console.log('页面部分打开了！');<br />
				}).on('close.collapse.amui', function() {<br />
				  console.log('页面部分关闭了！');<br />
				});
			</code>
		</li>
		<li>
			<h1>Modal弹出层</h1>
			Modal 交互窗口，可以用来模拟浏览器的 alert、confirm、prompt 窗口 <br />
			<button
			  type="button"
			  class="am-btn am-btn-primary"
			  data-am-modal="{target: '#my-alert'}">
			  Alert
			</button>
			
			<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
			  <div class="am-modal-dialog">
			    <div class="am-modal-hd">Amaze UI</div>
			    <div class="am-modal-bd">
			      Hello world！
			    </div>
			    <div class="am-modal-footer">
			      <span class="am-modal-btn">确定</span>
			    </div>
			  </div>
			</div>
			
			<button
			  type="button"
			  class="am-btn am-btn-warning"
			  id="doc-confirm-toggle">
			  Confirm
			</button>
			<div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
			  <div class="am-modal-dialog">
			    <div class="am-modal-hd">Amaze UI</div>
			    <div class="am-modal-bd">
			      你，确定要删除这条记录吗？
			    </div>
			    <div class="am-modal-footer">
			      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
			      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
			    </div>
			  </div>
			</div>
			
			<button
			  type="button"
			  class="am-btn am-btn-success"
			  id="doc-prompt-toggle">
			  Prompt
			</button>
			
			<div class="am-modal am-modal-prompt" tabindex="-1" id="my-prompt">
			  <div class="am-modal-dialog">
			    <div class="am-modal-hd">Amaze UI</div>
			    <div class="am-modal-bd">
			      来来来，吐槽点啥吧
			      <input type="text" class="am-modal-prompt-input">
			    </div>
			    <div class="am-modal-footer">
			      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
			      <span class="am-modal-btn" data-am-modal-confirm>提交</span>
			    </div>
			  </div>
			</div>
			<button
			  type="button"
			  class="am-btn am-btn-secondary"
			  data-am-modal="{target: '#my-actions'}">
			  Actions
			</button>
			
			<div class="am-modal-actions" id="my-actions">
			  <div class="am-modal-actions-group">
			    <ul class="am-list">
			      <li class="am-modal-actions-header">底部弹窗</li>
			      <li><a href="#"><span class="am-icon-wechat"></span> 1.</a></li>
			      <li class="am-modal-actions-danger">
			        <a href="#"><i class="am-icon-twitter"></i> 2.</a>
			      </li>
			    </ul>
			  </div>
			  <div class="am-modal-actions-group">
			    <button class="am-btn am-btn-secondary am-btn-block" data-am-modal-close>取消</button>
			  </div>
			</div>
		</li>
		<li>
			<h1>悬浮提示</h1>
			<button class="am-btn am-btn-success"
		        data-am-popover="{content: '鄙是点击 Hover 显示的 Popover', trigger: 'hover focus'}">
		  划过 显示 Popover
		</button>
			<button class="am-btn am-btn-danger" id="my-popover">点击通过js</button>
		</li>
		<li>
			<h1>滚动监听</h1><i>请审查元素查看</i>
			<div class="doc-example"><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-primary am-scrollspy-init" data-am-scrollspy="{animation: 'fade'}"><div class="am-panel-hd">Fade</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3 am-u-md-offset-4 am-u-lg-offset-3"><div class="am-panel am-panel-secondary am-scrollspy-init" data-am-scrollspy="{animation: 'scale-up'}"><div class="am-panel-hd">Scale-up</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3 am-u-md-offset-8 am-u-lg-offset-6"><div class="am-panel am-panel-success am-scrollspy-init" data-am-scrollspy="{animation: 'scale-down'}"><div class="am-panel-hd">Scale-down</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3 am-u-md-offset-8 am-u-lg-offset-9"><div class="am-panel am-panel-warning am-scrollspy-init am-scrollspy-inview am-animation-slide-top" data-am-scrollspy="{animation: 'slide-top'}"><div class="am-panel-hd">Slide Top</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3 am-u-md-offset-8 am-u-lg-offset-6"><div class="am-panel am-panel-danger am-scrollspy-init am-scrollspy-inview am-animation-slide-bottom" data-am-scrollspy="{animation: 'slide-bottom'}"><div class="am-panel-hd">Slide Bottom</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3 am-u-md-offset-4 am-u-lg-offset-3"><div class="am-panel am-panel-primary am-scrollspy-init am-scrollspy-inview am-animation-slide-right" data-am-scrollspy="{animation: 'slide-right'}"><div class="am-panel-hd">Slide Right</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-secondary am-scrollspy-init am-scrollspy-inview am-animation-slide-left" data-am-scrollspy="{animation: 'slide-left'}"><div class="am-panel-hd">Slide Left</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div><div class="am-g"><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-success" data-am-scrollspy="{animation: 'fade'}"><div class="am-panel-hd">Fade</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-warning" data-am-scrollspy="{animation: 'fade', delay: 300}"><div class="am-panel-hd">Fade delay: 300</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-danger" data-am-scrollspy="{animation: 'fade', delay: 600}"><div class="am-panel-hd">Fade delay: 600</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div><div class="am-u-sm-12 am-u-md-4 am-u-lg-3"><div class="am-panel am-panel-primary" data-am-scrollspy="{animation: 'fade', delay: 900}"><div class="am-panel-hd">Fade delay: 900</div><div class="am-panel-bd">生命是一团欲望，欲望不满足便痛苦，满足便无聊。人生就在痛苦和无聊之间摇摆。——叔本华</div></div></div></div></div>
		</li>
		<li>
			<h1>触顶悬浮</h1>
			<div data-am-sticky="{top:10}">
			  <button class="am-btn am-btn-primary am-btn-block">Stick to top</button>
			</div>
		</li>
		<li>
			<h1>进度条事件</h1>
				<button id="np-s" class="am-btn am-btn-primary">$.AMUI.progress.start();</button>
				<button id="np-d" class="am-btn am-btn-success">$.AMUI.progress.done();</button>
		</li>
		<li>
			<h1>无需js图片轮播</h1><a href="http://amazeui.org/javascript/slider">参数相关：http://amazeui.org/javascript/slider</a>
			<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
			  <ul class="am-slides">
			    <li><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
			    <li><img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
			  </ul>
			</div>
			<div
			  class="am-slider am-slider-default"
			  data-am-flexslider="{controlNav: 'thumbnails', directionNav: false, slideshow: false}">
			  <ul class="am-slides">
			    <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			      <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			      <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			      <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			      <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			      <li data-thumb="http://s.amazeui.org/media/i/demos/pure-4.jpg?imageView2/0/w/360">
			      <img src="http://s.amazeui.org/media/i/demos/pure-4.jpg" /></li>
			  </ul>
			</div>
		</li>
		<li>
			<h1>
				侧边栏触发器
			</h1>
			<a href="#doc-oc-demo1" data-am-offcanvas>点击显示侧边栏 不占位</a>
			<!-- 侧边栏内容 -->
			<div id="doc-oc-demo1" class="am-offcanvas">
			  <div class="am-offcanvas-bar">
			    <div class="am-offcanvas-content">
			      <p>
			        这里是内容 
			      </p>
			    </div>
			  </div>
			</div>
			
			<!-- 按钮触发器， 需要指定 target -->
		<button class="am-btn am-btn-primary" data-am-offcanvas="{target: '#doc-oc-demo2', effect: 'push'}">点击显示侧边栏 占位</button>

			<!-- 侧边栏内容 -->
			<div id="doc-oc-demo2" class="am-offcanvas">
			  <div class="am-offcanvas-bar">
			    <div class="am-offcanvas-content">
			      <p>
			        我不愿让你一个人 <br/>
			        承受这世界的残忍 <br/>
			        我不愿眼泪陪你到 永恒
			      </p>
			    </div>
			  </div>
			</div>
		</li>
		
		<li>
			<h1>日历组件</h1>
			<p>基本形式
				在 input 上增加 data-am-datepicker 属性，调用日期插件。</p>
			<form action="" class="am-form" data-am-validator>
			  <p>
			  <input type="text" class="am-form-field" placeholder="日历组件" data-am-datepicker readonly required />
			  </p>
			</form>
		</li>
		<li>
			<h1>下拉选择</h1>
			<select data-am-selected>
			  <option value="a">Apple</option>
			  <option value="b" selected>Banana</option>
			  <option value="o">Orange</option>
			  <option value="m">Mango</option>
			  <option value="d" disabled>禁用鸟</option>
			</select>
			<select multiple data-am-selected data-am-selected="{maxHeight: 100}">
			  <optgroup label="水果">
			    <option value="a">Apple</option>
			    <option value="b">Banana</option>
			    <option value="o">Orange</option>
			    <option value="m">Mango</option>
			  </optgroup>
			  <optgroup label="装备">
			    <option value="phone">iPhone</option>
			    <option value="im">iMac</option>
			    <option value="mbp">Macbook Pro</option>
			  </optgroup>
			</select>
			
		</li>
		<li>
			<h1>tab切换</h1>
			<div class="am-tabs" data-am-tabs>
			  <ul class="am-tabs-nav am-nav am-nav-tabs">
			    <li class="am-active"><a href="#tab1">恣意</a></li>
			    <li><a href="#tab2">等候</a></li>
			    <li><a href="#tab3">流浪</a></li>
			  </ul>
			
			  <div class="am-tabs-bd">
			    <div class="am-tab-panel am-fade am-in am-active" id="tab1">
			      置身人群中<br>你只需要被淹没 享受 沉默<br>退到人群后<br>你只需给予双手 微笑 等候
			    </div>
			    <div class="am-tab-panel am-fade" id="tab2">
			      走在忠孝东路<br>徘徊在茫然中<br>在我的人生旅途<br>选择了多少错误<br>我在睡梦中惊醒<br>感叹悔言无尽<br>恨我不能说服自己<br>接受一切教训<br>让生命去等候<br>等候下一个漂流<br>让生命去等候<br>等候下一个伤口
			    </div>
			    <div class="am-tab-panel am-fade" id="tab3">
			      我就这样告别山下的家，我实在不愿轻易让眼泪留下。我以为我并不差不会害怕，我就这样自己照顾自己长大。我不想因为现实把头低下，我以为我并不差能学会虚假。怎样才能够看穿面具里的谎话？别让我的真心散的像沙。如果有一天我变得更复杂，还能不能唱出歌声里的那幅画？
			    </div>
			  </div>
			</div>
			版本2 js调用 <code> $('#doc-my-tabs').tabs();</code><br />
			<div class="am-tabs" id="doc-my-tabs">
			  <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
			    <li class="am-active"><a href="">彩虹</a></li>
			    <li><a href="">画面</a></li>
			    <li><a href="">窗外</a></li>
			  </ul>
			  <div class="am-tabs-bd">
			    <div class="am-tab-panel am-active">彩虹...</div>
			    <div class="am-tab-panel">画面...</div>
			    <div class="am-tab-panel">窗外...</div>
			  </div>
			</div>
		</li>
	</ol>		
</div>
	<script type="text/javascript">
		//2.js
		$('.btn-loading-example').click(function () {
		  var $btn = $(this)
		  $btn.button('loading');
		    setTimeout(function(){
		      $btn.button('reset');
		  }, 5000);
		});
		
		//展开控制器js
		$('#company-nav').on('open.collapse.amui', function() {
		  console.log('页面部分打开了！');
		}).on('close.collapse.amui', function() {
		  console.log('页面部分关闭了！');
		});
		
		//4.js
		$(function() {
		  $('#doc-modal-list').find('.am-icon-close').add('#doc-confirm-toggle').
		    on('click', function() {
		      $('#my-confirm').modal({
		        relatedTarget: this,
		        onConfirm: function(options) {
		          var $link = $(this.relatedTarget).prev('a');
		          var msg = $link.length ? '你要删除的链接 ID 为 ' + $link.data('id') :
		            '确定了，但不知道要整哪样';
		          alert(msg);
		        },
		        // closeOnConfirm: false,
		        onCancel: function() {
		          alert('算求，不弄了');
		        }
		      });
		    });
		    $('#doc-prompt-toggle').on('click', function() {
			    $('#my-prompt').modal({
			      relatedTarget: this,
			      onConfirm: function(e) {
			        alert('你输入的是：' + e.data || '')
			      },
			      onCancel: function(e) {
			        alert('不想说!');
			      }
			    });
			  });
			  
			  // 悬浮提示 6.js
			  $('#my-popover').popover({
			    content: '悬浮提示'
			  })
			  // 7.js 
			  var progress = $.AMUI.progress;

			  $('#np-s').on('click', function() {
			   	 progress.start();
			  });
			
			  $('#np-d').on('click', function() {
			    progress.done();
			  });
			  //tab切换
			   $('#doc-my-tabs').tabs();
		});
</script>