$( () => {
    $("#submit").on("click", (evtClick) => {
        evtClick.preventDefault();
        $.ajax({
            method: "post",
            url: "alea.php",
            dataType: "html",
            data: $("form").serialize(),
            success: (reponse) => {
                let msg = $("#message");
                console.log("name=['nombre']");
                $("[name='nombre']").val();
                msg.html(reponse + " " + $("[name='nombre']").val());
            },
            error: (jqXHR, status, error) => {
                $("#message").html(`Erreur AJAX : ${status} ${jqXHR.statusText}`);
            }
        });
    });
});
