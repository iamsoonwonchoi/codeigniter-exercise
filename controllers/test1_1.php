<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test1_1 extends CI_Controller {
    function index(){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                토픽 메인 페이지
            </body>
        </html>
        ';
    }
    function get($id){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                토픽 '.$id.'
            </body>
        </html>
        ';
    }
}
?>