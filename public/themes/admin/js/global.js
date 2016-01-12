/* Nofication Close Buttons */
if($('.notification a.close').length > 0)
{
	$('.notification a.close').click(function(e){
		e.preventDefault();

		$(this).parent('.notification').fadeOut();
	});
}

/*
	Check All Feature
*/
if($('.check-all').length > 0)
{
	$(".check-all").click(function(){
		$("table input[type=checkbox]").attr('checked', $(this).is(':checked'));
	});
}

/*
	Dropdowns
*/
if($('.dropdown-toggle').length > 0)
{
	$('.dropdown-toggle').dropdown();
}

/*
	Set focus on the first form field
*/
$(":input:visible:first").focus();

/*
	Responsive Navigation
*/
if($('.collapse').length > 0)
{
	$('.collapse').collapse();
}

/*
 Prevent elements classed with "no-link" from linking
*/
if($('.no-link').length > 0)
{
	$(".no-link").click(function(e){ e.preventDefault();	});
}