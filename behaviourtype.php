<?php

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../interactive/behaviourtype.php');

class qbehaviour_appstester_type extends question_behaviour_type {
    public function can_questions_finish_during_the_attempt(): bool
    {
        return true;
    }

    public function allows_multiple_submitted_responses(): bool
    {
        return true;
    }
}