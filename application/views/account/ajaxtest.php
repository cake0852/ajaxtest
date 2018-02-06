<html>
<head>   
    <title>Page Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<input type = "text" id = "Message" />
<button id = "ajax-btn">Submit</button>
<script>
	$("#ajax-btn").click(function(){
	    $.ajax({
		url : "http://localhost/test/index.php/account/testAJAX",
		type : "POST",
                dataType : "json",
		//data : {Message : "123"},	
		success : function(DData){
            //console.dir(DData);
            /*DData.forEach(function(item){
                console.log(item.id);
                console.log(item.account);
                console.log(item.country);*/
            });
		},
		error : function(){
			alert("Error");
			}
            })
        });
</script>

</body>
</html>