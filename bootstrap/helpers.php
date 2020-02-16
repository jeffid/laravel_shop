<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function ngrok_url($routeName, $parameters = [])
{
    // 开发环境，并且配置了 NGROK_URL
    if (app()->environment('local') && $url = config('app.ngrok_url')) {
        // route() 函数第三个参数代表是否绝对路径
        return $url . route($routeName, $parameters, false);
    }
    
    return route($routeName, $parameters);
}

/**
 * 返回BigNumber实例，默认的精度为小数点后两位
 * @param $number
 * @param int $scale
 * @return \Moontoast\Math\BigNumber
 */
function big_number($number, $scale = 2)
{
    return new \Moontoast\Math\BigNumber($number, $scale);
}

/**
 * 记录任意级别日志
 * @param $level
 * @param $msg
 * @param array $context
 */
function _log($level, $msg, $context = [])
{
    \Log::write($level, $msg, $context);
}


/**
 * 记录debug级别日志
 * @param $msg
 * @param $context
 */
function logDebug($msg, $context)
{
    _log('debug', $msg, $context);
}


function logInfo($msg, $context)
{
    _log('info', $msg, $context);
}


function logError($msg, $context)
{
    _log('error', $msg, $context);
}
