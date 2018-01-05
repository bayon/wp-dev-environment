import React, { Component } from 'react';
//import logo from './logo.svg';
import './App.css';
import Footer from './components/Footer';

class App extends Component {

  constructor(){
    super();
    this.state = {
      projects:[]
    }
  }
  componentDidMount(){
    let projectsURL = "http://localhost:3000/wp-json/wp/v2/posts";
    fetch(projectsURL)
    .then(response => response.json())
    .then(response =>{
      this.setState({
        projects:response
      })
    })
  }
  render() {
    let projects = this.state.projects.map((project,index) => {
        return (
            <div key={index}>
              x
            </div>
          )
    })
    
    return (
      <div className="App">
        <p>Projects</p>
        {projects}
        <small>You are running this application in <b>{process.env.NODE_ENV}</b> mode.</small>
        <Footer />
      </div>
    );
  }
}

export default App;
/*
this was returned under the let projects = code
 <p>{project.title.rendered}</p>
               {project.content.rendered}
*/