 <style type="text/css">


button.stripe-button-el>span {
  width: 130px;
  height: 40px;
  font-size:1.5rem;
  letter-spacing: 0.1em;
  text-align:center; 
  padding-top:6px;
  padding-left:20px;
  background:#228bc8;
                  }
                  
button.stripe-button-el>span:hover {
background: #fff;
                  color: #228bc8;
                  }




</style>

　　　　<div class=topimage>
            <div><img src="/storage/images/ichiropage.png" class="image"></div>
        </div>
          
          

　　　　
    　　<div class="items">
        	<div class="item1"><img src="/storage/images/video.png" class="icon"><h2>１５動画</h2><a>1動画は約3分〜15分</a></div>
        　　     <div class="item2"><img src="/storage/images/original.png" class="icon"><h2>独占配信</h2><a>完全オリジナルコンテンツ</a></div>
           　　 　 <div class="item3"><h2>¥５,０００</h2>
            	   　<form action="{{ asset('charge') }}" method="POST" class="text-center mt-5">
                      {{ csrf_field() }}
                         <script
                               src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                               data-key="{{ env('STRIPE_KEY') }}"
                               data-amount="5000"
                               data-name="クレジットカード決済"
                               data-label="購入する"
                               data-description="カード情報を入力して下さい"
                               data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                               data-locale="auto"
                               data-currency="JPY">
                          </script>
                      </form>
   　　       　 <div class="buy">無期限で何回でも視聴可能</div></div>
        </div>
            
            <script src="https://js.stripe.com/v3/"></script>
            <script src="js/payment.js"></script>
            
                     <div class="intro">新しいメンターと出会う<div class="intro2">日本初の野手のメジャーリーガーとして、国内外で数々の賞を受賞し、通算最多安打の世界記録も<br>持つ元プロ野球選手が、マインドセット、スキルセット、今に至るまでの人生を共有する</div></div>
                     <div class="yokoku">予告編</div>
                      <div class="yokokuvideo"><img src="/storage/images/yokoku.png"></div>
                     <div class="lesson">レッスン内容</div>
        　　<div class="container">
                      <div class="box">０１<div class="lessontitle">イントロダクション</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box">０２<div class="lessontitle">プロ野球選手になるまでの道のり</div><div class="lessontext">イチローがどのようにして今のキャリアを築いていったのかを学ぶ</div></div>
                      <div class="box">０３<div class="lessontitle">なぜその道を選んだのか</div><div class="lessontext">夢や目標をどう捉えて、考えて、実現していったのかを学ぶ</div></div>
                      <div class="box">０４<div class="lessontitle">イチローの人生哲学</div><div class="lessontext">イチローの生き方や考え方について学ぶ</div></div>
                      <div class="box">０５<div class="lessontitle">プロ野球選手として大切にしていたこと</div><div class="lessontext">プロ野球選手としての、イチローの生き方を学ぶ</div></div>
                      <div class="box">０６<div class="lessontitle">人生最大の挫折経験と乗り越え方</div><div class="lessontext">挫折経験についてどう考えて、乗り越えていったのかを学ぶ</div></div>
                      <div class="box">０７<div class="lessontitle">不安やプレッシャーとの向き合い方</div><div class="lessontext">大事な局面や周りのプレッシャーに対しての克服術を学ぶ</div></div>
                      <div class="box">０８<div class="lessontitle">人生のターニングポイント</div><div class="lessontext">人生を変える出来事とは何かを学ぶ</div></div>
                      <div class="box">０９<div class="lessontitle">完璧な試合前の準備</div><div class="lessontext">試合に向けてどうコンディションを整えていくかを学ぶ</div></div>
                      <div class="box">１０<div class="lessontitle">徹底した自己管理テクニック</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box">１１<div class="lessontitle">イチロー流練習方法</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box">１２<div class="lessontitle">スローイングテクニック</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box">１３<div class="lessontitle">バッティングテクニック</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box">１４<div class="lessontitle">自分の型（スタイル）の作り方</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      <div class="box1">１５<div class="lessontitle">プロ野球選手を目指している人へのメッセージ</div><div class="lessontext">元メジャーリーガーのイチローが本コースへの想いを語る</div></div>
                      
                      
                  
            </div>
        
        
<ul class="follow-me">
  <li><a href="https://twitter.com"></a></li>
  <li><a href="https://instagram.com"></a></li>
  <li><a href="https://www.facebook.com"></a></li>
  <li><a href="https://www.youtube.com"></a></li>
</ul>
      
      
