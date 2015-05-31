define([
	
	'jquery'

], function( $ ){

	/*=====================================================*/
	/*==== Event registers 
	/*=====================================================*/

	//doc ready events:
	$( document ).ready( function(){
	
		setMenu();
	
		shareEvents();
	
	});
	
	
	//load events
	$( window ).load( function(){
	
	});
	
	
	//resize events:
	$( window ).resize( function(){
	
	});
	
	
	
	//scroll events
	jQuery(window).scroll(function(){
		
	});
	
	
	
	/*=====================================================*/
	/*==== Functions 
	/*=====================================================*/
	
	
	/**
	 * Set the responsive menu, if applicable
	 * @return void
	 */
	function setMenu(){
	
		//change the jquery selectors to fit the project:
		var toggle = $('.toggle-menu');
		var toggleBtn = $('.toggle-menu i');
		var menu = $('.menu-main-container');
	
	
		toggle.on('click tap', function(){
			menu.toggleClass( 'fold-out' );
			toggleBtn.toggleClass( 'fa-remove' );
			toggleBtn.toggleClass('fa-bars' );
	
			return false;
		});
	
		$('html').on('click tap',function( e ) {
	
			//Hide the menus if visible
			if( menu.hasClass( 'fold-out' ) ){
	
				menu.removeClass( 'fold-out' );
				toggleBtn.removeClass( 'fa-remove' );
				toggleBtn.addClass('fa-bars' );
			
				//return false;
	
			}else if( $('.feedback-wrapper').hasClass( 'fold-out' ) ){
	
				$('.feedback-wrapper .label').trigger( 'click' );
	
			}
		});
	
	
		$( '.menu-item-has-children > a' ).on('click', function( e ){
	
			if( menu.hasClass( 'fold-out' ) ){
	
				e.preventDefault();
	
				var parent = $( this ).parent();
	
				if( parent.hasClass( 'fold-out' ) ){
	
					if( $( this ).attr('href').length > 0 ){
						var _url = $( this ).attr('href');
					}else{
						_url = $( this ).find( 'a' ).attr( 'href' );
					}
	
					window.location.href = _url;
		
				}else{
					
					parent.addClass( 'fold-out' );
		
					return false;
				
				}
			
				return false;
			}
		});
	
	}
	
	
	
	/**
	 * Events for the share-buttons
	 * @return void
	 */
	function shareEvents(){
	
		$('.post-counter').click(function( e ){
	
	        e.preventDefault;
	
	        if( ! $(this).hasClass('post-comments') ){
	
	
	            var type = $(this).data('type');
	            var count = parseInt( $(this).data('count') );
	            var pid = $(this).data('postid');
	
	            var obj = $(this);
	            var data = {
	                action: 'social_share',
	                postid: pid,
	                type: type,
	            };
	            
	            window.open( obj.data('href'), '_blank', 'width=626,height=300' );
	
	            //post with ajax:
	            $.post( ajaxurl, data, function(response) {
	
	                if(response != 0 && response != ''){
	                    obj.find('p').html( count + 1 );
	                }
	
	            });
	
	        }
	    });
	}

});