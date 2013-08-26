<?php

$config = array();

// Максимальная вложенность комментов при отображении
$config['module']['comment']['max_tree'] = 5;

// Ограничение на вывод числа друзей пользователя на странице его профиля
$config['module']['user']['friend_on_profile'] = 18;

$config['view']['theme'] = 'default';


/* Grid type:
 * 
 * fluid - резина
 * fixed - фиксированная ширина
 */
$config['view']['grid']['type'] = 'fixed';

/* Fluid settings */
$config['view']['grid']['fluid_min_width'] = 976; // Min - 976px
$config['view']['grid']['fluid_max_width'] = 1300;

/* Fixed settings */
$config['view']['grid']['fixed_width'] = 976;


$config['head']['default']['js'] = Config::Get('head.default.js');
$config['head']['default']['js'][] = '___path.skin.dir___/js/template.js';

$config['head']['default']['css'] = array(
    "___path.skin.dir___/css/reset.css",
    "___path.skin.dir___/css/base.css",
    "___path.framework.dir___/js/vendor/markitup/skins/synio/style.css",
    "___path.framework.dir___/js/vendor/markitup/sets/synio/style.css",
    "___path.framework.dir___/js/vendor/jcrop/jquery.Jcrop.css",
    "___path.framework.dir___/js/vendor/prettify/prettify.css",
    "___path.skin.dir___/css/grid.css",
    "___path.skin.dir___/css/common.css",
    "___path.skin.dir___/css/text.css",
    "___path.skin.dir___/css/forms.css",
    "___path.skin.dir___/css/buttons.css",
    "___path.skin.dir___/css/navs.css",
    "___path.skin.dir___/css/icons.css",
    "___path.skin.dir___/css/tables.css",
    "___path.skin.dir___/css/topic.css",
    "___path.skin.dir___/css/comments.css",
    "___path.skin.dir___/css/blocks.css",
    "___path.skin.dir___/css/modals.css",
    "___path.skin.dir___/css/blog.css",
    "___path.skin.dir___/css/profile.css",
    "___path.skin.dir___/css/wall.css",
    "___path.skin.dir___/css/infobox.css",
    "___path.skin.dir___/css/jquery.notifier.css",
    "___path.skin.dir___/css/smoothness/jquery-ui.css",
    "___path.skin.dir___/themes/___view.theme___/style.css",
    "___path.skin.dir___/css/print.css",
);


return $config;

// EOF