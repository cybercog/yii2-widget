<?php

use yii\bootstrap\Nav;

/**
 * @author FilamentV <vortex.filament@gmail.com>
 * @copyright (c) 2015, Thread
 * @version 19/03/2015
 */
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'items' => [
        [
            'label' => $current->title,
            'items' => $items,
        ],
    ],
]);
