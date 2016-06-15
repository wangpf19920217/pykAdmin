<div class="am-cf admin-main">
	<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
		<div class="am-offcanvas-bar admin-offcanvas-bar">
			<ul class="am-list admin-sidebar-list" id="collapase-nav-1">
				<li>
					<a  href="index.php">
						<span class="am-icon-institution">
						</span> 首页
					</a>
				</li>
				
				<li class="am-panel">
					<a data-am-collapse="{parent: '#collapase-nav-1', target: '#company-nav'}">
						<span class="am-icon-file">
						</span> 页面部分
						<span class="am-icon-angle-right am-fr am-margin-right">
						</span>
					</a>
					<ul class="am-list am-collapse admin-sidebar-sub" id="company-nav">
						<li>
							<a href="html.php" class="am-cf">
								html
							</a>
						</li>
						<li>
							<a href="css.php" class="am-cf">
								css
							</a>
						</li>
						<li>
							<a href="tool.php" class="am-cf">
								工具
							</a>
						</li>
						<li>
							<a href="js.php" class="am-cf">
								js组件
							</a>
						</li>
						<li>
							<a href="requires/content/package/index.php" class="am-cf">
								第三方组件
							</a>
						</li>
					</ul>
				</li>
				<li class="am-panel">
					<a data-am-collapse="{parent: '#collapase-nav-1', target: '#company-nav1'}">
						<span class="am-icon-th-list">
						</span> 表格表单
						<span class="am-icon-angle-right am-fr am-margin-right">
						</span>
					</a>
					<ul class="am-list am-collapse admin-sidebar-sub" id="company-nav1">
						<li>
							<a href="table.php">
								<span class="am-icon-table">
								</span> 表格
							</a>
						</li>
						<li>
							<a href="input.php">
								<span class="am-icon-pencil-square-o">
								</span> 表单
							</a>
						</li>
						<li>
							<a href="button.php">
								<span class="am-icon-pencil-square-o">
									按钮组
								</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ziliao.php">
						<span class="am-icon-check">
						</span> 个人资料
					</a>
				</li>
				<li>
					<a href="piclist.php">
						<span class="am-icon-th">
						</span> 图片墙
					</a>
				</li>
				<li>
					<a href="log.php">
						<span class="am-icon-calendar">
						</span> 日志
					</a>
				</li>
				<li>
					<a href="x.php">
						<span class="am-icon-institution">
						</span> 详情
					</a>
				</li>
				<li>
					<a href="#">
						<span class="am-icon-sign-out">
						</span> 注销
					</a>
				</li>
			</ul>
			<div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p>
						<span class="am-icon-bookmark">
						</span> 公告
					</p>
					<p>
						时光静好，与君语；细水流年，与君同。—— Amaze UI
					</p>
				</div>
			</div>
			<div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p>
						<span class="am-icon-tag">
						</span> wiki
					</p>
					<p>
						Welcome to the Amaze UI wiki!
					</p>
				</div>
			</div>
		</div>
	</div>
<?php
	include_once('requires/html/javascript.php');
?>
<script>
	$('.am-list').find('a').on('mouseleave',function(){
		$(this).addClass('am-act');
	})
</script>