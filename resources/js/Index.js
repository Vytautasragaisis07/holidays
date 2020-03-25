import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Holidays from "./components/Holidays";
import Example from "./components/Example";
import {BrowserRouter as Router, Link, Route} from "react-router-dom";

export default class Index extends Component{
    render() {
        return(
            <div className="container">
                <Router>
                    <div>
                        <Link to="/">Pagrindinis</Link>
                        <Link to="/holidays">Kelionės</Link>
                        <Route path="/" exact component={Example}/>
                        <Route path="/holidays" exact component={Holidays}/>
                    </div>
                </Router>
            </div>
        );
    }
}



if (document.getElementById('example')) {
    ReactDOM.render(<Index />, document.getElementById('example'));
}
