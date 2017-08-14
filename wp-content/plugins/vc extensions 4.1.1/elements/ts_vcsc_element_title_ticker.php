<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Title Ticker", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Title_Ticker",
		"icon" 	                    	=> "icon-wpb-ts_vcsc_title_ticker",
		"class"                     	=> "",
		"category"                  	=> __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a title with ticker effect", "ts_visual_composer_extend"),
		"admin_enqueue_js"        		=> "",
		"admin_enqueue_css"       		=> "",
		"params"                    	=> array(
			// Content Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "seperator_1",
				"value"					=> "",
				"seperator"				=> "Title Content",
				"description"       	=> __( "", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Add Fixed String", "ts_visual_composer_extend" ),
				"param_name"            => "fixed_addition",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to add a fixed pre-string to the animated segments.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Fixed String", "ts_visual_composer_extend" ),
				"param_name"        	=> "fixed_string",
				"value"             	=> "",
				"description"       	=> __( "Enter an optional fixed text string to be shown before the animated segments.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "fixed_addition", 'value' => 'true' ),
			),				
			array(
				"type"                  => "exploded_textarea",
				"heading"               => __( "Title Strings", "ts_visual_composer_extend" ),
				"param_name"            => "title_strings",
				"value"                 => "",
				"description"           => __( "Enter the individual title strings for the segments to be typed; seperate by line break (NO commas allowed).", "ts_visual_composer_extend" ),
				"dependency"            => ""
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show All Segments", "ts_visual_composer_extend" ),
				"param_name"            => "showall",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to show all title segments at the same time and just rotate them around.", "ts_visual_composer_extend" ),
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Number of Segments", "ts_visual_composer_extend" ),
				"param_name"            => "showitems",
				"value"                 => "1",
				"min"                   => "1",
				"max"                   => "25",
				"step"                  => "1",
				"unit"                  => 'x',
				"description"           => __( "Define the number of segments that should be shown at the same time.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "showall", 'value' => 'false' )
			),
			// Style Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "seperator_2",
				"value"					=> "",
				"seperator"				=> "Style Settings",
				"description"       	=> __( "", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "font_type",
				"description"       	=> __( "Select the font to be used for the icon title text.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "font_type",
				"value"             	=> "",
				"description"       	=> __( "", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Font Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_size",
				"value"             	=> "24",
				"min"               	=> "16",
				"max"               	=> "512",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"admin_label"			=> true,
				"description"       	=> __( "Select the font size for the animated text.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Prefix Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "fixed_color",
				"value"             	=> "#000000",
				"description"      	 	=> __( "Define the font color for the fixed pre-text.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "fixed_addition", 'value' => 'true' ),
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Segment Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_color",
				"value"             	=> "#000000",
				"description"      	 	=> __( "Define the font color for the animated text.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Font Weight", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_weight",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Default', "ts_visual_composer_extend" )  => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )     => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )   => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )   => "normal",
					__( 'Light', "ts_visual_composer_extend" )    => "300",
				),
				"description"       	=> __( "Select the font weight for the animated text.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text Align", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_align",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Left', "ts_visual_composer_extend" )  		=> "left",
					__( 'Center', "ts_visual_composer_extend" )   	=> "center",
					__( 'Right', "ts_visual_composer_extend" )     	=> "right",
					__( 'Justify', "ts_visual_composer_extend" )   	=> "justify",
				),
				"description"       	=> __( "Select the alignment for the animated text.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Use on Mobile", "ts_visual_composer_extend" ),
				"param_name"            => "mobile",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"admin_label"			=> true,
				"description"           => __( "Switch the toggle if you want to show the animation on mobile devices.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Alternative Wrapper", "ts_visual_composer_extend" ),
				"param_name"        	=> "wrapper",
				"width"             	=> 150,
				"value"             	=> array(
					__( "H1", "ts_visual_composer_extend" )                      	=> "h1",
					__( "H2", "ts_visual_composer_extend" )                    		=> "h2",
					__( "H3", "ts_visual_composer_extend" )                   		=> "h3",
					__( "H4", "ts_visual_composer_extend" )                   		=> "h4",
					__( "H5", "ts_visual_composer_extend" )                   		=> "h5",
					__( "H6", "ts_visual_composer_extend" )                   		=> "h6",
				),
				"dependency"        	=> array( 'element' => "mobile", 'value' => 'false' ),
				"description"       	=> __( "Select the alternative wrapper for the title to be used on mobile devices.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Alternative Title", "ts_visual_composer_extend" ),
				"param_name"        	=> "title_mobile",
				"value"             	=> "",
				"dependency"        	=> array( 'element' => "mobile", 'value' => 'false' ),
				"description"       	=> __( "Provide an alternative title to be used on mobile devices.", "ts_visual_composer_extend" )
			),
			// Ticker Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "seperator_3",
				"value"					=> "",
				"seperator"				=> "Ticker Settings",
				"description"       	=> __( "", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Trigger on Viewport", "ts_visual_composer_extend" ),
				"param_name"            => "viewport",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"admin_label"			=> true,
				"description"           => __( "Switch the toggle if you want the animation to be triggered upon viewport entry.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Start Delay", "ts_visual_composer_extend" ),
				"param_name"            => "delay",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "10000",
				"step"                  => "100",
				"unit"                  => 'ms',
				"description"           => __( "Define the start delay before the animation begins with the first segment.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Speed", "ts_visual_composer_extend" ),
				"param_name"            => "speed",
				"value"                 => "700",
				"min"                   => "0",
				"max"                   => "100000",
				"step"                  => "100",
				"unit"                  => 'ms',
				"admin_label"			=> true,
				"description"           => __( "Define the ticker speed for each segment; the higher the value, the slower.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Segment Delay", "ts_visual_composer_extend" ),
				"param_name"            => "break",
				"value"                 => "3000",
				"min"                   => "1000",
				"max"                   => "10000",
				"step"                  => "100",
				"unit"                  => 'ms',
				"description"           => __( "Define the delay before the animation moves to the next segment.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),		
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Stop on Hover", "ts_visual_composer_extend" ),
				"param_name"            => "hover",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"admin_label"			=> true,
				"description"           => __( "Switch the toggle if you want to stop the animation while hovering over the title.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Ticker Controls", "ts_visual_composer_extend" ),
				"param_name"            => "controls",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"admin_label"			=> true,
				"description"           => __( "Switch the toggle if you want to provide controls for the ticker.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Controls Position", "ts_visual_composer_extend" ),
				"param_name"        	=> "position",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Left', "ts_visual_composer_extend" )  		=> "left",
					__( 'Right', "ts_visual_composer_extend" )   	=> "right",
					__( 'Top', "ts_visual_composer_extend" )     	=> "top",
					__( 'Bottom', "ts_visual_composer_extend" )   	=> "bottom",
				),
				"description"       	=> __( "Select the where the ticker controls should be positioned in relation to the title.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "controls", 'value' => 'true' ),
				"group" 				=> "Ticker Settings",
			),
			// Breakpoint Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "seperator_4",
				"value"					=> "",
				"seperator"             => "Breakpoint Settings",
				"description"       	=> __( "", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Medium Break", "ts_visual_composer_extend" ),
				"param_name"            => "switch_medium",
				"value"                 => "768",
				"min"                   => "481",
				"max"                   => "1240",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the ticker width at which the font size should scale to 75% of the selected value.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),		
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Small Break", "ts_visual_composer_extend" ),
				"param_name"            => "switch_small",
				"value"                 => "480",
				"min"                   => "240",
				"max"                   => "480",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the ticker width at which the font size should scale to 50% of the selected value.", "ts_visual_composer_extend" ),
				"group" 				=> "Ticker Settings",
			),
			// Other Settings
			array(
				"type"              	=> "seperator",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "seperator_5",
				"value"					=> "",
				"seperator"             => "Other Settings",
				"description"       	=> __( "", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        	=> "margin_top",
				"value"             	=> "0",
				"min"               	=> "-50",
				"max"               	=> "200",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"        	=> "margin_bottom",
				"value"             	=> "0",
				"min"               	=> "-50",
				"max"               	=> "200",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_id",
				"value"             	=> "",
				"description"       	=> __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_class",
				"value"             	=> "",
				"description"       	=> __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"              	=> "load_file",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_file",
				"value"             	=> "",
				"file_type"         	=> "js",
				"file_path"         	=> "js/ts-visual-composer-extend-element.min.js",
				"description"       	=> __( "", "ts_visual_composer_extend" )
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>