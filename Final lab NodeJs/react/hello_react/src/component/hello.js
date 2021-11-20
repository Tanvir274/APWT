import React from 'react';
import Header from './header';
import Student from './student';

function hello()
{
    return(
        <div>
            <Header/>
            <h1>Try it first time</h1>
            <Student name="Tanvir" id="1812345"/>
            <Student name="Karim" id="1712345" />

        </div>
    )
}
export default hello;