<?php

namespace GIndie\Common;

/**
 * DVLP-GICommon - CommonProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GrupoIndie
 * @subpackage Common
 *
 * @version GI-CMMN.00.00 18-02-24 Empty class created.
 * @edit GI-CMMN.00.01
 * - Class extends ProjectHandler
 * - Implemented abstrac methods
 * - Created autoloaderFilename()
 * @edit GI-CMMN.00.02 18-02-27
 * - Remove autoloaderFilename()
 * - Renamed file from CommonProjectHandler.php to ProjectHandler.php
 */
class ProjectHandler extends \GIndie\ProjectHandler
{
    /**
     * 
     * @return string
     * @since GI-CMMN.00.01
     */
    public static function autoloaderFilenameDPR()
    {
        return "autoloader.php";
    }

    /**
     * 
     * @return string
     * @since GI-CMMN.00.01
     */
    public static function pathToSourceCode()
    {
        return \pathinfo(__FILE__, \PATHINFO_DIRNAME) . \DIRECTORY_SEPARATOR;
    }

    /**
     * 
     * @return string
     *  @since GI-CMMN.00.01
     */
    public static function projectName()
    {
        return "Common";
    }

    /**
     * 
     * @return null
     *  @since GI-CMMN.00.01
     */
    public static function projectNamespace()
    {
        return null;
    }

    /**
     * 
     * @return string
     *  @since GI-CMMN.00.01
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
