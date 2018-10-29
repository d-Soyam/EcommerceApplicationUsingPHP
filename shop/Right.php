<div id="right-col">
    <h2>Categories</h2>
    
    <?php
        $con = mysql_connect("localhost","root");
        mysql_select_db("shopping", $con);

        $sql = "select * from Category_Master";
        $result = mysql_query($sql,$con); 


        while($row = mysql_fetch_array($result)){
            $Id=$row['CategoryId'];
            $CategoryName=$row['CategoryName'];
    ?>
    
    <ul class="slidedoormenu">
        <li><a href="Products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
    </ul>
    
    <?php
	   }
        mysql_close($con);
    ?>
    
</div>
