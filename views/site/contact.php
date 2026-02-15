<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

/** @var string[] $companySizeOptions */

use manchenkov\yii\recaptcha\ReCaptchaWidget;
use yii\bootstrap5\ActiveForm;

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
            class="bg-gray-50/95 dark:bg-gray-900/95 dark:text-gray-100 grow relative"
    >
        <?php if (Yii::$app->session->getFlash('contactFormSubmitted')): ?>
            <!-- Banners: Top Bubble -->
            <div
                    data-transition-name="fade"
                    data-is-open="true"
                    hidden
                    class="fixed bottom-0 right-0 z-60 m-2 flex items-center justify-between rounded-lg bg-indigo-500 p-4 shadow-lg sm:m-4 banner-container"
            >
                <div class="inline-flex items-center text-blue-50">
                    <p class="text-sm font-medium">
                        <?= Yii::$app->session->getFlash('contactFormSubmitted'); ?>
                    </p>
                </div>
                <div class="ml-2 flex items-center">
                    <button
                            type="button"
                            class="banner__close-button inline-flex items-center justify-center rounded-sm p-1 text-white opacity-75 hover:opacity-100 focus:ring-3 focus:ring-gray-500/25 focus:outline-hidden active:opacity-75"
                    >
                        <i class="fa-solid fa-xmark inline-block"></i>
                    </button>
                </div>
            </div>
            <!-- END Banners: Top Bubble -->
        <?php endif; ?>

        <div class="container mx-auto px-4 py-8 lg:px-8 lg:py-16 xl:max-w-7xl">
            <div class="flex flex-col gap-4 md:gap-16 lg:flex-row lg:items-center">
                <!-- Heading with Company Info -->
                <div class="lg:w-2/5">
                    <div
                            class="inline-block mb-1 text-sm font-bold tracking-wider uppercase bg-linear-to-r from-indigo-500 to-rose-500 bg-clip-text text-transparent"
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
                    <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => [
                                    'class' => 'space-y-6 p-5 md:p-10'
                            ],
                            'fieldConfig' => [
                                    'template' => "<div class='space-y-1'>{label}\n{input}\n{error}</div>",
                                    'labelOptions' => ['class' => 'inline-block font-medium'],
                                    'inputOptions' => ['class' => 'block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-500/50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-indigo-500'],
                                    'errorOptions' => ['class' => 'text-rose-600 text-sm'],
                            ],
                    ]); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>

                    <?= $form->field($model, 'company')->textInput() ?>

                    <?= $form->field($model, 'company_size', [
                            'options' => ['class' => 'space-y-1'],
                            'labelOptions' => ['class' => 'inline-block font-medium'],
                            'inputOptions' => ['class' => 'block w-full rounded-lg border border-gray-200 py-3 pr-10 pl-5 leading-6 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-500/50 dark:border-gray-600 dark:bg-gray-800 dark:focus:border-indigo-500']
                    ])->dropDownList($companySizeOptions, [
                            'class' => ['class' => 'block w-full rounded-lg border border-gray-200 py-3 pr-10 pl-5 leading-6 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-500/50 dark:border-gray-600 dark:bg-gray-800 dark:focus:border-indigo-500']
                    ]) ?>

                    <?= $form->field($model, 'message')->textarea(['rows' => 3, 'class' => 'block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-indigo-500 focus:ring-3 focus:ring-indigo-500/50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-indigo-500']) ?>

                    <?= $form->field($model, 'captcha')->widget(ReCaptchaWidget::class, ['preloading' => true]); ?>


                    <div
                            class="flex flex-col justify-center gap-3 sm:flex-row sm:items-center lg:justify-start pt-10"
                    >
                        <div class="relative w-full">
                            <div
                                    class="pointer-events-none absolute -inset-x-12 -inset-y-7 rounded-3xl bg-linear-to-r from-indigo-500 to-rose-500 opacity-20 blur-2xl dark:from-indigo-300 dark:to-rose-300"
                            ></div>
                            <button
                                    type="submit"
                                    href="/site/contact"
                                    class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-linear-to-r from-indigo-500 to-rose-500 px-8 py-4 leading-6 font-semibold text-white hover:opacity-95 hover:text-white focus:ring-3 focus:ring-indigo-400/50 dark:focus:ring-indigo-400/90 hover:scale-102 transition-all ease-in duration-150"
                            >

                                <span class="">Submit</span>
                                <i class="fa-solid fa-paper-plane-top inline-block opacity-50 transition group-hover:translate-x-1"></i>
                            </button>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <!-- END Contact Form -->
            </div>
        </div>
    </div>
</div>
<!-- END Contact Section: With Image Cover -->
