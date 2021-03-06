<?php

return [
    /**
     * --------------------------------------------------------------------------
     * Site base URL
     * --------------------------------------------------------------------------
     *
     * This base URL will be used to generate links for the @url blade
     * directive, it should always start with a forward slash.
     *
     */

    'base_url' => 'http://themsaid.app',

    /**
     * --------------------------------------------------------------------------
     * Enabling the blog generator
     * --------------------------------------------------------------------------
     *
     * When the blog generator is enabled, blade views in "source/_blog"
     * will be parsed to get blog posts data and generate blog
     * pagination views. Disable this option if you won't
     * have a blog to get a performance boost.
     *
     */

    'enableBlog' => true,

    /**
     * --------------------------------------------------------------------------
     * The number of posts in a page
     * --------------------------------------------------------------------------
     *
     * The number of posts to appear on every page in the blog pages.
     *
     */
    'postsPerPage' => 30,

    /**
     * --------------------------------------------------------------------------
     * The view used to display blog paginated pages
     * --------------------------------------------------------------------------
     *
     * This blade view will be used to generate the paginated list of
     * posts for the blog.
     *
     */

    'postsListView' => 'index',

    /**
     * --------------------------------------------------------------------------
     * The view used to generate RSS feed
     * --------------------------------------------------------------------------
     *
     * This blade view will be used to generate the RSS feed file.
     *
     */

    'rssFeedView' => '_includes.rss',

    /**
     * --------------------------------------------------------------------------
     * Custom variables
     * --------------------------------------------------------------------------
     *
     * Here you can set all the custom variables you'd like to be present in
     * the blade views.
     *
     */

    'siteName' => 'themsaid',

    'siteDescription' => 'Web developer [PHP, Laravel, Vue.js] & iOS beginner.',
];