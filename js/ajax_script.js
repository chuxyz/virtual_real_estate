$(function(){
	$('select#state').change(function(){
		stateID = $(this).val();
		$('select#town > option').nextAll().remove();
		$.post('ajax/list_town/'+stateID, function(data){
			$('select#town').append(data);
			form_ajax_response('select#state','state');
			});
		}); // change
	$('#property_type').change(function(){
		form_ajax_response('#state','state');
		if($('#town2').is(':hidden'))
		{
			form_ajax_response('#town','town');
		}
		else
		{
			form_ajax_response('#town2','town2');
		}
		form_ajax_response('#location','location');
		form_ajax_response('#property_type','property_type');
		});	
	$('#town').change(function(){
		form_ajax_response('#town','town');
		});	
/////////////////////////////////////////////////////
function text_ajax_response(id, url_method)
{
	$(id).blur(function(){
		var t = this; 
    if (this.value != this.lastValue) 
	{
      if (this.timer)
	  {
		  clearTimeout(this.timer);
	  }
      //validateUsername.removeClass('error').html('<img src="images/ajax-loader.gif" height="16" width="16" /> checking availability...'); LOADER
      
      this.timer = setTimeout(function () {
        $.ajax({
          url: 'ajax/validation/'+url_method+'/' + t.value,
          dataType: 'json',
          type: 'post',
          success: function (j) {
			 // $('#a_name').parent().next().siblings('div').hasClass('error').remove();
			 if(!j.OK)
			 {
            $(id).parent().next().html('<div class="error">'+j.msg+'</div>');
			 }
			 else
			 {
				 $(id).parent().next().children('div').remove();
			 }
          }
		}); // ajax
		}); //timeout
	} 
	}); // BLUR
}
function textarea_ajax_response(id, url_method)
{
	$(id).blur(function(){
		var t = this; 
    if (this.value != this.lastValue) 
	{
      if (this.timer)
	  {
		  clearTimeout(this.timer);
	  }
      //validateUsername.removeClass('error').html('<img src="images/ajax-loader.gif" height="16" width="16" /> checking availability...'); LOADER
      
      this.timer = setTimeout(function () {
        $.ajax({
          url: 'ajax/validation/'+url_method+'/' + t.value,
          dataType: 'json',
          type: 'post',
          success: function (j) {
			 // $('#a_name').parent().next().siblings('div').hasClass('error').remove();
			 if(!j.OK)
			 {
				 $(id).parent().children('div').remove();
            	 $(id).parent().append('<div class="error txtarea">'+j.msg+'</div>');
			 }
			 else
			 {
				 $(id).parent().children('div').remove();
			 }
          }
		}); // ajax
		}); //timeout
	} 
	}); // BLUR
}
function form_ajax_response(id, url_method)
{
		var t = $(id).val(); 
        $.ajax({
          url: 'ajax/validation/'+url_method+'/' + t,
          dataType: 'json',
          type: 'post',
          success: function (j) {
			 if(!j.OK)
			 {
				 if(id == '#comment')
				 {
					 $(id).parent().children('div').remove();
            	 	 $(id).parent().append('<div class="error txtarea">'+j.msg+'</div>');
				 }
				 if(url_method == 'category')
				 {
					 $('.sr').children('div').remove();
            	 	 $('.sr').html('<div class="error">'+j.msg+'</div>');
				 }
				 else
				 {
            		$(id).parent().next().html('<div class="error">'+j.msg+'</div>');
				 }
			 }
			 else
			 {
				 if(id == '#comment')
				 {
					 $(id).parent().children('div').remove();
				 }
				 if(url_method == 'category')
				 {
					 $('.sr').children('div').remove();
				 }
				 else
				 {
				 $(id).parent().next().children('div').remove();
				 }
			 }
          }
		}); // ajax
}

text_ajax_response('#a_name','agent_name');
text_ajax_response('#location','location');
text_ajax_response('#town2','town2');
text_ajax_response('#property_type2','property_type2');
text_ajax_response('#a_address','agent_address');
text_ajax_response('#a_phone','agent_phone');
//text_ajax_response('#a_email','agent_email');
//text_ajax_response('#a_website','agent_website'); 
textarea_ajax_response('#comment','comment');
text_ajax_response('#price','price');

/////////////////////// FOCUS EVENTS
$('#town2').focus(function(){
	form_ajax_response('#state','state');
	});
$('#location').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	});
$('#property_type2').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	});
$('#a_name').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	form_ajax_response('#property_type','property_type');
	form_ajax_response('.category:checked','category');
	});
$('#a_address').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	form_ajax_response('#property_type','property_type');
	form_ajax_response('.category:checked','category');
	form_ajax_response('#a_name','agent_name');
	});
$('#a_phone').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	form_ajax_response('#property_type','property_type');
	form_ajax_response('.category:checked','category');
	form_ajax_response('#a_name','agent_name');
	form_ajax_response('#a_address','agent_address');
	});
$('#a_email, #a_website, #a_fb_id, #comment').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	form_ajax_response('#property_type','property_type');
	form_ajax_response('.category:checked','category');
	form_ajax_response('#a_name','agent_name');
	form_ajax_response('#a_address','agent_address');
	form_ajax_response('#a_phone','agent_phone');
	});
$('#price').focus(function(){
	form_ajax_response('#state','state');
	if($('#town2').is(':hidden'))
	{
		form_ajax_response('#town','town');
	}
	else
	{
		form_ajax_response('#town2','town2');
	}
	form_ajax_response('#location','location');
	form_ajax_response('#property_type','property_type');
	form_ajax_response('.category:checked','category');
	form_ajax_response('#a_name','agent_name');
	form_ajax_response('#a_address','agent_address');
	form_ajax_response('#a_phone','agent_phone');
	form_ajax_response('#comment','comment');
	});
$('.category').click(function(){
	$('.sr').children('div').remove();
	});
});