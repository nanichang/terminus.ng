<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');


$botman->hears('Hello', function ($bot) {
    $bot->reply('Hi, Welcome to Terminus.ng');

    $bot->ask('May I know your name?', function($answer, $bot) {
        $bot->say('Welcome '.$answer->getText());
        $bot->say('How may i help you?'.$answer->getText());
    });
});

$botman->hears('Looking for a TV set', function ($bot) {
	$bot->reply('Thank you for showing interest in our services');
	$bot->reply('Referring you to the right channel now...');
	$bot->types();
	$bot->reply('Please hold on while i get the channel name...');
	$bot->ask('Is it ok if I add you to our WhatsApp Groups', function($answer, $bot) {
		$bot->say('Thank you for responding with '. $answer->getText());
		
	});
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
