## Quick guide

While test attempt is active, students' answers are stored within steps with active states, when test attempt is done, Moodle must create a finishing step, which is graded separately based on results of previous steps.

## Used question states

### States for active attempts' steps:

todo - nothing is submitted yet

complete - student submitted something, Moodle is waiting for AppsTester server's response

invalid - student's answer is checked

### States for finished attempts' steps:

finished - student's answer was submitted, but didn't reach checking while test attempt was active

gradedwrong - answer is completely wrong

gradedpartial - answer is partially correct

gradedright - answer is fully correct

### Why not switch places on invalid and complete states?

Older version of a plugin already used invalid state as "answer checked", therefore we have a lot of database records with "invalid" steps and different circumstances in step_data behind them, so updating "invalid" steps would lead to a catastrophe, due to how this plugin used to work.     