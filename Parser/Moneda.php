<?php

/**
 * GI-Common-DVLP - Moneda
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\Common\Parser
 *
 * @version 0A.00
 * @since 18-11-16
 */

namespace GIndie\Common\Parser;

/**
 * Description of Moneda
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Moneda
{

    /**
     * 
     * @param string $value
     * @return string
     * @since 18-11-16
     */
    public static function contable($value)
    {
        return "$&nbsp;" . \number_format($value,2,".",",");
    }

}