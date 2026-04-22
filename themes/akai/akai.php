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
        
        $this->grav['twig']->twig()->addFilter(
            new \Twig\TwigFilter('titleizesafe', [$this, 'titleizeSafeFunc'])
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

    public static function titleizeSafeFunc($word, $uppercase = '')
    {
        $humanize = static::humanize($word);

        if ($uppercase === 'first') {
            $firstLetter = mb_strtoupper(mb_substr($humanize, 0, 1, "UTF-8"), "UTF-8");
            return $firstLetter . mb_substr($humanize, 1, mb_strlen($humanize, "UTF-8"), "UTF-8");
        } else {
            return mb_convert_case($humanize, MB_CASE_TITLE, 'UTF-8');
        }

    }

    public static function humanize($word, $uppercase = '')
    {
        $uppercase = $uppercase === 'all' ? 'ucwords' : 'ucfirst';

        return $uppercase(str_replace('_', ' ', preg_replace('/_id$/', '', $word)));
    }
}
