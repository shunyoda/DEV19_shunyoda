  <style>
      
         
         .mypage-item{
          margin-top:10rem;
          margin-left:30rem;
        
         }
         
         .image2{
             margin:5rem  25rem;
             
         }
                     .image2:hover{
             opacity: 0.7;
  transition-dura
}
         
        
         .item{
          display:flex;
          flex-wrap: nowrap;
          margin-top:5rem;
          margin-left:19rem;

        
          }
         
         .item-image{
           display:flex;
          margin-left:100px;
        
         }
 

    
         .item-text{
          font-size:16px;
          padding-left:50px;
          text-align:left;
          line-height:25px;
          color:#DDDDDD;
          letter-spacing:0.05rem;
          word-break : break-all;
           }
           
           .mypage-box {
    padding: 0.1em 0.5em;
    margin-top:5rem;
    color: #FFF;
    background: #C5B358;
    font-weight:semibold;
    border-radius: 9px;
    width:15rem;
    margin-left:25rem;
    text-align:center;
}


.mypage-box p {
    font-size:1.2rem;
}

  .mypage-box2 {
    padding: 0.1em 0.5em;
    margin-top:1rem;
    color: #FFF;
    background: #C5B358;
    font-weight:semibold;
    border-radius: 9px;
    width:15rem;
    margin-left:25rem;
    text-align:center;
 
    
}
.mypage-box2 p {
    font-size:1.2rem;
     }
     
     .name{
     color:white;
     margin-left:31rem;
     margin-top:2rem;
     font-size:2rem;
     {
   

  </style>

        <div class="mypage-item">
            <div><img src="/images/mypage-icon.png" class="mypage-icon"></div>
        </div>
        <div class='name'><?php $user = Auth::user(); ?>{{ $user->name }}</div>
      
        
          <div class="mypage-box">
             <p>購入済みコース</p>
            </div>
            <div><a href="{{ url('/loginIchiro') }}"><img src="/images/ichiro.png" class="image2"></a></div>
      
      
          <div class="mypage-box2">
             <p>視聴履歴</p>
            </div>
      
        
         <div class="item">
            <div class="item-image"><img src="/images/ichirovideo.png" alt="イチローの動画"></div>
            <div class="item-image"><img src="/images/ichirovideo.png" alt="イチローの動画"></div>
             <div class="item-image"><img src="/images/ichirovideo.png" alt="イチローの動画"></div>
              <div class="item-image"><img src="/images/ichirovideo.png" alt="イチローの動画"></div>
            </div>
          </div>
          
          
          
         <ul class="follow-me">
           <li><a href="https://twitter.com"></a></li>
           <li><a href="https://instagram.com"></a></li>
           <li><a href="https://www.facebook.com"></a></li>
           <li><a href="https://www.youtube.com"></a></li>
         </ul>