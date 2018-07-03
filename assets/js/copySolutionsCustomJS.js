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

    $("#About").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/About",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
                $("#ab").addClass("active");
            }
        });
        
        
    });

    $("#Services").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/Services",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });

    $("#Contact").on("click", function () {
        $.ajax({
            url: "http://localhost/CopySolution/index.php/Contact",
            method: "GET",
            success: function (data) {

                $(".mainContainer").html(data);
            }
        });
    });
});

