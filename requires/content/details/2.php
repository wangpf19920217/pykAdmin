<!doctype html>
<html lang="en">
	<head>
		<?php
		include_once("requires/html/head.php")
		?>
	</head>
	<body>
		<div class="admin-content">
			<div class="am-g">
				<div class="am-u-md-6 am-cf">
					<div class="am-fl am-cf">
						<div class="am-btn-toolbar am-fl">
							<div class="am-btn-group am-btn-group-xs">
								<button type="button" class="am-btn am-btn-default">
									<span class="am-icon-plus">
									</span> 新增
								</button>
								<button type="button" class="am-btn am-btn-default">
									<span class="am-icon-save">
									</span> 保存
								</button>
								<button type="button" class="am-btn am-btn-default">
									<span class="am-icon-archive">
									</span> 审核
								</button>
								<button type="button" class="am-btn am-btn-default">
									<span class="am-icon-trash-o">
									</span> 删除
								</button>
								<div class="am-dropdown am-active am-dropdown-flip help" title="am-active控制大多控件的开启和关闭" data-am-dropdown="">
									<button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle="">
										<span class="am-icon-cog">
										</span>
										<span class="am-icon-caret-down">
										</span>
									</button>
									<ul class="am-dropdown-content">
										<li>
											<a href="#">
												1. 编辑
											</a>
										</li>
										<li>
											<a href="#">
												2. 下载
											</a>
										</li>
										<li>
											<a href="#">
												3. 删除
											</a>
										</li>
									</ul>
								</div>
								<div class="am-selected am-dropdown" id="am-selected-z9vks" data-am-dropdown="">
									<button type="button" class="am-selected-btn am-btn am-dropdown-toggle am-btn-default">
										<span class="am-selected-status am-fl">Banana</span>
										<i class="am-selected-icon am-icon-caret-down">
										</i>
									</button>
									<div class="am-selected-content am-dropdown-content" style="min-width: 200px;">
										<h2 class="am-selected-header">
											<span class="am-icon-chevron-left">返回</span>
										</h2>
										<ul class="am-selected-list">
											<li class="" data-index="0" data-group="0" data-value="a">
												<span class="am-selected-text">Apple</span>
												<i class="am-icon-check">
												</i>
											</li>
											<li class="am-checked" data-index="1" data-group="0" data-value="b">
												<span class="am-selected-text">Banana</span>
												<i class="am-icon-check">
												</i>
											</li>
											<li class="" data-index="2" data-group="0" data-value="o">
												<span class="am-selected-text">Orange</span>
												<i class="am-icon-check">
												</i>
											</li>
											<li class="" data-index="3" data-group="0" data-value="m">
												<span class="am-selected-text">Mango</span>
												<i class="am-icon-check">
												</i>
											</li>
											<li class="am-disabled" data-index="4" data-group="0" data-value="d">
												<span class="am-selected-text">禁用鸟</span>
												<i class="am-icon-check">
												</i>
											</li>
										</ul>
										<div class="am-selected-hint">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="am-u-md-3 am-cf">
					<div class="am-fr">
						<div class="am-input-group am-input-group-sm">
							<input type="text" class="am-form-field">
							<span class="am-input-group-btn">
								<button class="am-btn am-btn-default" type="button">
									搜索
								</button>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="am-g">
				<div class="am-u-sm-12">
					<form class="am-form">
						<table class="am-table am-table-striped am-table-hover table-main">
							<thead>
								<tr>
									<th class="table-check">
										<input type="checkbox">
									</th>
									<th class="table-id">
										ID
									</th>
									<th class="table-title">
										标题
									</th>
									<th class="table-type">
										类别
									</th>
									<th class="table-author">
										作者
									</th>
									<th class="table-date">
										修改日期
									</th>
									<th class="table-set">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="checkbox" id="a">
									</td>
									<td>
										1
									</td>
									<td>
										<a href="x.php">
											Business management
										</a>
									</td>
									<td>
										default
									</td>
									<td>
										测试1号
									</td>
									<td>
										2016年6月14日12:28:47
									</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary">
													<span class="am-icon-pencil-square-o">
													</span> 编辑
												</button>
												<button class="am-btn am-btn-default am-btn-xs">
													<span class="am-icon-copy">
													</span> 复制
												</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger">
													<span class="am-icon-trash-o">
													</span> 删除
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="a1">
									</td>
									<td>
										1
									</td>
									<td>
										<a href="x.php">
											Business management
										</a>
									</td>
									<td>
										default
									</td>
									<td>
										测试1号
									</td>
									<td>
										2016年6月14日12:28:47
									</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary">
													<span class="am-icon-pencil-square-o">
													</span> 编辑
												</button>
												<button class="am-btn am-btn-default am-btn-xs">
													<span class="am-icon-copy">
													</span> 复制
												</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger">
													<span class="am-icon-trash-o">
													</span> 删除
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="a2">
									</td>
									<td>
										1
									</td>
									<td>
										<a href="x.php">
											Business management
										</a>
									</td>
									<td>
										default
									</td>
									<td>
										测试1号
									</td>
									<td>
										2016年6月14日12:28:47
									</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary">
													<span class="am-icon-pencil-square-o">
													</span> 编辑
												</button>
												<button class="am-btn am-btn-default am-btn-xs">
													<span class="am-icon-copy">
													</span> 复制
												</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger">
													<span class="am-icon-trash-o">
													</span> 删除
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="a3">
									</td>
									<td>
										1
									</td>
									<td>
										<a href="#">
											Business management
										</a>
									</td>
									<td>
										default
									</td>
									<td>
										测试1号
									</td>
									<td>
										2016年6月14日12:28:47
									</td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary">
													<span class="am-icon-pencil-square-o">
													</span> 编辑
												</button>
												<button class="am-btn am-btn-default am-btn-xs">
													<span class="am-icon-copy">
													</span> 复制
												</button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger">
													<span class="am-icon-trash-o">
													</span> 删除
												</button>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="am-cf">
							共 N 条记录
							<div class="am-fr">
								<ul class="am-pagination">
									<li class="am-disabled">
										<a href="#">
											«
										</a>
									</li>
									<li class="am-active">
										<a href="#">
											1
										</a>
									</li>
									<li>
										<a href="#">
											2
										</a>
									</li>
									<li>
										<a href="#">
											3
										</a>
									</li>
									<li>
										<a href="#">
											4
										</a>
									</li>
									<li>
										<a href="#">
											5
										</a>
									</li>
									<li>
										<a href="#">
											»
										</a>
									</li>
								</ul>
							</div>
						</div>
				</div>
		</div>
	</body>
	<?php
	include_once ('requires/html/javascript.php');
	?>
	<script>$('.table-main').find('tbody').on('click', 'tr', function(e) {
	var Oradio = $(this).eq(0).find('input');
	if (Oradio.prop('checked')) {
		$(this).removeClass('am-primary');
		Oradio.prop('checked', false);
	} else {
		$(this).addClass('am-primary');
		Oradio.prop('checked', true);
	}
});
$('.table-check').find('input').click(function() {
	var $this = $(this);
	$(this).parents('.table-main').find('input').prop('checked', $this.prop('checked'))
})</script>
</html>
