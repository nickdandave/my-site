<?php
$nav_items = array(
    array('title' => 'Intro', 'icon' => 'home'),
    array('title' => 'Work', 'icon' => 'folder-open-o'),
    array('title' => 'About', 'icon' => 'university'),
    array('title' => 'Contact', 'icon' => 'envelope-o')
);
?>
<nav class="main-nav">
    <ul class="main-nav__items vp-xs-top-3 vp-xs-bottom-3">
        <?php foreach($nav_items as $item) : ?>
            <li class="main-nav__item text-center">
                <a href="#<?php echo strtolower($item['title']); ?>" class="main-nav__link vp-xs-top-2 vp-xs-bottom-2">
                    <i class="fa fa-<?php echo $item['icon']; ?> main-nav__icon"></i>
                    <span class="main-nav__title"><?php echo $item['title']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
