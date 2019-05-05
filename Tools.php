<?php


class Tools
{
    /** @var Tools*/
    private static $_instance = null;

    /**
     * @return Tools
     */
    public static function Instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;

    }

    /**
     * @param $txt
     */
    public static function println($txt)
    {
        print_r('<p>'.$txt.'</p>');
    }
}