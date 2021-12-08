import React from "react";
import {useParams}  from 'react-router-dom';

const Details=()=>{
    const {id} = useParams();
    return(
        <h1>This is Detalis part id {id}</h1>
    )
}
export default Details;