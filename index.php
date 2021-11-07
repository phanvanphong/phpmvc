<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Ecommerce</title>
</head>
<body>
    
    <?php 
        require_once "./system/libs/Main.php"; 
        require_once "./system/libs/DController.php";
        require_once "./system/libs/Load.php";
        require_once "./system/libs/Database.php";
        require_once "./system/libs/DModel.php";
        require_once "./app/config/config.php";
        require_once "./system/libs/Session.php";

        
        $main = new Main();

        // $url = isset($_GET['url']) ? $_GET['url'] : NULL ;
        
        // // Nếu đường dẫn url khác null thỳ tiếp tục chạy hàm rtrim và explode
        // // Nếu k có url thỳ unset url
        // if($url != NULL){
        //     $url = rtrim($url,'/');
        //     $url = explode('/',filter_var($url,FILTER_SANITIZE_URL));
        // }else{
        //     unset($url);
        // }

        // // Nếu tồn tại class thỳ include class và tạo đối tượng với class đó
        // if(isset($url[0])){
        //     include "./app/controllers/$url[0].php";
        //     $ctrl = new $url[0];
            
        //     // Nếu tồn tại pram thỳ gọi đến hàm và truyền tham số vào
        //     if(isset($url[2])){
        //         $ctrl->{$url[1]}($url[2]);
        //     }else{
        //     // Nếu không tồn tại pram thỳ gọi đến hàm và không truyền tham số
        //         if(isset($url[1])){
        //             $ctrl->{$url[1]}();
        //         }else{

        //         }

        //     }
        
        // // Nếu không tồn tại class tức là url[0] thỳ gọi đến controllers/index.php;
        // }else{
        //     include "./app/controllers/index.php";
        //     $index = new index();
        //     $index->homepage();
        // }


        
    ?>

</div>
</body>
</html>