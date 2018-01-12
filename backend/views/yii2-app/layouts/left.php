<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Главная страница', 'url' => ['/site/index']],
                    ['label' => 'Текстовые страницы', 'url' => ['/textpage/index']],
                    ['label' => 'Категории', 'url' => ['/category/index']],
                    ['label' => 'Объекты', 'url' => ['/product/index']],
                    ['label' => 'Дизайнеры и архитекторы', 'url' => ['/designer/index']],
                    ['label' => 'Отзывы', 'url' => ['/review/index']],
                    ['label' => 'Видео отзывы', 'url' => ['/video-review/index']],
                    ['label' => 'Партнеры', 'url' => ['/partner/index']],
                    ['label' => 'Видео', 'url' => ['/video/index']],
                    ['label' => 'События', 'url' => ['/event/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
