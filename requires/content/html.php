<!--栅格化 与 适配-->
/*布局页面元素相关*/
<div class="admin-content am-padding">
	<div class="am-topbar-collapse am-collapse" id="topbar-collapse" style="height: 20px;">
		<div class="am-sticky-placeholder" style="height: 0px; margin: 0px;">
			<nav class="scrollspy-nav" style="right: 0px; margin: 0px;" data-am-scrollspy-nav="{className: {active: 'am-active'}}" data-am-sticky="">
				<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right ">
					<li class="">
						<a href="#about" class="am-active">
							关于棉花糖
						</a>
					</li>
					<li class="">
						<a href="#team" class="">
							成员介绍
						</a>
					</li>
					<li class="">
						<a href="#ep" class="">
							首张 EP
						</a>
					</li>
					<li class="">
						<a href="#second" class="">
							再见王子
						</a>
					</li>
					<li class="">
						<a href="#tubiao">
							第三张
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<ol>
		<li>
			<h1>回复/评论</h1>
			<ul class="am-comments-list admin-content-comment">
              <li class="am-comment">
                <a href="#"><img src="http://amui.qiniudn.com/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>遵循 “移动优先（Mobile First）”、“渐进增强（Progressive enhancement）”的理念，可先从移动设备开始开发网站，逐步在扩展的更大屏幕的设备上，专注于最重要的内容和交互，很好。</p>
                  </div>
                </div>
              </li>

              <li class="am-comment">
                <a href="#"><img src="http://amui.qiniudn.com/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>有效减少为兼容旧浏览器的臃肿代码；基于 CSS3 的交互效果，平滑、高效。AMUI专注于现代浏览器（支持HTML5），不再为过时的浏览器耗费资源，为更有价值的用户提高更好的体验。</p>
                  </div>
                </div>
              </li>

            </ul>
		</li>
		<li id="tubiao">
			<h1>小图标</h1>
			Amaze UI Icon 组件目前使用了 <a href="http://fontawesome.io/icons/" class="external-link" target="_blank">Font Awesome</a>（Amaze UI 2.2.0 中升级至 4.3.0），涵盖除部分国内社交网站图标以外的其他常见图标。<br />
			<a href="##" class="am-icon-btn am-icon-twitter"></a>
			<a href="##" class="am-icon-btn am-icon-facebook"></a>
			<a href="##" class="am-icon-btn am-icon-github"></a>
			<a href="##" class="am-icon-btn am-primary am-icon-qq"></a>
			<a href="##" class="am-icon-btn am-secondary am-icon-drupal"></a>
			<a href="##" class="am-icon-btn am-success am-icon-shield"></a>
			<a href="##" class="am-icon-btn am-warning am-icon-warning"></a>
			<a href="##" class="am-icon-btn am-danger am-icon-youtube"></a><br /><br />
			<i class="am-icon-qq am-icon-fw"></i>QQ
			<i class="am-icon-skype am-icon-fw"></i>Skype
			<i class="am-icon-github am-icon-fw"></i>GitHub
			<i class="am-icon-cc-amex am-icon-fw"></i>Amex<br /><br />
			<i class="am-icon-spinner am-icon-spin"></i>
			<i class="am-icon-refresh am-icon-spin"></i>
			<i class="am-icon-circle-o-notch am-icon-spin"></i>
			<i class="am-icon-cog am-icon-spin"></i>
			<i class="am-icon-gear am-icon-spin"></i><br />
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
			<a class="am-badge am-badge-primary">Free</a>
			<a class="am-badge am-badge-secondary">Secondary</a>
			<a class="am-badge am-badge-success">Success</a>
			<a class="am-badge am-badge-warning">Warning</a>
			<a class="am-badge am-badge-danger">Danger</a>
		</li>
	</ol>
	
	
	<ol>
		<li id="about">
			<h1>
				搭建一个基于amaze的模板搭建
			</h1>
			<p class="help" title="结构已经在html文件夹中分割出来了">
				满足基本需求可以查看html文件里的结构
			</p>
		</li>
		<li>
			<h2>
				栅格与适配
			</h2>
				<p>
					<h1>amaze与bootstrop都是以12格来分布一整行的样式, 在栅格的时候用 am-avg-sm-12 来表示栅格</h1>
					<br />
				</p>
				例子：一行被分为12份 -  此时调整浏览器宽度 查看栅格效果
				<blockquote>
					<ul class="am-avg-sm-4 am-avg-md-6 am-avg-lg-12">
						<?php
							for ($x=1; $x<=12; $x++) {
							  echo "<li>$x</li>";
							} 	
						?>
					</ul>
				</blockquote>
		</li>
		<li>
			<h1>基于上述类名  可以作为框架的基础 整个网页就如同一个12格的<b>table</b>了</h1>
			<p>
					<bdo dir="rtl"><br />
						了位占素元子划规始开 后式格好配分口窗定指接直者或素元父此至：注&nbsp;&nbsp;&nbsp;&nbsp;
					</bdo>
				<br />
				无论是手机端 移动端或是平板 都可以基于am-ave-x-n 来搭建结构 实现适配
				<br />
				<mark>
					<h3>
						基于不规则的排列  如何对子元素进行栅格后的排列？
					</h3>
					<b>使用时需在外围容器上添加 【.am-g】 class，在列上添加 .am-u-[sm|md|lg]-[1-12] class，然后根据不同的屏幕需求设置不同的宽度</b>
				</mark>
				<table class="am-table am-table-bordered am-table-striped">
						<thead>
							<tr>
								<th style="width:160px">
									Class
								</th>
								<th>
									区间
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<code>.am-avg-sm-*</code>
								</td>
								<td>
									<code>0 - 640px 移动设备</code>
								</td>
							</tr>
							<tr>
								<td>
									<code>.am-avg-md-*</code>
								</td>
								<td>
									<code>641px - 1024px 平板或宽屏设备</code>
								</td>
							</tr>
							<tr>
								<td>
									<code>.am-avg-lg-*</code>
								</td>
								<td>
									<code>1025px + pc及其他大屏幕</code>
								</td>
							</tr>
						</tbody>
					</table>
				<br />
				如: 手机版header 需求：【后退          皮影客         用户】
				<br />
				<header class="am-g">
					<a class="am-u-sm-2" style="background: red;">
						后退
					</a>
					<a href=""  class="am-u-sm-8"    style="background: blue;">
						<h1>
							皮影客
						</h1>
					</a>
					<a class="am-u-sm-2"  style="background: green;">
						用户
					</a>
				</header>
				<p>注：其实就是设置一个百分比  写入不同的类名名下  赋予html标签</p>
			</p>
		</li>
		
		<li>
			<h1>不同区间不同的划分比例</h1>
			<p>下面的示例中，sm 区间两列是等分的，md 区间为 1:2 划分，lg 区间为 1:3。</p>
			<div class="am-g doc-am-g am-g-fixed" title="实现css3的媒体查询功能 完成适配各种终端  样式的改变">
			  <div class="am-u-sm-6 am-u-md-4 am-u-lg-3" style="background: red;">sm-6 md-4 lg-3</div>
			  <div class="am-u-sm-6 am-u-md-8 am-u-lg-9" style="background: blue;">sm-6 md-8 lg-9</div>
			</div>
		</li>
		
		<li>
			<h1>不足 12 份的网格</h1>

			网格拆分时使用了非整数的百分比，浏览器在计算的时候会有一些差异，
			最终所有列的宽度和可能没有达到 100%，导致网格右侧会有很小的空隙。
			因此，向右浮动最后一列，以填满行的右边（如下面示例中的第一行）。
.			<i>实际使用中，如果行的网格数不足 12，需要在最后一列上添加 .am-u-end</i>。
			<br />
			示例 ：不足 12 份的网格
			<!-- 未添加 .am-u-end 的情形 -->
			<div class="am-g">
			  <div class="am-u-sm-3">3</div>
			  <div class="am-u-sm-3">3</div>
			  <div class="am-u-sm-3">3</div>
			</div>
			
			<!-- 添加 .am-u-end 后 -->
			<div class="am-g">
			  <div class="am-u-sm-3">3</div>
			  <div class="am-u-sm-3">3</div>
			  <div class="am-u-sm-3 am-u-end">3</div>
			</div>
			<b>
				至此，网格的基本使用就介绍完了。可以满足需求 了<br />
				更多辅助类型 详见<a target="_blank" href="http://amazeui.org/css/utility#%E5%93%8D%E5%BA%94%E5%BC%8F%E8%BE%85%E5%8A%A9?_ver=2.x">妹子UI——Utility</a>
			</b>
		</li>
	</ol>
	<hr />
	
</div>