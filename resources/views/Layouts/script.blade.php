@yield('script')
<script>
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
