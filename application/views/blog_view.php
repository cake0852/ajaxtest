<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="zh-TW"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    </head>
     
    <body>
    <button type="button">我是按鈕</button>
    <?php
    //輸出從Controller傳來的heading變數
    echo '<h1>'.$heading.'</h1>';
    
    //輸出透過Controller及Model的處理，從DB取出的資料
    foreach($query->result() as $row)
    {
        echo '<h3>'.$row->name.'</h3>'; // 讀出title欄位的資料
        echo $row->comment; // 讀出body欄位的資料
        echo '<hr />';
    }
    ?>
    </body>
</html>