import React from 'react'
import {Link} from 'react-router-dom'
function header()
{
    return(
    <div>
        <Link to="/">Home</Link> &nbsp;&nbsp;
        <Link to="/profile">Profile</Link>&nbsp;&nbsp;
        <a href="/details">Details</a>&nbsp;&nbsp;
        <Link to="/ColourChange">Colour-Change</Link>&nbsp;&nbsp;
        <Link to="/effect">Effect-Hook</Link>&nbsp;&nbsp;
        <Link to="/post">Allpost</Link>&nbsp;&nbsp;


    </div>
    )
}
export default header;