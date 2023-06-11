function oblicz(){
    var dmccena=3.10;
    var ariadnacena=2.3;
    var lencena=0.01;
    var kanwacena=0.02;

    var materialcm=parseInt(document.getElementById("materialcm").value);
    var iloscm=parseInt(document.getElementById("motki").value);


    var material = document.getElementsByName("material");
    var wybranymat='nic';
    for(var i=0;i<material.length;i++){
        if(material[i].checked){
            wybranymat=material[i].value;
        }
    }

    var mulina = document.getElementsByName("mulina");
    var wybranamul='nic';
    for(var i=0;i<mulina.length;i++){
        if(mulina[i].checked){
            wybranamul=mulina[i].value;
        }
    }
    
    if(wybranamul=='nic' || wybranymat=='nic'){
        alert("Wypełnij wszystkie pola!");
    }
    else if(materialcm<5 || materialcm>100 || iloscm<1 || iloscm>50){
        alert("Wprowadź prawidłowe dane!");
    }
    
    else{
        var wycena;
        if(wybranymat=='len')
            var matcena=lencena;
        else
            var matcena=kanwacena;
        
        if(wybranamul=='dmc')
            var mulcena=dmccena;
        else
            var mulcena=ariadnacena;
        
        var materialcm2=materialcm*materialcm;

        wycena=(materialcm2*matcena)+(mulcena*iloscm);

        alert("Twój projekt będzie kosztował "+wycena.toFixed(2)+"zł!");
    }
}

function resetuj(){
    document.getElementById("formularz").reset(); 
}