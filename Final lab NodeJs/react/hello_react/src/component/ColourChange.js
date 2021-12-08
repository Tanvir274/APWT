import React,{useState} from "react";

const ColourChange=()=>{

    const[colour,setColour]=useState('Select First');
    return(
        <div>
            <span style={{backgroundColor:colour}}>Your Changing Colour is: {colour}</span><br/>
            <button onClick={()=>setColour('Black')}>Black</button>
            <button onClick={()=>setColour('Green')}>Green</button>
            <button onClick={()=>setColour('Blue')}>Blue</button>
            <button onClick={()=>setColour('Yellow')}>Yellow</button>
        </div>

    )
}
export default ColourChange;