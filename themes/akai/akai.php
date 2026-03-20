<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class AKAI extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ];
    }

    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFilter(
            new \Twig\TwigFilter('nicefilesizerounded', [$this, 'niceFileSizeRoundedFunc'])
        );
    }

    public function niceFileSizeRoundedFunc($bytes)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= 1024 ** $pow;
        // $bytes /= (1 << (10 * $pow));

        return round($bytes) . ' ' . $units[$pow];
    }
}
