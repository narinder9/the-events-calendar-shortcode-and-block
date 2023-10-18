<?php

   //Default List Main Skin Color
   switch($style){
    case "style-1":
        $ect_output_css .= '#ect-events-list-content .style-1 .ect-list-post-right .ect-list-venue{
            background: '.$main_skin_color.';
        }#ect-events-list-content .style-1 .ect-list-post-left .ect-list-date {
            background: '.$thisPlugin::ect_hex2rgba($main_skin_color, .96 ).';
            box-shadow : inset 2px 0px 14px -2px '.tinycolor($main_skin_color)->darken(5)->toString().';
        } #ect-events-list-content .style-1.ect-simple-event .ect-list-post-right .ect-list-venue{
            box-shadow : inset 0px 0px 50px -5px '.tinycolor($main_skin_color)->darken(7)->toString().';
        }';	
    //Default List Featured event skin color
        $ect_output_css .='#ect-events-list-content .ect-featured-event.style-1 .ect-list-post-right .ect-list-venue{
            background: '.$featured_event_skin_color.';
        }
        #ect-events-list-content .ect-featured-event.style-1 .ect-rate-area{
            color: '.$featured_event_skin_color.';
        }
        #ect-events-list-content .style-1.ect-featured-event .ect-list-post-left .ect-list-date {
            background: '.$thisPlugin::ect_hex2rgba($featured_event_skin_color, .85 ).';
            box-shadow : inset 2px 0px 14px -2px '.tinycolor($featured_event_skin_color)->darken(15)->toString().';
        }    
        #ect-events-list-content .ect-featured-event.style-1 .ect-list-post-right .ect-list-venue{
            box-shadow : inset -2px 0px 14px -2px '.tinycolor($featured_event_skin_color)->darken(7)->toString().';
        }';
        //Tite sTYLE
        $ect_output_css .='#ect-events-list-content .style-1 .ect-rate-area{
            '.$title_styles.';
        }      
        .style-1 .ect-style-1-more a,
        .style-1 .ect-read-more a{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }  
        ';
        break;
        case "style-2":
            $ect_output_css .='#ect-events-list-content .style-2 .modern-list-right-side{
                background: '.$main_skin_color.';
            }#ect-events-list-content .style-2.ect-simple-event span.ect-date-viewport,
            #ect-events-list-content .style-2.ect-simple-event .ect-schedule-wrp {
                background: '.tinycolor($main_skin_color)->lighten(10)->toString().'; 
            }
            #ect-events-list-content .style-2.ect-simple-event .modern-list-right-side{
                box-shadow : inset 0px 0px 50px -5px '.tinycolor($main_skin_color)->darken(7)->toString().';
            }';
            //Default List Featured event skin color
            $ect_output_css .='#ect-events-list-content .ect-featured-event.style-2 .modern-list-right-side{
                background: '.$featured_event_skin_color.';
            } 
            #ect-events-list-content .ect-featured-event.style-2 .ect-list-venue .ect-icon,
            #ect-events-list-content .ect-featured-event.style-2 .ect-list-venue .ect-venue-details,
            #ect-events-list-content .ect-featured-event.style-2 .ect-list-venue .ect-venue-details span,
            #ect-events-list-content .ect-featured-event.style-2 .ect-list-venue .ect-venue-details .ect-google a{
                color: '.$featured_event_skin_color.';
            }
            #ect-events-list-content .ect-featured-event.style-2 .modern-list-right-side{
                box-shadow : inset -2px 0px 14px -2px '.tinycolor($featured_event_skin_color)->darken(7)->toString().';
            }';
            //title styles
            $ect_output_css .='.style-2 span.ect-event-title a{
                '.$title_styles.';
            } 
            .style-2 .ect-style-2-more a,
            {
                color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
            }
            ';
            break;
            case "style-3":
                $ect_output_css .='#ect-events-list-content .style-3 .ect-list-date,
                #ect-events-list-content .style-3 .style-3-readmore a:hover {
                    background: '.$main_skin_color.';
                }
                #ect-events-list-content .style-3.ect-simple-event .ect-list-date,
                #ect-events-list-content .style-3.ect-simple-event .style-3-readmore a:hover {
                box-shadow : inset 0px 0px 50px -5px '.tinycolor($main_skin_color)->darken(7)->toString().';
                }';
                 //Default List Featured event skin color
                $ect_output_css .='
                #ect-events-list-content .ect-featured-event.style-3 .ect-list-date,
                #ect-events-list-content .ect-featured-event.style-3 .style-3-readmore a:hover {
                    background: '.$featured_event_skin_color.';
                }
                #ect-events-list-content .ect-featured-event.style-3 .ect-list-date,
                #ect-events-list-content .ect-featured-event.style-3 .style-3-readmore a:hover, {
                    box-shadow : inset -2px 0px 14px -2px '.tinycolor($featured_event_skin_color)->darken(7)->toString().';
                }';
                /* Default List Featured Event Font Color (List Type )*/
                $ect_output_css .='
     #ect-events-list-content .ect-featured-event.style-3 .style-3-readmore a:hover{
    color: '.$featured_event_font_color.';
  }
  #ect-events-list-content .style-3-readmore {
    background: '.tinycolor($event_desc_bg_color)->darken(4)->toString().';
    box-shadow: inset 0px 0px 25px -5px '.tinycolor($event_desc_bg_color)->darken(10)->toString().';
}
@media (max-width: 860px) {
    #ect-events-list-content .ect-list-post-right .ect-list-description {
    border-bottom : 1px solid '.tinycolor($event_desc_bg_color)->darken(10)->toString().';
}
#ect-events-list-content .style-3-readmore {
    background: '.tinycolor($event_desc_bg_color)->darken(4)->toString().';
    
}
}';
// Default List Title Style
$ect_output_css .='
.style-3 .ect-events-title a{
    $title_styles;
}

