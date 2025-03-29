
	/*Activate default tab contents*/
	var $magicLine, defaultActive;  
	
	defaultActive = $('.lonyo-tabs-menu li.active a').attr('href');
	$(defaultActive).show();
				
	$('.lonyo-tabs-menu').append("<li id='magic-line'></li>");
	$magicLine = $('#magic-line');		    
	$magicLine.width($('.active').width())
		// .css('left', $('.active a').position().left)
		// .data('origLeft', $magicLine.position().left)
		// .data('origWidth', $magicLine.width());				
		
	$('.lonyo-tabs-menu li a').click(function(){
		var $this,tabId,leftVal,$tabContent;
		$this = $(this);
		$tabContent = $('.tabContent');
		$this.parent().addClass('active').siblings().removeClass('active');
		tabId = $this.attr('href');		
		
		leftVal = $($tabContent).index($(tabId)) * $tabContent.width() * -1;
		$('.lonyo-tabs-wrapper').stop().animate({left:leftVal});
		
		$magicLine
			.data('origLeft',$this.position().left)
			.data('origWidth',$this.width() + 40);				
		return false;
	});		
	
	
