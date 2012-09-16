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
<?php


 if($menumain==1) {include('parts/menumain.php');}
?>

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
            
	<!-- **************************************************************************************** -->                        
	<!-- ourstorynav-->            
<?php if($ourstorynav==1) {include('parts/ourstorynav.php');};?>
	<!-- ourstory-->            
<?php if($ourstory==1) {include('parts/ourstory.php');};?>


<!-- **************************************************************************************** --> 
	<!-- confrences--> 

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
	<!-- c2012-->    
<?php if($c2012nav==1) {include('parts/c2012nav.php');};?>     
<?php if($c2012header==1) {include('parts/c2012header.php');};?>
<?php if($c2012speakers==1) {include('parts/c2012speakers.php');};?>
<?php if($c2012workshops==1) {include('parts/c2012workshops.php');};?>


	<!-- **************************************************************************************** -->       
        
	<!-- contactus-->     
<?php if($contactform==1) {include('parts/contactform.php');};?>

	<!-- thanku-->  
<?php if($thanku==1) {include('parts/thanku.php');};?>





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
<!--
	<div class="footerNull">
osuere mollis. Mauris aliquet elementum dapibus. Mauris rhoncus felis sed enim</div>-->
    </td></tr></table>
    
</td></tr></table>


	<!-- foot-->            
<?php if($foot==1) {include('parts/foot.php');};?>
    
    

</body>
</html>
