<?php 
class Input
{
    // kiểm tra request truyền lên
    public static function exists($type = 'post')
    {
        switch ($type) {
            case 'post':
                return (!empty($_POST)) ? true : false ;
                break;
            case 'get':	
                return (!empty($_GET)) ? true  : false;
                break;

            default:
                return false;
                break;
        }
    }
    // lấy giá trị input
    public static function get($item)
    {
        if (isset($_POST[$item]))
        {
            return $_POST[$item];

        }else if(isset($_GET[$item]))
        {
            return $_GET[$item];

        }else if(isset($_FILES[$item]))
        {

            return $_FILES[$item];
            
        }
        return '';
    }
} 