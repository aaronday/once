<?php

function home_page_display() {
    $date = _generate_date();
    $page_content = theme('home_page_view', array('date' => $date));
    return $page_content;
}

function _generate_date() {
    date_default_timezone_set('Asia/Chongqing');
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    switch ($year) {
        case '2015':
            $y = '二零一五';
            break;
        case '2016':
            $y = '二零一六';
            break;
        default:
            $y = '二零一五';
            break;
    }
    switch ($month) {
        case '01':
            $m = '一';
            break;
        case '02':
            $m = '二';
            break;
        case '03':
            $m = '三';
            break;
        case '04':
            $m = '四';
            break;
        case '05':
            $m = '五';
            break;
        case '06':
            $m = '六';
            break;
        case '07':
            $m = '七';
            break;
        case '08':
            $m = '八';
            break;
        case '09':
            $m = '九';
            break;
        case '10':
            $m = '十';
            break;
        case '11':
            $m = '十一';
            break;
        case '12':
            $m = '十二';
            break;
        default:
            $m = '一';
            break;
    }
    switch ($day) {
        case '01':
            $d = '一';
            break;
        case '02':
            $d = '二';
            break;
        case '03':
            $d = '三';
            break;
        case '04':
            $d = '四';
            break;
        case '05':
            $d = '五';
            break;
        case '06':
            $d = '六';
            break;
        case '07':
            $d = '七';
            break;
        case '08':
            $d = '八';
            break;
        case '09':
            $d = '九';
            break;
        case '10':
            $d = '十';
            break;
        case '11':
            $d = '十一';
            break;
        case '12':
            $d = '十二';
            break;
        case '13':
            $d = '十三';
            break;
        case '14':
            $d = '十四';
            break;
        case '15':
            $d = '十五';
            break;
        case '16':
            $d = '十六';
            break;
        case '17':
            $d = '十七';
            break;
        case '18':
            $d = '十八';
            break;
        case '19':
            $d = '十九';
            break;
        case '20':
            $d = '二十';
            break;
        case '21':
            $d = '二十一';
            break;
        case '22':
            $d = '二十二';
            break;
        case '23':
            $d = '二十三';
            break;
        case '24':
            $d = '二十四';
            break;
        case '25':
            $d = '二十五';
            break;
        case '26':
            $d = '二十六';
            break;
        case '27':
            $d = '二十七';
            break;
        case '28':
            $d = '二十八';
            break;
        case '29':
            $d = '二十九';
            break;
        case '30':
            $d = '三十';
            break;
        case '31':
            $d = '三十一';
            break;
        default:
            $d = '一';
            break;
    }

    return '今天是公元' . $y . '年' . $m . '月' . $d . '日，我们生命中最年轻的一天。';
}
