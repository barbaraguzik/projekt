function format(i){
    if(i < 10)
    i = "0" + i;
    return i;
}
function datagodzina() {
    var teraz = new Date();
    var godzina = teraz.getHours();
    var minuta = teraz.getMinutes();
    var sekunda = teraz.getSeconds();
    godzina = format(godzina);
    minuta = format(minuta);
    sekunda = format(sekunda);

    var dzisiaj = teraz.toLocaleDateString('pl-PL', { day: 'numeric', month: 'long', year: 'numeric' }); 

    document.getElementById("data").innerHTML = dzisiaj+"<br>\n"+godzina+":"+minuta+":"+sekunda;
    setTimeout(datagodzina, 1000);
}


        window.onload = function() {
    datagodzina();
}
