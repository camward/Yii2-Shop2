<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="bg-top">
    <div class="bgr">
        <!--==============================header=================================-->
        <header>
            <h1><a href="index.html"><img src="/images/logo.jpg" alt=""></a></h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.html">restaurant</a></li>
                    <li><a href="cuisine.html">cuisine</a></li>
                    <li><a href="wine_list.html">wine list</a></li>
                    <li class="current"><a href="cookbook.html">cookbook</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="contacts.html">contacts</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </header>
        <!--==============================content================================-->
        <section id="content"><div class="ic"></div>
            <div class="block-1">
                <div class="border-right">
                    <div class="block-1-title">
                        <span>01.</span>
                        <div class="text-1">Best<strong>cuisine</strong></div>
                        <strong class="clear"></strong>
                    </div>
                    <p class="border-1">This website template has several pages:  Restaurant, Cuisine, Wine List, CookBook, Gallery, Contacts (note that contact us form - doesn't work).</p>
                    <a href="#" class="link-1">read more</a>
                </div>
                <div class="border-right">
                    <div class="block-1-title">
                        <span>02.</span>
                        <div class="text-2">Good<strong>rest</strong></div>
                        <strong class="clear"></strong>
                    </div>
                    <p class="border-1">Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus.</p>
                    <a href="#" class="link-1">read more</a>
                </div>
                <div class="border-right">
                    <div class="block-1-title">
                        <span>03.</span>
                        <div class="text-3">Great<strong>service</strong></div>
                        <strong class="clear"></strong>
                    </div>
                    <p class="border-1">Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit velit eu magna.
                        Nunc viverra nisi sed orci.</p>
                    <a href="#" class="link-1">read more</a>
                </div>
                <div class="block-1-last">
                    <div class="block-1-title">
                        <span>04.</span>
                        <div class="text-4">Best<strong>cooks</strong></div>
                        <strong class="clear"></strong>
                    </div>
                    <p class="border-1">Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci.</p>
                    <a href="#" class="link-1">read more</a>
                </div>
            </div>
            <div class="block-2 pad-2">
                <div class="col-7">
                    <h2 class="h2-line-3">Cookbook:</h2>
                    <div class="box-5 top-4">
                        <div>
                            <div class="img-border"><img src="/images/page4-img1.jpg" alt=""></div>
                            <p><span class="it-bold clr-1">Vivamus hendrerit</span><br>ut dui gravida ut viverra lectus incidunt. Cras mattis tempor eros nec. </p>
                        </div>
                        <div>
                            <div class="img-border"><img src="/images/page4-img2.jpg" alt=""></div>
                            <p><span class="it-bold clr-2">Dui gravida ut viverra</span><br>lectus incidunt. Cras mattis tempor eros nec tristique fusce.</p>
                        </div>
                        <div>
                            <div class="img-border"><img src="/images/page4-img3.jpg" alt=""></div>
                            <p><span class="it-bold clr-1">Cras mattis tempor nec </span><br>tristique. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis.</p>
                        </div>
                        <div class="last">
                            <div class="img-border"><img src="/images/page4-img4.jpg" alt=""></div>
                            <p><span class="it-bold clr-2">Fusce tincidunt tellus </span><br>eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit. </p>
                        </div>
                    </div>
                    <div class="box-5 top-5 border-1">
                        <div>
                            <div class="img-border"><img src="/images/page4-img5.jpg" alt=""></div>
                            <p><span class="it-bold clr-1">Cras mattis tempor nec </span><br>tristique. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis. </p>
                        </div>
                        <div>
                            <div class="img-border"><img src="/images/page4-img6.jpg" alt=""></div>
                            <p><span class="it-bold clr-2">Fusce tincidunt tellus </span><br>eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit. </p>
                        </div>
                        <div>
                            <div class="img-border"><img src="/images/page4-img7.jpg" alt=""></div>
                            <p><span class="it-bold clr-2">Dui gravida ut viverra</span><br>lectus incidunt. Cras mattis tempor eros nec tristique fusce.</p>
                        </div>
                        <div class="last">
                            <div class="img-border"><img src="/images/page4-img8.jpg" alt=""></div>
                            <p><span class="it-bold clr-1">Vivamus hendrerit </span><br>ut dui gravida ut viverra lectus incidunt. Cras mattis tempor eros nec</p>
                        </div>
                    </div>
                    <a href="#" class="link-1">read more</a>
                </div>
                <div class="col-8 left-2">
                    <h5 class="h5-line">ChefвЂ™s secrets:</h5>
                    <div class="comment-2">
                        <p><img src="/images/comment-top-2.png" alt="" ><span class="clr-2 it-bold">Vivamus hendrerit mauris ut dui gravida ut viverra lectus incidunt. Cras mattis tempor eros nec tristique.</span><br>Sed sed felis arcu, vel vehicula. augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus.</p>
                        <div class="number"><strong>01.</strong><span class="clr-3 it-bold">Vivamus hendrerit mauris ut dui gravida ut viverra lectus incidunt. Cras mattis tempor eros nec tristique.</span></div>
                        <div class="number"><strong>02.</strong><span class="clr-3 it-bold">Cras mattis tempor eros nec tristique.Sed sed felis arcu, vel vehicula augue.</span></div>
                        <div class="number"><strong>03.</strong><span class="clr-3 it-bold">Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. <img src="/images/comment-bottom-2.png" alt="" class="second" ></span></div>
                        <span class="clr-1"><strong>John Green</strong> <i>(chef)</i></span>
                    </div>
                </div>
            </div>
        </section>

        <!--==============================footer=================================-->
        <footer>
            <p>Alex St © 2016</p>
        </footer>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
