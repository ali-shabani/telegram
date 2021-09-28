<?php


namespace Alish\Telegram\API;

class Poll extends TelegramAPI
{

    /**
     * @var string $id
     * Unique poll identifier
     */
    public string $id;

    /**
     * @var string $question
     * Poll question, 1-255 characters
     */
    public string $question;

    /**
     * @var PollOption[]
     * List of poll options
     */
    public array $options;

    /**
     * @var int $total_voted_count
     * Total number of users that voted in the poll
     */
    public int $total_voted_count;

    /**
     * @var boolean $is_closed
     * True, if the poll is closed
     */
    public bool $is_closed;

    /**
     * @var bool $is_anonymous
     * True, if the poll is anonymous
     */
    public bool $is_anonymous;

    /**
     * @var string $type
     * Poll type, currently can be “regular” or “quiz”
     */
    public string $type;

    /**
     * @var bool $allows_multiple_answers
     * True, if the poll allows multiple answers
     */
    public bool $allows_multiple_answers;

    /**
     * @var int|null $correct_option_id
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode,
     * which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     */
    public ?int $correct_option_id;

    /**
     * @var string|null $explanation
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     */
    public ?string $explanation;

    /**
     * @var array|null $explanation_entities
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     */
    public ?array $explanation_entities;

    /**
     * @var int|null $open_period
     * Optional. Amount of time in seconds the poll will be active after creation
     */
    public ?int $open_period;

    /**
     * @var int|null $close_date
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     */
    public ?int $close_date;
}
