<?php

// Silence is golden.
switch($style)
{
    case "style-1":
                //Minimal List Main Skin Color
        $ect_output_css .= '#ect-minimal-list-wrp .style-1 span.ect-minimal-list-time{
            color: '.$main_skin_color.';
        }';
        // Minimal List Featured Skin Color
        $ect_output_css .='#ect-minimal-list-wrp .ect-list-posts.style-1.ect-featured-event{
            border-left: 3px solid '.$featured_event_skin_color.';
        }
        #ect-minimal-list-wrp .style-1.ect-featured-event .ect-style-1-more a,#ect-minimal-list-wrp .style-1.ect-featured-event .ect-event-datetime .ect-icon-clock,
        #ect-minimal-list-wrp .style-1.ect-featured-event .ect-event-datetime span{
            color:'.$featured_event_skin_color.';
        }
        #ect-minimal-list-wrp .ect-list-posts.style-1.ect-featured-event .ect-event-datetimes span{
            color:'.$featured_event_font_color.';
        }';

        //Title styles in minimal layouts
        $ect_output_css .='#ect-minimal-list-wrp .style-1 .ect-events-title a{
            '.$title_styles.'
        }#ect-minimal-list-wrp .style-1 .ect-style-1-more a,#ect-minimal-list-wrp .style-1 .ect-read-more a{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }';
        $ect_output_css .='
        #ect-minimal-list-wrp .style-1.ect-simple-event .ect-style-1-more a,
        #ect-minimal-list-wrp .style-1.ect-simple-event .ect-event-datetime .ect-icon-clock{
            color:'.$ect_date_color.';
        }
        #ect-minimal-list-wrp .ect-list-posts.style-1 .ect-event-datetimes span,
        #ect-minimal-list-wrp .style-1 span.ect-minimal-list-time{
            font-family: '.$ect_date_font_family.';
            color: '.$ect_date_color.';
            font-weight:'.$ect_date_font_weight.';
            font-style:'.$ect_date_font_style.';
            line-height:'.$ect_date_line_height.';
        }

        #ect-minimal-list-wrp .ect-list-posts.style-1 .ect-event-datetimes span{
            color:'.$ect_date_color.';
            font-family:'.$ect_date_font_family.';
        }
        ';
                break;
                case "style-2":
                    //Minimal List Main Skin Color
                    $ect_output_css .= '#ect-minimal-list-wrp .style-2.ect-simple-event .ect-schedule-wrp{
            background:'.tinycolor($main_skin_color)->lighten(10)->toString().';
        }

        #ect-minimal-list-wrp .style-2.ect-featured-event span.ect-date-viewport,#ect-minimal-list-wrp .style-2.ect-featured-event .ect-schedule-wrp {

            background: '.tinycolor($featured_event_skin_color)->lighten(10)->toString().'; 
        }';
        $ect_output_css .='#ect-minimal-list-wrp .style-2 span.ect-event-title a{
            '.$title_styles.'
        }#ect-minimal-list-wrp .style-2 .ect-style-2-more a{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }';
        //Title styles in minimal layouts
        $ect_output_css .='#ect-minimal-list-wrp .style-2 span.ect-event-title a{
            '.$title_styles.'
        }#ect-minimal-list-wrp .style-2 .ect-style-2-more a{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }
        #ect-minimal-list-wrp .style-2.ect-simple-event span.ect-date-viewport,
        #ect-minimal-list-wrp .style-2.ect-simple-event .ect-schedule-wrp
        {
            color:'.$ect_date_color.';
            font-family:'.$ect_date_font_family.';
        }

        ';
                    break;
                    case "style-3":
                        $ect_output_css .= '#ect-minimal-list-wrp .ect-list-posts.style-3.ect-simple-event{
            border-left-color: '.tinycolor($main_skin_color)->lighten(2)->toString().';
        }';
        $ect_output_css .='#ect-minimal-list-wrp .ect-list-posts.style-3.ect-featured-event{
            border-left-color: 	'.tinycolor($featured_event_skin_color)->darken(8)->toString().';
        }';
        $ect_output_css .=' #ect-minimal-list-wrp .style-3 .ect-events-title a{
            '.$title_styles.'
        }#ect-minimal-list-wrp .style-3 .ect-rate-area{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }';
        //Title styles in minimal layouts
        $ect_output_css .=' #ect-minimal-list-wrp .style-3 .ect-events-title a{
            '.$title_styles.'
        }#ect-minimal-list-wrp .style-3 .ect-rate-area{
            color: '.tinycolor($ect_title_color)->lighten(10)->toString().';
        }';
        //Minimal List Venue style
        $ect_output_css .='#ect-minimal-list-wrp .style-3 .ect-list-venue.minimal-list-venue,#ect-minimal-list-wrp .style-3 span.ect-google a {
            '.$ect_venue_styles.'
        }';
        $ect_output_css .='

        #ect-minimal-list-wrp .style-3 .ect-style-3-more a{
            color:'.$ect_date_color.';
        }
        #ect-minimal-list-wrp .style-3 span.ect-minimal-list-time{
            font-family: '.$ect_date_font_family.';
            color: '.$ect_date_color.';
            font-weight:'.$ect_date_font_weight.';
            font-style:'.$ect_date_font_style.';
            line-height:'.$ect_date_line_height.';
        }
        ';
        break;
}

        // Global Color
        // Minimal List Featured Event Font Color
        $ect_output_css .='.ect-featured-event .ect-event-date span.ect-date-viewport
        {
            color: '.$featured_event_font_color.';
        }
        #ect-minimal-list-wrp .ect-featured-event .ect-event-date span.ect-month {
            color: '.tinycolor($featured_event_font_color)->darken(10)->toString().'; 
        }';
        //Not apply css in event bg color on this layout
        //Minimal List Date Style
        $ect_output_css .='#ect-minimal-list-wrp .ect-event-datetimes span.ev-mo,
        #ect-minimal-list-wrp .ect-event-datetimes{
            color:'.$ect_date_color.';
        }';