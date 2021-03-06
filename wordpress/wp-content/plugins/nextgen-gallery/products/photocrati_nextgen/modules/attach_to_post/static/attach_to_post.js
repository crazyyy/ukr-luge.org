// Give this window an ID
this.id = 'ngg-attach_to_post';

// Provides a function to close the TinyMCE popup window
function close_attach_to_post_window()
{
	var src = jQuery(top.document).find("#TB_window iframe").attr('src');
	if (src && src.match('attach_to_post')) {
		top.tb_remove();
	}
	else {
		top.tinyMCE.activeEditor.windowManager.close(window);
	}
}

// Adjusts the height of a frame on the page, and then executes
// the specified callback
function adjust_height_for_frame(parent_window, current_window, callback)
{
	// Adjust height of the frame
	var $frame			= jQuery(current_window.frameElement);
	var new_height		= $frame.contents().height()/3;
    var new_height_body = $frame.contents().find('#wpbody').height();
    var parent_height   = jQuery(parent_window.document).height();
	var current_height	= $frame.height();

    if (new_height < new_height_body) new_height = new_height_body;
    if (new_height < parent_height) new_height = parent_height;

    if (current_height < new_height) {
        $frame.height(new_height);

        var frame_id = $frame.attr('id');
        if (frame_id && frame_id.indexOf('ngg-iframe-') == 0) {
            var tab_id = frame_id.substr(11);

            if (tab_id) {
                jQuery('#' + tab_id).height(new_height);
            }
        }
    }

	if (callback != undefined)
		return callback(parent_window, current_window, new_height);
	else
		return true;
}

function ngg_get_measures_for_frame(frame)
{
	var $frame			= jQuery(frame);
	var frame_id = $frame.attr('id');
	var measures = {};

	if (frame_id && frame_id.indexOf('ngg-iframe-') == 0) {
		var tab_id = frame_id.substr(11);
		
		if (tab_id) {
			var jDoc = jQuery(document);
			
			measures.scrollTop = jDoc.scrollTop() - 40; // remove around 40 for tabs and padding
			
			if (window.parent) {
				var jparDoc = jQuery(window.parent.document);
				
				measures.scrollHeight = jparDoc.find('.ngg_attach_to_post_window').height() - 40; // remove around 40 for tabs and padding
			}
			else {
				measures.scrollHeight = jDoc.height();
			}

            if (typeof(window.console) != 'undefined') {
                console.log(measures);
            }
		}
	}
	
	return measures;
}

// Activates the attach to post screen elements
jQuery(function($){
	// Activate horizontal tabs
	$('#attach_to_post_tabs').ngg_tabs();

	// If the preview area is being displayed, emit an event for that
	$('.accordion h3').bind('click', function(e){
		if ($(this).attr('id') == 'preview_tab') {
			$('#preview_area').trigger('opened');
		}
	});

	// Activate accordion for display tab
	$('.accordion').accordion({
        clearStyle: true,
        autoHeight: false,
        heightStyle: 'content'
    });

	// If the active display tab is clicked, then we assume that the user
	// wants to display the original tab content
	$('.ui-tabs-nav a').click(function(e){

		var element = e.target ? e.target : e.srcElement;

		// If the accordion tab is used to display an iframe, ensure when
		// clicked that the original iframe content is always displayed
		if ($(element).parent().hasClass('ui-state-active')) {
			var iframe = $(element.hash+' iframe');
			if (iframe.length > 0) {
				if (iframe[0].contentDocument.location != iframe.attr('src')) {
					iframe[0].contentDocument.location = iframe.attr('src');
				}
			}
		}
	});

	// Close the window when the escape key is pressed
	$(this).keydown(function(e){
		if (e.keyCode == 27) close_attach_to_post_window();
		return;
	});

	// Fade in now that all GUI elements are intact
	$('body').css({
		position: 'static',
		visibility: 'visible'
	}).animate({
		opacity: 1.0
	});
});

function is_visual_editor()
{
	return jQuery(top.document).find('.html-active:visible').length == 0;
}

function insert_into_editor(snippet, ref_or_id)
{
	if (is_visual_editor()) {
		var editor = top.tinyMCE.activeEditor;
		if (editor.selection.getNode().outerHTML.indexOf(ref_or_id) >= 0) {
			jQuery(editor.selection.getNode()).attr('data-shortcode', snippet.substring(1, snippet.length-1));
		}
		else {
			editor.execCommand('mceInsertContent', false, snippet);
		}
		editor.selection.collapse(false);

	}
	else {
		myField = top.document.getElementById('content');

		myValue = snippet;

		//IE support
		if (document.selection) {
			myField.focus();
			sel = document.selection.createRange();
			sel.text = myValue;
		}
		//MOZILLA and others
		else if (myField.selectionStart || myField.selectionStart == '0') {
			var startPos = myField.selectionStart;
			var endPos = myField.selectionEnd;
			myField.value = myField.value.substring(0, startPos)
				+ myValue
				+ myField.value.substring(endPos, myField.value.length);
		} else {
			myField.value += myValue;
		}
	}
}
