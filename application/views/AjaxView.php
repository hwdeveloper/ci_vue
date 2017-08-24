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
    <title>Ajax数据提交教程</title>


</head>
<body>


<div id="app">
    <input v-model="name" placeholder="编辑我……">
    <p>名字是: {{ name }}</p>

    <button onclick="askData()">提交数据1</button><br/>
    <button v-on:click="askData2">提交数据2</button>
</div>


<script>
    var vm = new Vue({
        el: '#app',
        data: {
            name: 'seraph',
        },
        methods: {
            askData2: function (event) {
                var name = vm.name;
                var url = "<?php echo site_url('AjaxController/askData')?>";

                $.ajax({
                    data: {name: name},       //要发送的数据
                    type: "POST",           //发送的方式
                    url: url, //url地址
                    error: function (msg) { //处理出错的信息

                    },
                    success: function (msg) {  //处理正确时的信息
                        vm.name=msg;

                    }
                });
            }
        }
    })

    function askData(){
        var name = vm.name;
        var url = "<?php echo site_url('AjaxController/askData')?>";

        $.ajax({
            data: {name: name},       //要发送的数据
            type: "POST",           //发送的方式
            url: url, //url地址
            error: function (msg) { //处理出错的信息

            },
            success: function (msg) {  //处理正确时的信息
                vm.name=msg;

            }
        });
    }



</script>

</body>
</html>