<ul class="nav">
    <?php
    foreach ($nav_array as $item) {
        $pageName = $item['pageName'];
        $pagePath = $item['pagePath'];
    ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><?= $pageName; ?></a>
        </li>
    <?php
    }
    ?>
</ul>