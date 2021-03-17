<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <!-- Primary Meta Tags -->
    <meta name="description" content="This is me personal website where I share thoughts on the music I love, as well as pictures of my vinyl collection.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://noisereactor.com/">
    <meta property="og:title" content="Noise Reactor – Find new music through my album collection!">
    <meta property="og:description" content="This is me personal website where I share thoughts on the music I love, as well as pictures of my vinyl collection.">
    <meta property="og:image" content="https://noisereactor.com/nr-main.jpeg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://noisereactor.com/">
    <meta property="twitter:title" content="Noise Reactor – Find new music through my album collection!">
    <meta property="twitter:description" content="This is me personal website where I share thoughts on the music I love, as well as pictures of my vinyl collection.">
    <meta property="twitter:image" content="https://noisereactor.com/nr-main.jpeg">
    <?php wp_head(); ?>
</head>

<body class="bg-gray-50 text-gray-700" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php $menu = wp_get_nav_menu_items('main'); ?>

    <div class="sticky bg-gray-50 top-0 z-40 shadow-md border-b-4 border-blue-600">
        <header class="content md:flex md:justify-between h-auto items-center pb-5 md:pb-5" x-data="{ isOpen: false }">
            <div class="flex justify-between h-auto items-center">
                <div class="logo">
                    <a href="<?= home_url(); ?>" aria-label="Site logo">
                        <svg class="fill-current" width="175" height="55" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 13.2C0 5.9 5.9 0 13.2 0h28.5c7.2 0 13.1 5.9 13.1 13.2v28.5c0 7.2-5.9 13.1-13.1 13.1H13.2C5.9 54.8 0 49 0 41.7V13.2zM11.8 28a.6.6 0 011.2 0v16.6a.6.6 0 01-1.2 0V28zm3.3 1c-.3 0-.6.2-.6.5v13.6a.6.6 0 101.2 0V29.5c0-.3-.3-.5-.6-.5zm2.7 1.5c-.3 0-.6.3-.6.6v10.4a.6.6 0 001.2 0V31.1c0-.3-.3-.6-.6-.6zm2.7 2c-.3 0-.6.2-.6.5v6.6a.6.6 0 101.2 0V33c0-.3-.3-.6-.6-.6zm-11.4-.6a.6.6 0 111.2 0v8.4a.6.6 0 11-1.2 0V32zm14.1-.2c-.3 0-.6.2-.6.5v8.1a.6.6 0 101.2 0v-8c0-.4-.3-.6-.6-.6zM6.4 36a.6.6 0 111.2 0v.4a.6.6 0 11-1.2 0V36zM26 33.6c-.3 0-.5.3-.5.6v4.6a.6.6 0 001.1 0v-4.6c0-.4-.2-.6-.6-.6zm2.2-.2a.6.6 0 111.1 0v5.8a.6.6 0 01-1.1 0v-5.8zm3.2 1.3c-.3 0-.5.3-.5.6v2.3a.6.6 0 101.1 0v-2.3c0-.3-.2-.6-.6-.6zm4.9.6a.6.6 0 011.1 0v2.3a.6.6 0 01-1.1 0v-2.3zm-2.2.2c-.3 0-.5.3-.5.6v1.2a.6.6 0 101.1 0V36c0-.3-.2-.6-.6-.6zm4.9.6a.6.6 0 111.1 0v1.2a.6.6 0 01-1.1 0V36zm-34.6-1c-.3 0-.6.3-.6.6V37a.6.6 0 101.2 0v-1.2c0-.3-.3-.6-.6-.6zm63-28c-.2-.5-.5-.7-1-.7h-4.2c-.5 0-.8.2-.8.8v18.3c0 .5.3.8.8.8h3.2c.6 0 .9-.3.9-.8v-9.2c0-.3.2-.4.3-.1l4 9.5c.1.4.4.6 1 .6h4.1c.6 0 .9-.3.9-.8V7.2c0-.6-.3-.8-.9-.8h-3.2c-.5 0-.8.2-.8.8v9.2c0 .3-.3.4-.4.1L67.3 7zm18.9-1.3c6.7 0 7.1 5 7.1 7v7.1c0 1.9-.4 7-7.1 7-6.8 0-7.2-5.1-7.2-7v-7.1c0-2 .4-7 7.2-7zm0 16.1c2 0 2.2-1.3 2.2-3.5v-4.1c0-2.2-.1-3.6-2.2-3.6s-2.3 1.4-2.3 3.6v4c0 2.3.2 3.6 2.3 3.6zm14.5-14.7c0-.6-.2-.8-.8-.8h-3.1c-.6 0-.9.2-.9.8v18.3c0 .5.3.8.9.8h3c.7 0 1-.3 1-.8V7.2zm16.8 4.6c0 .5-.2.8-.7 1l-3.3.6c-.5.1-.8-.1-1-.7-.1-1.2-1-1.9-2.4-1.9-1.1 0-1.8.7-1.7 1.3.2.8 1.4 1.3 3 2 2.7 1 6.4 2.5 6.4 6.7 0 .9-1 6-7.7 6-6 0-7.3-4-7.4-6.2 0-.5.2-.8.7-1l3.3-.7c.5 0 .8.2.9.8.1 1.3 1.2 2.1 2.5 2.1 1.4 0 2.4-.8 2.3-1.6-.2-.8-1.5-1.3-3-2-2.7-1-6.2-2.2-6.2-6.4 0-.9.5-5.9 7-5.9 5.8 0 7.2 3.8 7.3 5.9zm16-4.6c0-.6-.2-.8-.8-.8h-12c-.5 0-.8.2-.8.8v18.3c0 .5.3.8.9.8h12c.5 0 .8-.3.8-.8v-3.2c0-.6-.3-.9-.9-.9h-6.9c-.5 0-.8-.3-.8-.8v-1c0-.5.3-.8.8-.8h4.4c.6 0 .9-.3.9-.9v-3.2c0-.5-.3-.8-.9-.8h-4.4c-.5 0-.8-.3-.8-.9v-.9c0-.6.3-.8.8-.8h7c.5 0 .8-.4.8-.9V7.2zM73.5 43c-.1.1-.2.2-.1.4l3 5.6c.4.7 0 1.5-1 1.5h-3.2a.7.7 0 01-.6-.4l-3-5.7-.2-.1H67c-.5 0-.8.3-.8.9v4.5c0 .5-.4.8-1 .8h-3.1a.9.9 0 01-1-.8V31.4c0-.5.5-1 1-1h6.2c5.1 0 7.1 2.2 7.1 7 0 2.6-.6 4.4-2.1 5.5zm-2.8-5.6c0-1.7-.6-2-2-2H67c-.5 0-.8.5-.8 1v2c0 .6.3 1 .8 1h1.5c1.4 0 2-.2 2-2zm21.3-6c0-.5-.3-.8-.9-.8H79c-.5 0-.8.3-.8.8v18.3c0 .5.3.8.8.8h12c.6 0 .9-.2.9-.8v-3.2c0-.6-.3-.9-.9-.9h-6.9c-.5 0-.8-.3-.8-.8v-1c0-.5.3-.8.8-.8h4.4c.6 0 .9-.3.9-.8v-3.2c0-.6-.3-.9-.9-.9h-4.4c-.5 0-.8-.3-.8-.8v-1c0-.5.3-.8.8-.8h7c.5 0 .8-.3.8-.9v-3.2zM107 50.4c.6 0 .9-.3.9-1v-12c0-3.6-.6-7.4-7-7.4s-7 3.8-7 7.4v12c0 .7.3 1 .9 1H98c.5 0 .8-.2.8-.8V47c0-.6.3-.9.9-.9h2.4c.6 0 .9.3.9.9v2.5c0 .6.3.8.8.8h3.2zm-6.1-15c1.9 0 2 .6 2 2v3c0 .6-.2 1-.8 1h-2.4c-.6 0-.9-.4-.9-1v-3c0-1.4.2-2 2.1-2zM117.5 51c-6.8 0-7.2-5-7.2-7V37c0-1.9.4-7 7.2-7 6 0 7 4.1 7.1 6.3 0 .4-.2.8-.6.8l-3.2.8c-.6 0-1-.3-1.1-1-.2-1.2-.7-2-2.2-2-2.1 0-2.3 1.4-2.3 3.6v4.1c0 2.2.2 3.5 2.3 3.5 1.5 0 2-.7 2.1-2 .1-.6.6-1 1.1-.8l3.3.7c.4 0 .6.4.6.8-.1 2.2-1 6.3-7.1 6.3zm12.8-15.6c.5 0 .8.3.8.8v13.4c0 .5.3.8.9.8h3.2c.5 0 .8-.3.8-.8V36.2c0-.5.3-.8.9-.8h4c.5 0 .8-.3.8-.9v-3.2c0-.5-.3-.8-.8-.8h-14.6c-.6 0-.9.3-.9.8v3.2c0 .6.3.9.9.9h4zM150 30c6.8 0 7.2 5 7.2 6.9V44c0 2-.4 7-7.2 7-6.7 0-7.1-5-7.1-7V37c0-1.9.4-7 7.1-7zm0 16c2.1 0 2.3-1.3 2.3-3.5v-4c0-2.3-.2-3.6-2.3-3.6-2 0-2.2 1.3-2.2 3.5v4.1c0 2.2.1 3.5 2.2 3.5zm21.8-3v.3l3 5.6c.4.7 0 1.5-1 1.5h-3.2a.7.7 0 01-.7-.4l-3-5.7-.2-.1h-1.1c-.5 0-.9.3-.9.9v4.5c0 .5-.4.8-.9.8h-3.2a.9.9 0 01-.9-.8V31.4c0-.5.4-1 1-1h6.2c5 0 7 2.2 7 7 0 2.6-.6 4.4-2 5.5zm-2.7-5.7c0-1.7-.7-2-2-2h-1.5c-.5 0-.9.5-.9 1v2c0 .6.4 1 .9 1h1.4c1.4 0 2-.2 2-2z" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <path fill="#fff" d="M0 0h175v54.8H0z" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <button aria-label="Toggle menu" class="block md:hidden p-2 hover:bg-gray-200" @click="isOpen = !isOpen" @keydown.escape="isOpen = false">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 8h16M4 16h16"></path>
                    </svg>
                </button>
            </div>

            <nav class="md:inline" :class="isOpen ? 'show' : 'hidden'" @click.away="isOpen = false">
                <ul class="menu mt-5 md:mt-0 text-center">
                    <?php $activePage = $wp_query->queried_object_id;
                    foreach ($menu as $menuItem) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $menuItem->object_id == $activePage ? ' active' : '' ?>" href="<?= $menuItem->url ?>"><?= $menuItem->title; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
    </div>

    <div class="content">
