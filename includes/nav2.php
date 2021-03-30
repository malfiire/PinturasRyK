
<div class="menu-general">

    <nav>
        <ul>
            <li><a href="../index.php">INICIO</a></li>
            <li><a href="../servicios.php">SERVICIOS</a></li>
            <li><a href="../trabajos.php">TRABAJOS</a></li>
            <li><a href="../presupuesto.php">PRESUPUESTO</a></li>
            <li><a href="../contacto.php">CONTACTO</a></li>
        </ul>
    </nav>

    <div class="clearfix"></div>

</div>


<script  type="text/javascript">

    window.addEventListener("scroll", function (){
        var menu = document.querySelector(".menu-general");
        menu.classList.toggle("sticky", window.scrollY>300);
    })

</script>