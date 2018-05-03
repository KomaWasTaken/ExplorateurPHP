$(document).ready(function() {
    $(document).on("click", "div a", function(e) {
        e.preventDefault();        
        var adresse = $(this).attr("href").split("?");
        var dossier = adresse[1];
        $.ajax({
            method: "GET",
            data: dossier,
            url: "traitement.php",
            success: function(data) {
                $("#ajax").html(data);
            }
        });
    });
});