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

</script>
