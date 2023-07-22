<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->registerCssFile('/css/landing/style.css');

$this->title = 'Landing';

$lang = 'ru';

if(Yii::$app->request->get('lang')) {
    if(Yii::$app->request->get('lang') == 'kz') {
        $lang = 'kz';
    }
    else {
        $lang = 'ru';
    }
}


?>
<div class="landing-index">

    <div class="header">
        <div class="logo">
            <img src="/images/landing/logo.svg" alt="logo">
        </div>
        <div class="lang">
            <div><a href="<?= Url::to(['/landing/index', 'lang' => 'ru']) ?>">RU</a></div>
            <div>|</div>
            <div><a href="<?= Url::to(['/landing/index', 'lang' => 'kz']) ?>">KZ</a></div>
        </div>
    </div>

    <div class="bonus">
        <img src="/images/landing/bonus_<?= $lang ?>.svg" alt="bonus">
    </div>

    <section class="steps">
        <div class="title">
            <?= ($lang == 'ru') ? $step->title_ru : $step->title_kz ?>
        </div>
        <div class="blocks">
            <?php foreach ($steps as $item) { ?>
            <div class="block">
                <div class="img">
                    <img src="/images/landing/<?= $item->id ?>.png" alt="steps">
                </div>
                <div class="text">
                    <?= ($lang == 'ru') ? $item->description_ru : $item->description_kz ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <section class="chests">
        <div class="title">
            <?= ($lang == 'ru') ? $chest->title_ru : $chest->title_kz ?>
        </div>
        <div class="title2">
            <?= ($lang == 'ru') ? $chest->description_ru : $chest->description_kz ?>
        </div>
        <div class="blocks">
            <?php foreach ($chests as $item2) { ?>
            <div class="block">
                <div class="img">
                    <img src="/images/landing/<?= $chest->name_dir ?>/<?= $item2->image ?>.png" alt="carusel">
                </div>
                <div class="text">
                    <?= ($lang == 'ru') ? $item2->title_ru : $item2->title_kz ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <section class="ether">
        <div class="title">
            <?= ($lang == 'ru') ? $ether->title_ru : $ether->title_kz ?>
        </div>
        <div class="title2">
            <?= ($lang == 'ru') ? $ether->description_ru : $ether->description_kz ?>
        </div>
        <div class="block">
            <div class="img left">
                <img src="/images/landing/bonus2_<?= $lang ?>.svg" alt="bonus2">
            </div>
            <div class="img right">
                <img src="/images/landing/bonus_2.png" alt="bonus2">
            </div>
        </div>
        <div class="blocks">
            <div class="block">
                <div class="img">
                    <img src="/images/landing/ether/carusel_1.png" alt="carusel">
                </div>
                <div class="text">
                    Какой то сундук
                </div>
            </div>
        </div>
    </section>

    <section class="tournament">
        <div class="title">
            <?= ($lang == 'ru') ? $tournament->title_ru : $tournament->title_kz ?>
        </div>
        <div class="title2">
            <?= ($lang == 'ru') ? $tournament->description_ru : $tournament->description_kz ?>
        </div>
        <div class="blocks">
            <div class="block">
                <div class="img">
                    <img src="/images/landing/tournament/carusel_1.png" alt="carusel">
                </div>
                <div class="text">
                    Какой то сундук
                </div>
                <div class="text">
                    Какой то сундук
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="title">
            Часто задаваемые вопросы
        </div>
        <div class="blocks">

            <div class="block">
                <div class="title">
                    1. Как принять участие в акции?
                </div>
                <div class="description">
                    <p>Чтобы принять участие:</p>
                    <ul>
                        <li>Авторизуйтесь и перейдите на страницу Акции;</li>
                        <li>Нажмите на кнопку «Понятно», чтобы подтвердить участие;</li>
                        <li>Нажмите на кнопку «Понятно», чтобы подтвердить участие;</li>
                        <li>Собирайте очки из сундуков и поднимайтесь в рейтинге игроков;</li>
                        <li>Принимайте участие в еженедельных розыгрышах призов, включая билеты на поездку мечты, смартфон iPhone 14, игровую консоль PlayStation 5, смарт-часы Apple Watch 8, автохолодильник, комплект брендовых призов, надувной каркасный бассейн, наушники Airpods Pro 3 и бонусы на сумму 3 500 000 тенге еженедельно</li>
                    </ul>
                    <p>В период Акции пройдет 11 турниров с квестами. Чем выше сумма ставки, тем выше рейтинг и круче призы. Первые 1000 игроков в рейтинге также получают гарантированные подарки!</p>
                </div>
            </div>

        </div>
    </section>

</div>
