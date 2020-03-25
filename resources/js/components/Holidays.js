import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class Holidays extends Component {
    constructor(props) {
        super(props);
        this.state = {
            Holidays: [],
        };
    }
        componentDidMount() {
            axios.get("/api/all-holidays/")
                .then(response => {
                this.setState({
                    Holidays: response.data
                });
            }).catch(errors => {
                console.log(errors);
            })
    }

    render() {
        return(
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                    {this.state.Holidays.map(Holidays =>
                        <h3 className="card-header">{Holidays.title}</h3>)}
                    {this.state.Holidays.map(Holidays => <p className="card-text">{Holidays.description}</p>)}
                        </div>
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
