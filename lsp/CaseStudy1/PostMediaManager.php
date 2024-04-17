<?php

class PostMediaManager {
    private $socialMedia;

    public function __construct(SocialMedia $socialMedia) {
        $this->socialMedia = $socialMedia;
    }

    public function publishPost(): void {
        echo "Memposting media ke " . get_class($this->socialMedia) . "<br>";
        $this->socialMedia->sendPhotosAndVideos();
    }
}