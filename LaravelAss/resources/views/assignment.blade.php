@extends('layouts.app')

@section('heading')
<h1>KUNIKA</h1>
<p>UX/UI Designer</p>
<p>kunika.sharma@gmail.com</p>
@stop

@section('nav')
<ul>
    <li><a class="active" href="#">HOME</a></li>
    <li><a href="#service">ABOUT</a></li>
    <li><a href="#recent-work">WORK</a></li>
    <li><a href="#client">CLIENT</a></li>
</ul>
@stop

@section('topheading')
<span>I am a web designer/developer and maker based in Vancouver, Canada, who loves creating handcrafted designs for heart-centered, passion fueled creatives. Encouraging creatives to follow their heart and make their dreams come true, despite the doubts and fear they face.</span>
@stop

@section('column1')
<img class="service-icon" src="img/service_icons/website-design-icon.png" alt="website-design-icon">
<h1>WEB DESIGN</h1>
<p>Building an experience that give users what they are looking for and keep them engaged and entertained at the same time. Being facinated by the technology innovations, product branding and typography what I love above all is pushing the limits of ergonomics and conception without ever neglecting user-experience.</p>
<p class="read-more-box">Read More</p>
@stop

@section('column2')
<img class="service-icon" src="img/service_icons/printer-icon.png" alt="printer-icon">
<h1>LOGO AND PRINT DESIGN</h1>
<p>To offer my design skills to build awesome websites and mobile applications in line with the ambition of their owners. I love to see new standards appear and mature allowing the creation of new website, each one more advanced and amazing than the previous. Lorem Ipsum is simply dummy text of the printing. </p>
<p class="read-more-box">Read More</p>
@stop

@section('column3')
<img class="service-icon" src="img/service_icons/App-dev-icon.png" alt="App-dev-icon">
<h1>APPLICATION DEVELOPMENT</h1>
<p>Combining the best of the web and app world to create an experience that's entertaining and fun. Along with my design skills, my toolbox is filled with acronyms such as HTML5, CSS3 and JQuery. I love to see new standards appear and mature allowing the creation of new website, each one more advanced and amazing than previous</p>
<p class="read-more-box">Read More</p>
@stop

@section('column4')
<img class="service-icon" src="img/service_icons/website-design-icon.png" alt="website-design-icon">
<h1>SEO and SEM SERVICES</h1>
<p>Combining the best of the web and app world to create an experience that's entertaining and fun. Along with my design skills, my toolbox is filled with acronyms such as HTML5, CSS3 and JQuery. I love to see new standards appear and mature allowing the creation of new website, each one more advanced and amazing than the previous</p>
<p class="read-more-box">Read More</p>
@stop

@section('imgcontainer')
<img class="work-img" src="img/recent_work/Photoshop2.jpg" alt="Mockup Design">
<div class="overlay"></div>
@stop

@section('imgdescription')
<p>SAMPLE TITLE- INTERACTION DESIGNING</p>
<p class="red">Web design | Photoshop</p>
@stop

@section('client')
<img class="client-icon" src="img/clien_icons/flipkart.png" alt="flipkart-icon">
@stop
