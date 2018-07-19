var base_url = "http://localhost/CopySolution/index.php";

$(document).ready(function () {
    
    function reloadMainPage(){
         $.ajax({
            url: base_url + "/Homepage/loadContent",
            method: "GET",
            success: function (data) {

                $(".mainContainer").empty().append(data);
                $(".nav-item > a#Home").addClass("active");
            }
        }); 
    
    }
});        
    
    //ESTOS BLOQUES DEBAJO, CADA UNO HACE LA CARGA ASINCRONAMENTE DEL CONTENIDO AL CLICKEAR LOS BOTONES DEL NAVBAR.PHP
    $("#Home").on("click", function () {
        $.ajax({
            url: base_url + "/Homepage/loadContent",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
               $("#aa").addClass("active");
            }
        });
        
         
    });

    $("#clients").on("click", function () {
        $.ajax({
            url: base_url + "/Clientcontroller",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
                $("#ab").addClass("active");
            }
        });
        
        
    });

    $("#inventory").on("click", function () {
        $.ajax({
            url: base_url + "/Inventorycontroller",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });

    $("#workpool").on("click", function () {
        $.ajax({
            url: base_url + "/Workpoolcontroller",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
    
    $("#useraccess").on("click", function () {
        $.ajax({
            url: base_url + "/Accesscontroller",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
    
    $("#register").on("click", function () {
        $.ajax({
            url: base_url + "/registercontroller",
            method: "GET",
            success: function (data) {
                $(".mainContainer").html(data);
            }
        });
    });
    
   


