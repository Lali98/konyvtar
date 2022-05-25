$(document).ready(function(){
    szamlalo = {};
    elemek = $("#kat").find("input");

    for(elem of elemek){
        szamlalo[elem["id"]] = 0;
        // console.log(elem["id"]);
    }

    if(localStorage.getItem("panel")=="closed"){
        $("#kategoria").addClass("rejtett");
        $(".rejtett").css("width", "0");
    }

    $("#nyito").click(function(){
        $("#kategoria").removeClass("rejtett");
        $("#kategoria").animate({
            width: "25%"
        }, 700, function(){
            localStorage.setItem("panel", "opened");
        });
    });

    $("#zaro").click(function(){
        $("#kategoria").animate({
            width: "0"
        }, 700, function(){
            $("#kategoria").addClass("rejtett");
            localStorage.setItem("panel", "closed");
        });
    });

    $(".megsem").click(function(){
        $(this).hide();
    });

    $("#kereses").click(function(){
        $("button").show();
    });

    $("#kat").on("click", "input", function(event){
        if(event.target["checked"]){
            az = event.target["id"];
            szamlalo[az]++;
            sessionStorage.setItem(az, szamlalo[az]);
            $(`#${az}_lbl`).text(`${$(event.target).data("szoveg")} (${szamlalo[az]})`);
        }
    });
});