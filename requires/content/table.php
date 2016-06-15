/*常用表格 */
<style type="text/css">
	.pagingUl{
  float:right;
  padding:0;
  margin:0;
  list-style: none;
}
.pagingUl li{
  float: left;
  width: 30px;
  height: 30px;
  list-style: 30px;
  text-align: center;
}
.pagingUl li a{
  text-decoration: none;
  display: inline-block;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 28px;
  padding: 0;
  /*background: #fafafa;*/
  /*color: #666;*/
  font-size: 12px;
  border: 1px solid #ddd;
}
.pagingUl li a:hover,.activP{
	background: red;
	color: white;
}

.prv, .next {
  width: 30px;
  height: 30px;
  float: left;
  text-align: center;
  line-height: 30px;
  border: 1px solid #ddd;
  cursor: pointer;
}
.first, .last {
  width: 30px;
  height: 30px;
  font-size: 12px;
  text-align: center;
  line-height: 30px;
  border: 1px solid #ddd;
  cursor: pointer;
}
</style>

<div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
			<div class="am-dropdown am-active am-dropdown-flip help" title="am-active控制大多控件的开启和关闭" data-am-dropdown="">
                <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle=""><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                <ul class="am-dropdown-content">
                  <li><a href="#">1. 编辑</a></li>
                  <li><a href="#">2. 下载</a></li>
                  <li><a href="#">3. 删除</a></li>
                </ul>
              </div>
            <div class="am-form-group am-margin-left am-fl">
              <select>
                <option value="option1">所有类别</option>
                <option value="option2">测试</option>
                <option value="option3">测试1</option>
                <option value="option3">测试2</option>
                <option value="option3">测试3</option>
                <option value="option3">测试4</option>
                <option value="option3">测试5</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
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
                <th class="table-check"><input type="checkbox"></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">类别</th><th class="table-author">作者</th><th class="table-date">修改日期</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
           	<tr>
              <td><input type="checkbox" id="a"></td>
              <td>1</td>
              <td><a href="x.php">Business management</a></td>
              <td>default</td>
              <td>测试1号</td>
              <td>2016年6月14日12:28:47</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs"><span class="am-icon-copy"></span> 复制</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr><tr>
              <td><input type="checkbox" id="a1"></td>
              <td>1</td>
              <td><a href="x.php">Business management</a></td>
              <td>default</td>
              <td>测试1号</td>
              <td>2016年6月14日12:28:47</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs"><span class="am-icon-copy"></span> 复制</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr><tr>
              <td><input type="checkbox" id="a2"></td>
              <td>1</td>
              <td><a href="x.php">Business management</a></td>
              <td>default</td>
              <td>测试1号</td>
              <td>2016年6月14日12:28:47</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs"><span class="am-icon-copy"></span> 复制</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr><tr>
              <td><input type="checkbox" id="a3"></td>
              <td>1</td>
              <td><a href="#">Business management</a></td>
              <td>default</td>
              <td>测试1号</td>
              <td>2016年6月14日12:28:47</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs"><span class="am-icon-copy"></span> 复制</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 删除</button>
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
      <li class="am-disabled"><a href="#">«</a></li>
      <li class="am-active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>
