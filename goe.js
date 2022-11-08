jQuery(function(){
function checkOutputs() {
      $.ajax({
        url: "config.php",
        type: "post",
		dataType: 'json',
        data: $('form').serialize(),
        success: function(response) {
$("#totalspent").html(response[x+1].TotalSpent);
$("#totalrevenue").html(response[x+1].TotalRevenue);
$("#totalPLS").html(response[x+1].PLTotal);

for( var i = 0; i <= x; i++ ) {

$(TablePast).append('<tr class="rslt'+ i +'" data-index="'+ i +'"><td><div id="AmountPerProduct'+ i +'">'+ response[i].totalPerProduct +'</div></td><td><div id="gramGoldPrice'+ i +'">'+ response[i].OldGold  +'</div></td><td><div id="mcTotal'+ i +'">'+  response[i].McRetailTotal  +'</div></td><td><div id="weight'+ i +'">'+ response[i].weight_21  +'</div></td></tr>');

$(Tablecurrent).append('<tr class="rslt'+ i +'" data-index="'+ i +'"><td><div id="Cur21Price'+ i +'">'+ response[i].gold +'</div></td><td><div id="cashback'+ i +'">'+ response[i].CashBack +'</div></td><td><div id="Totalrevenue'+ i +'">'+ response[i].TotalWithCashBack +'</div></td></tr>');
}
        },
        error: function(msg) {
          alert(JSON.stringify(msg));
        },
      });
}
});
