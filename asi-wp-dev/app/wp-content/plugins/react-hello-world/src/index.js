import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import Footer from './components/Footer';

ReactDOM.render(<App />, document.getElementById('root'));
//RATIONALE: for commenting out registerServiceWorker();  at   https://goo.gl/KwvDNy
//registerServiceWorker();
