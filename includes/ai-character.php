<?php
function smartmelding_generate_character_grade() {
    $grades = ['A 🥳', 'B 🙂', 'C 😐', 'D 😬', 'E 😖', 'F 😱'];
    return $grades[array_rand($grades)];
}
