@yield('script')
<script>

    // window.onload = function () {

    // activeLink();
    // // document.ag.src="b.jpg";
    // }


    // function activeLink() {
    //     let links = document.getElementsByClassName('nav-link');

    //     console.log("active link being hit");

    //     for (var i = 0; i < links.length; i++) {
    //         links[i].addEventListener("click", function() {
    //             var current = document.getElementsByClassName("active");

    //             if (current.length > 0) {
    //             current[0].className = current[0].className.remove('active');
    //             }

    //             this.className.add('active').filter(function(){
    //                 return window.location.href.indexOf($(this).attr('href').trim()) > -1;
    //             }).click();
    //         });

    //         console.log("in for loop");
    //     }
    // }

    function toggleMenu() {
        var x = document.getElementById("navbar-vertical navbar");
        var element = document.getElementById("db-wrapper");

        if (x.style.display === "block") {
            x.style.display = "none";
            element.classList.add("toggled");
        } else {
            x.style.display = "block";
            element.classList.remove("toggled")
        }
    }


    //     // Get the container element
    // var btnContainer = document.getElementById("myDIV");

    // // Get all buttons with class="btn" inside the container
    // var btns = btnContainer.getElementsByClassName("btn");

    // // Loop through the buttons and add the active class to the current/clicked button
    // for (var i = 0; i < btns.length; i++) {
    //     btns[i].addEventListener("click", function() {
    //         var current = document.getElementsByClassName("active");

    //         // If there's no active class
    //         if (current.length > 0) {
    //         current[0].className = current[0].className.replace(" active", "");
    //         }

    //         // Add the active class to the current/clicked button
    //         this.className += " active";
    //     });
    // }

</script>
