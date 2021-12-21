import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import {BrowserRouter as Router,Route,Switch} from 'react-router-dom';
import axios from 'axios';
import Header from './display/header';
import Login from './display/login';
import Home from './display/home';
import Registration from './display/registration';
import Style from './display/style';
import Doctor from './display/Set_Appointment';
import Cabin from './display/Set_Cabin';
import Labtest from './display/Set_labtest';
import D_review from './display/doctor_review';
import C_review from './display/cabin_review';
import L_review from './display/lab_review';
import Profile from './display/profile';
import EditProfile from './display/editProfile';
import Recovery from './display/recovery';
import Rating from './display/rating';
import Admin from './display/admin';
import Service from './display/service';
import Review from './display/review'
import Logout from './display/logout';
 

var token=null;
if(localStorage.getItem('user'))
{
  
  var obj = JSON.parse(localStorage.getItem('user'));
  token = obj.token;       
}
axios.defaults.baseURL="http://localhost:8000/api";
axios.defaults.headers.common['Authorization']=token;
ReactDOM.render(
  <React.StrictMode>
    <Router>
    
      <Switch>
        <Route exact path='/'>

          <Login/>

        </Route>
        <Route exact path='/home'>

         <Home/>

        </Route>
        <Route exact path='/registration'>

          <Registration/>

        </Route>
        <Route exact path='/doctor_appointment/:id/:name'>

          <Doctor/>

        </Route>
        <Route exact path='/cabin_appointment/:id/:name'>

          <Cabin/>

        </Route>
        <Route exact path='/lab_appointment/:id/:name'>

          <Labtest/>

        </Route>
        <Route exact path='/doctor_review/:id/:name'>

          <D_review/>

        </Route>
        <Route exact path='/cabin_review/:id/:name'>

          <C_review/>

        </Route>
        <Route exact path='/lab_review/:id/:name'>

          <L_review/>

        </Route>
        <Route exact path='/profile'>

          <Profile/>

        </Route>
        <Route exact path='/editprofile/:id/:name/:password/:phone/:email/:address'>

          <EditProfile/>

        </Route>
        <Route exact path='/recovery'>

          <Recovery/>

        </Route>
        <Route exact path='/rating'>

          <Rating/>

        </Route>
        <Route exact path='/admin'>

          <Admin/>

        </Route>
        <Route exact path='/histray'>

          <Service/>

        </Route>
        <Route exact path='/review'>

          <Review/>

        </Route>
        <Route exact path='/logout'>

          <Logout/>

        </Route>

        
      </Switch>
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
