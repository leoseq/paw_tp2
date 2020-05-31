<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Turnos Medicos</title>
    </head>
    <body>
        <header>
            <h1>Informacion del Turno:</h1>
            <?php include 'views/nav.view.php'; ?>
        </header>
        <main>

            <?php
                use App\models\Serializar;
            
                $serialize = new Serializar();
                $turno = $serialize->find_turno($_GET['id']);

                include 'views/turno.info.view.php';
            ?>

        </main>
    </body>
</html>