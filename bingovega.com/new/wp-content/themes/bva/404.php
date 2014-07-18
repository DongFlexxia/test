<?php include ('header.php' ); 
 session_start();
    $req_t ="";
         if(isset($_SESSION['atclickid'])){
         $req_t = '?tclick='.$_SESSION['atclickid'];
      }
?>
<?php include ('inc/main-menu.php' ); ?>
<style type="text/css">

</style>

<div style="clear:both;">
</div>
<div id="bodies">
 
<div id="landingbody-one">
<?php if ( !is_page('home') || !is_front_page() ) : ?>
	<h2><?php if (function_exists('ghpseo_output')) ghpseo_output('secondary_title');
			else the_title(); ?><?php endif; ?></h2>
	

   <img src="http://www.bigtimebingo.com/wp-content/uploads/404-image.png" width="972" height="607" usemap="#Maps">
   <map name="Maps">
     <area shape="rect" coords="347,436,511,455" href="http://www.bingovega.com">
     <area shape="rect" coords="529,457,696,473" href="mailto:support@bingovega.com" alt="">
   </map>
</div>
</div>
<?php include ('bottom-promo.php' ); ?> 

<?php get_footer(); ?> 
