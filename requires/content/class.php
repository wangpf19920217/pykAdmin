/*AmazeUi的CSS常用类*/
<div class="admin-content am-padding">
	<ol>
		<li>
			<h1>当宽度不足或者高度不足  增加滚动条  </h1>
				<code>.am-scrollable-vertical 水平方向</code><br />
				<code>.am-scrollable-horizontal 垂直方向</code>
			<div class="doc-example"><div class="am-scrollable-horizontal"><table class="am-table am-table-bordered am-table-striped am-text-nowrap"><thead><tr><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th><th>-= 表格标题 =-</th></tr></thead><tbody><tr><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td></tr><tr><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td></tr><tr><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td><td>表格数据</td></tr></tbody></table></div></div>
		</li>
		<li>
			<h1>float:left || right?</h1>
			<code>.am-fl - 左浮动</code><br />
			<code>.am-fr - 右浮动</code><br />
			<code>.am-center - 水平居中</code><br />
			<div class="am-cf">
			  <button class="am-btn am-btn-success am-fl">向左浮动</button>
			  <button class="am-btn am-btn-success am-fr">向右浮动</button>
			</div>
		</li>
		<li>
			<h1>浮动</h1>
			<code>.am-block - display 设置为 block</code><br />
			<code>.am-inline - display 设置为inline</code>
		</li>
		<li>
			<h1>隐藏元素</h1>
			<code>.am-hide</code>
		</li>
		<li>
			<h1>文本颜色</h1>
			<p>
				<a class="am-text-primary" >1</a>
				<a class="am-text-secondary">2</a>
				<a class="am-text-success">3</a>
				<a class="am-text-warning">4</a>
				<a class="am-text-danger">5</a>
			</p>
		</li>
		<li>
			<h1>
				视口大小 响应式辅助
			</h1>
			<code>.am-[show|hide]-[sm|md|lg][-up|-down|-only]</code><br />
			例子：缩放浏览器宽度<br />
			<div class="am-show-sm-only" style="background: darkblue;">小屏幕时出现</div>
		</li>
		<li>
			<h1>元素不同分辨率、显隐/布局</h1>
			<div class="am-g">
			  <div class="am-u-sm-2 am-u-lg-4">
			    <span class="am-show-md-down">sm-2</span>
			    <span class="am-show-lg-only">lg-4</span>
			  </div>
			  <div class="am-u-sm-4 am-u-lg-4">sm4 lg4</div>
			  <div class="am-u-sm-6 am-u-lg-4">
			    <span class="am-show-md-down">sm-6</span>
			    <span class="am-show-lg-only">lg-4</span>
			  </div>
			</div>
			
			<div class="am-g">
			  <div class="am-u-lg-3">
			    <span class="am-show-md-down">sm-full</span>
			    <span class="am-show-lg-only">lg-3</span>
			  </div>
			  <div class="am-u-lg-6">
			    <span class="am-show-md-down">sm-full</span>
			    <span class="am-show-lg-only">lg-6</span>
			  </div>
			  <div class="am-u-lg-3">
			    <span class="am-show-md-down">sm-full</span>
			    <span class="am-show-lg-only">lg-3</span>
			  </div>
			</div>
			
			<div class="am-g">
			  <div class="am-u-sm-6 am-u-lg-2">
			    <span class="am-show-md-down">6</span>
			    <span class="am-hide-md-down">2</span>
			  </div>
			  <div class="am-u-sm-6 am-u-lg-8">
			    <span class="am-show-md-down">6</span>
			    <span class="am-hide-md-down">8</span>
			  </div>
			  <div class="am-u-sm-12 am-u-lg-2">
			    <span class="am-show-md-down">full</span>
			    <span class="am-hide-md-down">2</span>
			  </div>
			</div>
			<div class="am-g">
			  <div class="am-u-sm-3">3</div>
			  <div class="am-u-sm-9">9</div>
			</div>
			<div class="am-g">
			  <div class="am-u-lg-4">
			    <span class="am-show-md-down">full</span>
			    <span class="am-hide-md-down">4</span>
			  </div>
			  <div class="am-u-lg-8">
			    <span class="am-show-md-down">full</span>
			    <span class="am-hide-md-down">8</span>
			  </div>
			</div>
			<div class="am-g">
			  <div class="am-u-sm-6 am-u-lg-5">
			    <span class="am-show-md-down">6</span>
			    <span class="am-hide-md-down">5</span>
			  </div>
			  <div class="am-u-sm-6 am-u-lg-7">
			    <span class="am-show-md-down">6</span>
			    <span class="am-hide-md-down">7</span>
			  </div>
			</div>
			<div class="am-g">
			  <div class="am-u-lg-6">
			    <span class="am-show-md-down">full</span>
			    <span class="am-hide-md-down">6</span>
			  </div>
			  <div class="am-u-lg-6">
			    <span class="am-show-md-down">full</span>
			    <span class="am-hide-md-down">6</span>
			  </div>
			</div>
		</li>
	</ol>
</div>