import React,{useEffect,useState} from "react";

const Effect=()=>{
    const [count, setCount] = useState(0);
    const [count1, setchange] = useState(0);
    const [count2, setdemo] = useState(1);

    useEffect(() => {
      setTimeout(() => {
      setCount((count) => count + 1);
      },10000);
     });

     useEffect(() => {
        setTimeout(() => {
        setCount((count1) => count1 + 1);
        },1000);
       },[]);

       useEffect(() => {
        setTimeout(() => {
        setchange((count2) => count2 + 1);
        },1000);
       },[count2]);

       const change=()=>{

        setdemo(count2+1);
       }

    return(
        <div>
           <h1> Effect Show Automatic : {count}</h1><br/>
           <h1> Effect Show Oncetime : {count1}</h1><br/>
           <h1> Effect Show by user : {count2}</h1><br/>
           <button onClick={change}>Change</button>

       </div>


    )
}
export default Effect;