<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>青瓜TV cctv4.me www.cctv4.me 青瓜视频 青瓜影视</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="青瓜TV cctv4.me www.cctv4.me 青瓜视频 青瓜影视">
    <meta name="keywords" content="青瓜TV cctv4.me www.cctv4.me 青瓜视频 青瓜影视">
    <script src="./js/clipboard.min.js"></script>
    <script src="./js/jquery-1.9.1.min.js"></script>
</head>

<body>

    <style>
        body {
            margin: 0px;
        }

        .page-bg {
            margin: 0px 0px;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: url(images/bg1.jpg?v=2) center center;
            background-size: cover;
        }

        .logo {
            width: 12rem;
            position: absolute;
            left: 30%;
            top: 2rem;
        }

        .btnios {
            width: 8rem;
            position: absolute;
            left: 10%;
            top: 7rem;
        }

        .btnandroid {
            width: 8rem;
            position: absolute;
            right: 8%;
            top: 7rem;
        }

        .bottomtext {
            width: 12rem;
            position: absolute;
            left: 34%;
            top: 10rem;
            font-size: 12px;
            color: #fff;
        }

        .btnpotato {
            width: 12rem;
            position: absolute;
            left: 35%;
            bottom: 3rem;
            font-size: 12px;
            color: #fff;
        }
    </style>

    <div class="logo"><img style="width:11rem;" src="images/logo1.png"></div>
    <div class="btnios">
        <a href="itms-services://?action=download-manifest&url=https://web2.hotbox99.tv/app/test.plist" class="copy">
            <img style="width:8rem;" src="images/btn-ios.png">
        </a>
    </div>
    <div class="btnandroid">
        <a href="test.apk" class="copy">
            <img style="width:8rem;" src="images/btn-android.png"></a></div>

    <div class="btnpotato">
        <a href="group.php?v=1"><img style="width:8rem;" src="images/btn-potato.png"></a></div>

    <div width="100%" class="page-bg"></div>

    <div class="bottomtext">最新版：1.0.6 2019-05-15</div>
    <div class="copy"></div>
</body>
<?php
$f = isset($_GET['f']) ? $_GET['f'] : "";
if ($f) {
?>
    <script>
        var clipboard = new ClipboardJS('.copy', {
            text: function() {
                return "qgtv=<?php echo $f;?>";
            }
        });
    </script>
<?php } ?>

<div style="display:none;"><script type="text/javascript" src="https://s96.cnzz.com/z_stat.php?id=1277594270&web_id=1277594270"></script></div>
<script type="text/javascript" src="//js.users.51.la/20043143.js"></script>
</html>
