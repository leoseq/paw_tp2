<section id="<?= $tipo ?>">
    <h1><?= $titulo ?></h1>
    <ul>
        <?php foreach ($todo_list->$tipo() as $tarea) : ?>
            <li><?= $tarea->descripcion ?></li>
        <?php endforeach ?>
    </ul>
</section>
