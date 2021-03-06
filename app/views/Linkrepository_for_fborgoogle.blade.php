<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

{{HTML::style('css/profile.css')}}
{{HTML::style('css/lb_addlink.css')}}
{{HTML::style('css/foxy_profile.css')}}
{{HTML::style('css/bootstrap_profile.css')}}


{{HTML::script('js/jquery-1.11.1.min.js')}}
{{HTML::script('js/simple-expand.js')}}
{{HTML::script('js/jquery.lightbox_me.js')}}
{{HTML::script('js/bootstrap.min.js')}}

  
<script type="text/javascript"> 
var idx=window.location.toString().indexOf("#_=_"); 
if (idx>0) { window.location = window.location.toString().substring(0, idx); } 

</script><!--imp solution to remove #_=_ -->

<!---LOGIN SCRIPT BEGIN------------------------>
	
  <script type="text/javascript" charset="utf-8">
        $(function() {
            function launch() {
                 $('#add_link').lightbox_me({centered: true, onLoad: function() { $('#add_link').find('input:first').focus()}});
            }
            
            $('.try-1').click(function(e) {
                $(".lb_close").click();
                $("#add_link").lightbox_me({centered: true, preventScroll: true, onLoad: function() {
                    $("#add_link").find("input:first").focus();
                }});
                
                e.preventDefault();
            });
            
            
            $('table tr:nth-child(even)').addClass('stripe');
        });
    </script>
    <script type="text/javascript"> //FB logout using FB javascript API

    $(document).ready(function() {
//   $.ajaxSetup({ cache: true });
//   $.getScript('//connect.facebook.net/en_UK/all.js', function(){
//     FB.init({
//       appId: '302117956659579',
//     });     
//   });
// });

function signout()
{
    window.location.href = "https://mail.google.com/mail/u/0/?logout&hl=en";
}    

    </script>
<!---LOGIN SCRIPT END------------------------>


<!--EXPANDER SCRIPT START--------------------->    
 
    <script type="text/javascript">
        $(function () {
            $('.expander').simpleexpand();
            $('.expander2').simpleexpand();
        });
    </script>

<!--EXPANDER SCRIPT END----------------------->
<script>
function changeImage1() {
    var image = document.getElementById('myplus1');
    if (image.src.match("minus")) {
        image.src = "images/plus.png";
    } else {
        image.src = "images/minus.png";
    }
}
</script>  


  

<title>User Profile</title>
</head>
<!--Header Begins------------------------------------->
<div class="navbar-custom navbar-inverse navbar-static-top" role="navigation" style="position: relative;">

    
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

      <a class="navbar-brand" href="#">
        <img src="images/logo.png" height="25">
      </a>
    </div>
    
    <div class="collapse navbar-collapse">
        
        <ul class="nav navbar-nav">
            <li id="navbut"><a href="">Categories</a></li>
            <li id="navbut"><a href="" class="try-1">Add Link</a></li>
            <li id="navbut"><a href="">My Links</a></li>
            <li id="navbut"><a href="">About</a></li>
        
        </ul>
        <div class="col-sm-1 col-md-1"></div>
        
        <div class="col-sm-2 col-md-5">
        <ul class="nav navbar-nav navbar-right">
            <li id="accbut"><a href="logout" onclick="signout();">Sign Out</a></li> 
        </ul>
        </div>
        
        </div>
        </div>
        <div class="bs_search_wrapper">
<form class="form-wrapper cf">
        <input type="text" placeholder="I am looking for..." required>
        <button type="submit">Search</button>
    </form>     
        </div>
<!--HEADER ENDS---------------------------------------->


<!--CATEGORIES BEGIN------------------------------>
<div class="alert alert-info">
  <a class="close" data-dismiss="alert">×</a>
  
 <div class="user_welcome_wrap">
<div class="user_welcome">Welcome <span>{{Session::get('name')}},</span></div>
<div class="module_add_link" ><button type="button" class="btn btn-primary try-1 ">Add Link</button> </div>
</div>
<p class="my_para">To begin, please use our <span>add link</span> feature for posting a new link. </p>
<p class="my_para">Below are the links previously posted by you in <span>my links</span> section and your favourite links are in <span>favourites</span> section.</p>
 
 
 </div>


@if(Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
@endif


<div id="module_wrap">
<div class="module_label"><span>My Links</span><div class="module_expand expander" ><img id="myplus1" onclick="changeImage1()" alt="Browse more categries" src="images/plus.png"height=25 width=25 /> </div></div>
<div class="container-fluid">
  <div class="row">

@foreach($links as $link)
<div class="mylink-grid">
<div class="mylink-item">             
        <div class="mylink-info">
            <div class="mylink-info-front" style="background-image: url({{$link->photo}});background-size: cover;"></div>
            <div class="mylink-info-back">
                
                <p>
                <a href="favourites?link={{$link->link}}">Add to favourites</a>
                <a href="share?link={{$link->link}}">Share</a>

                Visits: {{$link->counter}} <a href="tovisit?link={{$link->link}}" target="_blank">Visit Link</a>
                <br>
                 {{$link->description}}<br/> <a href="">Read More</a></p>
            </div>    
        </div>
    </div>
    <h3 class="mylink-h3">{{$link->heading}}</h3>
</div>
@endforeach

<!---EXPANDER TRENDING MONTH-->
<div class="content" style="display: inline;">

</div>
</div>

</div>
</div>
<!---TRENDING MONTH ENDS---------------------------->

<div id="seperator">
</div>


<!--Favourites -->



<div id="module_wrap">
<div class="module_label">Favourites<div class="module_expand_text" ><p>*Click on category to expand</p> </div></div>
<div class="container-fluid">
  <div class="row">
  
@foreach($favourites as $favourite) 
<div class="fav-grid">
<div class="fav-item">             
        <div class="fav-info">
            <div class="fav-info-front" style="background-image:url({{$favourite->photo}});background-size: cover;"></div>
            <div class="fav-info-back">
                
                <p>Visits: {{$favourite->counter}} <a href="tovisit?link={{$favourite->link}}" target="_blank">Visit Link</a>
                <br>
                <br/> <a href="">Read More</a></p>
            </div>    
        </div>

</div>
  <h3 class="fav-h3">{{$favourite->heading}}</h3>
</div>
@endforeach

</div>
</div>
</div>

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
<!---ADD LINK LIGHTBOX HTML---------------------------------->
           <div id="add_link">
           <div id="lb_coll">
               <div class="pure-form pure-form-stacked">
    <fieldset>
    {{Form::open(array('method' => 'get','url' => 'insert_user_links'))}}
        <legend>Add a new Link</legend>

        <label for="text">Link</label>
        <input type="text" class="pure-input-1-5" placeholder="Link" name="link">
        <div style="height:10px;"></div>

        <select class="pure-input-1-5" placeholder="Category" name="category">
        <option value="article">Article</option>
        <option value="education">Education</option>
        <option value="music">Music</option>
        <option value="knowledge">Knowledge</option>
        <option value="gaming">Gaming</option>
        <option value="other">Other</option>
        </select>
  
<div style="height:10px;"></div>
 <input type="submit" class="pure-button pure-button-primary" name="submit" value="Submit">
   {{Form::close()}}     
    </fieldset>
   
    <a id="lb_close" href="" class="lb_close">Close</a>
    </div>
    </div>


<!---LOGIN LIGHTBOX END-------------------------------------->

</body>
</html>
