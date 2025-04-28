<?php

use App\Events\MessageSent;

Route::get('/send-message', function () {
    broadcast(new MessageSent('Hello, this is a test message!'));
    return 'Message sent!';
});
