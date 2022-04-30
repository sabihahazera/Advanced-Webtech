import React from 'react';
import { useParams } from 'react-router-dom';

const UserDetails = (props) =>{
    const {name} = useParams();
    const {phonenumber} = useParams();
    const {accountType} = useParams();

    return(
        <div className = 'UserDetails'>
            <h1>This is Details for user</h1>
            <br/>
            <p>Name: {name}</p>
            <p>Phone Number: {phonenumber}</p>
            <p>Account Type: {accountType}</p>
            
        </div>
    );
};
export default UserDetails;