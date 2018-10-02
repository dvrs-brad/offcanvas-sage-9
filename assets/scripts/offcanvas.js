// Off canvas menu
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
   $('.mobile-menu').click(function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
       document.getElementById("main").style.marginLeft = "250px";
   })

   /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
   $('.closebtn').click(function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
       document.getElementById("main").style.marginLeft = "0";
   })
