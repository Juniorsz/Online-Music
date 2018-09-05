
<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>🎵 Online Music 🎵</title>
      <link rel="icon" type="image/png" href="../favicon.png" />
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <!-- Latest compiled and minified font awesome CSS -->
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
      <!-- custom CSS -->
      <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
   </head>
   <body>
      <!-- container-fluid -->
      <div class="container-fluid">
         <!-- row -->
         <div class="row header">
            <!-- col -->
            <div class="col-md-6 col-md-offset-3 card">
               <!-- header -->
               <div class="text-center">
                  <h2 style='margin:18px 0px;color:#65509E'>🎵 Listen To Music Online 🎵</h2>
				  <span class='thumbnails'><img class='photo' src="https://media.tenor.com/images/7fdc18d61ec340d45aa47ecb1f14d8e6/tenor.gif"></span>
                  <div class="col-md-10 col-md-offset-1 inputform">
                     <div class="col-md-8"><input type="text" id="url" class="instinput mailchimp_email " placeholder="Nhập tên bài hát..."/ ></div>
                     <div class="col-md-4"><button id="download" onclick='playMusic()' class="instabutton playBtn" >TÌM KIẾM</button></div>
                  </div>
               </div>
			   <center><p class='Videoplayer'></p></center>
               <!-- header end. -->
            </div>
            <!-- col end. -->       
         </div>
         <!-- row end.--> 
      </div>
      <!-- container-fluid end. -->
	  <!-- footer -->
      <footer>
         <p>Coded by<a href="https://facebook.com/sven812"> Sven Junior </a></p>
      </footer>
	  <!-- footer end. -->
	  <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  <!-- Main function java script -->
   </body>
   <script>
       function playMusic()
       {
           var song = $('.mailchimp_email').val();
           $('.playBtn').html('<div class="pr " id="btn_lock" style="opacity: 1;"><div class="pr_bt"></div><div class="pr_bt"></div><div class="pr_bt"></div></div>');
           $.ajax({
               url:'play.php',
               method:'POST',
               data:{song:song},
               success:function(data){
                   $('.Videoplayer').html(data);
                   $('.playBtn').html('TÌM KIẾM');
               }
           });
       }
    </script>
   <style>
   body,
html {
    margin: 0;
    padding: 0;
    background: #192536;
	justify-content: center;
    align-items: center;
    background: #f2f2f2;
}
* {
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
a {
    text-decoration: none;
    color: #65509E;
}
a:hover {
    cursor: pointer;
    cursor: hand;
    text-decoration: none;
}

/*-----------Navbar------------*/
*:focus{
	outline-color:none !important;
}
.navbar {
    z-index: 16;
    position: fixed;
    top: 0;
    width: 100%;
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    height: 77px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    border-bottom: 1px solid transparent;
}
.navscroll {
    background-color: white;
    border-bottom: 1px solid #e6e6e6;
    -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.12);
}
.navbar a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.navbar a i {
    font-size: 45px;
    height: 43px;
    width: 43px;
    text-align: center;
    margin-right: 10px;
    border-radius: 6px;
    line-height: 42px;
    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}
