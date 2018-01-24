# Laravel Telegram Bot
use this package for working with telegram api bot, this package develped to work well with laravel but with some minor change you can use this with raw php

## INSTALLATION

```
composer require alish/telegram
```

### Additional Setup for Laravel 5 to 5.4
you need to add service provider and facade manually to config/app.php
```
'providers' => [
    //
    Alish\Telegram\TelegramServiceProvider::class
  
 ],
 
 'aliases' => [
    //
    'Telegram' => Alish\Telegram\Facades\Telegram::class
    
 ]
 
 
```

__for laravel 5.5 and above you don't need do this__

### Config file
publish config file 
```
  php artisan vendor:publish --provider="Alish\Telegram\TelegramServiceProvider"
```
then you see config file in config/telegram.php

config file is like below
```
'defaults' => [
            'token_bot' => '',
            'webhook' => '',
        ],

        'commands' => [
            'active' => false,
            'list' => [
                'start' => 'App\Class'
            ]
        ],

        'handlers' => [
            'CallbackQuery'      => null,
            'ChannelPost'        => null,
            'ChosenInlineResult' => null,
            'EditedChannelPost'  => null,
            'EditedMessage'      => null,
            'InlineQuery'        => null,
            'Message'            => null,
            'ShippingQuery'      => null,
            'PreCheckoutQuery'   => null
        ],

        'loaders' => [
            
        ]
```
#### Defaults
fill token_bot with token you get from [bot father](https://telegram.me/BotFather), and set webhook with your desire url (relative url)

#### Commands
if you want to handle commands receive from telegram api bot in specific class ypu can declare it here, first set 'active' to true, then in 'list' array list your command with related Class handlers.
classes specified in this file should inheret from ``` Alish\Telegram\TelegramCommand ```
then put your logic in handler function
__Example__
```
use Alish\Telegram\TelegramCommand;
use App\Http\Bot\State;

class StartCommand extends TelegramCommand
{

    public function handler()
    {
        // put your logic here
    }
}
```

you have access to __Message__ object with $this->message ([See Message Class](https://core.telegram.org/bots/api#message))
__NOTE__
*** if you active commands handler then you'll not get message in MessageHandler in your handlers section

### Handlers
in this section we splited message type that receieve from telegram to seperate class handlers, then for handle each type you need to declare related class.
class have been defined as handlers should inheret from __TelegramUpdateHandler__
__Example: __
```
use Alish\Telegram\TelegramUpdateHandler;

class CallbackQueryHandler extends TelegramUpdateHandler
{

    public function handler()
    {
        // put your logic here
    }
}
```

you have access to Update object with $this->update [See Update Documentation](https://core.telegram.org/bots/api#update)

### Loaders
if you want to do some actions before handle message you can define loader classes. this class receive update object recieve from telegram api
class have been define as loaders should inheret from __TelegramLoader__
__Example:__
```
use Alish\Telegram\TelegramLoader;

class StageHandler extends TelegramLoader
{

    public function process()
    {
         // put your logic here
    }
}
```

this loaders don't prevent from your defioned handlers to receive update, then be careful to use these

### Telegram Facade
with this facade you can do all actions defined in telegram api bot (See Available Methods)[https://core.telegram.org/bots/api#available-methods]

#### How to use this
you only need to use same methods in telegram api
__Example:__
```
  // sending Message:
  // you must provide required filed, optional field is still optional
  Telegram::sendMessage(['chat_id' => 'user chat id', 'text' => 'Welcome to my bot']);
  
  // forward message
  Telegram::forwardMessage(['chat_id' => 'user chat id', 'from_chat_id' => 'from chat id']);
  
```

because chat_id is require for all action except 1 or 2, you can use 
```
  Telegram::chatId('user chat id')->sendMessage(['text' => 'Welcome to my bot']);
  
  // instead of 
  // Telegram::sendMessage(['chat_id' => 'user chat id', 'text' => 'Welcome to my bot']);
```
### sending buttons
for sending buttons you need to json_encode button arrays
__Example__
```

 
  $buttons = [
    [
      ['text' => 'some text'],
      ['text' => 'some text']
    ],
    [
      ['text' => 'some text']
    ]
  ];
  
  $replyMarkup = json_encode(['keyboard' => $buttons])
  
  Telegram::chatId('user chat id')->sendMessage(['text' => 'Welcome to my bot', 'reply_markup' => $replyMarkup]);
```

### sending files
for sending files you need use getFile method from InputFile class
__Example:__

```
  use Alish\Telegram\Template\InputFile;
  
  Telegram::chatId($chatId)->sendVideo(['caption' => $text, 'video' => InputFile::getFile($pathToFile), 'reply_markup' => $buttons, 'reply_to_message_id' => 'message id']);

```


### getUser
you can get telegram user in recevied update with below command:
to see which information is in user object see (User Object)[https://core.telegram.org/bots/api#user]
```
  $telegramUser = Telegram::getUser();
```


### How this package works
all telegram object mapped to their classes, this means when an update receive from telegram api it maps to Update class, Update Class Contains:
```

  /**
     * @var integer $update_id
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
     */
    protected $update_id;

    /**
     * @var Message|null $message
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    protected $message;

    /**
     * @var Message|null $edited_message
     * Optional. New version of a message that is known to the bot and was edited
     */
    protected $edited_message;

    /**
     * @var Message|null $channel_post
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    protected $channel_post;

    /**
     * @var Message $edited_channel_post
     * Optional. New version of a channel post that is known to the bot and was edited
     */
    protected $edited_channel_post;

    /**
     * @var InlineQuery|null $inline_query
     * Optional. New incoming inline query
     */
    protected $inline_query;

    /**
     * @var ChosenInlineResult|null $chosen_inline_result
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    protected $chosen_inline_result;

    /**
     * @var CallbackQuery|null $callback_query
     * Optional. New incoming callback query
     */
    protected $callback_query;

    /**
     * @var ShippingQuery|null $shipping_query
     * Optional. New incoming shipping query. Only for invoices with flexible price
     */
    protected $shipping_query;

    /**
     * @var PreCheckoutQuery|null $pre_checkout_query
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    protected $pre_checkout_query;
```
you can't access directly to this properties because this should initiate from what receivedd from telegram api, if you want to access to each property use dynamic method with 'get' prefix
for example for getting update_id use getUpdateId() method
if you want manipulate received message use set method to change properties, $update->setUpdateId('whatever');
