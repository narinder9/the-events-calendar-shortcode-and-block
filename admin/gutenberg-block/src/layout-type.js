
const LayoutType=(props)=>{
	if(!props.layout){
		return null;
	}

		return <div className="event-template">
		<img src={props.LayoutImgPath+"ect-icons.svg"} />
		<p>Events Shortcodes</p>
		</div>;
	
	
}
export default LayoutType;