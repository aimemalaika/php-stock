<?php
/**
 * @package php-svg-lib
 * @link    http://github.com/PhenX/php-svg-lib
 * @author  Fabien Ménager <fabien.menager@gmail.com>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

namespace Svg\Tag;

use Svg\Surface\SurfaceInterface;

class Path extends Shape
{
    static $commandLengths = array(
        'm' => 2,
        'l' => 2,
        'h' => 1,
        'v' => 1,
        'c' => 6,
        's' => 4,
        'q' => 4,
        't' => 2,
        'a' => 7,
    );

    static $repeatedCommands = array(
        'm' => 'l',
        'M' => 'L',
    );

    public function start($attributes)
    {
        if (!isset($attributes['d'])) {
            $this->hasShape = false;

            return;
        }

        $commands = array();
        preg_match_all('/([MZLHVCSQTAmzlhvcsqta])([eE ,\-.\d]+)*/', $attributes['d'], $commands, PREG_SET_ORDER);

        $path = array();
        foreach ($commands as $c) {
            if (count($c) == 3) {
                $arguments = array();
                preg_match_all('/([-+]?((\d+\.\d+)|((\d+)|(\.\d+)))(?:e[-+]?\d+)?)/i', $c[2], $arguments, PREG_PATTERN_ORDER);
                $item = $arguments[0];
                $commandLower = strtolower($c[1]);

                if (
                    isset(self::$commandLengths[$commandLower]) &&
                    ($commandLength = self::$commandLengths[$commandLo