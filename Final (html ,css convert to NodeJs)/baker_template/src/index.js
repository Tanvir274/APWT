import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Header from './content/header';
import Hero from './content/hero';
import Client from './content/client';
import About from './content/about';
import Count from './content/count';
import Service from './content/service';
import Cta from './content/cta';
import Testimonials from './content/testimonial';
import Portfolio from './content/protfolio';
import Team from './content/team';
import Pricing from './content/pricing';
import Faq from './content/faq';

ReactDOM.render(
  <React.StrictMode>
    <Header/>
    <Hero/>
    <Client/>
    <About/>
    <Count/>
    <Service/>
    <Cta/> 
    <Testimonials/>
    <Portfolio/>
    <Team/>
    <Pricing/>
    <Faq/>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
