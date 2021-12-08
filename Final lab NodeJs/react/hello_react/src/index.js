import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Hello from './component/hello';
import Header from './component/header';
import Profile from './component/profile';
import Details from './component/details';
import {BrowserRouter as Router,Route,Switch} from 'react-router-dom';
import ColourChange from './component/ColourChange';
import Effect from './component/UseEffect';
import AllPost from './component/AllPost';

ReactDOM.render(
  <React.StrictMode>
    <Router>
    <Header/>
      <Switch>
        <Route exact path='/'>

          <Hello/>

        </Route>
        <Route exact path='/profile'>

          <Profile/>

        </Route>
        <Route exact path='/details/:id'>

          <Details/>

        </Route>
        <Route exact path='/ColourChange'>

          <ColourChange/>

        </Route>
        <Route exact path='/effect'>

          <Effect/>

        </Route>
        <Route exact path='/post'>

          <AllPost/>

        </Route>
      </Switch>
      <App/>
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
