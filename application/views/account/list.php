<html>
<head>
    <meta charset="UTF-8">
    <title>List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    <!--list table-->
    <table style="text-align: left; width: 100px;" border="1"
        cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top;">ID</td>
                <td style="vertical-align: top;">Account</td>
                
            </tr>
            <tr>            
            <?php foreach ($data as $l1): ?>
            <td><?=$l1['id']?></td>
            <td><?=$l1['account']?></td>
            <td><button class="ajax-btn" data-id=<?=$l1['id']?>>Show</button></td>
            </tr> 
            <?php endforeach; ?>            
        </tbody>
    </table>
    <!-- /list table -->
    <!-- show table -->
    <table id="tableajax" style="text-align: left; width: 100px;display:none;" border="1"
        cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top;">ID</td>
                <td style="vertical-align: top;">Account</td>
                <td style="vertical-align: top;">Country</td>
            </tr>   
            <tr>
                <td id="panel-id" style="vertical-align: top;"></td>
                <td id="panel-account" style="vertical-align: top;"></td>
                <td id="panel-country" style="vertical-align: top;"></td>
            </tr>         
        </tbody>
    </table>
    <!-- /show table -->
    <button type="submit" name="submit" id="insert" class="btn">Insert</button>
    <!-- insert block -->
    <div style="display:none;" id="insertblock">
        <br/><label for=account>Account</label>
        <input type=text id=account name=account /><br />
        <label for=Country>Country</label>
        <input type=text id=Country name=Country /><br />
        <button type=submit name=submit  id=insert-btn>Apply</button>
    </div>
    <!-- /insert block -->

     <script>
            //show account detail
            $(".ajax-btn").click(function(){
                var getid=$(this).data("id");
                $("#tableajax").fadeIn();
                $.ajax({
                url : "http://localhost/ajaxTest/index.php/account/show/?id="+getid,
                type : "POST",
                        dataType : "json",
                success : function(DData){
                    $('#tableajax').fadeIn();
                    $('#panel-id').text(DData.id);
                    $('#panel-account').text(DData.account);
                    $('#panel-country').text(DData.Country);                
                },
                error : function(){
                    alert("Error");
                    }
                    })
                });
                //insert function
                $("#insert").click(function(){
                    $("#insertblock").fadeIn();
                    //insert submit
                    $("#insert-btn").click(function(){
                    $.ajax({
                    url : "http://localhost/ajaxTest/index.php/account/insert",
                    type : "POST",
                            dataType : "json",
                    data :{account:$("#account").val(),Country:$("#Country").val()},
                    success : function($result){
                        if($result.status=="ok")
                        alert("success");
                        else if($result.status=="failed")                        
                        alert("failed");                        
                        location.reload();
                    },
                    error : function($result){
                        alert("failed");
                        location.reload();
                        }
                    })
                });                
                });              
        </script>  
</body>
</html>