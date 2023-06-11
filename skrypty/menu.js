function rozwin(){
    let menu = document.getElementById("divmenu");
        if(window.getComputedStyle(menu).display==="none"){
            menu.style="display: block;";
        }
        else{
            menu.style="display: none";
        }
}