<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title><?php echo time();?></title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="青瓜TV cctv4.me www.cctv4.me 青瓜视频 青瓜影视">
    <meta name="keywords" content="青瓜TV cctv4.me www.cctv4.me 青瓜视频 青瓜影视">
    <script src="./js/clipboard.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=15" />
</head>

<body>

<script type="text/javascript">
var targetProtocol = "https:";
if (window.location.protocol != targetProtocol)
 window.location.href = targetProtocol +
  window.location.href.substring(window.location.protocol.length);
</script>

    <div class="bgImg">
    </div>
    <div style="height:1px;"></div>
    <div class="logo">
        <img src="./images/logo1.png" />
    </div>
    <div class="mainLeft">
        <img src="./images/iphone.png?v=1" />
    </div>
    <div class="mainRight">
        <div class="erweima">
            <img src="./images/erweima.png" />
        </div>
        <div class="bottomtext">最新版：1.1.3 2019-06-26</div>
        <div class="downloadImg">
            <script>
            function installios()
               {
             alert('安装提示：\n \n如果安装APP出现黑屏或不能打开，\n请先卸载旧版APP，再进行安装，\n点击[关闭]开始安装。');
             var iosinstall = document.getElementById("ios-install");
             iosinstall.scrollIntoView();
location.href='itms-services://?action=download-manifest&url=https://down.qg5.live/app/test.plist';
}
             </script>
            <a href="javascript:installios();" class="copy">
                <img src="./images/btn-ios.png" />
            </a>
        </div>
        <div class="downloadImg">
            <a href="https://down.qg5.live/app/qgtv.apk" class="copy">
                <img src="./images/btn-android.png" />
            </a>
        </div>
        <div style="height:0.5rem;"></div>
        <div class="downloadImg">
            <a href="group.php?v=1">
                <img src="./images/btn-potato.png?v=1" />
            </a>
        </div>
        <div class="downloadImg" style="display:none;">
<a href="https://www.chaoxin.com/g/38E057">            
<img src="./images/btn-chaoxin.png" /></a>
        </div>        
    </div>

    <div class="ios-install" id="ios-install">
            <img class="ios-install-pic" src="./images/ios-install.png?v=9" />
    </div>    



</div>



</body>
<div style="display:none;">
    <script type="text/javascript" src="https://s96.cnzz.com/z_stat.php?id=1277594270&web_id=1277594270"></script>
</div>
<script type="text/javascript" src="//js.users.51.la/20043143.js"></script>


<div class="bottom_tips">
            请勿使用微信/QQ浏览器下载（苹果用户请使用Safari下载）</br>
            我们承诺APP安全可靠，请您放心使用。
        </div>

</body>
<?php
$f = isset($_GET['f']) ? $_GET['f'] : "";
if ($f) {
    ?>
    <script>
        var clipboard = new ClipboardJS('.copy', {
            text: function() {
                return "qgtv=<?php echo $f; ?>";
            }
        });
    </script>
<?php } ?>

</html>
