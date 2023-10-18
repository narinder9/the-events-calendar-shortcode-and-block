/**
 * Block dependencies
 */

import EctIcon from './icons';
import LayoutType from './layout-type'
import './style.scss';
/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const baseURL=ectUrl;
const LayoutImgPath=baseURL+'assets/images/';
const { apiFetch } = wp;
const {
	RichText,
	InspectorControls,
	BlockControls,
} = wp.editor;

const { 
	TabPanel,
	Panel,
	PanelBody,
	PanelRow,
	Text,
	TextareaControl,
	TextControl,
	ButtonGroup,
	Dashicon,
	Card,
	Toolbar,
	Button,
	SelectControl,
	Tooltip,
	CardBody,
	RangeControl,
} = wp.components;
let categoryList = [];

wp.apiFetch({path:'/tribe/events/v1/categories/?per_page=50'}).then(data => {
 if(typeof(data.categories)!=undefined){
	categoryList=data.categories.map(function(val,key){
		return {label: val.name, value: val.slug};
	});
	categoryList.push({label: "Select a Category", value:'all'});
	}
});

/**
 * Register block
 */
export default registerBlockType( 'ect/shortcode', {
		// Block Title
		title: __( 'Events Shortcodes' ),
		// Block Description
		description: __( 'The Events Calendar - Shortcode & Templates' ),
		// Block Category
		category: 'common',
		// Block Icon
		icon: EctIcon,
		// Block Keywords
		keywords: [
			__( 'the events calendar' ),
			__( 'templates' ),
			__( 'cool plugins' )
		],
	attributes: {
		template: {
			type: 'string',
			default: 'default'
		},
		category: {
			type: 'string',
			default: 'all'
		},
		style: {
			type: 'string',
			default: 'style-1'
		},
		order: {
			type: 'string',
			default: 'ASC'
		},
		based: {
			type: 'string',
			default: 'default'
		},
		storycontent: {
			type: 'string',
			default: 'default'
		},
		limit: {
            type: 'string',
            default: '10'
        },
		dateformat: {
			type: 'string',
			default:  'default',
		},
		startDate: {
            type: 'string',
            default: ''
		},
		endDate: {
            type: 'string',
            default: ''
        },
		hideVenue: {
			type: 'string',
			default:  'no',
		},
		time: {
			type: 'string',
			default:  'future',
		},
		socialshare: {
			type: 'string',
			default: 'no'
		}
	},
	// Defining the edit interface
	edit: props => {
		
		const layoutOptions = [
			{label: 'Default List Layout', value: 'default'},
			{label: 'Timeline Layout', value: 'timeline-view'},
			{label: 'Minimal List', value: 'minimal-list'},		
		];
		const designsOptions = [
			{label: 'Style 1', value: 'style-1'},
			{label: 'Style 2', value: 'style-2'},
			{label: 'Style 3', value: 'style-3'}		
		];
		const dateFormatsOptions = [
			{label:"Default (01 January 2019)",value:"default"},
			{label:"Md,Y (Jan 01, 2019)",value:"MD,Y"},
			{label:"Fd,Y (January 01, 2019)",value:"FD,Y"},
			{label:"dM (01 Jan)",value:"DM"},
			{label:"dML (01 Jan Monday)",value:"DML"},
			{label:"dF (01 January)",value:"DF"},
			{label:"Md (Jan 01)",value:"MD"},
			{label:"Fd (January 01)",value:"FD"},
			{label:"Md,YT (Jan 01, 2019 8:00am-5:00pm)",value:"MD,YT"},
			{label:"Full (01 January 2019 8:00am-5:00pm)",value:"full"},
			{label: "jMl (1 Jan Monday)", value: "jMl" },
            {label: "d.FY (01. January 2019)", value: "d.FY" },
            {label: "d.F (01. January)", value: "d.F" },
            {label: "ldF (Monday 01 January)", value: "ldF" },
            {label: "Mdl (Jan 01 Monday)", value: "Mdl" },
            {label: "d.Ml (01. Jan Monday)", value: "d.Ml" },
            {label: "dFT (01 January 8:00am-5:00pm)", value: "dFT" }
		 ];
		const venueOptions = [
            {label: 'NO', value: 'no'},
			{label: 'YES', value: 'yes'}
		];
		const timeOptions = [
            {label: 'Upcoming', value: 'future'},
			{label: 'Past', value: 'past'},
			{label: 'All', value: 'all'}
		];
	
		const orderOptions=[
			{label:"ASC",value:"ASC"},
			{label:"DESC",value:"DESC"}		
		];
	
	
		return [
			!! props.isSelected && (
				<InspectorControls key="inspector">
				<TabPanel
                    className="ect-tab-settings"
                    activeClass="active-tab"
                    tabs={[
						{
							name: 'ect_general_setting',
							title: 'Layout',
							className: 'tab-one',
							content: <><PanelBody>
								<SelectControl
									label={ __( 'Select Template' ) }
									options={ layoutOptions }
										value={ props.attributes.template }
									onChange={ ( value ) =>props.setAttributes( { template: value } ) }
								/><>
								<div className="ect_shortcode-button-group_label">{__("Select Style")}</div>
									<ButtonGroup className="ect_shortcode-button-group">
									<Button onClick={(e) => {props.setAttributes({style: 'style-1'})}} className={props.attributes.style == 'style-1' ? 'active': ''} isSmall={true}>Style 1</Button>
									<Button onClick={(e) => {props.setAttributes({style: 'style-2'})}} className={props.attributes.style == 'style-2' ? 'active': ''} isSmall={true}>Style 2</Button>
									<Button onClick={(e) => {props.setAttributes({style: 'style-3'})}} className={props.attributes.style == 'style-3' ? 'active': ''} isSmall={true}>Style 3</Button>
								</ButtonGroup>
								</>
								<SelectControl
							label={ __( 'Date Formats' ) }
							description={ __( 'yes/no' ) }
							options={ dateFormatsOptions }
							value={ props.attributes.dateformat }
							onChange={ ( value ) =>props.setAttributes( { dateformat: value } ) }
							/>	
							<RangeControl
                        label="Limit the events"
                        value={ parseInt(props.attributes.limit) }
                        onChange={ ( value ) => props.setAttributes( { limit: value.toString() } ) }
                        min={ 1 }
                        max={ 100 }
                        step={ 1 }
                    />
					</PanelBody>
					<Panel>
							<PanelBody title="Extra Settings" initialOpen={ false }>
            				<PanelRow>
								<ButtonGroup className="ect_shortcode-button-group">
								<div className="ect_shortcode-button-group_label">{__("Hide Venue")}</div>
								<div>
								<Button onClick={(e) => {props.setAttributes({hideVenue: 'no'})}} className={props.attributes.hideVenue == 'no' ? 'active': ''} isSmall={true}>No</Button>
                    			<Button onClick={(e) => {props.setAttributes({hideVenue: 'yes'})}} className={props.attributes.hideVenue == 'yes' ? 'active': ''} isSmall={true}>Yes</Button>
                    			</div>
								</ButtonGroup>
							</PanelRow>
							
							{props.attributes.template!='advance-list'&&	
							<PanelRow>
							
							<ButtonGroup className="ect_shortcode-button-group">
							<div className="ect_shortcode-button-group_label">{__("Enable Social Share Buttons?")}</div>
							<div>
						<Button onClick={(e) => {props.setAttributes({socialshare: 'no'})}} className={props.attributes.socialshare == 'no' ? 'active': ''} isSmall={true}>No</Button>
						<Button onClick={(e) => {props.setAttributes({socialshare: 'yes'})}} className={props.attributes.socialshare == 'yes' ? 'active': ''} isSmall={true}>Yes</Button>
						</div>
						</ButtonGroup>
								</PanelRow>
						}
        					</PanelBody>
							
						</Panel>
						<Panel>

					
					<PanelBody title={__("View Demos","ect")} initialOpen={false}>
                    <CardBody className="ect-timeline-block-demo-button">
                        <a target="_blank" class="button button-primary" href="https://eventscalendaraddons.com/demos/events-shortcodes-pro/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=demo&utm_content=shortcode_block_setting">View Demos</a>
                        <a target="_blank" class="button button-primary" href="https://eventscalendaraddons.com/go/ect-video-tutorial/?utm_source=ect_plugin&utm_medium=inside&utm_campaign=video_tutorial&utm_content=shortcode_block_setting">Watch Videos</a>
                    </CardBody>
                </PanelBody>
					</Panel>
						<Panel>
						<PanelBody title={__("Please Share Your Valuable Feedback.","timeline-block")} initialOpen={false}>
            <CardBody className={"ect-gt-block-review-tab"}>{__("We hope you liked our plugin. Please share your valuable feedback.","ect")}<br></br><a href="https://wordpress.org/support/plugin/template-events-calendar/reviews/#new-post" className="components-button is-primary is-small" target="_blank" >Rate Us<span> ★★★★★</span></a>
            </CardBody>
</PanelBody>
						</Panel>
					

					</>
					},
					{
						name: 'events_query',
						title: 'Events Query',
						className: 'tab-two',
						content: <><PanelBody>	
							
						<div className="ect_shortcode-button-group_label">{__("Events Time")}</div>
						<ButtonGroup className="ect_shortcode-button-group">
				<Button onClick={(e) => {props.setAttributes({time: 'future'})}} className={props.attributes.time == 'future' ? 'active': ''} isSmall={true}>Future</Button>
				<Button onClick={(e) => {props.setAttributes({time: 'past'})}} className={props.attributes.time == 'past' ? 'active': ''} isSmall={true}>Past</Button>
				<Button onClick={(e) => {props.setAttributes({time: 'all'})}} className={props.attributes.time == 'all' ? 'active': ''} isSmall={true}>All</Button>
				</ButtonGroup>
				<div className="ect_shortcode-button-group_label">{__("Events Order")}</div>
					<ButtonGroup className="ect_shortcode-button-group">
                    	<Button onClick={(e) => {props.setAttributes({order: 'ASC'})}} className={props.attributes.order == 'ASC' ? 'active': ''} isSmall={true}>ASC</Button>
                    	<Button onClick={(e) => {props.setAttributes({order: 'DESC'})}} className={props.attributes.order == 'DESC' ? 'active': ''} isSmall={true}>DESC</Button>
                    </ButtonGroup>
					
				</PanelBody>
				<Panel>
						<PanelBody title="🔶Filter Events By" initialOpen={ false }>
            			<PanelRow className="ect_shortcode-button-group_label">
							<SelectControl
								label={ __( 'Select Category' ) }
								options={ categoryList }
								value={ props.attributes.category }
								onChange={ ( value ) =>props.setAttributes( { category: value } ) }
								/>
						</PanelRow>
						<PanelRow>
						<TextControl
								label={ __( 'Start Date | format(YY-MM-DD)' ) }
								value={ props.attributes.startDate }
								onChange={ ( value ) =>props.setAttributes( { startDate: value } ) }
						/>
					</PanelRow>
					<PanelRow>
						<TextControl
							label={ __( 'End Date | format(YY-MM-DD)' ) }
							value={ props.attributes.endDate }
							onChange={ ( value ) =>props.setAttributes( { endDate: value } ) }
						/>
					</PanelRow>
					<PanelRow>
					<p className="description">Note:-Show events from date range e.g( 2017-01-01 to 2017-02-05).
							Please dates in this format(YY-MM-DD)</p>
					</PanelRow>
						</PanelBody>
					</Panel>
				</>
				}
						
					
                ]}
                >
                { ( tab ) => <Card>{tab.content}</Card> }
                </TabPanel>
				</InspectorControls>
				
			),
			<div className={ props.className }>
			<LayoutType  LayoutImgPath={LayoutImgPath} layout={props.attributes.template} />
			<div class="ect-shortcode-block">
			[events-calendar-templates
			category="{props.attributes.category}"
			template="{props.attributes.template}"
			style="{props.attributes.style}"
			date_format="{props.attributes.dateformat}"
			start_date="{props.attributes.startDate}"
			end_date="{props.attributes.endDate}"
			limit="{props.attributes.limit}"
			order="{props.attributes.order}"
			hide-venue="{props.attributes.hideVenue}"
			time="{props.attributes.time}"
			socialshare="{props.attributes.socialshare}"]
			</div>
			</div>
		];
	},
	// Defining the front-end interface
	save() {
		// Rendering in PHP
		return null;
	},
});

