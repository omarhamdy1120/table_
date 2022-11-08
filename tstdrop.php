<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        
        <meta charset="utf-8">
<meta name="title" content="DahabMasr LTD - Home page">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>DahabMasr LTD - Home page</title>
<link rel="stylesheet" type="text/css" media="all" href="styles-m.css">
<link rel="stylesheet" type="text/css" media="all" href="style.css">
<link rel="stylesheet" type="text/css" media="all" href="styles.css">
<link rel="stylesheet" type="text/css" media="all" href="styles_003.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="styles-l.css">


<link rel="stylesheet" type="text/css" media="all" href="styles_002.css">

<link rel="stylesheet" type="text/css" media="all" href="goe.css">

	</head>
	<body id="html-body" class="width1200 wide lazy-loading-img cms-home cms-page-2 cms-index-index page-layout-1column" data-container="body" aria-busy="false">
	
<div class="page-wrapper">    


<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>

<div class="columns">
<div class="column main"><input name="form_key" type="hidden" value="tfdnGrACflhgeBJe">




<div class="section-builder  section-builder-full calctable">



<div class="frame black-block-section">

<div class="line">



<div class="col-des-12 col-tb-12 col-mb-12 margin-bottom30 margin-top30 order-des-1">

<div class="">

<div class="line  justify-content-center">

<div class="panel-block-row  panel-block col-des-12 block762 col-tb-12 col-mb-12">

<div style="padding: 30px;">

<div class="text-center">

<h1 class="margin-bottom50">Investment Products Comparison</h1>

</div>

</div>

</div>

<div class="col-des-6 col-tb-6 col-mb-12 margin-bottom30 order-des-1 calculate" style="width: 50%; margin-left:300px;">
<div class="line">
<div class="panel-block-row  panel-block col-des-12 block763 col-tb-12 col-mb-12">
<div class="text-center">

<h3 class="margin-bottom15">Insert Your Product Here</h3>
<div class="block-note margin-bottom10">Smart Comparison</div>





















<div class="">



<div class="line assetList">



<div class="col-des-5 col-tb-5 col-mb-12 margin-bottom5  order-des-1">



<select class="bottom5 asset-class-dd input" data-index="1" required="true" data-validate="{'required':true}" name="Product0" id="Product0" value="" tabindex="3">

<option selected="selected" disabled="disabled">Select Product</option>

<optgroup label="Coins">
<?php
  $sql = "SELECT * FROM coins";
  $resultset = mysqli_query($conn, $sql);
  while( $rows = mysqli_fetch_assoc($resultset) ) { 
  ?>

<option value="<?php echo $rows["id"]; ?>"data-mcswiss="<?php echo $rows["mc_swiss"]; ?>" data-mcsam="<?php echo $rows["mc_sam"]; ?>" data-mcslima="<?php echo $rows["mc_slima"]; ?>" data-mcgalla="<?php echo $rows["mc_galla"]; ?>" data-mcbtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackswiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbacksam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackslima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackgalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackbtc="<?php echo $rows["cashback_btc"]; ?>"data-rateswiss="<?php echo $rows["rate_swiss"]; ?>"data-ratesam="<?php echo $rows["rate_sam"]; ?>"data-rateslima="<?php echo $rows["rate_slima"]; ?>"data-rategalla="<?php echo $rows["rate_galla"]; ?>"data-ratebtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>" data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?></option>
<?php }	?>


</optgroup>

<optgroup label="Small Ingots">

<!-- Enter Small Ingots Option here -->
<?php
$sql = "SELECT * FROM small";
$resultset = mysqli_query($conn, $sql);
while( $rows = mysqli_fetch_assoc($resultset) ) { ?>

<option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>" data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?>
</option>
<?php }	?>


</optgroup>

<optgroup label="Large Ingots">
<!-- Enter  Large Ingots Option here -->
<?php
$sql = "SELECT * FROM large";
$resultset = mysqli_query($conn, $sql);
while( $rows = mysqli_fetch_assoc($resultset) ) { ?>

<option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>" data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?>
</option>
<?php }	?>

