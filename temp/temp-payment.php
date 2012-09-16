<body>

<!-- ShH - google analytics -->
<!-- ShH - ana -->

<!--section02-->
<table class="pageContent"><tr><td>
 
 
 
 
      <table class="header">
	    <tr><td>
	    <!-- header logo, header text and header sponsor goes here-->
<!-- header-->            
<?php if($header==1) {include('parts/header.php');};?>
<?php if($easySlider==1) {include('parts/easySlider.php');};?>

	    </td></tr>
	    </table>


	    <!--section01-->
        <table class="section">
	      <tr>
	        <td class="mainSize">
<!-- menumain-->
        
        
<?php $browser = $_SERVER['HTTP_USER_AGENT'];
	if (strstr($browser, "MSIE")) { 
		include('parts/menumainhtml4.php');
	}else{
		include('parts/menumain.php');
}; ?>


			</td>
	        <td style="text-align:left;">
	<!-- manustaycon-->            
<?php if($manustaycon==1) {include('parts/manustaycon.php');};?>

			</td>
          </tr>
      </table>
      


        
        
	    <!--section02 (herer goes the main body)-->
        <table class="section" style="background-color:#1D1D1B">
	      <tr>
	        <td class="mainSize" style="background-color:#fff">
            
	<!-- index-->            




<?php if($form03body==1) {include('parts/form03body.php');};?>


<!-- **************************************************************************************** --> 
	<!-- confrences--> 






			</td>
    
            
	        <td class="sidebarSize"> 
            
            <table style="height:100%;">

<tr><td style="text-align:center;vertical-align:top;">             
<!-- sidebar1-->
<?php if($sidebar1==1) {include('parts/sidebar1.php');};?>
</td></tr>

<tr><td  style="text-align:center;">
<!-- sidebar2-->
<?php if($sidebar2==1) {include('parts/sidebar2.php');};?>
</td></tr>


</table>


			</td>
          </tr>
          
          
      </table>
      
      
	    <!--section03-->   
        <table class="section">
    <tr>
    <td class="mainSize" style="vertical-align:top;">


<!-- footermenu-->
<?php if($footermenu==1) {include('parts/footermenu.php');};?>

		
    </td>        

    
    <td class="sidebarSize footer-side" >
    
<?php if($footerside==1) {include('parts/footerside.php');};?>

<!--
	<div class="footerNull">
osuere mollis. Mauris aliquet elementum dapibus. Mauris rhoncus felis sed enim</div>-->
    </td></tr></table>
    
</td></tr></table>


	<!-- foot-->            
<?php if($form04foot==1) {include('parts/form04foot.php');};?>
    
    

</body>
</html>
