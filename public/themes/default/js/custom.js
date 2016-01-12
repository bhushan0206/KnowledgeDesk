if ($('input[name=category]:checked').length > 0) {
    alert("Please choose Offline Payment Method");
}

function validate() 
{
	 if( document.quiz_select_form.category.value == "-1" )
   {
     	alert( "Please select category" );
     	return false;
   }
   if( document.quiz_select_form.skill.value == "-1" )
   {
     	var r = confirm( "You have not selected skill level, Do you want to see all the quizzes from this category?" );   
     	if (r == true) 
     		return true;
     	else
     		return false;
   }
}

function HandleBackFunctionality()
{
  if(window.event) //Internet Explorer
  {
      alert("Browser back button is clicked on Internet Explorer…");
      return false;
  }           
  else //Other browsers e.g. Chrome
  {
    alert("Browser back button is clicked on other browser…");
    return false;
  }
}

function checkIfSelected()
{
  if (!$("input[name='answers']:checked").val()) 
  {
      alert('Please select an Answer!');
      return false;
  }
}

function ConfirmDelete()
{
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
}

$(document).ready(function() {

    var element =  document.getElementById('post_date');
    if (typeof(element) != 'undefined' && element != null)
    {
        $('#post_date').datepicker({
            format: "yyyy-mm-dd"
        }); 
    }   
    
    // Setup Data table for Quizzes
    $('#jquery_datatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var jquery_datatable = $('#jquery_datatable').DataTable( {responsive: true}); 


    // Apply the search
    jquery_datatable.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
});