<?php defined('IN_DESTOON') or exit('Access Denied');?><script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- <>轮播图区域 -->
<div class="zone__idx-slider J_idxSlider">
    <div class="slider-inner">
        <ul class="slider-list">
            <li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/guarantee-banner.jpg);"></li>
        </ul>
        <!--
<div class="slider-nav">
<div class="mid align-c"><i></i><i></i></div>
</div>
-->
        <script type="text/javascript">
            var $slider = $(".J_idxSlider"), $nav = $(".slider-nav i");
            $slider.jq_xySlider({
                effect: "fade",
                autoplay: true,
                delay: 5000,
                onEnd: function (idx) {
                    $nav.removeClass("on").eq(idx).addClass("on");
                },
                navigation: $nav
            });
        </script>
    </div>
</div>
<!-- END.zone-idx-slider -->
<!-- <>主体容器区域 -->
<div class="container">
    <!-- //banner区域 -->
    <div class="wrap__guarantee-banner">
        <div class="mid clearfix">
            <div class="inner">
                <img class="img-intro" src="<?php echo DT_STATIC;?>statics/img/ico-freeGauge.png" />
                <div class="wrap-floatbox">
                    <h2>免费预约上门量尺</h2>
                    <div class="form">
                        <input class="ipt-text" type="text" name="username" placeholder="您的称呼" />
                        <input class="ipt-text" type="text" name="telphone" placeholder="电话号码(必填)" />
                        <a class="btn-apply bg__ff4a00-hover transit" href="javascript:;">立即免费申请</a>
                    </div>
                    <div class="list">
                        <ul class="mulitline">
                            <li><em class="c--ff4a00 mr--10">1分钟前</em>越秀区刘女士已享受此服务</li>
                            <li><em class="c--ff4a00 mr--10">3分钟前</em>天河区张怡已享受此服务</li>
                            <li><em class="c--ff4a00 mr--10">8分钟前</em>天河区张怡已享受此服务天河区张怡已享受此服务</li>
                            <li><em class="c--ff4a00 mr--10">12分钟前</em>天河区张怡已享受此服务</li>
                            <li><em class="c--ff4a00 mr--10">35分钟前</em>天河区张怡已享受此服务</li>
                            <li><em class="c--ff4a00 mr--10">7分钟前</em>天河区张怡已享受此服务</li>
                        </ul>
                        <script type="text/javascript">
                            /** 多行滚动 */
                            $(function () {
                                var _rollWrap = $(".mulitline"), _interval = 1500, _timer;
                                _rollWrap.hover(function () {
                                    clearInterval(_timer);
                                }, function () {
                                    _timer = setInterval(function () {
                                        var _field = _rollWrap.find("li:first"), _h = _field.height();
                                        _field.animate({ marginTop: -_h + "px" }, 200, function () {
                                            _field.css("marginTop", 0).appendTo(_rollWrap);
                                        });
                                    }, _interval);
                                }).trigger("mouseleave");
                            });
                        </script>
                    </div>
                    <div class="foot">
                        <a class="zixun dib" href="#">在线咨询</a><span class="tel dib">13794416333</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding30 align-c">
        <div class="mid"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/free-gauge-img.jpg" /></div>
    </div>
    <div class="wrap__guarantee-foot">
        <div class="mid align-c">
            <h2>老损家居，是时候改变了！</h2>
            <a class="btn-yuyue bg__ff4a00-hover transit" href="javascript:;">立即预约定制</a>
        </div>
    </div>
</div>