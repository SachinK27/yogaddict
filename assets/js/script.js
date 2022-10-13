
$(document).load(function(){
	console.log('test');
	$('#authMenu').children().each(function(i, element ){
		let a= $(element).find('a').attr('href');



		if(a == '#home'){
			$(element).find('a').addClass('active');
		}else{

			$(element).find('a').removeClass('active');
		}
		// console.log(i);
		// console.log(element);
	});
});

$('#myBtn').click(function(){
	$('#authMenu').children().each(function(i, element ){
		let a= $(element).find('a').attr('href')
		if(a == '#home'){
			$(element).find('a').addClass('active');
		}else{

			$(element).find('a').removeClass('active');
		}
		// console.log(i);
		// console.log(element);
	});
});

//swap div
$(document).load($(window).bind("resize", listenWidth));

    function listenWidth( e ) {
        if($(window).width()<600)
        {
            $("#topLinks").remove().insertAfter($("#content"));
        } else {
            $("#topLinks").remove().insertBefore($("#content"));
        }
    }


//Login SignUp Validation
