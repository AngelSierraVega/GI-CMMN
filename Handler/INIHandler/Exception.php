<?php

/**
 * GICommon - Exception 
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @package Common
 * @since 17-12-23
 */

namespace GIndie\INIHandler;

/**
 * Description of Exception
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @edit 17-12-23
 * - Clase prototipo
 * - Int constant. Updated __construct()
 * @edit 17-12-26
 * - Moved constants and constructor to \GIndie\Exception
 * - Created method: requiredVariable(), handleMessage()
 * - const REQUIRED_VAR moved from GIndie\Exception
 * - Updated method: handleMessage()
 * @version 0A.10
 * @edit 18-05-19
 * - Upgraded DocBlock and file version
 * @version 0A.50
 */
class Exception extends \GIndie\Exception
{

    /**
     * 
     * @factory
     * @since 17-12-26
     * 
     * @param string $pathToFile
     * @return \GIndie\Common\Exception
     */
    public static function requiredVariable($pathToFile, $varname)
    {
        return new static(static::REQUIRED_VAR, $pathToFile, $varname);
    }

    /**
     * REQUIRED_VAR
     * 
     * @var int
     * @since 17-12-23
     * @edit 17-12-23
     * - Renamed to FILE_REQUIRES_VAR from REQUIRED_VAR
     * @edit 17-12-26
     * - Moved from GIndie\Exception
     */
    const REQUIRED_VAR = 0;

    /**
     * 
     * @since 17-12-26
     * 
     * @param int $constant
     * @param string|null $param1
     * @param string|null $param2
     * @return string
     * @edit 17-12-26
     * - Removed static from visibility for using $this.
     * 
     */
    protected function handleMessage($constant, $param1 = null, $param2 = null)
    {
        $message = "";
        switch ($constant)
        {
            case static::REQUIRED_VAR:
                $formatMessage = static::$constants[self::class][$constant] . " " . $param2;
                $message = parent::handleMessage(static::FILE_FORMAT, $param1, $formatMessage);
                break;
            default:
                $message = parent::handleMessage($constant, $param1, $param2);
                break;
        }
        return $message;
    }

}
