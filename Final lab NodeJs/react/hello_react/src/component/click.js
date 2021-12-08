import React from "react";
import {useState} from "react";


const Click=()=>{

    const[d,setD] = useState(0) ;
    const change=()=>{
        setD(d+1);    
    }
    return(
        
        <div>
            <br/>.............<br/>
            <button onClick={change}>Click Me</button>
            <span>{d}</span>
            <br/>
        </div>    

    )

}
export default Click;