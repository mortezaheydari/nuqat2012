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
<?php if($indexs1==1) {include('parts/indexs1.php');};?>
<?php if($indexs2==1) {include('parts/indexs2.php');};?>
<?php if($sponsors2012==1) {include('parts/sponsors2012.php');};?>

            
	<!-- **************************************************************************************** -->                        
	<!-- ourstorynav-->            
<?php if($ourstorynav==1) {include('parts/ourstorynav.php');};?>
	<!-- ourstory-->            
<?php if($ourstory==1) {include('parts/ourstory.php');};?>


<!-- **************************************************************************************** --> 
	<!-- confrences--> 
<?php if($conf2012kuwait==1) {include('parts/conf2012kuwait.php');};?>  
<?php if($conf2012==1) {include('parts/conf2012.php');};?>        
<?php if($conf2010==1) {include('parts/conf2010.php');};?>        


<!-- **************************************************************************************** --> 
	<!-- c2010-->   
    
<?php if($c2010nav==1) {include('parts/c2010nav.php');};?>        
<?php if($c2010header==1) {include('parts/c2010header.php');};?>
<?php if($c2010speakers==1) {include('parts/c2010speakers.php');};?>
<?php if($c2010workshops==1) {include('parts/c2010workshops.php');};?>
<?php if($c2010entertainment==1) {include('parts/c2010entertainment.php');};?>


	<!-- **************************************************************************************** -->      
<!-- **************************************************************************************** --> 


	<!-- c2012 dubai-->  
    

  
<?php if($c2012dubai==1) {include('parts/c2012dubai.php');};?>

	<!-- **************************************************************************************** -->       
	<!-- c2012 kuwait-->    
<?php if($c2012kuwait==1) {include('parts/c2012kuwait.php');};?>
	<!-- **************************************************************************************** --> 

           
	<!-- contactus-->     
<?php if($contactform==1) {include('parts/contactform.php');};?>

	<!-- thanku-->  
<?php if($thanku==1) {include('parts/thanku.php');};?>

	<!-- ******form****************************************************************************** -->       


<?php if($form03body==1) {include('parts/form03body.php');};?>

	<!-- **************************************************************************************** -->       


<?php if($thankureg==1) {include('parts/thankureg.php');};?>


	<!-- **************************************************************************************** --> 

<?php if($terms==1) {include('parts/terms.php');};?>



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
<?php if($foot==1) {include('parts/foot.php');};?>
    
    

</body>
</html>
