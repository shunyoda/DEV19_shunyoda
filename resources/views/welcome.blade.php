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
                width:100%;
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
             color:#242424;
             
   
            }
         
.sample_box10 {
    background: -webkit-linear-gradient(top, #fff 0%, #f0f0f0 100%);
    background: linear-gradient(to bottom, #fff 0%, #f0f0f0 100%);
    border: 2px solid #ccc;
    border-top: 18px solid    #C5B358;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 1) inset;
    padding: 3em;
    padding-top:30px;
    width:250px ;
    height:21px;
    background: #f7f3ee;
    

}
.sample_box10 p {
    font-size:25px;
    margin: 0 auto; 
    font-weight:bold;
    text-align:center;
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
                font-size: 84px;
            }
            .title-main {
                font-size: 30px;
                margin-left:180px;
                padding-top:80px;
                color:white;
                margin-top:140px;
                width: 45%;
         
              
            }
            .topimage{
                display:flex;
                
              
            }
            
            .text-1{
            color:#C5C6D0;
            font-size:30px;
            text-align:center;
            margin-top:120px;
            }
            
             .text-2{
            color:#C5C6D0;
            font-size:30px;
            text-align:center;
            margin-top:140px;
            }
            
            .image1{
              display: block;
              margin-top: 150px;
              margin-right:100px;
     
              width: auto;    /* 横幅を割合で指定 */
              height: 350px;  /* 高さは自動指定 */
              
            }
            
            .image2{
              display: block;
              box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
               align-items:center;
               margin-top:130px;
               margin-bottoms:200px;
               margin-left:auto;
               margin-right:auto; 
            }
            
            .image2:hover{
             opacity: 0.7;
  transition-duration: 0.3s;
            }
             .image3{
              display: flex;
              box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
               align-items:center;
               margin-top:130px;
               margin-bottoms:130px;
                 margin-left:auto;
               margin-right:auto;
               
            }
            .image3:hover{
             opacity: 0.7;
  transition-duration: 0.3s;
            }
            
             .image4{
              display: flex;
              box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
               align-items:center;
               margin-top:170px;
               margin-bottoms:130px;
               margin-left:auto;
               margin-right:auto;
               
            }
            .image4:hover{
             opacity: 0.7;
  transition-duration: 0.3s;
            }
            
              .image5{
              display: flex;
               align-items:center;
               margin-top:350px;
               margin-bottoms:130px;
               margin-left:auto;
               margin-right:auto;
               
            }
            
            sub-title{

                color:white;
              
                font-family: 'Caveat', cursive;
        
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
              .
            
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

            
        </style>
    </head>
    <body>
        <header>
        　 @include('includes.header')
        </header>
        <main>
           @include('includes.maincontent')
        </main>
        <footer>
           @include('includes.footer')
        </footer>
    </body>
</html>
