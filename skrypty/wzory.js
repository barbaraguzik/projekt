let stopien = document.getElementById("zaawansowanie");
let pocz = document.getElementById("beg");
let sred = document.getElementById("inter");
let zaa = document.getElementById("adv");
 
document.addEventListener("change", ()=>{
    switch(stopien.value){
        case "poczatkujacy":
            pocz.style.display="block";
            sred.style.display="none";
            zaa.style.display="none";
            break;
        case "sredniozaawansowany":
            pocz.style.display="none";
            sred.style.display="block";
            zaa.style.display="none";
            break;
        case "zaawansowany":
            pocz.style.display="none";
            sred.style.display="none";
            zaa.style.display="block";
            break;
        case "wybierz":
            pocz.style.display="none";
            zaa.style.display="none";
            sred.style.display="none";
            break;
    }

});
