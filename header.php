<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      echo $subtitle ;
      echo $title ;
      echo " - Distribure";
      ?>
    </title>
    <meta name="description" content="May be another little world... ">
    <meta name="keywords" content="Ebook,PDF,Tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=false">
    <meta name="theme-color" content="#8766a9" >
    <link rel="icon" href="https://www.distribure.cf/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>

  </style>
 
  </head>
<body>
      <div class="container-fluid " style="background-color:#0f7699">
        <div class="row" id="header">
          <div class="col-lg-12" style= "font-size: x-large">
            <h1 class="text-center" style="font-family: 'Rubik',sans-serif ">
              <p style="font-weight: 700; color: #fff" class="">Distribution Core</p>
            </h1>
          </div>
        </div>
        <div class="row" id="tagline">
          <div class="col-lg-12">
            <div class="text-center">
              <h3>
                <small style="font-weight: 450">
                  <p style="color: #fff" >May be another little world...</p>
                </small>
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End of header and tagline-->
        <?php
            include("menu.php");
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119243171-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119243171-1');
</script>

    <div class="container">
        <script type="text/javascript">

// Google Internal Site Search script- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use

//Enter domain of site to search.
var domainroot="distribure.cf"

function Gsitesearch(curobj){
curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}

</script>


<form action="https://www.google.com/search" method="get" onSubmit="Gsitesearch(this)">


<input name="q" type="hidden" />
<input name="qfront" type="text" style="width: 80%" /> <input type="submit" value="Search" /></p>

</form>