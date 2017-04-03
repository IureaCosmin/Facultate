// Wait for the DOM to be ready
var _nume=/^[a-z ,.'-]+$/i

$(document).ready(function() {




    $('#contacte').submit(function () {
        var nume = $('#name').val();
        var nume2 = $('#nume2').val();


        if (!_nume.test(nume)) {
            $('#raspuns1').html("Informatii invalide")
            return false;
        }

        if (!_nume.test(nume2)) {
            $('#raspuns2').html("Informatii invalide")
            return false;
        }

    })
})

