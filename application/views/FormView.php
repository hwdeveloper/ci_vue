<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url() ?>css/tutorial.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>js/vue.min.js"></script>
    <title>表单数据提交教程</title>

</head>
<body>

<h1>表单数据提交教程</h1>
<div id="container">

    <div id="app">
        <form action="<?php echo site_url('FormShowController')?>" method="post">
            姓名： <input v-model="name" placeholder="编辑姓名" name="name">
            <p>名字是: {{ name }}</p>
            <br/>
            密码： <input v-model="passwd" placeholder="编辑密码" name="passwd">
            <p>名字是: {{ passwd }}</p>

            <input type="submit" value="提交">
        </form>
    </div>

    <script type="text/javascript">

        var vm = new Vue({
            el: '#app',
            data: {
                name: '',
                passwd: ''
            }
        })


    </script>
</div>


</body>
</html>