<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link href="<?php echo base_url() ?>css/tutorial.css" rel="stylesheet"
          type="text/css"/>

    <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.2.1.min.js"></script>
    <title>页面跳转</title>

    <script type="text/javascript">

        function askAjaxData() {

            var name = '好哈哈4444555aaaaa';
            var url = '<?php echo site_url('Ajax/getAjaxData1')?>';

            $.ajax({
                data: {name: name},       //要发送的数据
                type: "POST",           //发送的方式
                url: url, //url地址
                error: function (msg) { //处理出错的信息

                },
                success: function (msg) {  //处理正确时的信息
                    alert(msg)

                }
            });

        }



    </script>
</head>
<body>

<h1>ajax教程!</h1>
<div id="container">
    <div id="body">

        <code onclick="askAjaxData()">获得Ajax.php中</code>


    </div>
</div>


</body>
</html>

