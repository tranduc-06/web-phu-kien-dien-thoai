<div class="clear"></div>
<div class="main">
     <?php  
        if(isset($_GET['action']) && isset($_GET['query']))
        {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }
        else
        {
            $tam = '';
            $query = '';
        }
        if($tam == 'quanlydanhmucsanpham' && $query == 'them')
        {
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
            // include("modules/quanlydanhmucsp/xuly.php");
        }

        elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua')
        {
            include("modules/quanlydanhmucsp/sua.php");
        }

        elseif ($tam == 'quanlysanpham'&& $query == 'them') {
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
            
        }

        elseif ($tam == 'quanlysanpham'&& $query == 'sua') {
            include("modules/quanlysp/sua.php");
            
        }


        // elseif ($tam == 'quanlysanpham') 
        // {
        //     include("../page/");   # code...
        // }
        // elseif ($tam == 'quanlydanmucbaiviet') {
        //     include("");
        // }
        // elseif ($tam == 'quanlybaiviet') {
        //     include("");
        // }
        else include("modules/dashboard.php");
     ?>        
</div>