.instaanim {
    -webkit-transform: rotate(360deg) scale(1.1);
    -ms-transform: rotate(360deg) scale(1.1);
    transform: rotate(360deg) scale(1.1);
    color: white;
    margin-right: 0px;
    background: -webkit-gradient(linear, right top, left bottom, from(#4c68d7), color-stop(#8a3ab9), color-stop(#cd486b), color-stop(#fb8750), to(#FF9800));
    background: -webkit-linear-gradient(right top, #4c68d7, #8a3ab9, #cd486b, #fb8750, #FF9800);
    background: -o-linear-gradient(right top, #4c68d7, #8a3ab9, #cd486b, #fb8750, #FF9800);
    background: linear-gradient(to left bottom, #4c68d7, #8a3ab9, #cd486b, #fb8750, #FF9800);
}
.shrink {
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
}
.navbar span {
    background-image: url("../img/logo.png");
    height: 55px;
    width: 230px;
    display: inline-block;
    -webkit-transition: .3s cubic-bezier(0.18, 0.89, 0.32, 1.28);
    -o-transition: .3s cubic-bezier(0.18, 0.89, 0.32, 1.28);
    transition: .3s cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.lil-bar {
    background: #fff;
    position: fixed;
    bottom: 15px;
    right: 15px;
    border: solid 1px #c8d7e1;
    border-radius: 3px;
    height: 35px;
    line-height: 1;
    z-index: 50000;
    -webkit-transition: all 0.2s cubic-bezier(0.18, 0.89, 0.32, 1.28);
    -o-transition: all 0.2s cubic-bezier(0.18, 0.89, 0.32, 1.28);
    transition: all 0.2s cubic-bezier(0.18, 0.89, 0.32, 1.28);
}

/*-----------content------------*/

.header {
    margin-top: 50px;
    margin-bottom: 40vh;
}
.card {
    background-color: #fff;
	box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.07);
    border-radius: 4px;
    padding: 10px 0;
}
.card h1 {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 25px;
    line-height: 40px;
    margin: 0 40px 10px;
    text-align: center;
    font-weight: 500;
}
.card h2 {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 17px;
    line-height: 20px;
    margin: 0 40px 10px;
    text-align: center;
    color: #999;
    font-weight: 600;
}
.inputform {
    margin-top: 15px;
    margin-bottom: 15px;
}
.instinput {
    width: 100%;
    border: none;
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 0;
    -ms-flex: 1 0 0;
    flex: 1 0 0px;
    outline: none;
    overflow: hidden;
    padding: 9px 0 7px 8px;
	color:#333;
    text-overflow: ellipsis;
    background: #f2f2f2;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 18px;
	border-radius:5px;
    margin-top: 10px;
	border-top-right-radius:0px !important;
	border-bottom-right-radius:0px !important;
}
.instabutton {
    cursor: pointer;
    -webkit-appearance: none;
    border-radius: 5px;
    border-style: solid;
    border-width: 1px;
    font-size: 14px;
    font-weight: 600;
    line-height: 30px;
    outline: none;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 100%;
    background: #65509E;
    border-color: #65509E;
    color: #fff;
    margin-top: 10px;
}
.advertisement {
    background-color: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
    padding: 10px 0;
}
.advertisement p {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 20px;
    vertical-align: middle;
    line-height: 90px;
    text-align: center;
    font-weight: 500;
}
.resultdiv {
    margin-top: 25px;
    background-color: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
    padding: 10px 0;
}
.profileheader {
    height: 55px;
    border-bottom: 1px solid #efefef;
}
.profilepic {
    height: 40px;
    width: 40px;
    margin-left: 15px;
    position: absolute;
}
.profilename,
.username {
    margin-left: 65px;
    margin-top: 10px;
}
.profilename {
    font-weight: bolder;
    color: #3d3b3b;
}
.downloadimage {
    width: 100%;
    height: auto;
}
.downloadbutton {
    cursor: pointer;
    -webkit-appearance: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    font-size: 14px;
    font-weight: 300;
    line-height: 30px;
    outline: none;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    background: #3897f0;
    border-color: #3897f0;
    color: #fff;
    margin-top: 10px;
    margin-right: 10px;
    margin-bottom: 30px;
    padding-left: 5px;
    padding-right: 5px;
}
.downloadbutton:hover {
    color: #fff;
}
.downloadbutton:focus {
    color: #fff;
    -webkit-appearance: none;
}
.resultdiv {
    display: none;
    margin-bottom: 50px;
}

/*-----------Footer------------*/
button,input{
	height:46px;
	padding:5px;
}
button{
	border-top-left-radius:0px !important;
	border-bottom-left-radius:0px !important;
}
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #eee;
    background-color: #fff;
    box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.07);
    border-radius: 4px;
}
footer p {
    padding: 10.5px;
    margin: 0px;
	color:#65509E;
    line-height: 100%;
}
.pr{
    padding:8px 15px;
    text-align:center
}
.recaptcha .pr_bt{
    width:8px;
    height:8px;
    border-radius:4px;
    margin-right:4px
}
.recaptcha .pr_bt:last-child{
    margin-right:0
}
.pr{
    opacity:0;
    line-height:0;
    -o-transition:opacity 350ms linear;
    transition:opacity 350ms linear
}
.flat_button .pr{
    margin-top:6px
}
button.flat_button .pr{
    margin-top:0
}
.pr_bt{
    display:inline-block;
    vertical-align:top;
    width:4px;
    height:4px;
    background-color:#fff;
    border-radius:50%;
    margin-right:2px;
    opacity:0.2;
    -o-animation-duration:750ms;
    animation-duration:750ms;
    -o-animation-name:pr_bt_anim;
    animation-name:pr_bt_anim;
    -o-animation-iteration-count:infinite;
    animation-iteration-count:infinite
}
body.mac .pr_bt{
    transform:translateZ(0)
}
.flat_button .pr_bt,.pr.inv .pr_bt{
    background-color:#e0e8f1
}
.flat_button.secondary .pr_bt,.flat_button.secondary_dark .pr_bt{
    background-color:#45688e
}
.flat_button.black .pr_bt,.flat_button.secondary.dark .pr_bt,.pr_baw .pr_bt{
    background-color:#fff
}
.pr_medium .pr_bt{
    width:7px;
    height:7px;
    margin-right:4px
}
.pr_big .pr_bt{
    width:8px;
    height:8px;
    border-radius:4px;
    margin-right:4px
}
.pr_big .pr_bt:last-child,.pr_bt:last-child{
    margin-right:0
}
.pr_bt:first-child{
    -o-animation-delay:0ms;
    animation-delay:0ms
}
.pr_bt:nth-child(2){
    -o-animation-delay:180ms;
    animation-delay:180ms
}
.pr_bt:nth-child(3){
    -o-animation-delay:360ms;
    animation-delay:360ms
}
.col-md-4{
	padding:10px 0px;
}
.col-md-8{
	padding:10px 0px;
}
@-o-keyframes pr_bt_anim{
    0%{
        opacity:0.2
    }
    30%{
        opacity:1
    }
    to{
        opacity:0.2
    }
}
@keyframes pr_bt_anim{
    0%{
        opacity:0.2
    }
    30%{
        opacity:1
    }
    to{
        opacity:0.2
    }
}
   </style>
</html>

