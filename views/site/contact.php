<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Contact Section: With Image Cover -->
<div
        class="bg-cover grow flex flex-col"
        style="
    background-image: url(&quot;https://cdn.tailkit.com/media/placeholders/photo-wpU4veNGnHg-1280x800.jpg&quot;);
  "
>
    <div
            class="bg-gray-50/95 dark:bg-gray-900/95 dark:text-gray-100 grow"
    >
        <div class="container mx-auto px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">
            <div class="flex flex-col gap-4 md:gap-16 lg:flex-row lg:items-center">
                <!-- Heading with Company Info -->
                <div class="lg:w-2/5">
                    <div
                            class="mb-1 text-sm font-bold tracking-wider uppercase bg-linear-to-r from-amber-500 to-rose-500 bg-clip-text text-transparent"
                    >
                        We reply in 24hrs
                    </div>
                    <h2 class="mb-0 md:mb-4 text-4xl font-black text-black dark:text-white">
                        Experience InnoFlow on your own
                    </h2>
                    <p
                            class="text-xl leading-relaxed font-medium text-gray-700 dark:text-gray-300 hidden md:block"
                    >
                        Request access and receive a tailored demo workspace built around how you actually operate.
                    </p>
                    <!--                    <h4 class="mt-10 mb-4 font-semibold tracking-wider uppercase">-->
                    <!--                        Questions before requesting a demo?-->
                    <!--                    </h4>-->
                    <!--                    <div-->
                    <!--                            class="leading-relaxed text-gray-600 dark:text-gray-400"-->
                    <!--                    >-->
                    <!--                        Email us at support@innoflow.com-->
                    <!--                        and we’ll be happy to help.-->
                    <!--                    </div>-->
                </div>
                <!-- END Heading with Company Info -->

                <!-- Contact Form -->
                <div
                        class="flex flex-col overflow-hidden rounded-2xl bg-white shadow-xs lg:mx-auto lg:w-1/2 dark:bg-gray-800 dark:text-gray-100"
                >
                    <form onsubmit="return false;" class="space-y-6 p-5 md:p-10">
                        <div class="space-y-1">
                            <label for="name" class="inline-block font-medium">Name</label>
                            <input
                                    id="name"
                                    name="name"
                                    class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-amber-500 focus:ring-3 focus:ring-amber-500/50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-amber-500"
                            />
                        </div>
                        <div class="space-y-1">
                            <label for="email" class="inline-block font-medium">Email</label>
                            <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-amber-500 focus:ring-3 focus:ring-amber-500/50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-amber-500"
                            />
                        </div>
                        <div class="space-y-1">
                            <label for="department" class="inline-block font-medium"
                            >Department</label
                            >
                            <select
                                    id="department"
                                    name="department"
                                    class="block w-full rounded-lg border border-gray-200 py-3 pr-10 pl-5 leading-6 focus:border-amber-500 focus:ring-3 focus:ring-amber-500/50 dark:border-gray-600 dark:bg-gray-800 dark:focus:border-amber-500"
                            >
                                <option>Sales</option>
                                <option>Support</option>
                                <option>Projects</option>
                                <option>Payments</option>
                                <option>Hiring</option>
                            </select>
                        </div>
                        <div class="space-y-1">
                            <label for="message" class="inline-block font-medium"
                            >Message</label
                            >
                            <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-amber-500 focus:ring-3 focus:ring-amber-500/50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-amber-500"
                            ></textarea>
                        </div>
                        <div
                                class="flex flex-col justify-center gap-3 sm:flex-row sm:items-center lg:justify-start pt-10"
                        >
                            <div class="relative w-full">
                                <div
                                        class="pointer-events-none absolute -inset-x-12 -inset-y-7 rounded-3xl bg-linear-to-r from-amber-500 to-rose-500 opacity-20 blur-2xl dark:from-amber-300 dark:to-rose-300"
                                ></div>
                                <a
                                        href="/site/contact"
                                        class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-linear-to-r from-amber-500 to-rose-500 px-8 py-4 leading-6 font-semibold text-white hover:opacity-95 hover:text-white focus:ring-3 focus:ring-amber-400/50 dark:focus:ring-amber-400/90 hover:scale-102 transition-all ease-in duration-150"
                                >

                                    <span class="">Submit</span>
                                    <i class="fa-solid fa-paper-plane-top inline-block opacity-50 transition group-hover:translate-x-1"></i>
                                    <!--                                    <svg-->
                                    <!--                                            class="hi-mini hi-paper-airplane "-->
                                    <!--                                            xmlns="http://www.w3.org/2000/svg"-->
                                    <!--                                            viewBox="0 0 20 20"-->
                                    <!--                                            fill="currentColor"-->
                                    <!--                                            aria-hidden="true"-->
                                    <!--                                    >-->
                                    <!--                                        <path-->
                                    <!--                                                d="M3.105 2.289a.75.75 0 00-.826.95l1.414 4.925A1.5 1.5 0 005.135 9.25h6.115a.75.75 0 010 1.5H5.135a1.5 1.5 0 00-1.442 1.086l-1.414 4.926a.75.75 0 00.826.95 28.896 28.896 0 0015.293-7.154.75.75 0 000-1.115A28.897 28.897 0 003.105 2.289z"-->
                                    <!--                                        />-->
                                    <!--                                    </svg>-->
                                    <!--                                    <i class="fa-solid fa-arrow-right text-xs "></i>-->
                                </a>
                            </div>
                        </div>
                        <!--                        <button-->
                        <!--                                type="submit"-->
                        <!--                                class="i rounded-lg border border-amber-700 bg-blue-700 px-8 py-4 leading-6 font-semibold text-white hover:border-blue-600 hover:bg-blue-600 hover:text-white focus:ring-3 focus:ring-blue-400/50 active:border-blue-700 active:bg-blue-700 dark:focus:ring-blue-400/90"-->
                        <!--                        >-->

                        <!--                            <span></span>-->
                        <!--                        </button>-->
                    </form>
                </div>
                <!-- END Contact Form -->
            </div>
        </div>
    </div>
</div>
<!-- END Contact Section: With Image Cover -->
