@extends('layouts.app')

@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-news.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">News & Events</h2>
              	<h5 class="breadcrumbs-custom-text">Commitment, Innovation, Partnership, High Quality requirements and a Pioneering Spirit are the Core of our Success.</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Our blog-->
<section class="section section-xxl bg-default">
    <div class="container">
      	<div class="row row-lg row-30">
        	<div class="col-sm-6 wow fadeInLeft">
          		<!-- Post Creative-->
          		<article class="post post-lisa block-2">
           			<div class="post-lisa-content">
           				<div class="post-lisa-tag">News</div>
	              		<h4 class="post-lisa-title">Adida Co. never compromises on Quality and Business ethics, we are ISO 22000 certified.</h4>
	              		<div class="post-lisa-time">
	                		<time datetime="2020-08-09">August 9, 2020</time>
	              		</div>
            		</div>
            		<div class="post-lisa-figure"><img src="/images/post-1-550x247.jpg" alt="" width="550" height="247"/></div>
          		</article>
        	</div>
        	<div class="col-sm-6 wow fadeInRight">
          		<!-- Post Creative-->
          		<article class="post post-lisa block-2">
            		<div class="post-lisa-content">
            			<div class="post-lisa-tag">Events</div>
              			<h4 class="post-lisa-title">Join us to the Gulfood Exhibition from 16 to 21 Feb 2020 at Dubai World Trade Center and Taste few of our most delicious recipes with a live cooking station on site.</h4>
              			<div class="post-lisa-time">
                			<time datetime="2020-02-16">16 to 21 Feb 2020 </time>
              			</div>
            		</div>
            		<div class="post-lisa-figure"><img src="/images/post-2-550x247.jpg" alt="" width="550" height="247"/></div>
          		</article>
        	</div>
      	</div>
    </div>
</section>

@endsection