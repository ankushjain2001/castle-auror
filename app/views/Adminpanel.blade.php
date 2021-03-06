<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Link Repository</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

{{HTML::style('css/index.css')}}
{{HTML::style('css/lb_signup.css')}}
{{HTML::style('css/foxy_home.css')}}
{{HTML::style('css/bootstrap_home.css')}}

{{HTML::script('js/jquery-1.11.1.min.js')}}
{{HTML::script('js/simple-expand.js')}}
{{HTML::script('js/jquery.lightbox_me.js')}}
{{HTML::script('js/bootstrap.min.js')}}

  
<!---LOGIN SCRIPT BEGIN------------------------>
	<script type="text/javascript" charset="utf-8">
        $(function() {
            function launch() {
                 $('#lb_sign_up').lightbox_me({centered: true, onLoad: function() { $('#lb_sign_up').find('input:first').focus()}});
            }
            
            $('.try-1').click(function(e) {
				$(".lb_close").click();
                $("#lb_sign_up").lightbox_me({centered: true, preventScroll: true, onLoad: function() {
					$("#lb_sign_up").find("input:first").focus();
				}});
				
                e.preventDefault();
            });
            
            
            $('table tr:nth-child(even)').addClass('stripe');
        });
    </script>
<!---LOGIN SCRIPT END------------------------>


<!---FORGOT PASSWORDSCRIPT BEGIN------------------------>
	<script type="text/javascript" charset="utf-8">
        $(function() {
            function launch() {
                 $('#lb_forget_pass').lightbox_me({centered: true, onLoad: function() { $('#lb_forget_pass').find('input:first').focus()}});
            }
            
            $('.try-3').click(function(e) {
				$(".lb_close").click();
                $("#lb_forget_pass").lightbox_me({centered: true, preventScroll: true, onLoad: function() {
					$("#lb_forget_pass").find("input:first").focus();
				}});
				
                e.preventDefault();
            });
            
            
            $('table tr:nth-child(even)').addClass('stripe');
        });
    </script>
<!---PASSWORD END------------------------>


<!---JOINNOW SCRIPT BEGIN------------------------>
	<script type="text/javascript" charset="utf-8">
        $(function() {
            function launch() {
                 $('#lb_join_now').lightbox_me({centered: true, onLoad: function() { $('#lb_join_now').find('input:first').focus()}});
            }
            $(".lb_close").click();
            $('.try-2').click(function(e) {
				
                $("#lb_join_now").lightbox_me({centered: true, preventScroll: true, onLoad: function() {
					$("#lb_join_now").find("input:first").focus();
					
				}});
				
                e.preventDefault();
            });
            
            
            $('table tr:nth-child(even)').addClass('stripe');
        });
    </script>
    <script type="text/javascript">		//check username availability
    $(document).ready(function()
    {
    		$("#username_join_now").keyup(function(e)
    		{
    			var username=$(this).val();
    			$.ajax({
          			'type': 'GET',
          			'url' : 'check_username',
          			'data': {username:username}
        		})
        	.done(function (data) {
          				$("#username_result").html(data);
        			});

    		});
    });
    		
    </script>

<!---JOINNOW SCRIPT END-->   
<!---EXPANDER SCRIPT START-->    
 
    <script type="text/javascript">
        $(function () {
            $('.expander').simpleexpand();
            $('.expander2').simpleexpand();
        });
    </script>

<!---EXPANDER SCRIPT END--> 
<script>
function changeImage1() {
    var image = document.getElementById('myplus1');
    if (image.src.match("minus")) {
        image.src = "images/plus.png";
    } else {
        image.src = "images/minus.png";
    }
}
function changeImage2() {
    var image = document.getElementById('myplus2');
    if (image.src.match("minus")) {
        image.src = "images/plus.png";
    } else {
        image.src = "images/minus.png";
    }
}
</script>       
<!---Header Begins-->
<div class="navbar-custom navbar-inverse navbar-static-top" role="navigation" style="position: relative;">

	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" height="25">
      </a>
	</div>
	
	<div class="collapse navbar-collapse">
		
		<ul class="nav navbar-nav">
            <li id="navbut"><a href="#">Categories</a></li>
            <li id="navbut"><a href="#">Add Link</a></li>
            <li id="navbut"><a href="#">About</a></li>
		
		</ul>
        <div class="col-sm-2 col-md-5">
		<ul class="nav navbar-nav navbar-right" >
        	<li id="accbut"><a href="" class="try-1">Log In</a></li>	
		</ul>
        </div>
        </div>
        

</div>
        <div class="bs_search_wrapper">
<form class="form-wrapper cf">
        <input type="text" placeholder="I am looking for..." required>
        <button type="submit">Search</button>
            <div class="form-sugg"></div>

    </form>   	

		</div>
<!---HEADER ENDS------------------------------------------>



