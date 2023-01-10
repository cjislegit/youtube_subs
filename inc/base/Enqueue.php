<?php

class Enqueue {
    public function register ()
    {
        //Calls the enqueue function
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));

        //Calls the create_class function
        add_action('widgets_init', array($this, 'create_class'));
    }

    public function enqueue ()
    {
       //Enqueue all our scripts
       wp_enqueue_style('youtube_subs_style', YOUTUBE_SUBS_URL . 'assets/styles.css');
       wp_enqueue_script('youtube_subs_script', YOUTUBE_SUBS_URL . 'assets/scripts.js');
       wp_register_script('google', 'https://apis.google.com/js/platform.js');
       wp_enqueue_script('google');
    }

    public function create_class () {
        register_widget('YoutubeSubs');
    }
}