</div>
          <hr>
          <p>注：.....</p>
        </form>
      </div>

    </div>


	<ol class="am-breadcrumb">
	  <li><a href="index.php" class="am-icon-home">首页</a></li>
	  <li><a href="#" title="表格表单">分类</a></li>
	  <li class="am-active">table</li>
	</ol>
	<ol>
		<li>
			<h1>基本样式</h1>
			添加 <code>.am-table</code>
			<table class="am-table am-table-centered  am-table-striped am-table-hover">
			    <thead>
			        <tr>
			            <th>单行展示</th>
			            <th>网址</th>
			            <th>创建时间</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>这是默认样式</td>
			            <td>http://amazeui.org</td>
			            <td>2012-10-01</td>
			        </tr>
			        <tr title=".am-active 当前行+变色" class="am-active help">
			            <td>这是当前状态</td>
			            <td>http://amazeui.org</td>
			            <td>2012-10-01</td>
			        </tr>
			        <tr title="测试辅助样式" class=" help">
			            <td title="禁用" class="am-disabled">这是td辅助样式</td>
			            <td title="蓝色高亮"  class="am-primary">http://amazeui.org</td>
			            <td title="红色高亮"  class="am-danger">2012-10-01</td>
			        </tr>
			    </tbody>
			</table>
		</li>
		<li>
			<h1>table辅助样式</h1>
			<code>.am-table</code>会添加默认样式<br />
			<code>.am-table-centered</code>文字水平居中<br />
			<code>.am-text-middle</code>文字垂直居中<br />
			<code>.am-table-bordered</code>bordered有边的<br />
			<code>.am-table-hover</code>鼠标滑过效果<br />
			<code>.am-table-compact</code>表格更加紧凑
		</li>
		<li>
			<h1>tr辅助样式</h1>
			<code>.am-active</code> 激活；<br />
		</li>
		<li>
			<h1>td辅助样式</h1>
			<code>.am-active</code> 激活；<br />
			<code>.am-disabled</code>禁用；<br />
			<code>.am-primary</code> 蓝色高亮；<br />
			<code>.am-success</code> 绿色高亮；<br />
			<code>.am-warning</code> 橙色高亮；<br />
			<code>.am-danger</code> 红色高亮。
		</li>
		<li>
			<h1>功能操作</h1>
			
			<ul class="am-pagination am-pagination-centered">
				<li class="am-disabled"><a href="">«</a></li>
				<li class="am-active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">»</a></li>
			</ul>
		</li>
		<li>
			<h1>翻页执行</h1>
			<p>判断.activP所在的当前数得到当前页 </p>
			<div  class="help pageTest" title="调用的方法在最下方"></div>
		</li>
	</ol>
</div>
<?php
	include_once('requires/html/javascript.php');
?>
<script>
	//分页的js
