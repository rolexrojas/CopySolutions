
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/jquery/jquery.min.js"></script>	
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
    <script>
$(document).ready(function(){
$("#Home").on("click", function(){ 
  $.ajax({
    url: "http://localhost/CopySolution/index.php/Homepage",
    method: "GET",
    success: function(data){
       
            $(".mainContainer").empty().append(data);
        }
    });
});

$("#About").on("click", function(){ 
  $.ajax({
    url: "http://localhost/CopySolution/index.php/About",
    method: "GET",
    success: function(data){
        
            $(".mainContainer").empty().append(data);
        }
    });
});

$("#Services").on("click", function(){ 
  $.ajax({
    url: "http://localhost/CopySolution/index.php/Services",
    method: "GET",
    success: function(data){
       
            $(".mainContainer").empty().append(data);
        }
    });
});

$("#Contact").on("click", function(){ 
  $.ajax({
    url: "http://localhost/CopySolution/index.php/Contact",
    method: "GET",
    success: function(data){
       
            $(".mainContainer").html(data);
        }
    });
});
});
</script>