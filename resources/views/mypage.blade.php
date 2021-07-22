<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EnergyBaton</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  

        <!-- Styles -->
        <style>
            html, body {
                background-color:#212121;
                color: #636b6f
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }
        
            .full-height {
                height: 100%;
            }
            
           
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            
            .features{
            display:flex;
            justify-content:center;
            margin-top:100px;
   
            }
            
             .image{
              display: block;
              box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
               align-items:center;
               margin-top:130px;
               margin-bottoms:200px;
               margin-left:auto;
               width:600px;
               height:auto;
               margin-right:auto;
            }
            
         
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            
            }
             .top-left {
                position: absolute;
                left: 30px;
                top: 35px;
                font-size:30px;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                color:white;
            }

            .title {
                font-size: 40px;
                 position: absolute;
                 color: white;
                 top: 60%;
                 left: 50%;
                 -ms-transform: translate(-50%,-50%);
                 -webkit-transform: translate(-50%,-50%);
                 transform: translate(-50%,-50%);
                 margin:0;
                 padding:0;
            }
     
          
            
            .text-1{
                color:#C5C6D0;
                font-size:30px;
                text-align:center;
                margin-top:120px;
            }
            
          
            
            topimage{
                position: relative;/*相対配置*/
            }
            
            
            .image1{
                display: block;
                margin-top: 150px;
                margin-right:100px;
                width: auto;    /* 横幅を割合で指定 */
                height: 350px;  /* 高さは自動指定 */
              
            }
            
            .links > a {
                margin-top:18px;
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
      
     
            footer{
                width: 100%;
                height: 100px;
                background-color: #222629;
                color: white;
                text-align: center;
                position: relative;
                bottom: 0; 
                padding-bottom:15px;
                margin-bottom: -200px;
             }
            
            ul.footer-menu li {
                display: inline;
                cursor: pointer;
            }
            
            ul.footer-menu li:hover {
                color: #C5C6D0;
                cursor: pointer;
            }
            
            .follow-me {
                list-style: none;
                overflow: hidden;
                padding-top:10px;
                display: flex;
                justify-content:center;
                max-width:100%;
                margin-top:300px;
            }
            
            .follow-me li {
                float: left;
                margin: 80px 30px 30px 0;
                padding: 0;
            }
            
            .follow-me li a::before {
                 background-color: #eee;
                  -webkit-border-radius: 2px;
                  border-radius: 2px;
                  color: #333;
                  display: inline-block;
                  font-family: FontAwesome;
                  font-size: 16px;
                  height: 44px; /* Button height */
                  line-height: 44px; /* Button height */
                  -webkit-transition: all .3s ease;
                  transition: all .3s ease;
                  text-align: center;
                  width: 44px; /* Button width */
            }
            .follow-me li a:hover::before {
              color: #fff;
            }
            
            .follow-me li a[href*="facebook.com"]::before       { content: "\f09a"; }
            .follow-me li a[href*="instagram.com"]::before      { content: "\f16d"; }
            .follow-me li a[href*="twitter.com"]::before        { content: "\f099"; }
            .follow-me li a[href*="youtube.com"]::before        { content: "\f16a"; }
            .follow-me li a[href*="facebook.com"]:hover::before       { background-color: #3b5998; }
            .follow-me li a[href*="instagram.com"]:hover::before      { background-color: #2C6A93;; }
            .follow-me li a[href*="twitter.com"]:hover::before        { background-color: #55acee; }
            .follow-me li a[href*="youtube.com"]:hover::before        { background-color: #cd201f; }
            
            .items{
                  display: flex;
                  justify-content: center;
                  flex-wrap: wrap;
            }
            
            .item1{
                  width: 200px;
                  height: 170px;
                  margin-top:100px;
                  text-align:center;
                  color:#DDDDDD;
                  padding-left:70px;
                  padding-right:70px;
            }
            
            .item2{
                  width: 200px;
                  height: 170px;
                  margin-top:100px;
                  border-left: thin solid white;
                  text-align:center;
                  color:#DDDDDD;
                  padding-left:70px;
                  padding-right:70px;
            }
            
            .item3{
                  width: 200px;
                  height: 170px;
                  margin-top:100px;
                  border-left: thin solid white;
                  text-align:center;
                  color:#DDDDDD;
                  padding-left:70px;
                  padding-right:70px;
            }
            
            a.btn_04 {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  width: 100%;
                  height: 50px;
                  position: relative;
                  background: #228bc8;
                  border: 1px solid #228bc8;
                  box-sizing: border-box;
                  padding: 0 auto;
                  color: #DDDDDD;
                  font-size: 19px;
                  letter-spacing: 0.1em;
                  line-height: 1.3;
                  text-align: left;
                  text-decoration: none;
                  transition-duration: 0.3s;
            }
            
            a.btn_04:before {
                  content: '';
                  width: 8px;
                  height: 8px;
                  border: 0;
                  position: absolute;
                  top: 50%;
                  left: 25px;
                  margin-top: -6px;
            }
            
            a.btn_04:hover {
                  background: #fff;
                  color: #228bc8;
            }
            
            .buy{
                  padding-top:15px;
                  font-size:12px;
                  text-align:center;
                  color:#DDDDDD;
            }
            
            .lesson{
                 text-align:center;
                 margin-top:100px;
                 margin-bottom:50px;
                 font-size:30px;
                 color:#DDDDDD;
            }      
            
             .yokoku{
                 text-align:center;
                 margin-top:100px;
                 margin-bottom:50px;
                 font-size:30px;
                 color:#DDDDDD;
            }      
            
            .yokokuvideo{
                 margin-top:50px;
                 
                 width:100%;
                 text-align:center;
                 
            }      
            
            .intro{
                 text-align:left;
                 font-size:30px;
                 color:#494949;
                 margin-top:130px;
                 margin-right:auto;
                 margin-left:auto;
                 padding:60px;
                 padding-bottom:30px;
                 background-color: #f7f3ee;
                 width:55%;
                 padding-top:25px;
                 font-family:Cursive;
            }
                  .intro2{
                 text-align:left;
                 font-size:23px;
                 color:#464646;
                 margin-right:auto;
                 margin-left:auto;
                 background-color: #f7f3ee;
                 padding-top:30px;
             
            }
            
            .container {
                 width: 50%;
                 height: auto;
                 background: #f7f3ee;
                 display: flex;
                 flex-direction: column;
                 align-items: center;
                 justify-content: space-around;
                 margin: 0 auto;
                  
            }
                
                .box {
                  width: 80%;
                  height: 110px;
                  font-size:35px;
                  border-bottom:ridge;
                  margin-top:0px;
                  padding-top:60px;
             
                }
                 .box1 {
                  width: 80%;
                  height: 110px;
                  font-size:35px;
                  margin-top:0px;
                  padding-top:60px;
                }
            
            .lessontitle{
            padding-left:70px;
            display: inline-block;
             font-size:25px;
             font-weight:semibold;
             
            }
              .lessontext{
            padding-left:144px;
             font-size:18px;
               color:#464646;
            }
            
    
            
        </style>
    </head>
    <body>
        <header>
        　 @include('includes.loginheader')
        　   @yield('content')
        </header>
        <main>
             @include('includes.mypage')
        </main>
        <footer>
           @include('includes.footer')
        </footer>
    </body>
</html>