/* 一个简单的分页，每次点击重渲染
******by wuati*****
*/
(function ($) {
  //默认参数 (放在插件外面，避免每次调用插件都调用一次，节省内存)
  var defaults = {
    //id : '#paging',//id
    leng: 9,//总页数
    activeClass: 'page-active' ,//active类
    firstPage: '首页',//
    lastPage: '末页',
    prv: '«',
    next: '»',
    callback:function(page){
    	alert(page);
    },
  };
  //扩展
  $.fn.extend({
    //插件名称
    page: function (options) {
      //覆盖默认参数
      var opts = $.extend(defaults, options);
      //主函数
      return this.each(function () {
        //激活事件
        var obj = $(this);
        var str1 = '';
        var str = '';
        var l = opts.leng;
        if (l > 1&&l < 10) {
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
          for (i = 2; i < l + 1; i++) {
            str += '<li><a href="javascript:">' + i + '</a></li>';
          }
        }else if(l > 9){
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
          for (i = 2; i < 10; i++) {
            str += '<li><a href="javascript:">' + i + '</a></li>';
          }
          //str += '<li><a href="javascript:">...</a></li>'
        } else {
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
        }
        obj.html('<div class="next" style="float:right">' + opts.next + '</div><div class="last" style="float:right">' + opts.lastPage + '</div><ul class="pagingUl">' + str1 + str + '</ul><div class="first" style="float:right">' + opts.firstPage + '</div><div class="prv" style="float:right">' + opts.prv + '</div>');
        
        obj.on('click', '.next', function () {
          var pageshow = parseInt($('.' + opts.activeClass).html());
          if(pageshow == l) {
          }else if(pageshow > l-5&&pageshow < l){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
          }else if(pageshow > 0&&pageshow < 6){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
          }else {
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
            fpageShow();
          }
          if(pageshow >= opts.leng){
          	opts.callback(pageshow);
          }else{
          	opts.callback(pageshow+1);	
          }
        });
        obj.on('click', '.prv', function () {
          var pageshow = parseInt($('.' + opts.activeClass).html());
          if (pageshow == 1) {
          }else if(pageshow > l-5&&pageshow < l+1){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
                  //this.fpageBranch(pageshow-1);
          }else if(pageshow > 1&&pageshow < 6){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
                  //this.fpageBranch(pageshow-1);
          }else {
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
                    //this.fpageBranch(pageshow-1);
            fpageShow();
          };
          if(pageshow == 1){
          	opts.callback(pageshow);
          }else{
          	opts.callback(pageshow-1);	
          }
        });

        obj.on('click', '.first', function(){
          var pageshow = 1;
          $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
          fpagePrv(0);
          opts.callback(pageshow);
        })
        obj.on('click', '.last', function(){
          var pageshow = l;
          if(l>9){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
            fpageNext(8);
          }else{
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
            fpageNext(l-1);
          }
          opts.callback(pageshow);
        })

        obj.on('click', 'li', function(){
          var $this = $(this);
          var pageshow = $this.find('a').html();
          if(l>9){
            if(pageshow > l-5&&pageshow < l+1){
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpageNext(8-(l-pageshow));
            }else if(pageshow > 0&&pageshow < 5){
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpagePrv(pageshow-1);
            }else{
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpageShow();
            }
          }else{
            $('.' + opts.activeClass).removeClass(opts.activeClass);
            $this.find('a').addClass(opts.activeClass);
          };
          opts.callback(pageshow);
        })

        function fpageShow(){
          var pageshow = parseInt($('.' + opts.activeClass).html());
          var pageStart = pageshow - 4;
          var pageEnd = pageshow + 5;
          var str1 = '';
          for(i=0;i<9;i++){
            str1 += '<li><a href="javascript:" class="">' + (pageStart+i) + '</a></li>'
          }
          obj.find('ul').html(str1);
          obj.find('ul li').eq(4).find('a').addClass(opts.activeClass);
        }

        function fpagePrv(prv){
          var str1 = '';
          if(l>8){
            for(i=0;i<9;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
          }else{
            for(i=0;i<l;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
          }
          obj.find('ul').html(str1);
          obj.find('ul li').eq(prv).find('a').addClass(opts.activeClass);
        }

        function fpageNext(next){
          var str1 = '';
          if(l>8){
            for(i=l-8;i<l+1;i++){
              str1 += '<li><a href="javascript:" class="">' + i + '</a></li>'
            }
           obj.find('ul').html(str1);
           obj.find('ul li').eq(next).find('a').addClass(opts.activeClass);
          }else{
            for(i=0;i<l;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
           obj.find('ul').html(str1);
           obj.find('ul li').eq(next).find('a').addClass(opts.activeClass);
          }
        }
      });
    }
  })
})(jQuery);

</script>	


<script>
 $('.pageTest').page({
      leng: 66,//分页总数
      activeClass: 'activP', //active 类样式定义
      id : '#paging',//id
	  activeClass: 'activP' ,//active类
	  data : {},
	  callback:function(page){
	  	alert(page);
	  }
   });
</script>





<?php
	include_once('requires/html/footer.php');
?>

<?php
	include_once('requires/html/javascript.php');
?>		
<script>
	$('.table-main').find('tbody').on('click','tr',function(e){
		var Oradio = $(this).eq(0).find('input');
		if(Oradio.prop('checked')){
			$(this).removeClass('am-primary');
			Oradio.prop('checked',false);
		}else{
			$(this).addClass('am-primary');
			Oradio.prop('checked',true);
		}
	});
	$('.table-check').find('input').click(function(){
		var $this = $(this);
		$(this).parents('.table-main').find('input').prop('checked',$this.prop('checked'))
	})
</script>