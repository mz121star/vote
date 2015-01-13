<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>新的比赛投票</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="target-densitydpi=get-target-densitydpi,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width, user-scalable=no"/>
    <meta name="apple-touch-fullscreen" content="no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    <link href="ico/s2.png" rel="apple-touch-icon-precomposed">
    <link href="ico/s1.png" sizes="114x114" rel="apple-touch-icon-precomposed">

    <link rel="stylesheet" type="text/css" href="/images/index.css">

    <script type="text/javascript" language="javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/touchslider.dev.js"></script>
    <script type="text/javascript" src="/js/touchScroll.js"></script>
    <script type="text/javascript" src="/js/awap.js"></script>
    <script type="text/javascript" language="javascript" src="/js/topHeight.js"></script>
    <script type="text/javascript" src="/js/weixin.js"></script>


    <style>

        body {
            margin: 0 auto;
            max-width: 500px;
        }

        .bgHeight {
        }
    </style>
</head>

<body>


<header class="top box_shadow_1 clearfix">
    <div class="top_btnL fl"><a href="javascript:void(0);" onClick="history.go(-1);">返回</a></div>
    <div class="top_btnR2 fr"></div>
    <p class="top_title">发起比赛</p>
</header>
<div class="height45"></div>


<div class="warp apply_warp">
    <p class="explain">发布违法、反动内容或冒用他人、组织名义发布，将依据记录提交公安机关处理，请不要涉及敏感政治话题</p>

    <div class="apply_add2"><input class="txt1" id="title" name="title" type="text" maxlength="30" required
                                   placeholder="比赛主题，说明比赛日期（必填）"></div>
    <div class="apply_add2"><input class="txt1 " id="timeTxt" name="timeTxt" type="text" maxlength="20" required
                                   placeholder="比赛时间"></div>
    <div class="apply_add2"><input class="txt1 " id="host" name="host" type="text" maxlength="50" required
                                   placeholder="比赛主办方、主办单位"></div>
    <div class="apply_add2">
        <iframe id="fpicUp_k" class="fpicUp_k" name="weibo_send" marginwidth="0" marginheight="0"
                src="/upload/fpic_up.html" frameborder="no" scrolling="no"></iframe>
    </div>

    <div class="apply_add2"><textarea class="txt1" id="info" name="info" required
                                      placeholder="比赛详情，说明比赛规则、比赛奖品等，尽量简约（必填）"></textarea></div>
    <div class="apply_add2"><input class="txt1" id="fromPwd" name="fromPwd" type="text" maxlength="16" required
                                   placeholder="设置密码，用于查看报名人员信息（必填）" value=""></div>

    <div class="apply_add2"><input class="txt1" id="fromUser" name="fromUser" type="text" maxlength="15" required
                                   placeholder="你的真实姓名（必填，不对外公开）" value="苗壮"></div>
    <div class="apply_add2"><input class="txt1" id="fromPhone" name="fromPhone" type="text" maxlength="11" required
                                   placeholder="你的联系手机（必填，不对外公开）" value="13840816169"></div>
    <div class="apply_add2"><input class="txt1" id="fromWeixin" name="fromWeixin" type="text" maxlength="30" required
                                   placeholder="你的微信或QQ（必填，不对外公开）" value="395802201"><input id="picUrl" name="picUrl"
                                                                                            type="hidden"/><input
            id="tid" name="tid" type="hidden" value="2"/></div>

    <a class="btn_mobile1 apply_sub" id="apply_add_on1" href="javascript:void(0); " onClick="match_add_save();">发 布</a>
    <a class="btn_mobile2 apply_sub" id="apply_add_on2" href="javascript:void(0); ">发 布</a>
</div>


<div class="net_re" id="net_re"></div>


<div class="ex_copy"><a href="javascript:void(0);" onClick="location.href=' '">&copy;微谷云

</div>

<div id="foot">

    <div class="height45"></div>

    <div class="footer2 gradient_7 box_shadow_1">
        <a href="javascript:void(0);" onClick="history.go(-1);">
            <div class="footer2_left fl">返回</div>
        </a>

        <div class="fr">
            <a href="javascript:void(0);" onClick="location.href='apply-create.html';">
                <div class="footer2_right fl">
                    <div class="footer2_right_2">发起</div>
                </div>
            </a><a href="javascript:void(0);" onClick="window.location.reload();">
            <div class="footer2_right fl">
                <div class="footer2_right_2">刷新</div>
            </div>
        </a>
        </div>
    </div>

</div>


<script type="text/javascript" src="/js/WeiXinOptionMenu.js"></script>


</body>
</html>