<html>  
    <head>  
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link href="<?php echo base_url()?>css/singer.css" rel="stylesheet" type="text/css" />
        <title>CI heiilo world</title>  
    </head>  
    <body>  
       
        <table>
        <tr><td>歌手</td><td><div>详情</div></td></tr>
        <?php 
        
        $imageUrl = base_url()."images/";
        foreach ($singers as $singer){
            //echo "<p>".$singer['name']."的介绍是</p>";
            $url = $imageUrl.$singer['singer_icon_url'];
            $name = $singer['name'];
            $introduce = $singer['introduce'];
            
            echo "<tr><td><img id='image' src='".$url."'></td><td><div id='infor'>".$singer['name']."</div></td></tr>";
        }
        
        ?>


       
        </table>


        
    </body>  
</html>  