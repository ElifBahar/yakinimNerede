<?php

namespace App\Helper;


class Helper {
    public static function isImage($FileName)
    {

        $response = [
            'status' => 'error',
            'data' => ''
        ];
        $path_parts = pathinfo($FileName->getClientOriginalName());
        $validateFile = ['jpeg', 'bmp', 'png', 'jpg'];

        if (in_array($path_parts['extension'], $validateFile)) {

            $response = [
                'status' => 'ok',
                'data' => $path_parts
            ];

        } else {
            $response = [
                'status' => 'error',
                'data' => ''
            ];
        }
        return $response;

    }
}
