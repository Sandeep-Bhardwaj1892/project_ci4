<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>


        <div class="environment">

          <p>Page rendered in {elapsed_time} seconds</p>

        
        </div>
        

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. </p>

    </div>

</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
