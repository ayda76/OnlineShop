<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!--header-->
	<?php include_once 'mystyle.php';?>
	<?php include_once 'myscrp.php';?>
<!--header-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
		    .txtcenter{
        text-align: center;
      }
   .TG{
     color: white;
   }

.ft{
  text-align: right;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
    /*  box-shadow: 0px 0px 25px #00000070;*/ 
    body {
	padding: 0;
	margin: 0;
	background-color:#fff1ff;
}
.ft{
  text-align: center;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
h1 {
	font-family: 'Century Gothic';
	margin: 30px auto 30px auto;
	color: #09fbd2;
	width: 100%;
	text-align: center;
}

 ul.menu {
	padding: 0;
	list-style: none;
	width: 300px;
	margin: 20px auto;
	font-family: 'Century Gothic';
	clear: both;
	display: table;
	margin-bottom: 100px;
}

ul.menu .list {
	font-size: 14px;
	border-bottom: 1px solid white;
	position: relative;
	width: 100%;
    box-sizing: border-box;
    border-radius: 20px;
	height: 50px;
	vertical-align: sub;
	background: #6b3d68;
	clear: both;
}

ul.menu .list:after {
	content: "\f107";
	font-family: FontAwesome;
	position: absolute;
	right: 17px;
	top: 17px;
	padding: 0px 5px;
	color: #fff;
}

ul.menu .list:before {
	content: '\f07b';
	font-family: FontAwesome;
	position: absolute;
	left: 17px;
	top: 17px;
	padding: 0px 5px;
	color: #fff;
}

ul.menu .list a {
	text-decoration: none;
	color: #fff;
	padding: 17px 0px 17px 45px;
	display: block;
	height: 100%;
	box-sizing: border-box;
}

ul.menu .list a:hover {
	background-color: #9a7099;
    transition: 300ms all;
    border-radius: 20px;
	color: #482145;
}

ul.menu .list .items {
	height: 0px;
	overflow: hidden;
}

ul.menu .list .items a {
	padding: 17px;
}

ul.menu .list .items a:hover {
	background-color: #84497f;
	color: #fff;
	transition: 300ms all;
}

ul.menu .list:last-child {
	border-bottom: none;
}

ul.menu .active:after {
	content: "\f106";
	font-family: FontAwesome;
	position: absolute;
	right: 17px;
	top: 17px;
	padding: 0px 5px;
	color: #fff;
}

ul.menu .active:before {
	content: '\f07c';
	font-family: FontAwesome;
	position: absolute;
	left: 17px;
	top: 17px;
	padding: 0px 5px;
	color: #fff;
}

ul.menu .active > .items {
	display: block;
	padding: 0px;
	height: auto;
	color: #fff;
	transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
	transition: all 200ms;
	clear: both;
	float: left;
	width: 100%;
}

ul.menu .active > .items li {
    padding: 0px;
    background: #482145;
    border-radius: 20px;
	border-bottom: 1px solid white;
	list-style: none;
}

ul.menu .active > .items li:last-child {
	border-color: transparent;
	padding-bottom: 0px;
}

ul.menu .active > .items .active > .items {
	background-color: #2f4b67;
}

ul.menu .active > a {
	color: white;
	text-transform: uppercase;
	font-weight: bold;
}

ul.menu .active .list {
	background: #697d92;
}

ul.menu .active .list a {
	padding: 17px 0px 17px 45px;
}



/**/





    </style>
</head>
<body>
    <div class="container-fluid">
	<?php include_once 'header.php';?>
        <div class="row">
            <div class="col-9">
			<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active " id="tata1" role="tabpanel" aria-labelledby="lp1">
				hiii
			</div>
			<div class="tab-pane fade" id="tata2" role="tabpanel" aria-labelledby="lp2">
				<ul>
					<li>1111111</li>
					<li>1111111</li>
					<li>1111111</li>
				</ul>
			</div>
			<div class="tab-pane fade" id="tata3" role="tabpanel" aria-labelledby="lp3">
				hdgjdhbajd
			</div>
			<div class="tab-pane fade" id="tata4" role="tabpanel" aria-labelledby="lp4">
				asdiPFU
			</div>
			</div>
            </div>
            <div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<nav>
            <ul class="menu">
    <li class="list"><a href="#" class="nav-link T ft">لپ تاپ </a> 
      <ul class="items">
         <li><a href="#tata1" id="lp1" class="nav-link T ft" data-toggle="pill"  role="tab" aria-controls="tata1"   aria-selected="true"> sony</a></li>
         <li><a href="#tata2"  id="lp2" class="nav-link T ft" data-toggle="pill" role="tab" aria-controls="tata2" aria-selected="false">Apple</a></li>
         <li><a href="#tata3" id="lp3" class="nav-link T ft" data-toggle="pill"  role="tab" aria-controls="tata3" aria-selected="false"> sumsung</a></li>
         <li><a href="#tata4" id="lp4" class="nav-link T ft" data-toggle="pill"  role="tab" aria-controls="tata4" aria-selected="false"> Dell</a></li>
	  </ul>
	  
   </li>
   <li class="list"><a href="#" class="ft">لوازم جانبی لپ تاپ</a> 
      <ul class="items">
         <li> <a href="#" class="ft"> باتری لپ تاپ </a></li>
         <li> <a href="#" class="ft"> شارژر لپ تاپ </a></li>
         <li> <a href="#" class="ft">کیبورد </a></li>
         <li> <a href="#" class="ft"> کابل های رابط </a></li>
         <li> <a href="#" class="ft"> ماوس </a></li>
         <li> <a href="#" class="ft"> فلش </a></li>
         <li> <a href="#" class="ft"> هارد دیسک اکسترنال </a></li>
         <li> <a href="#" class="ft"> سالر وسایل جانبی </a></li>
      </ul>
   </li>
   <li class="list"><a href="#" class="ft">تبلت</a> 
      <ul class="items">
         <li> <a href="#" class="ft" > sumsung </a></li>
         <li> <a href="#" class="ft"> Apple</a></li>
         <li> <a href="#" class="ft"> شارژر تبلت </a></li>
      </ul>
   </li>
   
</ul>
</nav>
	  </div>




            </div>
        </div>
    </div>
</body>

<script>
    const list = document.querySelectorAll('.list');

function accordion(e){
    e.stopPropagation(); 
    if(this.classList.contains('active')){
        this.classList.remove('active');
    }
    else if(this.parentElement.parentElement.classList.contains('active')){
        this.classList.add('active');
    }
    else{
        for(i=0; i < list.length; i++){
          list[i].classList.remove('active');
        }
            this.classList.add('active');
		}
	$('#tata1').ajax
}
for(i = 0; i < list.length; i++ ){
    list[i].addEventListener('click', accordion);
}

</script>
</html>