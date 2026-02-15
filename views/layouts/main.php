<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="min-h-dvh flex flex-col">
<?php $this->beginBody() ?>

<!-- Header -->
<header id="page-header"
        class="flex flex-none items-center sticky top-0 py-2 z-100 px-4">
    <!-- Main Header Content -->
    <div
            id="page-header-content"
            class="container mx-auto flex items-center justify-between px-4 py-6 lg:px-8 xl:max-w-7xl transition duration-200 ease-in rounded-full border border-transparent"
    >
        <!-- Left Section -->
        <div class="flex items-center gap-4">
            <!-- Logo -->
            <a
                    href="/"
                    class="group inline-flex items-center gap-2 text-lg font-extrabold text-gray-900 hover:opacity-75 dark:text-gray-100"
            >
                <img src="/svgs/innoflow-logo.svg" alt="Innoflow Logo" class="h-4"/>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="flex items-center gap-2 sm:gap-4">
            <!-- Mega Menu visible on large screens -->
            <ul class="mt-0.5 hidden items-center lg:flex">
                <li
                        class="group relative [&:focus-within>div]:visible [&:focus-within>div>div>div]:translate-y-0 [&:focus-within>div>div>div]:opacity-100"
                >
                    <!-- Solutions Button -->
                    <button
                            type="button"
                            class="inline-flex h-8 items-center gap-1 px-2.5 text-sm font-semibold text-gray-900 group-hover:text-gray-600 dark:text-gray-100 dark:group-hover:text-gray-400"
                            onclick="this.blur()"
                    >
                        <span>Solutions</span>
                        <i class="fa-solid fa-chevron-down opacity-50 text-xs"></i>
                    </button>
                    <!-- END Solutions Button -->

                    <!-- Solutions Menu -->
                    <div
                            class="invisible absolute top-6 left-1/2 z-1 -ml-40 w-80 pt-6 group-hover:visible"
                    >
                        <div
                                class="overflow-hidden rounded-xl bg-white shadow-xl ring-4 shadow-gray-500/5 ring-gray-300/25 dark:bg-gray-900 dark:shadow-gray-950/10 dark:ring-white/5"
                        >
                            <div
                                    class="-translate-y-5 p-3 opacity-0 transition duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100"
                            >
                                <nav class="flex flex-col gap-1">
                                    <a
                                            href="/site/sales-solution"
                                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                                    >
                                        <div
                                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                                        >
                                            <i class="fa-regular fa-scale-balanced"></i>
                                        </div>
                                        <div class="space-y-0.5">
                                            <h5 class="font-semibold">Sales Flow</h5>
                                            <p
                                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                                            >
                                                Track leads through custom stages and keep follow-ups
                                                visible.
                                            </p>
                                        </div>
                                    </a>
                                    <a
                                            href="/site/hr-solution"
                                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                                    >
                                        <div
                                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                                        >
                                            <i class="fa-regular fa-people-group"></i>
                                        </div>
                                        <div class="space-y-0.5">
                                            <h5 class="font-semibold">HR Flow</h5>
                                            <p
                                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                                            >
                                                Move candidates through interview steps using your own
                                                process.
                                            </p>
                                        </div>
                                    </a>
                                    <a
                                            href="/site/project-solution"
                                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                                    >
                                        <div
                                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                                        >
                                            <i class="fa-regular fa-diagram-project"></i>
                                        </div>
                                        <div class="space-y-0.5">
                                            <h5 class="font-semibold">Project Flow</h5>
                                            <p
                                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                                            >
                                                Organize work by status and ownership so progress is always
                                                clear.
                                            </p>
                                        </div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- END Solutions Menu -->
                </li>
                <li class="group relative">
                    <a
                            href="/site/contact"
                            class="inline-flex h-8 items-center gap-1 px-2.5 text-sm font-semibold text-gray-900 group-hover:text-gray-600 dark:text-gray-100 dark:group-hover:text-gray-400"
                    >
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <!-- END Mega Menu visible on large screens -->

            <!-- Actions -->
            <!--            <div class="hidden lg:flex items-center justify-center gap-2">-->
            <!--                <a-->
            <!--                        href="/site/login"-->
            <!--                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-800 bg-gray-800 px-3 py-2 text-sm leading-5 font-semibold text-white hover:border-gray-700 hover:bg-gray-700 hover:text-white focus:ring-3 focus:ring-gray-400/50 active:border-gray-800 active:bg-gray-800 dark:focus:ring-gray-400/90"-->
            <!--                >-->
            <!--                    <span>Login</span>-->
            <!--                    <i class="fa-solid fa-angle-right opacity-50 text-xs"></i>-->
            <!--                </a>-->
            <!--            </div>-->
            <!-- END Actions -->

            <!-- Open Mobile Navigation -->
            <div class="lg:hidden">
                <button
                        id="mobile-menu-open-button"
                        type="button"
                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-transparent dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                        aria-controls="tkMobileNav"
                >
                    <svg
                            class="hi-mini hi-bars-3 -mx-0.5 inline-block size-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                    >
                        <path
                                fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd"
                        />
                    </svg>
                </button>
            </div>
            <!-- END Open Mobile Navigation -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Main Header Content -->

    <!-- Mobile Navigation -->
    <!--
      Visibility
        Closed        'hidden'
        Opened        '' (no class)

      Show/Hide with transitions
        enter         'transition ease-out duration-200'
        enter-start   'opacity-0 scale-50'
        enter-end     'opacity-100 scale-100'
        leave         'transition ease-in duration-150'
        leave-start   'opacity-100 scale-100'
        leave-end     'opacity-0 scale-50'

      aria-modal="true"
        Set value to 'true' when the mobile nav is open

      role="dialog"
        Set value to 'dialog' when the mobile nav is open
    -->
    <nav
            id="mobile-menu"
            data-transition-name="fade-scale"
            class="fixed hidden inset-0 z-50 m-4 origin-top-right overflow-auto rounded-lg bg-white/95 shadow-lg sm:container sm:mx-auto lg:hidden dark:bg-gray-800/95"
            tabindex="-1"
            aria-labelledby="tkMobileNavLabel"
            aria-modal="true"
            role="dialog"
    >
        <div class="flex items-center justify-between p-6">
            <!-- Logo -->
            <a
                    href="/"
                    class="group inline-flex items-center gap-2 text-lg font-extrabold text-gray-900 hover:opacity-75 dark:text-gray-100"
            >
                <img src="/svgs/innoflow-logo.svg" alt="Innoflow Logo" class="h-4"/>
            </a>
            <!-- END Logo -->

            <!-- Close Mobile Navigation -->
            <button
                    id="mobile-menu-close-button"
                    type="button"
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
            >
                <svg
                        class="hi-mini hi-x-mark -mx-0.5 inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                >
                    <path
                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"
                    />
                </svg>
            </button>
            <!-- END Close Mobile Navigation -->
        </div>
        <div class="h-px bg-gray-200/75 dark:bg-gray-700/75"></div>
        <div class="flex flex-col gap-8 px-6 py-6">
            <div class="grid grid-cols-1 gap-6">
                <h3 class="col-span-2 font-semibold">Products</h3>
                <nav class="-mx-3 flex flex-col gap-1">
                    <a
                            href="/site/sales-solution"
                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                    >
                        <div
                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                        >
                            <i class="fa-regular fa-scale-balanced"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h5 class="font-semibold">Sales Flow</h5>
                            <p
                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                            >
                                Track leads through custom stages and keep follow-ups
                                visible.
                            </p>
                        </div>
                    </a>
                    <a
                            href="/site/hr-solution"
                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                    >
                        <div
                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                        >
                            <i class="fa-regular fa-people-group"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h5 class="font-semibold">HR Flow</h5>
                            <p
                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                            >
                                Move candidates through interview steps using your own
                                process.
                            </p>
                        </div>
                    </a>
                    <a
                            href="/site/project-solution"
                            class="flex items-start gap-3 rounded-xl p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-gray-950 dark:text-gray-200 dark:hover:bg-gray-700/25 dark:hover:text-white"
                    >
                        <div
                                class="flex size-12 flex-none items-center justify-center rounded-xl border border-gray-200/75 text-gray-800 dark:border-gray-700/75 dark:text-gray-200"
                        >
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                    class="lucide lucide-puzzle inline-block size-6"
                            >
                                <path
                                        d="M15.39 4.39a1 1 0 0 0 1.68-.474 2.5 2.5 0 1 1 3.014 3.015 1 1 0 0 0-.474 1.68l1.683 1.682a2.414 2.414 0 0 1 0 3.414L19.61 15.39a1 1 0 0 1-1.68-.474 2.5 2.5 0 1 0-3.014 3.015 1 1 0 0 1 .474 1.68l-1.683 1.682a2.414 2.414 0 0 1-3.414 0L8.61 19.61a1 1 0 0 0-1.68.474 2.5 2.5 0 1 1-3.014-3.015 1 1 0 0 0 .474-1.68l-1.683-1.682a2.414 2.414 0 0 1 0-3.414L4.39 8.61a1 1 0 0 1 1.68.474 2.5 2.5 0 1 0 3.014-3.015 1 1 0 0 1-.474-1.68l1.683-1.682a2.414 2.414 0 0 1 3.414 0z"
                                />
                            </svg>
                        </div>
                        <div class="space-y-0.5">
                            <h5 class="font-semibold">Project Flow</h5>
                            <p
                                    class="text-xs leading-relaxed font-medium text-gray-500 dark:text-gray-400"
                            >
                                Organize work by status and ownership so progress is always
                                clear.
                            </p>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <div class="h-px bg-gray-200/75 dark:bg-gray-700/75"></div>
        <div class="flex flex-col gap-2 p-6 sm:flex-row">
            <a
                    href="/site/contact"
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
            >
                <span>Contact us</span>
            </a>

            <!--            <a-->
            <!--                    href="/site/login"-->
            <!--                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-700 bg-gray-700 px-3 py-2 text-sm leading-5 font-semibold text-white hover:border-gray-600 hover:bg-gray-600 hover:text-white focus:ring-3 focus:ring-gray-400/50 active:border-gray-700 active:bg-gray-700 dark:focus:ring-gray-400/90"-->
            <!--            >-->
            <!--                <span>Login</span>-->
            <!--                <i class="fa-solid fa-angle-right opacity-50 text-xs"></i>-->
            <!--            </a>-->
        </div>
    </nav>
    <!-- END Mobile Navigation -->

    <!-- Mobile Navigation Backdrop -->
    <!--
      Visibility
        Closed        'hidden'
        Opened        '' (no class)

      Show/Hide with transitions
        enter         'transition ease-out duration-200'
        enter-start   'opacity-0'
        enter-end     'opacity-100'
        leave         'transition ease-in duration-150'
        leave-start   'opacity-100'
        leave-end     'opacity-0'
    -->
    <div
            id="mobile-menu-backdrop"
            data-transition-name="fade"
            class="hidden fixed inset-0 z-40 bg-gray-900/20 backdrop-blur-xs will-change-auto lg:hidden dark:bg-gray-900/80"
    ></div>
    <!-- END Mobile Navigation Backdrop -->
