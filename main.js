$(function() {
	$('th:not(.description)').attr('colspan',12);
	$('td:not(.one .two)') .attr('colspan',4);
	$("label:not(.hideAll)").addClass("checkbox-inline badge badge-info");
	$('.Membership, .Chartering, .Group, .Colletives ,.MOMcon, .Leadership, .Development,.Sponsor, .IT, .Mops,.Service').attr('colspan','165%');
	$('.table').find("tbody tr").find("td:eq(2),td:eq(3),td:eq(4)").addClass("april");
	$('.table').find("tbody tr").find("td:eq(5),td:eq(6),td:eq(7)").addClass("may");
	$('.table').find("tbody tr").find("td:eq(8),td:eq(9),td:eq(10)").addClass("june");
	$('.table').find("tbody tr").find("td:eq(11),td:eq(12),td:eq(13)").addClass("july");
	$('.table').find("tbody tr").find("td:eq(14),td:eq(15),td:eq(16)").addClass("august");
	$('.table').find("tbody tr").find("td:eq(17),td:eq(18),td:eq(19)").addClass("september");
	$('.table').find("tbody tr").find("td:eq(20),td:eq(21),td:eq(22)").addClass("october");
	$('.table').find("tbody tr").find("td:eq(23),td:eq(24),td:eq(25)").addClass("november");
	$('.table').find("tbody tr").find("td:eq(26),td:eq(27),td:eq(28)").addClass("december");
	$('.table').find("tbody tr").find("td:eq(29),td:eq(30),td:eq(31)").addClass("january");
	$('.table').find("tbody tr").find("td:eq(32),td:eq(33),td:eq(34)").addClass("february");
	$('.table').find("tbody tr").find("td:eq(35),td:eq(36),td:eq(37)").addClass("march");
	$('.table').find("tbody tr").find("td:eq(38),td:eq(39),td:eq(40)").addClass("total");
   //negative numbers should be red

   $('td').each(function(){
   	if($(this).text().indexOf('-') >= 0) $(this).css('color', 'red').addClass("negativeNumber");
   });
	// $('.monthsRow').css("color","white");
	$('.text').css("color","black").removeClass('negativeNumber');
	
	$("input:checkbox:not(:checked)").each(function() {
		var column = "table ." + $(this).attr("name");
		$(column).hide();
	});

	$("input:checkbox").click(function(){
		var column = "table ." + $(this).attr("name");
		$(column).toggle();
	});

	$(".showAll").click(function () {
		$(".checkBoxClass").prop('checked', $(this).prop('checked'));
		$("input:checkbox").each(function() {
			var column = "table ." + $(this).attr("name");
			$(column).show();	
		}); 

		$(".hideAll").attr("checked",false);
		$(".checkBoxClass").change(function(){
			if (!$(this).prop("checked")){
				$(".showAll").prop("checked",false);
			}
		});

	});


	$(".hideAll").click(function(){
		$("input:checkbox").each(function() {
			var column = "table ." + $(this).attr("name");
			$(column).hide();
		});

		$(".showAll").attr("checked",false);
		$("input:checkbox:not(.hideAll)").attr('checked', false);
	});			

	$(".table tr:not(.monthsRow,.goalActual,.description,.Membership, .Chartering, .Group, .Colletives ,.MOMcon, .Leadership, .Development,.Sponsor, .IT, .Mops,.Service)").each(function(idx){
		$(this).children().first().html(idx + 1);
		$(this).css('text-align', 'right');
	});



$(".table tr td:not(.total)").each(function () {
 var cellValue = $(this).text();
	if(isNaN(cellValue)){
		$(this).removeClass('percent negativeNumber dollars').css("color","black");
	}
	if(cellValue == 0)
		$(this).removeClass('percent');

});
$(".table tr td").each(function () {
	var tableCellValue = $(this).text();
	if(tableCellValue == 'NULL')
			$(this).css("color","white");

});

//put the percent sign at the front when needed
$(".percent" ).each(function () {   
	var item1 = $(this).text();
	var num1 = Number(item1).toLocaleString('en');
	if (Number(item1) == '') {
		$(this).removeClass('percentSign');
	} 
	$(this).text(num1);
});

//if the value of the text class is a number just hide it since it is not needed
$('.text').each(function () {   
	var textValue = $(this).text();
	var isnumber = /^\d+$/.test(textValue);
	if(isnumber){
		$(this).css("color","white");
	}
});

// caluculate the differnce between total goal and total actual

$("tr").each(function () {
	var totalActual = parseFloat($(this).find("#goalTotal").text().replace(/,/g, ''));
	var totalGoal = parseFloat($(this).find("#resultTotal").text().replace(/,/g, ''));
	var total =  totalGoal - totalActual;
	total = parseFloat(total).toFixed(2);
	$('#grandTotal', this).html(total);
});
//put dollar signs at the front of the dollar value0
$(".dollars" ).each(function () {   
	var item = $(this).text();
	var num = Number(item).toLocaleString('en');
	if (Number(item) < 0) {
		num = num.replace('-', '');
		$(this).addClass('negMoney');
	} else {
		$(this).addClass('enMoney');
	}

	$(this).text(num);
});


//numbers and percent should be rounded to the two digit
$('.number, .percent,.dollars').each(function(){
	var cellVal = $(this).text();
	if(!isNaN($(this).text())){
		cellVal = parseFloat(cellVal).toFixed(2);
	}

	$(this).html(cellVal);
})


// make the negative numbers red
$('.total').each(function(){
	if($(this).text().indexOf('-') >= 0) $(this).css('color', 'red'); //.addClass("negativeNumber");
});

//make the numbers separated by coma in a thousnd
$('td').text(function () { 
	var str = $(this).html() + ''; 
	x = str.split('.'); 
	x1 = x[0]; x2 = x.length > 1 ? '.' + x[1] : ''; 
	var rgx = /(\d+)(\d{3})/; 
	while (rgx.test(x1)) { 
		x1 = x1.replace(rgx, '$1' + ',' + '$2'); 
	} 
	$(this).html(x1 + x2); 
})

});

