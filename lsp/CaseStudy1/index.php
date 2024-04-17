<?php

include_once 'SocialMedia.php';
include_once 'WhatsApp.php';
include_once 'Instagram.php';
include_once 'PostMediaManager.php';

$socialMedia = new WhatsApp();
$postMediaManager = new PostMediaManager($socialMedia);
$postMediaManager->publishPost();

$socialMedia = new Instagram();
$postMediaManager = new PostMediaManager($socialMedia);
$postMediaManager->publishPost();