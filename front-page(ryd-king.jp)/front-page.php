<?php //トップページ用 ?><?php get_header(); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>

<div class="top">
<div class="mobile-logo"><a href="/"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/logo.png"></a></div>
<div class="top-msg">
KINGエージェンシーは、<br><span class="top-red">オリンピック選手、アスリート、音楽家など<br class="pc-br">夢をもって目標に向かって頑張る人たちをサポート</span><br class="pc-br">しているプロダクションです。
<a class="top-btn" href="https://lin.ee/YCFFMRA" target="_blank" rel="noopener"><img src="https://ryd-king.jp/wp-content/uploads/2023/11/line-icon.png">無料相談はこちら</a>
</div>
<div class="top-img"><img src="/wp-content/uploads/2023/11/img_lp_mv.webp" alt=""></div>
<a class="top-btn-m" href="https://lin.ee/YCFFMRA" target="_blank" rel="noopener"><img src="https://ryd-king.jp/wp-content/uploads/2023/11/line-icon.png">無料相談はこちら</a>
</div>

<article id="news">
<div class="inner">
<h2 class="h2-news"><span class="h2-font">N</span>EWS</h2>
<ul class="ul-news">
<?php
$args = array(
'posts_per_page' => 3 // 表示件数の指定
);
$posts = get_posts( $args );
foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
$category = get_the_category();
$cat_name = $category[0]->cat_name;
?>
<li><span class="new"><?php the_time('Y.m.d'); ?> <span class="catn"><?php echo $cat_name; ?></span> <a href="<?php the_permalink(); ?>" style="text-decoration:none;"><?php the_title(); ?></a></span>
<?php
endforeach; // ループの終了
wp_reset_postdata(); // 直前のクエリを復元する
?></li>
</ul>
<div class="more-btn"><a href="/news" class="btnarrow4">VIEW MORE</a></div>
</div>
</article>	
	
	
<article id="about">
<div class="inner">
<h2 class="h2-about"><span class="h2-font">O</span>UR SERVICE</h2>
TikTokでは、決まった報酬の割合を開示していませんが、これまでの売り上げと収益をみていると、ライバーは課金された金額（ギフトの金額）の30%〜40%程度を得ることができます。<br>
<br>
人との関係が希薄になってきている人たちは、スマホで繋がれる身近な存在を求めています。<br>
つながることで、人は安心して、あなたが何か夢や目標を持っていたら、それを応援してもらえる。それが人間の心理です。<br>
ありのままの姿で、あなたが叶えたい夢、目指している目標を話すことでファンに応援してもらえます。
<div class="more-btn"><a href="/service" class="btnarrow4">VIEW MORE</a></div>
</div>
</article>
	
	
<article id="adviser">
<h2 class="h2-adviser"><span class="h2-font">S</span>NS ADVISER</h2>
<div class="adviser-bx">
<div class="adviser-ctt">
<h3 class="h3-adviser">人事部　採用担当　小野エリカ</h3>
7歳からダンスを始めてプロのダンサーを目指して中学、高校とダンス部に所属していました。<br>
マドンナのバックダンサーに憧れて夢を追いかけて練習に励んでいましたが、高校３年生でヘルニアと膝の怪我のため、ダンサーになることを諦めました。<br>
その後、個人で数万人のフォロワーを抱えるまでインフルエンサーとして活動していましたが、「頑張る人を応援したい。夢をもつ人を応援したい」というKINGエージェンシーの理念に共感して、ＳＮＳアドバイザーとして活動を始めたことで、夢を一番近くで応援する人となれるようサポートをしています。（副業で、個人のインフルエンサーは継続中）
<div class="more-btn"><a href="/adviser" class="btnarrow4">VIEW MORE</a></div>
</div>
<div class="adviser-img-left"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/adviser1.jpg">
</div>
<div class="adviser-img-right"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/adviser2.jpg">
</div>
</div>
</article>	

	
<article id="support">
<h2 class="h2-support"><span class="h2-font">O</span>UR SUPPORT</h2>
<div class="support-bx">
<div class="tiktok-bg">
<div class="bk-filter">
<div class="support-ctt">
<h3 class="h3-support">TikTok LIVE</h3>
専門家でもなく、著名な人でもない人のライブ配信でギフト（投げ銭）が飛びかっています。<br>
普通の一般人だったのに、たった１年で数億円の年収を得るようになった若者。定年退職して特にやることがなかったオジサンが、半年で月商100万円も稼げるように。<br>
スーパーで時給1150円のバイトをしていた50歳のオバサンが月300万円を稼いでいます。
<div class="more-btn-w"><a href="/tiktok" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
<div class="fanclub-bg">
<div class="bk-filter">
<div class="support-ctt">
<h3 class="h3-support">ファンクラブ設立の支援</h3>
万が一、Tiktokや他のSNSのアカウントがプラットフォーム側から強制的に停止させられてしまったり、何かしらの問題でバンされてしまったら、一貫の終わりです。<br>
何とか復旧してもらったとしても、心配は尽きないことでしょう。<br>
そこで、私たちが管理するプラットフォームでファンクラブ運営をしてもらうというリスクヘッジをすることで、あなたは安定した収益を確保することができるのです。<br>
もちろん、Tiktokliveの報酬、ファンクラブの報酬の両方を手に入れることができます。
<div class="more-btn-w"><a href="/fanclub" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
<div class="case-bg">
<div class="bk-filter">
<div class="support-ctt">
<h3 class="h3-support">企業案件の提供</h3>
個人で活動するよりも大きな規模の企業案件に関わることができます。<br>
大企業と一緒に仕事をするインフルエンサーになるために、私たちのプロダクションを一緒に成長していきましょう。
<div class="more-btn-w"><a href="/marketing" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
</div>
</article>		
	
	
	
