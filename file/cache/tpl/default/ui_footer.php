<?php defined('IN_DESTOON') or exit('Access Denied');?><!-- <>底部区域 -->
<div class="sec_footer">
<div class="part-1">
<div class="mid clearfix">
<ul>
<li class="first"><i class="ico i1"></i><div class="txt dib"><h2>资讯</h2><p>预约咨询</p></div></li>
<li><i class="ico i4"></i><div class="txt dib"><h2>设计</h2><p>方案对比</p></div></li>
<li><i class="ico i3"></i><div class="txt dib"><h2>报价</h2><p>免费报价</p></div></li>
<li><i class="ico i2"></i><div class="txt dib"><h2>量尺出图</h2><p>上门量尺设计</p></div></li>
<li><i class="ico i5"></i><div class="txt dib"><h2>到府安装</h2><p>工人施工交付</p></div></li>
<li><i class="ico i6"></i><div class="txt dib"><h2>竣工验收</h2><p>享受国标质保</p></div></li>
</ul>
</div>
</div>
<div class="part-2">
<div class="mid clearfix">
<div class="p1 dib part">
<dl>
<dt>关于东有</dt>
<dd><a href="/about">关于我们</a></dd><dd><a href="#">公司荣誉</a></dd><dd><a href="#">联系我们</a></dd>
</dl>
</div>
<div class="p2 dib part">
<dl>
<dt>产品场景</dt>
<dd><a href="#">小区案例</a></dd><dd><a href="#">场景定制</a></dd><dd><a href="#">厂家定制</a></dd>
</dl>
</div>
<div class="p3 dib part">
<dl>
<dt>用户帮助</dt>
<dd><a href="#">预订流程</a></dd><dd><a href="#">加入我们</a></dd><dd><a href="#">投诉建议</a></dd>
</dl>
</div>
<div class="qrcode dib">
<div class="dib">
<img src="<?php echo DT_STATIC;?>statics/img/ft-qrcode-img.png" width="80" height="80" />
<p>微信关注东有</p>
</div>
<div class="dib ml--30">
<img src="<?php echo DT_STATIC;?>statics/img/ft-qrcode-img.png" width="80" height="80" />
<p>东有招聘英才</p>
</div>
</div>
<div class="cst dib">
<p class="c--fff">客服服务热线</p>
<p class="tel">13794416333</p>
<p class="time fs12">热线时间 09:00-23:00</p>
<a class="btn-kefu bg__ff4a00-hover transit mt--5" href="javascript:;">联系在线客服</a>
</div>
</div>

<!-- //热搜推荐、友情链接 -->
<div class="mid clearfix">
<div class="hot-links mt--20">
<ul>
<li class="tit fl"><b>热搜推荐</b></li>
<li class="list">
<a href="#">不锈钢栏杆</a><a href="#">不锈钢护栏</a><a href="#">不锈钢楼梯</a><a href="#">不锈钢扶手</a><a href="#">玻璃栏杆</a><a href="#">玻璃扶手</a><a href="#">阳台护栏</a><a href="#">工程栏杆</a><a href="#">工程护栏</a><a href="#">工程楼梯</a><a href="#">工程扶手</a><a href="#">弧形楼梯</a><a href="#">装饰扶手</a><a href="#">耐力板雨棚</a><a href="#">阳光板雨棚</a><a href="#">玻璃雨棚</a><a href="#">钢结构雨棚</a><a href="#">广州遮阳棚</a><a href="#">不锈钢雨棚</a><a href="#">阳光板雨篷</a><a href="#">广州雨棚</a><a href="#">门窗</a><a href="#">铝合金门窗</a><a href="#">推拉门</a><a href="#">断桥铝窗</a><a href="#">铝合金窗</a><a href="#">别墅铝合金窗</a><a href="#">隐形纱窗</a><a href="#">防盗纱窗</a><a href="#">防蚊纱窗</a>
</li>
</ul>
<ul class="mt--5">
<li class="tit fl"><b>友情链接</b></li>
<li class="list">
<a href="#">不锈钢立柱配件</a><a href="#">广州市东强栏杆扶手有限公司</a><a href="#">广州市东胜栏杆扶手工程公司</a><a href="#">广州东有不锈钢制品厂</a><a href="#">全铝家居定制</a>
</li>
</ul>
</div>
</div>
</div>
<div class="part-3">
<div class="mid ct clearfix">
<div class="copyright">Copyright &copy; 2013 gzdongyou.com.All Right Reserved.广州市东有装饰有限公司 粤ICP备15073194号-2</div>
<div class="icp mt--5">公司主营不锈钢楼梯扶手、铝合金阳台栏杆、铸铁阳台栏杆、锌钢护栏等产品，供应不锈钢栏杆扶手、铝合金栏杆扶手、铁艺栏杆扶手、栏杆扶手配件。欢迎来电咨询！</div>
</div>
</div>
</div>

<script type="text/javascript">
/** __公共函数 */
$(function(){
//菜单下拉项


//搜索下拉项
$(".J__searSelect").hover(function(){
$(this).find(".option").stop(true).slideToggle(300);
});
$(".J__searSelect .option").on("click", "em", function(){
var text = $(this).text();
$(this).parents(".option").siblings(".text").text(text);
})
});
</script>

</body>
</html>