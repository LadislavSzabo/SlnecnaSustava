var Menuitems = document.getElementById("menuveci");

    Menuitems.style.maxHeight="0px";

    function mobilmenu() {
        if (Menuitems.style.maxHeight=="0px")
        {
                Menuitems.style.maxHeight="300px";
        }
        else{
            Menuitems.style.maxHeight="0px";
        }
    }