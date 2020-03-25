import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {Link} from "react-router-dom"

class Holidays extends Component {
    constructor(props) {
        super(props);
        this.state = {holiday: {}};
    }

    componentDidMount() {

        fetch(`http://skelbimai.test/api/holiday/${this.props.match.params.id}`)
            .then(response => response.json())
            .then(
                data => {
                    this.setState({
                        holiday: data
                    })
                })
    }

    render() {
        const holidayId = localStorage.setItem('id', this.state.holiday.id);
        return (
            <div class="col-lg-9">

                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""/>
                    <div class="card-body">
                        <h3 class="card-title">{this.state.holiday.title}</h3>
                        <h4>$24.99</h4>
                        <p class="card-text">{this.state.holiday.description}</p>
                        <p class="card-text">{this.state.holiday.price}</p>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        4.0 stars
                        <Link to="/orders" type="submit">Uzsakyti</Link>
                    </div>
                </div>
            </div>

        );

    }

}
export default Holidays;

if (document.getElementById('example')) {
    ReactDOM.render(<Holidays />, document.getElementById('example'));
}
