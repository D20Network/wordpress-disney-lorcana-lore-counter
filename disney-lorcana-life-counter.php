<?php
/**
 * Plugin Name: Disney Lorcana Life Counter
 * Description: A life counter and status conditions tracker for the Disney Lorcana card game.
 * Version: 1.0
 * Author: Void, Corp
 * License: GPL2
 */

function dlc_life_counter_enqueue_scripts() {
    wp_enqueue_style('dlc-life-counter-css', plugin_dir_url(__FILE__) . 'disney-lorcana-life-counter.css');
    wp_enqueue_script('dlc-life-counter-js', plugin_dir_url(__FILE__) . 'disney-lorcana-life-counter.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'dlc_life_counter_enqueue_scripts');

function dlc_life_counter_shortcode() {
    ob_start();
    ?>
    <div class="dlc-counter-container">
        <h1>Disney Lorcana Life Counter</h1>
        <div class="player-container">
            <h2>Player 1</h2>
            <div class="lp-display" data-lp="0">LP: 0</div>
            <button class="lp-btn" data-lp-change="1">+1</button>
            <button class="lp-btn" data-lp-change="-1">-1</button>
            <button class="lp-btn" data-lp-change="5">+5</button>
            <button class="lp-btn" data-lp-change="-5">-5</button>
            <div class="status-container">
                <label>Flying: <span class="status-toggle" data-status="Flying">Off</span></label>
                <label>Cursed: <span class="status-toggle" data-status="Cursed">Off</span></label>
                <label>Transformation: <span class="status-toggle" data-status="Transformation">Off</span></label>
                <label>Asleep: <span class="status-toggle" data-status="Asleep">Off</span></label>
                <label>Elixir of Strength: <span class="status-toggle" data-status="Elixir of Strength">Off</span></label>
                <label>Confused: <span class="status-toggle" data-status="Confused">Off</span></label>
                <label>Haunted Forest: <span class="status-toggle" data-status="Haunted Forest">Off</span></label>
                <label>Reduced Spellcasting: <span class="status-toggle" data-status="Reduced Spellcasting">Off</span></label>
            </div>
        </div>
        <div class="player-container">
            <h2>Player 2</h2>
            <div class="lp-display" data-lp="0">LP: 0</div>
            <button class="lp-btn" data-lp-change="1">+1</button>
            <button class="lp-btn" data-lp-change="-1">-1</button>
            <button class="lp-btn" data-lp-change="5">+5</button>
            <button class="lp-btn" data-lp-change="-5">-5</button>
            <div class="status-container">
                <label>Flying: <span class="status-toggle" data-status="Flying">Off</span></label>
                <label>Cursed: <span class="status-toggle" data-status="Cursed">Off</span></label>
                <label>Transformation: <span class="status-toggle" data-status="Transformation">Off</span></label>
                <label>Asleep: <span class="status-toggle" data-status="Asleep">Off</span></label>
                <label>Elixir of Strength: <span class="status-toggle" data-status="Elixir of Strength">Off</span></label>
                <label>Confused: <span class="status-toggle" data-status="Confused">Off</span></label>
                <label>Haunted Forest: <span class="status-toggle" data-status="Haunted Forest">Off</span></label>
                <label>Reduced Spellcasting: <span class="status-toggle" data-status="Reduced Spellcasting">Off</span></label>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('disney_lorcana_life_counter', 'dlc_life_counter_shortcode');
?>
