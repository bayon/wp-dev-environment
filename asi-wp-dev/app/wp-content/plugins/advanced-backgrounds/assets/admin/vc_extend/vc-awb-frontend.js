/*!
 * Additional js for frontend and backend VC
 */
jQuery(function(a){"use strict";"undefined"!=typeof vc&&vc.events.on("shortcodes:add shortcodeView:updated",function(a){if("vc_row"===a.settings.base||"vc_column"===a.settings.base){var e=a.view.$el.children(".vc_row, .wpb_column"),t=e.children(".nk-awb-wrap"),n=!!t.find('[id*="jarallax"]').length&&t[0];n&&n.jarallax&&n.jarallax.destroy.apply(n.jarallax),t.remove();var o=vc.$frame[0].contentWindow,r=!!o&&o.nk_awb_init;e.children(".nk-awb")&&r&&r()}}),"undefined"!=typeof vc&&vc.events.on("shortcodes:vc_row shortcodes:vc_column shortcodes:nk_awb",function(e){var t=e.attributes.params;if(e.view&&e.view.$controls_buttons){var n=!1;if(n="nk_awb"===e.attributes.shortcode?e.view.$el.find(".wpb_element_title .nk-awb-icon"):e.view.$controls_buttons.parent().children(".vc_control-awb"),!t||!t.awb_type)return n.css("background-image","").html(""),void(n.hasClass("vc_control-awb")&&n.remove());if(n.length||"vc_row"!==e.attributes.shortcode&&"vc_column"!==e.attributes.shortcode||(n=a('<span class="vc_control-awb">').appendTo(e.view.$controls_buttons.parent())),n.attr("data-vc-control","edit"),n.html('<span class="vc_control-awb-overlay" style="background-color: '+(t.awb_color||"transparent")+';"></span>'),n.css("background-image",""),t.awb_image){var o=a("[data-model-id="+e.id+"]"),r=o.data("field-awb_image-attach-image"),c=a("#post_ID"),s=c.length?c.val():0;switch(e.getParam("source")){case"external_link":n.css("background-image",'url("'+e.getParam("custom_src")+'")');break;default:_.isEmpty(t.awb_image)&&"featured_image"!==e.getParam("source")?_.isUndefined(r)||(o.removeData("field-awb_image-attach-image"),n.css("background-image",'url("'+r+'")')):a.ajax({type:"POST",url:window.ajaxurl,data:{action:"wpb_single_image_src",content:t.awb_image,params:e.attributes.params,post_id:s,_vcnonce:window.vcAdminNonce},dataType:"html",context:e.view}).done(function(a){a.length||e.getParam("source");n.css("background-image",'url("'+a+'")')})}}}})});