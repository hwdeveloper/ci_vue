<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url() ?>css/tutorial.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>js/jquery-3.2.1.min.js"></script>
    <title>后台服务器CI，前端Vue.js和jquery</title>

    <script type="text/javascript">

        function optionAjax() {
            var url = "<?php echo site_url('AjaxController')?>";
            window.location.href = url;
        }
        function formToData() {

            var url = "<?php echo site_url('FormController')?>";
            window.location.href = url;

        }

    </script>

</head>
<body>

<h1>后台服务器CI，前端Vue.js和jquery</h1>
<div id="container">
    <div id="body">
        <code onclick="formToData()">表单数据提交</code>
        <code onclick="optionAjax()">AJAX数据提交</code>
    </div>
</div>


</body>
</html>