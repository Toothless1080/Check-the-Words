<?php

?>
<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "#464646";
    }
</script>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Games</a>
    <a href="#">Guess the Words</a>
    <a href="#">I am ...</a>
    <a href="#">How is it used?</a>
    <a href="#">Get Crazy</a>
</div>

<!-- Use any element to open the sidenav -->
<button class="button button-primary" onclick="openNav()">Menu</button>