</optgroup>

<optgroup label="Gold Bars">

<!-- Enter Gold Bars Option here -->
<?php
$sql = "SELECT * FROM bar";
$resultset = mysqli_query($conn, $sql);
while( $rows = mysqli_fetch_assoc($resultset) ) { ?>

<option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>" data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?>
</option>
<?php }	?>

</optgroup>

</select>



</div>
</div>


<div class="line">



<div class="col-des-12 col-tb-12 col-mb-12 margin-bottom5  order-des-1">



<button class="action btn btn-primary btn-sm" id="CalculatorSubmit" type="submit" title="Calculate" disabled="disabled" style="display: none;">

</button>

<button class="add_form_field action btn btn-secondary btn-sm input">Add Another Product&nbsp; 

      <span style="font-size:16px; font-weight:bold;">+ </span>

    </button>	





</div>

</div>





</div>


</div>

</div>

</div>

</div>





<div class="col-des-12 col-tb-12 col-mb-12 margin-bottom30 order-des-2">

<div class="line">

<div class="panel-block-row  panel-block col-des-12 block764 col-tb-12 col-mb-12 padding-bottom-img ">

<div>

<div class="text-center">

<h3 class="margin-bottom15">Your Investment Real-Time Value</h3>

<table class="sub-title margin-bottom10 text-left calculator hidden-tb hidden-mb" border="1">

<thead>

<tr>

<th class="swiss text-center" colspan="6" width="5%">Swiss Gold</th>

<th class="sam text-center" colspan="6" width="5%">Sam Gold</th>
<th class="slima text-center" colspan="6" width="5%">Slima Gold</th>
<th class="galla text-center" colspan="6" width="5%">El Galla Gold</th>
<th class="btc text-center" colspan="6" width="5%">BTC Gold</th>


</tr>

</thead>

<tbody>

    <tr>

      <td colspan="6">

<table class="sub-title margin-bottom10 text-left swiss-inner" border="1">

<thead>

<tr>

<th>Product</th>
<th>Making Charges</th>

<th>Cash Back</th>

<th>%</th>

</tr>

</thead>

<tbody>





</tbody>

</table>

	  </td>

      <td colspan="6">

<table class="sub-title margin-bottom10 text-left sam-inner " border="1">

<thead>

<tr>

<th>Product</th>
<th>Making charges</th>

<th>Cash Back</th>

<th>%</th>



</tr>

</thead>

<tbody>
  





</tbody>

</table>

	  </td>

      <td colspan="6">

<table class="sub-title margin-bottom10 text-left slima-inner " border="1">

<thead>

<tr>

<th>Product</th>
<th>Making charges</th>

<th>Cash Back</th>

<th>%</th>




</tr>

</thead>
<tbody>
  





</tbody>
</table>

	  </td>

      <td colspan="6">

<table class="sub-title margin-bottom10 text-left galla-inner " border="1">

<thead>

<tr>

<th>Product</th>
<th>Making charges</th>

<th>Cash Back</th>

<th>%</th>



</tr>

</thead>
<tbody>
  





</tbody>
</table>

	  </td>

      <td colspan="6">

<table class="sub-title margin-bottom10 text-left btc-inner " border="1">

<thead>

<tr>

<th>Product</th>
<th>Making charges</th>

<th>Cash Back</th>

<th>%</th>




</tr>

</thead>
<tbody>
  





</tbody>
</table>

	  </td>

    </tr>

	

	

</tbody>


</table>

</div>

</div>

</div>

</div>

</div>




<div class="col-des-12 col-tb-12 col-mb-12 margin-bottom30 order-des-2">

<div class="line">

<div class="panel-block-row  panel-block col-des-12 block765 col-tb-12 col-mb-12 padding-bottom-img ">

<div>

<div class="content-block deals-product-cat-block">

<div class="message empty">



<small>

Note that the resulting performance of various investment outcomes are 
hypothetical in nature, may not reflect actual investment results and 
are not guarantees of future results. Dahab Masr 

