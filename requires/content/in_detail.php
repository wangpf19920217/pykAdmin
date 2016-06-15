<style type="text/css">#topbar-collapse nav {
	line-height: 50px;
}

#topbar-collapse nav ul {
	list-style: none;
}

#topbar-collapse nav ul .am-active {
	color: red;
	font-size: 100%;
}

@media only screen (max-width: 640px) {
	#topbar-collapse {
		background: darkblue;
	}
}

#admin-offcanvas {
	height: 0;
	overflow: hidden;
}</style>
<header class="am-topbar admin-header"  data-am-sticky>
	<div class="am-topbar-brand">
		<a href="index.php">
			皮影客
		</a>
	</div>
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
		<span class="am-sr-only">导航切换</span>
		<span class="am-icon-bars">
		</span>
	</button>
	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">
		<nav class="scrollspy-nav " style="right: 0;" data-am-scrollspy-nav="{className: {active: 'am-active'}}" data-am-sticky>
			<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right ">
				<li class="">
					<a href="#xinxi">
						信息
					</a>
				</li>
				<li class="">
					<a href="#tongji">
						统计
					</a>
				</li>
				<li class="">
					<a href="#liebiao">
						列表
					</a>
				</li>
				<li class="">
					<a href="#guanyu">
						关于
					</a>
				</li>
				<li class="">
					<a href="#qita">
						其他
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<div class="admin-content am-padding" >
	<div class="am-panel am-panel-default" id="xinxi">
		<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">
			个人信息/基本信息
			<span class="am-icon-chevron-down am-fr">
			</span>
		</div>
		<div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
			<?php
				include_once ('requires/content/details/1.php');
				//引入1.php
			?>
		</div>
	</div>
	<div class="am-panel am-panel-default"  id="tongji">
		<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">
			他/她的资料
			<span class="am-icon-chevron-down am-fr">
			</span>
		</div>
		<div class="am-panel-bd am-collapse am-in" id="collapse-panel-2">
			<?php
				include_once ('requires/content/details/2.php');
				//引入2.php
			?>
		</div>
		</div>
	</div>
	<div class="am-panel am-panel-default" id="liebiao">
		<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">
			个人信息/基本信息
			<span class="am-icon-chevron-down am-fr">
			</span>
		</div>
		<div class="am-panel-bd am-collapse am-in" id="collapse-panel-3">
			<?php
				include_once ('requires/content/ziliao.php');
				//引入资料.php
			?>
		</div>
	</div>
	<div class="am-panel am-panel-default" id="guanyu">
		<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">
			个人信息/基本信息
			<span class="am-icon-chevron-down am-fr">
			</span>
		</div>
		<div class="am-panel-bd am-collapse am-in" id="collapse-panel-4">
		</div>
	</div>
	<div class="am-panel am-panel-default" id="qita">
		<div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-5'}">
			个人信息/基本信息
			<span class="am-icon-chevron-down am-fr">
			</span>
		</div>
		<div class="am-panel-bd am-collapse am-in" id="collapse-panel-5">
		</div>
	</div>
	<div class="am-panel am-panel-default" >
		<div class="am-panel-hd">
			再见王子
		</div>
		<div class="am-panel-bd">
			<p>
				来自街头的声音。飘浮在城市天空的“棉花糖”。 柔软却刚强，义无反顾地行进。 棉花糖[katncandix2] 小球+圣哲 第2张全创作专辑 [再见王子] 再见梦想。再见初恋。再见泪水。再见昨天。 必须向天真的自己说再见，才能勇敢地冒险找到未来。 幻灭之后的蜕变，是重生的那一刻。 “小飞行”好评后 严选《再见王子》《好日子》《怎么说呢?》《回不去的旅人》 全新格局 10篇刻印成长的青春创作 词+曲+创作+制作+演唱 棉花糖 棉花糖的音乐形成自成一格的清透感 。
			</p>
		</div>
	</div>
	<div class="am-panel am-panel-default" >
		<div class="am-panel-hd">
			第三张
		</div>
		<div class="am-panel-bd">
			<p>
				一切看似美好的过程之中，有许多不同却深刻的故事，跟随着生命和宇宙的运行发生中。悲伤的、快乐的时常已无以名状。棉花糖将过程中产生的讯息，刻划成专辑里的十一首歌曲。棉花糖此时还能笑着说这张专辑：「我们走进了黑暗的入口，开始寻找希望与光明，当真正找到了透进光线的出口并走出时，我们早已伤痕无数、甚至被种植黑暗，热情是唯一能抵抗的道具。」我说，那是一段不被了解的路程。
			</p>
			<p>
				每个人都是不被了解的怪人，你/你的与众不同，其实与众相同。也许将自我置放在一个不被了解的过程中，才能真正面对前所未见的情感释放与获得。再确认一次：你/你的与众不同，其实与众相同。
			</p>
		</div>
	</div>
	<div class="admin-sidebar am-offcanvas" id="admin-offcanvas" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
		<div class="am-offcanvas-bar admin-offcanvas-bar am-offcanvas-bar-overlay">
			<ul class="am-list admin-sidebar-list" id="collapase-nav-1">
				<li class="am-panel">
					<a href="index.php">
						<i class="am-icon-home am-margin-left-sm">
						</i> 首页
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
						<span class="am-icon-file">
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
	include_once ('requires/html/javascript.php');
	?>
