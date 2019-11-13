<?php
/**
 * Created by PhpStorm.
 * User: zhoujinlong
 * Date: 2019/11/12
 * Time: 23:51
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}