<?php
$error =[];
if ($_POST['name'] === '') {
    $error['name'] = 'blank';
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable = no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&family=Noto+Sans+JP&family=Zen+Kaku+Gothic+New&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/vendors/bootstrap-reboot.css">
    <link rel="stylesheet" href="styles/vendors/swiper.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <div id="global-container">
        <div id="container">
            <div class="mobile-menu__cover"></div>
            <div class="nav-trigger"></div>
            <header class="header">
                <div class="header__inner">
                    <div class="logo">
                        <img src="images/1639581919534 (1).jpg" alt="" class="logo__img">
                        <div class="logo__title">
                            <span class="logo__paint_1">“業界No.1を目指す”</span>
                            <span class="logo__paint_2">カワナ塗装</span>
                        </div>
                    </div>
                    <nav class="header__nav">
                        <ul class="header__ul">
                            <li class="header__li"><a href="index-2.html">ホーム</a></li>
                            <li class="header__li"><a href="company__info.html">会社概要</a></li>
                            <li class="header__li"><a href="contact.html">施工の流れ</a></li>
                            <li class="header__li"><a href="example.html">施工事例</a></li>
                            <li class="header__li"><a href="contact.html">弊社の特徴</a></li>
                            <li class="header__li"><a href="contact.html">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <button class="mobile-menu__btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <p class="menu_style">MENU</p>
                    </button>
                </div>

            </header>
            <div id="content">
                <div id="main-content">
                    <main>
                        <section class="question">
                            <div class="question__title">お問い合わせフォーム</div>
                            <form class="question__form" action="contact.php" method="POST">
                                <div class="question__cat1">

                                    <div class="question__q1"><label for="name">お問い合わせ内容<span
                                                class="required-mark">必須</span></label></div>
                                    <div class="question__box">
                                        <div class="question__cbox"><input id="money" class="question__check"
                                                type="checkbox" name="" value="見積もり"><label for="money">見積もり</label>
                                        </div>
                                        <div class="question__cbox"><input id="discuss" class="question__check"
                                                type="checkbox" name="" value="相談"><label for="discuss">相談</label></div>
                                        <div class="question__cbox3"><input id="other" class="question__check"
                                                type="checkbox" name="" value="その他"><label for="other">その他</label></div>
                                    </div>
                                </div>
                                <div class="question__red-t">お客様について教えてください</div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">お名前（漢字）<span
                                                class="required-mark">必須</span></label></div>
                                    <input class="question__text-box" type="text" id="name" name="name" placeholder="例）山田 太郎">
                                    <?php if ($error['name'] === 'blank'): ?> 
                                        <p class="error_msg">お名前をご記入ください</p>
                                    <?php endif; ?>
                    
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">お名前（ひらがな）<span
                                                class="required-mark">必須</span></label></div>
                                    <input class="question__text-box" type="text" id="name" name="name" placeholder="例）やまだ たろう">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="email">メールアドレス<span
                                                class="required-mark">必須</span></label></div>
                                    <input class="question__text-box" type="mail" id="email" name="email" placeholder="例）sample@kawanapaint.co.jp">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">電話番号<span
                                                class="required-mark">必須</span></label></div>
                                    <input class="question__text-box" type="tel" id="name" name="name" placeholder="例）123-456-7890">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">住所<span
                                                class="required-mark">必須</span></label></div>
                                    〒<input class="question__text-box adjust_add adjust_space" type="text" id="name" name="name">
                                    <select class="question__text-box adjust_space" name="sushi" placeholder="都道府県を選択">
                                        <option value="magro">都道府県を選択</option>
                                        <option value="magro">北海道</option>
                                        <option value="ika">青森県</option>
                                        <option value="ebi">岩手県</option>
                                        <option value="magro">宮城県</option>
                                        <option value="ika">秋田県</option>
                                        <option value="ebi">山形県</option>
                                        <option value="magro">福島</option>
                                        <option value="ika">茨城県</option>
                                        <option value="ebi">栃木県</option>
                                        <option value="magro">群馬県</option>
                                        <option value="ika">埼玉県</option>
                                        <option value="ebi">千葉県</option>
                                        <option value="ebi">東京都</option>
                                        <option value="ebi">神奈川県</option>
                                        <option value="ebi">山梨県</option>
                                        <option value="ebi">長野県</option>
                                        <option value="ebi">新潟県</option>
                                        <option value="ebi">富山県</option>
                                        <option value="ebi">石川県</option>
                                        <option value="ebi">福井県</option>
                                        <option value="ebi">岐阜県</option>
                                        <option value="ebi">静岡県</option>
                                        <option value="ebi">愛知県</option>
                                        <option value="ebi">三重県</option>
                                        <option value="ebi">滋賀県</option>
                                        <option value="ebi">京都府</option>
                                        <option value="ebi">大阪府</option>
                                        <option value="ebi">兵庫県</option>
                                        <option value="ebi">奈良県</option>
                                        <option value="ebi">和歌山県</option>
                                        <option value="ebi">鳥取県</option>
                                        <option value="ebi">島根県</option>
                                        <option value="ebi">岡山県</option>
                                        <option value="ebi">広島県</option>
                                        <option value="ebi">山口県</option>
                                        <option value="ebi">徳島県</option>
                                        <option value="ebi">香川県</option>
                                        <option value="ebi">愛媛県</option>
                                        <option value="ebi">高知県</option>
                                        <option value="ebi">福岡県</option>
                                        <option value="ebi">佐賀県</option>
                                        <option value="ebi">長崎県</option>
                                        <option value="ebi">熊本県</option>
                                        <option value="ebi">大分県</option>
                                        <option value="ebi">宮崎県</option>
                                        <option value="ebi">鹿児島県</option>
                                        <option value="ebi">沖縄県</option>
                                    </select>
                                    <input class="question__text-box adjust_space" type="text" id="name" name="name">
                                    <input class="question__text-box" type="text" id="name" name="name">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">塗替えの建物種別</label></div>
                                    <div class="question__box">
                                        <div class="question__cbox"><input id="" class="question__check" type="checkbox" name="" value="">一戸建て<label for=""></label></div>
                                        <div class="question__cbox"><input id="" class="question__check" type="checkbox" name="" value="">マンション<label for=""></label></div>
                                        <div class="question__cbox"><input id="" class="question__check" type="checkbox" name="" value="">店舗<label for=""></label></div>
                                        <div class="question__cbox"><input id="" class="question__check" type="checkbox" name="" value="">工場<label for=""></label></div>
                                        <div class="question__cbox"><input id="" class="question__check" type="checkbox" name="" value="">その他<label for=""></label></div>
                                    </div>
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">建物の坪数</label></div>
                                    <input class="question__text-box" type="text" id="name" name="name">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">建物の築年数</label></div>
                                    <input class="question__text-box" type="text" id="name" name="name">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="name">ご予算</label></div>
                                    <input class="question__text-box" type="text" id="name" name="name">
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="message">ご要望・お問い合わせ</label></div>
                                    <textarea class="question__area" id="message" name="message"></textarea>
                                </div>
                                <div class="question__cat">
                                    <div class="question__q"><label for="message">写真</label></div>
                                    <input type="file" name="example" accept="image/jpeg, image/png">
                                </div>
                                <div class="question__submit"><input type="submit" value="送信する"></div>
                            </form>
                        </section>



                    </main>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="logo logo_adjustment">
                <img src="images/1639581919534 (1).jpg" alt="" class="logo__img">
                <span class="logo__paint_footer">カワナ塗装</span>
            </div>
            <nav class="footer__nav">
                <ul class="footer__ul">
                    <li class="footer__li"><a href="index-2.html">ホーム</a></li>
                    <li class="footer__li"><a href="company_info.html">会社概要</a></li>
                    <li class="footer__li"><a href="contact.html">問い合わせ</a></li>
                </ul>
                <div class="footer__copyright">
                    &copy; Rainbowman
                </div>
            </nav>
        </footer>
        <footer>
            <div class="solid">
                <div class="houses__btn">
                    <div class="btn-wrap btn-wrap-pc-sp ">
                        <a id="button_font" href="" class="btn btn-pc-sp btn-pc-sp--contact">
                            お問い合せは<br>こちら

                        </a>
                        <a id="button_font" href="tel:070-2665-4460" class="btn btn-pc-sp btn-pc-sp--tel">
                            お電話はこちら<br>
                            <span class="number">070-2665-4460</span>

                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <nav class="mobile-menu">
            <ul class="mobile-menu__main">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="index.html">
                        <span class="main-title_mobile">ホーム</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="company_info.html">
                        <span class="main-title_mobile">会社概要</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="flow.html">
                        <span class="main-title_mobile">施工の流れ</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="example.html">
                        <span class="main-title_mobile">施工事例</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="strength.html">
                        <span class="main-title_mobile">弊社の特徴</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="contact.html">
                        <span class="main-title_mobile">お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="scripts/vendors/swiper.min.js"></script>
    <script src="scripts/vendors/TweenMax.min.js"></script>
    <script src="scripts/vendors/scroll-polyfill.js"></script>
    <script src="scripts/libs/scroll.js"></script>
    <script src="scripts/libs/text-animation.js"></script>
    <script src="scripts/libs/mobile-menu.js"></script>
    <script src="https://kit.fontawesome.com/e9223bf397.js" crossorigin="anonymous"></script>
    <script src="scripts/main1.js"></script>

</body>

</html>