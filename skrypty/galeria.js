var zdjecie = 1;
            function pokaz(numer){
            let zdj = document.getElementById("glownezdjecie");
            zdj.src="grafiki/galeria/z"+numer+".jpg";
            zdjecie=numer;

            }
            function prawo(){ 
                zdjecie++;
                if( zdjecie > 8 ){
                    zdjecie = 1;
                }
                document.getElementById("glownezdjecie").src = "grafiki/galeria/z"+zdjecie+".jpg";
            }
            function lewo(){ 
                zdjecie--;
                if( zdjecie < 1 ){
                    zdjecie = 8;
                }
                document.getElementById("glownezdjecie").src = "grafiki/galeria/z"+zdjecie+".jpg";
            }