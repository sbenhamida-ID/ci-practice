<?php

function ci_practice_get_hero_image()
{
    echo esc_html($_GET['name'] ?? '');
}
