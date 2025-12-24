<?php

namespace Mstudio\ContentElement;

use Contao\ContentElement;

class YoutubeLink extends ContentElement
{
    protected $strTemplate = 'ce_youtube_link';

    public function compile(): void
    {
        $videoId  = $this->youtube_link_id;
        $quality  = $this->youtube_link_quality ?: 'maxresdefault';

        $qualities = [
            $quality,
            'maxresdefault',
            'sddefault',
            'hqdefault',
            'mqdefault',
            'default'
        ];

        foreach ($qualities as $q) {
            $url = sprintf('https://img.youtube.com/vi/%s/%s.jpg', $videoId, $q);
            $headers = @get_headers($url);

            if ($headers && strpos($headers[0], '200') !== false) {
                $thumbnailUrl = $url;
                break;
            }
        }

        $this->Template->videoId      = $videoId;
        $this->Template->thumbnailUrl = $thumbnailUrl ?? null;
    }
}
