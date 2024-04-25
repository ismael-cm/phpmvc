<nav class="menu">
    <ul>
        <li class="<?php echo $currentPage == 'home' ? 'is-active' : '' ?>">
            <a  href="HomeController.php">Home</a>
        </li>
        <li class="<?php echo $currentPage == 'alumnos' ? 'is-active' : '' ?>">
            <a href="AlumnoController.php">Alumnos</a>
        </li>
    </ul>
</nav>