</header>
<!-- END Header -->

<div id="page-container" class="mx-auto flex w-full min-w-80 flex-col overflow-hidden grow">
    <?= $content ?>
</div>

<!-- Footer Section: Simple with Social -->
<footer
        id="page-footer"
        class="dark:bg-gray-950 dark:text-gray-100 bg-gray-50"
>
    <div
            class="container mx-auto flex flex-col gap-6 px-4 py-8 text-center text-sm lg:flex-row-reverse lg:gap-0 lg:px-8 lg:py-16 xl:max-w-7xl"
    >
        <nav class="space-x-4 lg:w-1/3 lg:text-right">
            <a
                    href="#"
                    class="text-gray-400 hover:text-gray-800 dark:hover:text-white"
            >
                <svg
                        class="bi bi-twitter-x inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 16 16"
                        aria-hidden="true"
                >
                    <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"
                    />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-[#1877f2]">
                <svg
                        class="icon-facebook inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                >
                    <path
                            d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"
                    ></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-[#405de6]">
                <svg
                        class="icon-instagram inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                >
                    <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"
                    ></path>
                </svg>
            </a>
            <a
                    href="#"
                    class="text-gray-400 hover:text-[#333] dark:hover:text-gray-50"
            >
                <svg
                        class="icon-github inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                >
                    <path
                            d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"
                    ></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-[#ea4c89]">
                <svg
                        class="icon-dribbble inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                >
                    <path
                            d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12 12-5.373 12-12S18.628 0 12 0zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073a42.153 42.153 0 00-.767-1.68c2.31-1 4.165-2.358 5.548-4.082a9.863 9.863 0 012.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68a46.287 46.287 0 00-3.488-5.438A9.894 9.894 0 0112 2.087c2.275 0 4.368.779 6.043 2.072zM7.527 3.166a44.59 44.59 0 013.537 5.381c-2.43.715-5.331 1.082-8.684 1.105a9.931 9.931 0 015.147-6.486zM2.087 12l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48A9.865 9.865 0 012.087 12zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027a39.137 39.137 0 012.043 7.46c-3.349 1.291-6.953.666-9.641-1.433zm11.586.43a41.098 41.098 0 00-1.92-6.897c1.876-.265 3.94-.196 6.199.196a9.923 9.923 0 01-4.279 6.701z"
                    ></path>
                </svg>
            </a>
        </nav>
        <nav class="space-x-2 sm:space-x-4 lg:w-1/3 lg:text-center">
            <a
                    href="#"
                    class="font-medium text-gray-700 hover:text-gray-950 dark:text-gray-400 dark:hover:text-gray-50"
            >
                About
            </a>
            <a
                    href="#"
                    class="font-medium text-gray-700 hover:text-gray-950 dark:text-gray-400 dark:hover:text-gray-50"
            >
                Terms of Service
            </a>
            <a
                    href="#"
                    class="font-medium text-gray-700 hover:text-gray-950 dark:text-gray-400 dark:hover:text-gray-50"
            >
                Privacy Policy
            </a>
        </nav>
        <div
                class="text-gray-500 lg:w-1/3 lg:text-left dark:text-gray-400/80"
        >
            <span class="font-medium">Company Inc</span> ©
        </div>
    </div>
</footer>
<!-- END Footer Section: Simple with Social -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
