<?php

class WhatsApp extends SocialMedia {
    public function chat(): void {
        echo "Mengirim pesan teks melalui WhatsApp" . "<br>";
    }

    public function sendPhotosAndVideos(): void {
        echo "Mengirim foto dan video melalui WhatsApp" . "<br>";
    }
}