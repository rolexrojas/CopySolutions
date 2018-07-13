$(document).ready(function () {
    //ESTE BLOQUE ES PARA HACER LA CARGA DEL CONTENIDO DEL HOME, LUEGO Q LA PAGINA HAYA CARGADO.
    $.ajax({
            url: "http://localhost/CopySolution/index.php/Homepage/loadContent",
            method: "GET",
            success: function (data) {

                $(".mainContainer").empty().append(data);
                $(".nav-item > a#Home").addClass("active");
            }
        });
});        
    
    //ESTOS BLOQUES DEBAJO, CADA UNO HACE LA CARGA ASINCRONAMENTE DEL CONTENIDO AL CLICKEAR LOS BOTONES DEL NAVBAR.PHP
    $("#Home").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/Homepage/loadContent",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
               $("#aa").addClass("active");
            }
        });
        
         
    });

    $("#clients").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/ClientController",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
                $("#ab").addClass("active");
            }
        });
        
        
    });

    $("#inventory").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/InventoryController",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });

    $("#workpool").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/WorkPoolController",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
    
    $("#useraccess").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/UserAccessController",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
    
    $("#register").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/RegisterController",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
    
   


