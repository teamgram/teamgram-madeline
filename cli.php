<?php
require_once 'vendor/autoload.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->getSelf();

$MadelineProto->logger($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage(['peer' => '@benqi', 'message' => "Hi!\nThanks for creating MadelineProto! <3"]);
    // $MadelineProto->channels->joinChannel(['channel' => '@MadelineProto']);
    //
    // try {
    //     $MadelineProto->messages->importChatInvite(['hash' => 'https://t.me/joinchat/Bgrajz6K-aJKu0IpGsLpBg']);
    // } catch (\danog\MadelineProto\RPCErrorException $e) {
    //     $MadelineProto->logger($e);
    // }

    // $MadelineProto->messages->sendMessage(['peer' => 'https://t.me/joinchat/Bgrajz6K-aJKu0IpGsLpBg', 'message' => 'Testing MadelineProto!']);
}
$MadelineProto->echo('OK, done!');
