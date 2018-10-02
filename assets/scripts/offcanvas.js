 $('.mobile-menu').click(function openNav() {
     document.getElementById("offcanvas").style.width = "250px";
     document.getElementById("main").style.marginLeft = "250px";
 })

 $('.closebtn').click(function closeNav() {
     document.getElementById("offcanvas").style.width = "0";
     document.getElementById("main").style.marginLeft = "0";
 })
