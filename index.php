// Determinar el contenido a mostrar según el rol del usuario
$contenido = '';

if (esAdministrador()) {
    $contenido = '<h1>Panel de Administración</h1>';
    $contenido .= '<ul>';
    $contenido .= '<li><a href="administracion/administrar_docentes.php">Administrar Docentes</a></li>';
    $contenido .= '<li><a href="administracion/administrar_estudiantes.php">Administrar Estudiantes</a></li>';
    $contenido .= '<li><a href="administracion/administrar_materias.php">Administrar Materias</a></li>';
    $contenido .= '<li><a href="administracion/administrar_grupos.php">Administrar Grupos</a></li>';
    $contenido .= '<li><a href="reportes/reporte_asistencia.php">Reporte de Asistencia</a></li>';
    $contenido .= '<li><a href="reportes/exportar_excel.php">Exportar a Excel</a></li>';
    $contenido .= '</ul>';
} elseif (esDocente()) {
    $contenido = '<h1>Panel de Docente</h1>';
    $contenido .= '<ul>';
    $contenido .= '<li><a href="asistencia/avance_materia.php">Registrar Avance de Materia</a></li>';
    $contenido .= '<li><a href="reportes/reporte_asistencia.php">Reporte de Asistencia</a></li>';
    $contenido .= '<li><a href="reportes/exportar_excel.php">Exportar a Excel</a></li>';
    $contenido .= '</ul>';
} else {
    $contenido = '<h1>Bienvenido</h1>';
    $contenido .= '<p>Contenido para estudiantes</p>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Control de Asistencia</title>
    <!-- Agregar enlaces a hojas de estilo y scripts -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $contenido; ?>
    </main>
    <footer>
        <!-- Agregar información de pie de página -->
    </footer>
</body>
</html>