.style-3 .ect-rate-area
{
    color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
}
#ect-events-list-content .style-3 .ev-smalltime{
    '.$ect_desc_styles.';
}    
#ect-events-list-content .style-3-readmore a.tribe-events-read-more {
    font-family: '.$ect_date_font_family.';
}   
#ect-events-list-content .ect-featured-event.style-3 .ev-smalltime,
#ect-events-list-content .ect-featured-event.style-3 .ect-list-venue .ect-icon,
#ect-events-list-content .ect-featured-event.style-3 .ect-list-venue .ect-venue-details,
#ect-events-list-content .ect-featured-event.style-3 .ect-list-venue .ect-venue-details span,
#ect-events-list-content .ect-featured-event.style-3 .ect-list-venue .ect-venue-details .ect-google a {
color: '.$featured_event_skin_color.';
}
';
break;
}


            
$ect_output_css .='#ect-events-list-content .ect-list-img {
    background-color: '.tinycolor($main_skin_color)->lighten(3)->toString().';
}
#ect-events-list-content .ect-featured-event h2.ect-list-title,
#ect-events-list-content .ect-featured-event h2.ect-list-title a.ect-event-url,
#ect-events-list-content .ect-featured-event .ect-list-description .ect-event-content a,
#ect-events-list-content .ect-featured-event a.tribe-events-read-more,
#ect-events-list-content .ect-featured-event .ect-rate-area{
color: '.$featured_event_skin_color.';
}

#ect-events-list-content .ect-featured-event .ect-list-img {
background-color: '.tinycolor($featured_event_skin_color)->lighten(3)->toString().';
}';
/*Default List Background Color ( List Type)*/
$ect_output_css .='#ect-events-list-content .ect-list-post-right,
#ect-events-list-content .ect-clslist-event-info {
background: '.$event_desc_bg_color.';
}
#ect-events-list-content .ect-list-post-right .ect-list-description {
border-color : '.tinycolor($event_desc_bg_color)->darken(10)->toString().';
box-shadow : inset 0px 0px 25px -5px '.tinycolor($event_desc_bg_color)->darken(10)->toString().';
}
#ect-events-list-content .ect-clslist-event-info {
box-shadow: inset 0px 0px 25px -5px '.tinycolor($event_desc_bg_color)->darken(10)->toString().';
}
';     

/* Default List Featured Event Font Color (List Type )*/
$ect_output_css .='#ect-events-list-content .ect-featured-event .ect-list-date .ect-date-area,
#ect-events-list-content .ect-featured-event .ect-list-venue .ect-icon,
#ect-events-list-content .ect-featured-event .ect-list-venue .ect-venue-details,
#ect-events-list-content .ect-featured-event .ect-list-venue .ect-venue-details span,
#ect-events-list-content .ect-featured-event .ect-list-venue .ect-venue-details .ect-google a{
color: '.$featured_event_font_color.';
}';
// Default List Title Style
$ect_output_css .='#ect-events-list-content h2.ect-list-title,
#ect-events-list-content h2.ect-list-title a.ect-event-url,
.ect-classic-list a.tribe-events-read-more,
.ect-clslist-event-info .ect-clslist-title a.ect-event-url,#ect-no-events p{
'.$title_styles.';
}
#ect-events-list-content .ect-list-description .ect-event-content a {
color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
} 
#ect-events-list-content h2.ect-list-title a:hover {
color: '.tinycolor($ect_title_color)->lighten(10)->toString().'; 
}';
// Default List Description Style
$ect_output_css .='#ect-events-list-content .ect-list-post-right .ect-list-description .ect-event-content,
#ect-events-list-content .ect-list-post-right .ect-list-description .ect-event-content p
{
'.$ect_desc_styles.';
} ';
// Default List venue Styles
$ect_output_css .='
#ect-events-list-content .ect-list-venue .ect-venue-details,
#ect-events-list-content .ect-list-venue .ect-venue-details a,
#ect-events-list-content .ect-list-venue .ect-venue-details span{
'.$ect_venue_styles.';
} 
#ect-events-list-content .ect-list-venue .ect-icon, #ect-events-list-content .ect-rate-area {
color:'.$ect_venue_color.';
}    
#ect-events-list-content .ect-list-venue .ect-venue-details .ect-google a {
color: '.tinycolor($ect_venue_color)->darken(3)->toString().';
}
#ect-events-list-content .ect-rate-area {
font-family: '.$ect_venue_font_famiily.';
font-size: '.$venue_font_size.';
}';
/*--- Default List Dates Styles - CSS ---*/
$ect_output_css .='#ect-events-list-content .ect-list-date .ect-date-area {
'.$ect_date_style.';
}
';