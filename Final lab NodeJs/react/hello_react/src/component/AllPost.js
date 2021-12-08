// fake API: jsonplaceholder API

import React,{useState,useEffect} from "react";
import axios from 'axios';
import Post from "./post";

const Allpost=()=>{
    const[posts,setpost]=useState([]);
    //For initial array value [{id:1,name:"demo 1"},{id:2,name:"demo 2"}]

    useEffect(()=>{
        axios.get("https://jsonplaceholder.typicode.com/posts")
        .then(resp=>{
            //console.log(resp);
            //console.log(resp.data);
            setpost(resp.data);

        })
        .catch(err=>{
            console.log(err);
        })

    },[]);

    return(
        <div>
        <div>
            <table>
              <thead>
                  <tr>
                      <td>ID</td>
                      <td>Name</td>
                  </tr>

              </thead>
              <tbody>
              {
                posts.map(post => (
                    <tr key={post.id}>
                        <td>{post.id}</td>
                        <td>{post.title}</td>
                    </tr>
                ))
              }           
              </tbody>
            </table>


        </div>
        <div>
            {
               posts.map(post =>(
                   <Post userId={post.userId} title={post.title} key={post.id} />

                )) 
            }
        </div>
      </div>  
    )
}
export default Allpost;
