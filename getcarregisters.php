<?php
/**
 * Created by PhpStorm.
 * User: DANNY
 * Date: 09 jan 15
 * Time: 12:13
 */

echo json_encode(
    array(
        'car' => array(
            'number' => $_GET['car_number'],
            'registers' => array(
                '1' => ['1', '2', '3'],
                '2' => ['4', '5', '6'],
            ),
        ),
    )
);
