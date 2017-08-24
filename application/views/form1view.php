<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>


<form action="<?php echo site_url('Form2Controller/index')?>"  method="get">


     姓名<input  type="text" name="name"></br>
     密码<input  type="password" name="passwd"></br>
    <input type="submit" value="提交">
</form>


</body>

</html>