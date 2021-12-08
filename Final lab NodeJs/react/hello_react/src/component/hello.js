import React from 'react';
//import Profile from './profile';
import Student from './student';
import Click from './click';

function hello()
{
    return(
        <div>
            
            <h1>Try it first time</h1>
            <Student name="Tanvir" id="1812345"/>
            <Student name="Karim" id="1712345" />
            <Click/>

        </div>
    )
}
export default hello;