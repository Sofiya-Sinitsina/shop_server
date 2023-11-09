<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'Boxes';
?>

<?php
    $goods = new \app\models\Goods();
    $goods->name = 'gel';
    $goods->category = 'face';
    $goods->price = 600;
    $goods->description = 'kjfgskhgfhgfkgkfgkf';
    $goods->save();

?>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block text-black text-start position-absolute top-50">
                <h1>Боксы с доставкой</h1>
                <h1>прямо к вам домой</h1><br>
                <p>Это текст. Нажмите здесь, чтобы изменить его. <br> Расскажите посетителям сайта о себе</p><br>
                <button type="button" class="btn btn-dark"><a href="<?= Url::to(['podpiska'])?>" id="first_page_buttons">Заказать коробочки</a></button>
            </div>
            <img src="https://static.wixstatic.com/media/68c56f_d610707bcc8048b589d1e76d1bc30149~mv2.jpg/v1/fill/w_1349,h_812,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/68c56f_d610707bcc8048b589d1e76d1bc30149~mv2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <!--бренды-->
    <div id="carouselExampleIndicators" class="carousel slide">
        <h1 class="text-center">Бренды</h1>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= AppAsset::register($this)->baseUrl.'/img/br1.JPG'?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= AppAsset::register($this)->baseUrl.'/img/br2.JPG'?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center">Как мы работаем</h1><br>

    <!--три этапа как мы работаем-->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 text-center">
                <img src="<?= AppAsset::register($this)->baseUrl.'/img/car1.JPG'?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Выберите бокс</h4>
                    <h5 class="card-text">Это текст. Нажмите здесь, чтобы изменить его.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img src="<?= AppAsset::register($this)->baseUrl.'/img/car2.JPG'?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Выберите подписку</h4>
                    <h5 class="card-text">Это текст. Нажмите здесь, чтобы изменить его.</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img src="<?= AppAsset::register($this)->baseUrl.'/img/car3.JPG'?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Доставка раз в месяц</h4>
                    <h5 class="card-text">Это текст. Нажмите здесь, чтобы изменить его.</h5>
                </div>
            </div>
        </div>
    </div>

    <!--про упаковки-->
    <div class="text-center">
        <button type="button" class="btn btn-dark"><a href="<?= Url::to(['podpiska'])?>" id="first_page_buttons">Заказать коробочки</a></button>
        <h1>Наши упаковки</h1>
        <button type="button" class="btn btn-dark"><a href="<?= Url::to(['podpiska'])?>" id="first_page_buttons">Заказать коробочки</a></button>
        <br><br><br>
    </div>
<!--<div class="site-index">-->
<!---->
<!--    <div class="jumbotron text-center bg-transparent mt-5 mb-5">-->
<!--        <h1 class="display-4">Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 mb-3">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4 mb-3">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<?php
//$word1 = 'idealpad';
//$arr = [];
//$k = 0;
//for($i=0; $i<strlen($word1); $i++) {
//    if (str_contains($word1[$i], 'i')||str_contains($word1[$i], 'a')||str_contains($word1[$i], 'e')||str_contains($word1[$i], 'u')||str_contains($word1[$i], 'y')||str_contains($word1[$i], 'o')){
//$arr[$k]=$word1[$i];
//$k++;
//    }}
//$rev = array_reverse($arr);
//echo (implode(" ",$rev));
//
//?>
<!---->
<?php
//$numb = array(5,5,5,4,5,3,5,4,2,3,5);
//$res = [
//        "1" => 0,
//    "2" => 0,
//    "3" => 0,
//    "4" => 0,
//    "5" => 0,
//];
//for ($i = 0; $i<sizeof($numb); $i++){
//    switch ($numb[$i]){
//        case 1:
//            $res[1]++;
//            break;
//        case 2:
//            $res[2]++;
//            break;
//        case 3:
//            $res[3]++;
//            break;
//        case 4:
//            $res[4]++;
//            break;
//        case 5:
//            $res[5]++;
//            break;
//        default: break;
//    }
//}
//print_r($res);
//?>
<!--<br>-->
<?php
//$sotn = [];
//$cr = [];
//$k=0;
//
////creating an array from 30 elements that divided by 3
//while ($k<=29){
//    $val = rand(-10000,10000);
//    if($val%3==0){
//        $cr[$k]=$val;
//        $k++;
//    }
//}
//
////first version
////for ($i = 0; $i<100; $i++){
////    $sotn[$i] = rand(-10000,10000);
////    if($sotn[$i]%3==0 && $k<=29){
////        $cr[$k]=$sotn[$i];
////        $k++;
////    }
////}
//
////bubble sort
////$temp = $cr[0];
////for ($i=0; $i < sizeof($cr); $i++){
////    for ($j=0; $j<sizeof($cr)-$i-1; $j++){
////        if($cr[$j]>$cr[$j+1]){
////            $temp = $cr[$j];
////            $cr[$j]=$cr[$j+1];
////            $cr[$j+1]=$temp;
////        }
////    }
////}
//
//asort($cr,SORT_NUMERIC); //sorting the array
////var_dump($cr); //output the array
//
////var_dump(array_chunk($cr, 3));//implode("<br>",));
//echo implode("<br>",$cr);
//echo "<br>"."first part"."<br>";
//print_r(implode(" ",array_slice($cr, 0, 10, true)));
//echo "<br>"."second part"."<br>";
//print_r(implode(" ",array_slice($cr, 10, 10, true)));
//echo "<br>"."third part"."<br>";
//print_r(implode(" ",array_slice($cr, 20, 10, true)));
//
//?>