<article id="business">
<h2 class="h2-king"><span class="h2-font">K</span>ING AGENCY</h2>
<div class="business-bx">
<div class="ourbusiness-bg">
<div class="bk-filter2">
<div class="support-ctt">
<h3 class="h3-support">私たちのビジネス</h3>
ビットコインの価値が激増してニュースになった時のことを覚えていますか？<br>
Youtuberという言葉が流行りだした頃を覚えていますか？<br>
10年前にYoutuberは知られていなかったけれど、今では憧れの職業になりましたよね？<br>
インスタも、10年前にライバルが今ほど増える前から始めていたら、フォロワーを増やしやすくて有名インフルエンサーになれていたかも。<br>
そんなことを考えたことありませんか？
<div class="more-btn-w"><a href="/business" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
<div class="businessmodel-bg">
<div class="bk-filter2">
<div class="support-ctt">
<h3 class="h3-support">ビジネスモデル</h3>
インスタグラム、ツイッター、Tiktokを駆使して、ファンクラブへ誘導する、そして有名になるにつれ大きな企業案件を受けて成長していく。<br>
あなたは、私たちが設計したプランに沿って、視聴者とファンを増やしていくことで、間違いない方向に進み、成功を手にすることでしょう。
<div class="more-btn-w"><a href="/businessmodel" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
<div class="feature-bg">
<div class="bk-filter2">
<div class="support-ctt">
<h3 class="h3-support">KINGエージェンシーの特徴</h3>
私たちの会社は、インフルエンサーの報酬を高くしてあげることを重視しています。<br>
ある一部の他プロダクションとは違い、どうやったらインフルエンサーの収入を高くできるか考えて、会社のビジネスモデルを創りました。<br>
プロダクションと聞くと、報酬を中抜きされてしまうと思っていませんか？<br>
昔からの旧態依然のカタチをとっている芸能プロダクションのイメージだと、「事務所に所属すると収入が減ってしまう。<br>
個人でもアカウントをとって収入を得られるのだから個人でやったほうが収入が多くなる」と思うのではないでしょうか。
<div class="more-btn-w"><a href="/about" class="btnarrow3">VIEW MORE</a></div>
</div></div></div>
</div>
</article>	

	
<article id="member">
<h2 class="h2-member"><span class="h2-font">M</span>EMBER</h2>
<div class= "slider">
<div class="slider-ele"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/img1.jpg">〇〇　ライバー歴〇ヶ月</div>
<div class="slider-ele"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/img2.jpg">△△　ライバー歴〇ヶ月</div>
<div class="slider-ele"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/img3.jpg">××　ライバー歴〇ヶ月</div>
<div class="slider-ele"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/img4.jpg">□□　ライバー歴〇ヶ月</div>
<div class="slider-ele"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/img5.jpg">※※　ライバー歴〇ヶ月</div>
</div>	
</article>	
	
