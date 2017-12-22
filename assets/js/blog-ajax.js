jQuery(function($){
	var page = 1; 
	var loading = true;
	var $window = $(window);
	var $content = $('#article_load_more'); // found on blog.php. loads new posts.
	var load_posts = function(){
		$.ajax({
			type: 'GET',
			data: {numPosts: 3, pageNumber: page},
			dataType: "html",
			url: "/wp-content/themes/tribunal/includes/blog-content-loader.php",
			beforeSend: function(){
				if(page !== 1){
					$content.append('<div id="temp_load"><img src="/wp-content/themes/tribunal/assets/img/gif/load.gif" style="width:100%;max-width:200px;margin:0 auto;"></div>');
				}
			},
			success: function(data){
				$data = $(data);
				
				if($data.length){
					$data.hide();
					
					$content.append($data);
					$data.fadeIn(500, function(){
						$('#temp_load').remove();
						loading = false;
					});
				}else{
					$('#temp_load').remove();
				}
			},
			error: function(jqXHR, textStatus, errorThrown){
				$('#temp_load').remove();
				console.log(jqXHR + " " + textStatus + " " + errorThrown);
			}
		});
	}
	$window.scroll(function(){
		var content_offset = $content.offset();
		//console.log(content_offset.top);
		
		if(!loading && ($window.scrollTop() + $window.height()) > ($content.scrollTop() + $content.height() + content_offset.top)){
			loading = true;
			page++;
			load_posts();
		}
	});
	load_posts();
});