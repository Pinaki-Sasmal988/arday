$(document).ready(function(){

 $('#college_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"https://collegelisting.ecampus.feesbook.in/public/search/fetch",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#collegeList').fadeIn();  
                    $('#collegeList').html(data);
          }
         });
        }
        else{
            $('#collegeList').fadeOut();
           //$('#collegeList').css('none'); 
        }
    });

    $(document).on('click', 'li', function(){  
        $('#college_name').val($(this).text());  
        $('#collegeList').fadeOut();  
    });  

});