<!---TRENDIND BEGINS-------------------------------------->
<div id="module_wrap_trend">
<div class="module_label"><span>Trending</span><div class="module_expand"></div></div>

</div>
<!---TRENDING ENDS---------------------------------------->
<div style="min-height:700px; width:100%; display:block; position:relative; overflow:visible; margin-top: 100px; background-color:#fff;">
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">;
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      
      
       <div class="item active" style="margin:auto;">

                  <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image($result[0]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
			
		
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image($result[1]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
		
		
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image($result[2]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
		

                  <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image($result[3]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>

                 <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image($result[4]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>

				<div class="grid-3">
					<figure class="effect-sadie">
						{{HTML::image($result[4]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                
          <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image($result[8]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image($result[9]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image($result[10]->photo,'')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
         
          
          
        </div>
      
      
        <div class="item" style="margin:auto;"> 
        
        
        <div style="width:480px; height:auto;display:inline-block;">
				<div class="grid-3">
					<figure class="effect-sadie">
						{{HTML::image('images/1.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>

             </div>   
                <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/4.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
              <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/2.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
               <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/5.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/6.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                
                <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/7.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/8.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				 <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/2.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                <div class="grid-3">
					<figure class="effect-sadie">
						{{HTML::image('images/9.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
               
           
          
        
        
        
        
        </div>
        <div class="item" style="margin:auto 0px;">
          
         
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/1.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                
                <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/10.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/11.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                 <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/12.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                
               <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/13.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                  <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/14.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                
                <div class="grid-3">
					<figure class="effect-sadie">
						{{HTML::image('images/15.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
           <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/16.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                <div class="grid-1">
					<figure class="effect-sadie">
						{{HTML::image('images/17.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
                <div class="grid-2">
					<figure class="effect-sadie">
						{{HTML::image('images/18.jpg','')}}
						<figcaption>
							<h2>This is our <span>Caption.</span></h2>
							<p>No. of Hits: 13</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
         
          
          
        </div>
       
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel --></div>
    </div>
<!---Trends End------------------->

<div id="seperator">
</div>



<!---CATEGORIES BEGIN-------------------------------->
<div id="module_wrap">
<div class="module_label"><span>Categories</span><div class="module_expand expander" ><img id="myplus1" onclick="changeImage1()" alt="Browse more categries" src="images/plus.png"height=25 width=25/> </div></div>

<!---VISIBLE CATEGORIES------------------------------>
<div class="container-fluid">
  <div class="row">


@foreach($newresult as $newres)		
<div class="cat-grid">
<div class="cat-item">             
        <div class="cat-info">
       
       		@foreach($photo_taker as $photo)
            <div class="cat-info-front" style="background-image: url({{$photo->photo}});background-size: cover;"></div>
            @endforeach
            <div class="cat-info-back">
                
                <p>LINKS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="cat-h3">{{$newres->category}}</h3>
</div>
@endforeach





<!---EXPANDER CATEGORIES--------------->
<div class="content" style="display: inline;">

<div class="cat-grid">
<div class="cat-item">             
        <div class="cat-info">
            <div class="cat-info-front" style="background-image: url(images/p6.jpg);background-size: 190px;"></div>
            <div class="cat-info-back">
               
                <p>LINKS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
     <h3 class="cat-h3">Education</h3>
</div>

<div class="cat-grid">
<div class="cat-item">             
        <div class="cat-info">
            <div class="cat-info-front" style="background-image: url(images/p7.jpg);background-size: 190px;"></div>
            <div class="cat-info-back">
               
                <p>LINKS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
     <h3 class="cat-h3">Sports</h3>
</div>

<div class="cat-grid">
<div class="cat-item">             
        <div class="cat-info">
            <div class="cat-info-front" style="background-image: url(images/p8.jpg);background-size: 190px;"></div>
            <div class="cat-info-back">
            
                <p>LINKS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
        <h3 class="cat-h3">Torrents</h3>
</div>

<div class="cat-grid">
<div class="cat-item">             
        <div class="cat-info">
            <div class="cat-info-front" style="background-image: url(images/p9.jpg);background-size: 190px;"></div>
            <div class="cat-info-back">
         
                <p>LINKS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
           <h3 class="cat-h3">Automobiles</h3>
</div>
</div>
</div>


 </div>
</div>
<!---CATEGORIES END-------------------------------------->



<div id="seperator">
</div>



<!---TRENDING MONTH BEGIN-------------------------------->


<div id="module_wrap">
<div class="module_label"><span>Trending (this month)</span><div class="module_expand expander" ><img  id="myplus2" onclick="changeImage2()" alt="Browse more categries" src="images/plus.png"height=25 width=25 /> </div></div>
<div class="container-fluid">
  <div class="row">

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p3.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">Best pizza shop in town</h3>
</div>

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p5.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">hardwell concert tickets available</h3>
</div>

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p5.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">football comes to india</h3>
</div>

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p7.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">live breaking news</h3>
</div>

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p2.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">Revolution in technology discovered</h3>
</div>

<!---EXPANDER TRENDING MONTH---------------------------->
<div class="content" style="display: inline;">


<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p4.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">Upcoming James Bond film</h3>
</div>

<div class="tren-grid">
<div class="tren-item">             
        <div class="tren-info">
            <div class="tren-info-front" style="background-image: url(images/p8.jpg);background-size: 190px;"></div>
            <div class="tren-info-back">
                
                <p>HITS: 13 <a href="">Visit Link</a></p>
            </div>    
        </div>
    </div>
    <h3 class="tren-h3">Collection of best torrent sites</h3>
</div>

</div>
</div>

</div>
</div>
<!---TRENDING MONTH ENDS---------------------------->







<!--FOOTER BEGINS------------------------------------------>
<div class="navbar-custom navbar-inverse navbar-static-bottom" role="navigation">
<footer>
<div id="footer_wrap">
<div class="col-sm-2 col-md-3">
<div id="coll">
<p>© 2014 Link Repository.</p>
</div>
</div>
<div class="col-sm-2 col-md-3 pull-right">
<div id="colr">
<p><b>Software Incubator</b></p>
</div>
</div>
</div>
</footer>
</div>
<!---FOOTER ENDS------------------------------------------>


<!---LOGIN LIGHTBOX HTML---------------------------------->
           <div id="lb_sign_up">
           <div id="lb_coll">
               <div class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Login to your Account.</legend>

        {{Form::open()}}

        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Username" name="username">

        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Password" name="password">

        <label for="remember" class="pure-checkbox">
            <input id="remember" type="checkbox"> Remember me
        </label>

        <input type="submit" class="pure-button pure-button-primary" value="Log in">

        {{Form::close()}}

    </fieldset>
    <p><a style="float:none;color: #333;" class="lb_forgot_pass try-3 close" href="forgot_password">Forgot Password?</a></p>
     <p>Not Registered yet? <a style="float:none;color: #2a6496;" class="lb_joinnow try-2 close" href="">Join Now.</a></p>
   <a id="close_x" class="close close2my" href="">Close</a>
    </div>
    </div>
		<div id="lb_colr">
        <h4 align="center">or</h4>
		<a href="login/fb"><img id="lb_connect_but" src="images/fbbutton.png"></a>
        <a href="login/gplus"><img id="lb_connect_but" src="images/googlebutton.png"></a>
		</div>
        </div>
<!--LOGIN LIGHTBOX END -->
<!---LOGIN PASSWORD HTML---------------------------------->
           <div id="lb_forget_pass">
           <div id="lb_coll">
               <div class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Forgot Password?</legend>

        {{Form::open()}}

        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Username" name="username">

        <label for="password">New Password</label>
        <input id="password" type="password" placeholder="Password" name="password">

        <input type="submit" class="pure-button pure-button-primary" value="Submit">

        {{Form::close()}}

    </fieldset>
   <a id="close_x" class="close close2my" href="">Close</a>
    </div>
    </div>
    </div>
<!--LOGIN PASSWORD END -->




<!--JOIN NOW LIGHTBOX HTML -->


           <div id="lb_join_now">
 <div id="lb_coll">
    <div class="pure-form pure-form-stacked">
    <fieldset>
     <legend>Create your Account.</legend>

     {{Form::open(array('url' => 'register_without_any', 'method' => 'get'))}}

        <div class="pure-control-group">
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Name" name="name">
       
        </div>

        
        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="text" placeholder="Email Address" name="email">
        </div>

    
        <div class="pure-control-group">
            <label for="name">Username</label>
            <input id="username_join_now" type="text" placeholder="Username" name="username">
            <div id="username_result"></div>
        </div>

   
        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password" name="password">
        </div>


         <div class="pure-control-group">
            <label for="password">Confirm Password</label>
            <input id="password" type="password" placeholder="Password" name="cpassword">
        </div>
        <div class="pure-controls">
          <input type="submit" name="Submit" class="pure-button pure-button-primary" style="margin-top:8px" value="Submit">
        </div>

     {{Form::close()}}

    </fieldset>
     <p>Already Registered? <a style="float:none;color: #2a6496;" class="lb_joinnow try-1 close" href="">Sign In.</a></p>
     <a id="close_x" class="close close2my" href="">Close</a>

  </div>
</div>
     <div id="lb_colr2" style="margin-top:80px;">
<div style="margin-bottom:35px;" class="alert alert-danger"></div>
<div style="margin-top:20px;" class="alert alert-danger"></div>
<div style="margin-top:35px;" class="alert alert-danger"></div>
<div style="margin-top:35px;" class="alert alert-danger"></div>
</div>

  







        </div>
            
<!--JOIN NOW LIGHTBOX END-->


</body>
</html>
