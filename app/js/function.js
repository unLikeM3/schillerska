var addMember = function(){
    var fname = $('#fName').val();
    var lname = $('#lName').val();
    var persnr = $('#persnr').val();
    var telnr = $('#telnr').val();
    var email = $('#email').val();
    var arskurs = $('#arskurs').val();
    var acceptTerms = $('#acceptTerms').val();
    var popup = $('#popup');
    var lnkpopup = $('#lnkpopup');
    var co = $('#co').val();
    var adress = $('#adress').val();
    var ort = $('#ort').val();
    var alttelnr = $('#alttelnr').val();
    var kon = $('#kon').val();

    $.post("http://www.schillerskaselevkar.se/memberhandler.php", {fornamn: fname, efternamn: lname, persnr: persnr, email: email, arskurs: arskurs, telnr: telnr, acceptTerms: acceptTerms, co: co, adress: adress, ort: ort, alttelnr: alttelnr, kon: kon}, function(data){
        popup.html(data);
        
        $('#lnkpopup').click();
        $('#blimedlemsub').append("Function");
    });
}