<article id="agency-flow">
<div class="inner">
<h2 class="h2-flow"><span class="h2-font">R</span>EGISTRATION</h2>

<div class="flow_design03">
<ul class="flow03">
<li>
<div class="flow-img"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/flow1.jpg" alt=""></div>
<div class="flow-ctt">
<p><span class="icon03">1</span>お申し込み</p>
<p>まずは、LINEからお友達追加してください。<br>必要な情報をお送りいただければライバー登録完了となります。</p>
</div>
</li>
  
<li>
<div class="flow-img"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/flow2.jpg" alt=""></div>
<div class="flow-ctt">
<p><span class="icon03">2</span>TikTokへの登録申請</p>
<p>審査用配信(1時間以上の配信を2日以上)<br>
(既にTikTok配信経験者の方は不要になります。)</p>
</div>
</li>
  
<li>
<div class="flow-img"><img src="https://ryd-king.jp/wp-content/uploads/2023/12/flow3.jpg" alt=""></div>
<div class="flow-ctt">
<p><span class="icon03">3</span>エージェンシーコードのご提供</p>
<p>無事、登録が承認されましたらTikTokから事務所登録に関するメッセージが来ますので、<br>ご対応頂けましたら正式加入となります。</p>
</div>
</li>
</ul>
</div>
</div>	
</article>
<article id="recruit">
<div class="recruit-bg"><div class="bk-filter">
<div class="company-ctt">
<h2 class="h2-recruit">RECRUIT</h2>
<a href="/recruit"><button class="cbtn"><span class="text">VIEW MORE</span><span>詳しく見る</span></button></a>
</div>
</div></div>
</article>
<article id="company">
<div class="company-bx">
<div class="philosophy-bg">
<div class="bk-filter3">
<div class="company-ctt">
<h3 class="h3-philosophy">PHILOSOPHY</h3>
<a href="/philosophy"><button class="cbtn"><span class="text">VIEW MORE</span><span>詳しく見る</span></button></a>
</div></div></div>
<div class="message-bg">
<div class="bk-filter3">
<div class="company-ctt">
<h3 class="h3-message">MESSAGE</h3>
<a href="/message"><button class="cbtn"><span class="text">VIEW MORE</span><span>詳しく見る</span></button></a>
</div>
</div></div>
<div class="staff-bg">
<div class="bk-filter3">
<div class="company-ctt">
<h3 class="h3-staff">STAFF</h3>
<a href="/staff"><button class="cbtn"><span class="text">VIEW MORE</span><span>詳しく見る</span></button></a>
</div></div></div>
<div class="company-bg">
<div class="bk-filter3">
<div class="company-ctt">
<h3 class="h3-company">COMPANY</h3>
<a href="/company"><button class="cbtn"><span class="text">VIEW MORE</span><span>詳しく見る</span></button></a>
</div></div></div>	
</div>
</article>	
<article id="contact">
<div class="contact-bg"><div class="bk-filter"><div class="company-ctt">
<h2 class="h2-contact">CONTACT</h2>
<a href="/contact"><button class="cbtn"><span class="text">CONTACT</span><span>お問い合わせ</span></button></a>
</div></div></div>
</article>	
	
	

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
	
</body>	
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  jQuery(".slider").slick({
　　slidesToShow: 3,
	  responsive: [
      {
        breakpoint: 481,
        settings: {
        slidesToShow: 1,
        },
      },
    ],
   dots:false,
   autoplay: true,
   autoplaySpeed: 2000,
   infinite: true,
    centerMode: true,
    centerPadding: "10%",
	      prevArrow: '<a><button class="slide-arrow prev-arrow"></button></a>',
    nextArrow: '<a><button class="slide-arrow next-arrow"></button></a>'
  });
</script>

	
<?php get_footer(); ?>

	
	
</html>