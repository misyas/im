<?php


namespace app\common\business\lib;


class Str
{
    public function createToken($str)
    {
        $tokenSalt = md5(uniqid(md5(microtime(true)),true));
        return sha1($tokenSalt);
    }

    public function salt($bit)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0;$i < $bit;$i++){
            $str .= substr($chars,mt_rand(0,strlen($chars) - 1),1);
        }
        return $str;
    }
}