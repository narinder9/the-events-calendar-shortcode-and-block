<?php

// Silence is golden.
switch($style)
{
    case "style-1":
     //Timeline Main Skin Color
      $ect_output_css .= '#event-timeline-wrapper .ect-timeline-post.style-1.even .timeline-meta {
                   background: '.$main_skin_color.';
                   background-image:linear-gradient(
                   to right,
                   '.tinycolor($main_skin_color)->darken(8)->toString().',
                   '.tinycolor($main_skin_color)->lighten(2)->toString().'
                   );
               }
               #event-timeline-wrapper .ect-timeline-post.style-1.odd .timeline-meta {
                   background: '.$main_skin_color.';
                   background-image:linear-gradient(
                   to left,
                   '.tinycolor($main_skin_color)->darken(8)->toString().',
                   '.tinycolor($main_skin_color)->lighten(2)->toString().'
                   );
      }
      @media (max-width: 700px) {
                   #event-timeline-wrapper .ect-timeline-post.style-1 .timeline-meta:before {
                       border-right-color:  '.tinycolor($main_skin_color)->lighten(2)->toString().' !important;
                   }
                   #event-timeline-wrapper .ect-timeline-post.style-1 .timeline-meta {
                       background-image:linear-gradient(
                       to left,
                       '.tinycolor($main_skin_color)->darken(8)->toString().',
                       '.tinycolor($main_skin_color)->lighten(2)->toString().'
                       ) !important;
                   }
               }';
    //Timeline Feature Skin Color 
    $ect_output_css .= '
    #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-1.even .timeline-meta {
                    background: '.$featured_event_skin_color.';
                    background-image:linear-gradient(
                    to right,
                    '.tinycolor($featured_event_skin_color)->darken(8)->toString().',
                    '.tinycolor($featured_event_skin_color)->lighten(3)->toString().'
                    );
               }
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-1.odd .timeline-meta {
                    background: '.$featured_event_skin_color.';
                    background-image:linear-gradient(
                    to left,
                    '.tinycolor($featured_event_skin_color)->darken(8)->toString().',
                    '.tinycolor($featured_event_skin_color)->lighten(3)->toString().'
                    );
               }
                @media (max-width: 700px) {
                    #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-1 .timeline-meta:before {
                         border-right-color:  '.tinycolor($featured_event_skin_color)->lighten(3)->toString().' !Important;
                    }
                    #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-1 .timeline-meta {
                         background-image:linear-gradient(
                         to left,
                         '.tinycolor($featured_event_skin_color)->darken(8)->toString().',
                         '.tinycolor($featured_event_skin_color)->lighten(3)->toString().'
                         ) !important;
                    }
               }';
    break;
     case "style-2":
         $ect_output_css .='#event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .timeline-content{
          background: '.$featured_event_skin_color.';
          background: '.$featured_event_skin_color.';
          background-image:linear-gradient(
          to left,
          '.tinycolor($featured_event_skin_color)->lighten(3)->toString().',
          '.tinycolor($featured_event_skin_color)->darken(8)->toString().'
          );
     }
     #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .timeline-content:before{
    border-right-color:  '.tinycolor($featured_event_skin_color)->darken(8)->toString().';}
     #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .ect-date-area,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .ect-venue-details,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .ect-icon,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .timeline-meta .ev-time .ect-icon,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 span.ect-rate {
                    color: '.$featured_event_skin_color.';
               }
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .ect-google a {
                    color:  '.tinycolor($featured_event_skin_color)->darken(10)->toString().'; 
               }';
               //Timeline Feature Event Font Color
         $ect_output_css .='#event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .timeline-content p,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 .timeline-content a.ect-events-read-more,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 h2.content-title a.ect-event-url{
                   color:'.$featured_event_font_color.';
              }
              #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-2 h2.content-title a.ect-event-url:hover{
                   color: '.tinycolor($featured_event_font_color)->darken(10)->toString().'; 
              }
              ';
              // Timeline date style
              $ect_output_css .=' .style-2.ect-simple-event span.ect-date-viewport,
               .style-2.ect-simple-event .ect-schedule-wrp{
                   font-family: '.$ect_date_font_family.';
                   color: '.$ect_date_color.';
               }';
               
    break;
     case "style-3":
         $ect_output_css .='#event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content {
          background: '.$featured_event_skin_color.';
                    background-image:linear-gradient(
                    to left,
                    '.tinycolor($featured_event_skin_color)->lighten(3)->toString().',
                    '.tinycolor($featured_event_skin_color)->darken(8)->toString().'
                    );
     }
   
        #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content:before {
        border-right-color:  '.tinycolor($featured_event_skin_color)->darken(8)->toString().';
        }
            #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content:before {
                    border-right-color:  '.tinycolor($featured_event_skin_color)->darken(8)->toString().';
    }
            #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 h2.content-title a.ect-event-url,
        #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content a.ect-events-read-more
        {
        color:'.$featured_event_font_color.';
        }
        #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 h2.content-title a.ect-event-url:hover,
                .ect-featured-event .ect-event-date span.ect-month {
                    color: '.tinycolor($featured_event_font_color)->darken(10)->toString().'; 
         }
         ';
    //Timeline Feature Event Font Color
    $ect_output_css .='#event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content a.ect-events-read-more
     {
         color:'.$featured_event_font_color.';
     }
     #event-timeline-wrapper .ect-timeline-post.ect-featured-event.style-3 .timeline-content a.ect-events-read-more {
         border-color: '.tinycolor($featured_event_font_color)->darken(10)->toString().';
     }';
     // Timeline bg Color
     $ect_output_css .= ' #event-timeline-wrapper .ect-timeline-post.style-3 .timeline-content {
         background: '.$event_desc_bg_color.';
         background-image:linear-gradient(
         to right,
         '.tinycolor($event_desc_bg_color)->darken(5)->toString().',
         '.tinycolor($event_desc_bg_color)->lighten(0)->toString().'
         );
     }
     @media (max-width: 860px) {
     #event-timeline-wrapper .ect-timeline-post.style-3 .timeline-content a.ect-events-read-more {
         color: '.$ect_title_color.';
     }
    }';
     // Timeline Title styles
    $ect_output_css .= '#event-timeline-wrapper .ect-timeline-post.style-3 .timeline-content a.ect-events-read-more {
         color: '.$ect_title_color.';
    }
    ';
    break;
    default:
    break;
}
    $ect_output_css .= '
    #event-timeline-wrapper .ect-timeline-year {
                   background: '.tinycolor($main_skin_color)->darken(10)->toString().';
                   background: radial-gradient(circle farthest-side,  '.tinycolor($main_skin_color)->darken(0)->toString().',  '.tinycolor($main_skin_color)->darken(10)->toString().');
               }
               #event-timeline-wrapper .ect-timeline-post .timeline-dots {
                   background:  '.tinycolor($main_skin_color)->darken(10)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-post.even .timeline-meta:before {
                   border-left-color:  '.tinycolor($main_skin_color)->lighten(2)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-post.odd .timeline-meta:before {
                   border-right-color:  '.tinycolor($main_skin_color)->darken(2)->toString().';
               }';
               //Timeline Feature Skin Color
    $ect_output_css .= '#event-timeline-wrapper .ect-timeline-post.ect-featured-event .timeline-dots {
                   background: '.$featured_event_skin_color.';
               }
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.even .timeline-meta:before {
                    border-left-color:  '.tinycolor($featured_event_skin_color)->lighten(3)->toString().';
               }
               
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event.odd .timeline-meta:before {
                    border-right-color:  '.tinycolor($featured_event_skin_color)->lighten(3)->toString().';
               }';
               //Timeline Feature Event Font Color

              
    $ect_output_css .= '
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event .ect-date-area,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event .ect-venue-details,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event .ect-icon,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event .timeline-meta .ev-time .ect-icon,
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event span.ect-rate{
                   color:'.$featured_event_font_color.';
               }
               #event-timeline-wrapper .ect-timeline-post.ect-featured-event .ect-google a{
                   color: '.tinycolor($featured_event_font_color)->darken(10)->toString().'; 
               }
               ';
               // Timeline bg Color
               $ect_output_css .='#event-timeline-wrapper .ect-timeline-post .timeline-content {
                   background: '.$event_desc_bg_color.';
                   border: 1px solid '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-post.even .timeline-content:before {
                   border-right-color: '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-post.odd .timeline-content:before {
                   border-left-color: '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
               }
               #event-timeline-wrapper .cool-event-timeline:before {
                   background-color: '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-year { 
                   -webkit-box-shadow: 0 0 0 4px white, 0 0 0 8px '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
                   box-shadow: 0 0 0 4px white, 0 0 0 8px '.tinycolor($event_desc_bg_color)->darken(5)->toString().';
               }
               #event-timeline-wrapper:before,
               #event-timeline-wrapper:after {
                   background-color: '.tinycolor($event_desc_bg_color)->darken(5)->toString().' !important;
               }
               @media (max-width: 860px) {
                   #event-timeline-wrapper .ect-timeline-post .timeline-meta:before {
                       border-right-color: '.tinycolor($event_desc_bg_color)->darken(5)->toString().' !important;
                   }
                   }';
                   // Timeline Title styles
                   $ect_output_css .='#event-timeline-wrapper .ect-timeline-post h2.content-title,
                   #event-timeline-wrapper .ect-timeline-post h2.content-title a.ect-event-url {
                       '.$title_styles.'
                   }
                   #event-timeline-wrapper .ect-timeline-post h2.content-title a.ect-event-url:hover {
                       color: '.tinycolor($ect_title_color)->darken(10)->toString().'; 
                   }
                   event-timeline-wrapper .cool-event-timeline .ect-timeline-post .timeline-content .content-details a{
                        color: '.$ect_title_color.';
                   }
               ';
             
               /* Timeline Description Styles ( Timeline ) */
               $ect_output_css .='#event-timeline-wrapper .ect-timeline-post .timeline-content,
               #event-timeline-wrapper .ect-timeline-post .timeline-content p {
                    '.$ect_desc_styles.'
               }
               #event-timeline-wrapper .ect-timeline-post .timeline-content a {
                    color:'.tinycolor($ect_desc_color)->darken(10)->toString().';
               }
               #event-timeline-wrapper .ect-timeline-post .timeline-content a:hover {
                   color:'.tinycolor($ect_desc_color)->lighten(1)->toString().';
               }';
               // Timeline date style
               $ect_output_css .='
                   #event-timeline-wrapper .ect-timeline-post .ect-date-area {
                        '.$ect_date_style.'
               }
               #event-timeline-wrapper .timeline-meta .ev-time .ect-icon{
                   font-family: '.$ect_date_font_family.';
                   color: '.$ect_date_color.';
               }
               ';
               /* Timeline Venue Styles ( Timeline ) */
               $ect_output_css .='#event-timeline-wrapper .ect-venue-details {
                   '.$ect_venue_styles.'
              }    
              #event-timeline-wrapper .ect-rate-area .ect-rate {
                   font-size: '.$venue_font_size.';
                   font-family: '.$ect_venue_font_famiily.';
              }
              #event-timeline-wrapper .timeline-meta .ect-icon,
              #event-timeline-wrapper .ect-rate-area .ect-icon,
              #event-timeline-wrapper .ect-rate-area .ect-rate {
                   color: '.$ect_venue_color.';
              }
              #event-timeline-wrapper .ect-timeline-post .ect-google a {
                   color: '.tinycolor($ect_venue_color)->darken(5)->toString().';
              }
              #event-timeline-wrapper .ect-timeline-year .year-placeholder span,
#event-timeline-wrapper .timeline-meta .ev-time .ect-icon {
font-family: '.$ect_date_font_family.';
color: '.$ect_date_color.';
}
              ';
//    }