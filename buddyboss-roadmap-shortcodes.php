<?php
/*
Plugin Name: BB Roadmaps Shortcodes  Plugin
Description: A plugin to display the BuddyBoss 'Roadmap' and 'Milestone'  profile field.
Version: 1.2.0
Author: Gourav Shah
*/

function get_bb_roadmap_value() {
    $user_id = get_current_user_id();
    $field = 'Roadmap'; // Replace with the actual field identifier

    return bp_get_profile_field_data(array(
        'field'   => $field,
        'user_id' => $user_id
    ));
}

function get_bb_milestone_value() {
    $user_id = get_current_user_id();
    $field = 'Milestone'; // Replace with the actual field identifier

    return bp_get_profile_field_data(array(
        'field'   => $field,
        'user_id' => $user_id
    ));
}

function get_bb_challenge_value() {
    $user_id = get_current_user_id();
    $field = 'Challenge'; // Replace with the actual field identifier

    return bp_get_profile_field_data(array(
        'field'   => $field,
        'user_id' => $user_id
    ));
}

function bb_roadmap_shortcode_handler($atts) {
    $roadmap_value = get_bb_roadmap_value();
    return esc_html($roadmap_value);
}

function bb_milestone_shortcode_handler($atts) {
    $milestone_value = get_bb_milestone_value();
    return esc_html($milestone_value);
}

function bb_challenge_shortcode_handler($atts) {
    $challenge_value = get_bb_challenge_value();
    return esc_html($challenge_value);
}

add_shortcode('bb_roadmap', 'bb_roadmap_shortcode_handler');
add_shortcode('bb_milestone', 'bb_milestone_shortcode_handler');
add_shortcode('bb_challenge', 'bb_challenge_shortcode_handler');

