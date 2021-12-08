import React from "react";

const Post=(props)=>{

    const Style={
        backgroundColor:"blue",
        colour:"white",
        fontFamily:"consolas",
        width:"400px",
        padding:"10px",

    }
    return(
        <div style={Style}>
            <span>{props.userId}</span>
            <p>{props.title}</p>

        </div>

    )
}
export default Post;