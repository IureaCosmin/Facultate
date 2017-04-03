 user_name = /^[a-zA-Z]{1,20}$/;
 birth_date = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
 sal = /^[1-9]+[0-9]*$/
 var sel1;
 var sel2;
 var sal1;
 var sal2;
function z(id) {
    return document.getElementById(id)
}

function verificaredimensiune() {

    var d = z("name").value;
    var result = d.match(user_name)
    var g = z("name");
    mesaj(result, g);
}
function verificaredimensiune2() {

    var d = z("prenume").value;
    var result = d.match(user_name)
    var g = z("prenume");

    mesaj(result, g);
}


function mesaj(result, g) {
    if (!result) {

        //z('message').style.visibility = "visible";
        //z('.message').innerHTML = "Informatiile nu sunt valide";
       
        g.style.background = "#7FDBFF";


    } else {
        $('.message2').css('display','none');
        //z('message').style.visibility = "hidden";
        g.style.background = "#e8eeef";
    }
}

function checkdate() {

    var d = z("dnastere").value;
    var result = d.match(birth_date)
    var g = z("dnastere");

    mesaj(result, g);
}
function checksal() {

    var d = z("nsalarizare1").value;
    var result = d.match(sal)
    sal1 = result;
    var g = z("nsalarizare1");

    mesaj(result, g);
}
function checksal1() {

    var d = z("nsalarizare2").value;
    var result = d.match(sal)
    sal2 = result;
    var g = z("nsalarizare2");
    mesaj(result, g);
}
function vsal() {
    if (sal1 > sal2) {
        z('message').style.visibility = "visible";
        z('message').innerHTML = "Salariul maxim trebuie sa fie mai mare ca salariul minim";
        z("nsalarizare2").style.background = "#7FDBFF";

    } else {
        z('message').style.visibility = "hidden";
        z('message').innerHTML = "";
        z("nsalarizare2").style.background = "#e8eeef";
    }


}
function sel(instance) {
    if (instance.name == 'postpreferat1') {
        sel1 = instance.value;

    } else if (instance.name == 'postpreferat2') {
        sel2 = instance.value;

    }


    if (sel2 == sel1) {
        z('message').style.visibility = "visible";
        z('message').innerHTML = "Optiunele trebuie sa fie diferite";
    } else {
        z('message').style.visibility = "hidden";
        z('message').innerHTML = "";
    }

}

$(document).ready(function () {
    $('#alte1').click(function () {
        if ($(this).prop("checked") == true) {
            $('#echipe').css('display', 'inline');
        } else {
            $('#echipe').css('display', 'none');
        }
    });



    $('#other').click(function () {
        if ($(this).prop("checked") == true) {
            $('#other1').css('display', 'inline');
        } else {
            $('#other1').css('display', 'none');
        }
    });



});





