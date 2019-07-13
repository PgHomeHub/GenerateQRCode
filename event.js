


$(document).ready(function(){

    //alert("Working")
    $("#exampleFormControlTextarea1").focus();

    $("#btnGen").click(function() {

        var txtArea = $("#exampleFormControlTextarea1").val();
        //var txtArea = $("#exampleFormControlTextarea1").val().length;
        //alert(txtArea);

        var newLines = $("#exampleFormControlTextarea1").val().split("\n").length;
        var split = $("#exampleFormControlTextarea1").val().split(/\n/);
        //alert(newLines);

        var i;
        var text;
        for (i = 0; i < newLines; i++) {            


            text += '<tr>';
            text += '<td> '+i+' </td>';
            text += '<td> '+split[i]+' </td>';
            text += '<td> <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl='+split[i]+'" title="'+split[i]+'" /></td>';
            text += '</tr>';


        }

        $("#tBody").html(text);




    });



});