</small>



</div>

</div>

</div>

</div>

</div>

</div>









</div>

</div>

</div>



</div>

</div>

</div>


</div>    
</div>
</div>
</main>

</div>




    

<script>
	var BASE_URL = WEB_URL = 'https://dahabmasr.com/';
	var RTL = false;
    var require = {
        "baseUrl": "https://dahabmasr.com/static/version1663677963/frontend/Mgs/claue/en_US"
    };
        var CATALOG_CHECK = 0;
        </script>
<script type="text/javascript" src="require.js"></script>
<script type="text/javascript" src="requirejs-config.js"></script>






<script>
    require.config({
        paths: {
            googleMaps: 'https\u003A\u002F\u002Fmaps.googleapis.com\u002Fmaps\u002Fapi\u002Fjs\u003Fv\u003D3\u0026key\u003D'
        },
        config: {
            'Magento_PageBuilder/js/utils/map': {
                style: ''
            },
            'Magento_PageBuilder/js/content-type/map/preview': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fdahabmasr.com\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
            'Magento_PageBuilder/js/form/element/map': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fdahabmasr.com\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
        }
    });
</script>




<script type="text/javascript">
require(['jquery', 'goe'], function($){

$(document).ready(function(){

var ProductID = 0;
var ProductName =0;
var mc_swiss = 0;
var mc_sam = 0;
var mc_slima = 0;
var mc_galla = 0;
var mc_btc = 0;
var cashback_swiss = 0;
var cashback_sam = 0;
var cashback_slima = 0;
var cashback_galla = 0;
var cashback_btc = 0;
var rate_swiss = 0;
var rate_sam = 0;
var rate_slima = 0;
var rate_galla = 0;
var rate_btc = 0;
var max_fields = 2;
var wrapper = $(".assetList");
var TableSwiss = $(".swiss-inner");
var TableSam = $(".sam-inner");
var TableSlima = $(".slima-inner");
var TableGalla = $(".galla-inner");
var TableBtc = $(".btc-inner");
var DivTest = $("#calcs");
var add_button = $(".add_form_field");
var x = 0;



function checkInputs() {
  var isValid = true;
  $('select').filter('[required]').each(function() {
    if ($(this).val() === '' || $(this).val() === null) {
      $('#CalculatorSubmit').prop('disabled', true)
      isValid = false;
      return false;
    }
  });

  if(isValid) {$('#CalculatorSubmit').prop('disabled', false)}
  return isValid;
}

function Calculate() {

  var isValid = true;
  $('select').filter('[required]').each(function() {
    if ($(this).val() === '' || $(this).val() === null) {
      $('#CalculatorSubmit').prop('disabled', true)
      isValid = false;
      return false;
    }
  });
  if(isValid) {$('#CalculatorSubmit').prop('disabled', false)}
  return isValid;
}


$.getJSON("data.json", function(data) {

checkInputs();

$('#loadTable').prop('style', 'opacity:1;');


$(document).change( function (e) {
checkInputs();
});

$(document).change( function (e) {
checkInputs();
e.preventDefault();
$('.delete').prop('disabled', true);


for( var i = 0; i <= x; i++ ) {
$('.rslt'+ i).remove();

var ProductID =  parseInt($('select[name=Product'+ i +']').find('option:selected').val());
var ProductName =  $('select[name=Product'+ i +']').find('option:selected').data('productname');
var mc_swiss =  $('select[name=Product'+ i +']').find('option:selected').data('mcswiss');
var mc_sam =  $('select[name=Product'+ i +']').find('option:selected').data('mcsam');
var mc_slima =  $('select[name=Product'+ i +']').find('option:selected').data('mcslima');
var mc_galla =  $('select[name=Product'+ i +']').find('option:selected').data('mcgalla');
var mc_btc =  $('select[name=Product'+ i +']').find('option:selected').data('mcbtc');
var cashback_swiss =  $('select[name=Product'+ i +']').find('option:selected').data('cashbackswiss');
var cashback_sam =  $('select[name=Product'+ i +']').find('option:selected').data('cashbacksam');
var cashback_slima =  $('select[name=Product'+ i +']').find('option:selected').data('cashbackslima');
var cashback_galla =  $('select[name=Product'+ i +']').find('option:selected').data('cashbackgalla');
var cashback_btc =  $('select[name=Product'+ i +']').find('option:selected').data('cashbackbtc');
var rate_swiss =  $('select[name=Product'+ i +']').find('option:selected').data('rateswiss');
var rate_sam =  $('select[name=Product'+ i +']').find('option:selected').data('ratesam');
var rate_slima =  $('select[name=Product'+ i +']').find('option:selected').data('rateslima');
var rate_galla =  $('select[name=Product'+ i +']').find('option:selected').data('rategalla');
var rate_btc =  $('select[name=Product'+ i +']').find('option:selected').data('ratebtc');

if(rate_swiss=="N/A"){
  rate_swiss=0;
}
if(rate_sam=="N/A"){
  rate_sam=0;
}
if(rate_btc=="N/A"){
  rate_btc=0;
}
if(rate_galla=="N/A"){
  rate_galla=0;
}
if(rate_slima=="N/A"){
  rate_slima=0;
}

if(rate_swiss > rate_sam && rate_swiss > rate_btc && rate_swiss > rate_galla && rate_swiss > rate_slima){
  var color_swiss='green'
}else{
  var color_swiss='red'
}


if(rate_sam > rate_swiss && rate_sam > rate_btc && rate_sam > rate_galla && rate_sam > rate_slima){
  var color_sam='green'
}else{
  var color_sam='red'
}


if(rate_slima > rate_swiss && rate_slima > rate_btc && rate_slima > rate_galla && rate_slima > rate_sam){
  var color_slima='green'
}else{
  var color_slima='red'
}


if(rate_galla > rate_swiss && rate_galla > rate_btc && rate_galla > rate_sam && rate_galla > rate_slima){
  var color_galla='green'
}else{
  var color_galla='red'
}


if(rate_btc > rate_swiss && rate_btc > rate_sam && rate_btc > rate_galla && rate_btc > rate_slima){
  var color_btc='green'
}else{
  var color_btc='red'
}


$(TableSwiss).append('<tr class="rslt'+ i +' asset_result" data-index="'+ i +'"><td><div id="product'+ i +'">'+ ProductName +'</div></td><td><div id="mc-Swiss'+ i +'">'+ mc_swiss +'</div></td><td><div id="cashback-Swiss'+ i +'">'+ cashback_swiss +'</div></td><td><div class="'+ color_swiss +'"  id="rate-Swiss'+ i +'">'+ rate_swiss +'</div></td></tr>');

$(TableSam).append('<tr class="rslt'+ i +' asset_result" data-index="'+ i +'"><td><div id="product'+ i +'">'+ ProductName +'</div></td><td><div id="mc-Sam'+ i +'">'+ mc_sam +'</div></td><td><div id="cashback-Sam'+ i +'">'+ cashback_sam +'</div></td><td><div class="'+ color_sam +'"  id="rate-Sam'+ i +'">'+ rate_sam +'</div></td></tr>');

$(TableSlima).append('<tr class="rslt'+ i +' asset_result" data-index="'+ i +'"><td><div id="product'+ i +'">'+ ProductName +'</div></td><td><div id="mc-Slima'+ i +'">'+ mc_slima +'</div></td><td><div id="cashback-Slima'+ i +'">'+ cashback_slima +'</div></td><td><div class="'+ color_slima +'"  id="rate-Slima'+ i +'">'+ rate_slima +'</div></td></tr>');

$(TableGalla).append('<tr class="rslt'+ i +' asset_result" data-index="'+ i +'"><td><div id="product'+ i +'">'+ ProductName +'</div></td><td><div id="mc-Galla'+ i +'">'+ mc_galla +'</div></td><td><div id="cashback-Galla'+ i +'">'+ cashback_galla +'</div></td><td><div class="'+ color_galla +'"  id="rate-Galla'+ i +'">'+ rate_galla +'</div></td><</tr>');

$(TableBtc).append('<tr class="rslt'+ i +' asset_result" data-index="'+ i +'"><td><div id="product'+ i +'">'+ ProductName +'</div></td><td><div id="mc-Btc'+ i +'">'+ mc_btc +'</div></td><td><div id="cashback-Btc'+ i +'">'+ cashback_btc +'</div></td><td><div class="'+ color_btc +'"  id="rate-Btc'+ i +'">'+ rate_btc +'</div></td></tr>');

}


});



    $(add_button).click(function(e) {
        e.preventDefault();
		checkInputs();
		$('.delete').prop('disabled', false);
        if (x < max_fields) {
            x++;

          $(wrapper).append('<div class="col-des-5 col-tb-5 col-mb-12 margin-bottom5 appended'+ x +' order-des-1"><select class="bottom5 asset-class-dd input" data-index="'+ x +'" required="true" name="Product'+ x +'" id="Product'+ x +'" value="" tabindex="'+ x +'" required><option selected disabled>Select Product</option><optgroup label="Coins"><?php $sql = "SELECT * FROM coins"; $resultset = mysqli_query($conn, $sql); while( $rows = mysqli_fetch_assoc($resultset) ) { ?><option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>"  data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?></option><?php }	?></optgroup><optgroup label="Small Ingots"><?php $sql = "SELECT * FROM small"; $resultset = mysqli_query($conn, $sql); while( $rows = mysqli_fetch_assoc($resultset) ) { ?><option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>"  data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?></option><?php }	?></optgroup><optgroup label="Large Ingots"><?php $sql = "SELECT * FROM large"; $resultset = mysqli_query($conn, $sql); while( $rows = mysqli_fetch_assoc($resultset) ) { ?><option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>" data-ProductID="<?php echo $rows["id"]; ?>"  data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?></option><?php }	?></optgroup><optgroup label="Gold Bars"><?php $sql = "SELECT * FROM bar";$resultset = mysqli_query($conn, $sql);while( $rows = mysqli_fetch_assoc($resultset) ) { ?><option value="<?php echo $rows["id"]; ?>" data-mcSwiss="<?php echo $rows["mc_swiss"]; ?>" data-mcSam="<?php echo $rows["mc_sam"]; ?>" data-mcSlima="<?php echo $rows["mc_slima"]; ?>" data-mcGalla="<?php echo $rows["mc_galla"]; ?>" data-mcBtc="<?php echo $rows["mc_btc"]; ?>"data-cashbackSwiss="<?php echo $rows["cashback_swiss"]; ?>"data-cashbackSam="<?php echo $rows["cashback_sam"]; ?>"data-cashbackSlima="<?php echo $rows["cashback_slima"]; ?>"data-cashbackGalla="<?php echo $rows["cashback_galla"]; ?>"data-cashbackBtc="<?php echo $rows["cashback_btc"]; ?>"data-rateSwiss="<?php echo $rows["rate_swiss"]; ?>"data-rateSam="<?php echo $rows["rate_sam"]; ?>"data-rateSlima="<?php echo $rows["rate_slima"]; ?>"data-rateGalla="<?php echo $rows["rate_galla"]; ?>"data-rateBtc="<?php echo $rows["rate_btc"]; ?>"data-ProductID="<?php echo $rows["id"]; ?>" data-ProductName="<?php echo $rows["product"]; ?>"><?php echo $rows["product"]; ?></option><?php }	?></optgroup></select></div><button class="delete col-des-1 col-tb-1 col-mb-1 margin-bottom5  appended'+ x +' order-des-1">X</button>');

        }else {
          alert('You Reached the limits')
        }
    });



    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
		$('.rslt'+ x).remove();
		$('.appended'+ x).remove();
		x--;
    })


}); //json


}); //ready



});



</script>


</body>
</html>