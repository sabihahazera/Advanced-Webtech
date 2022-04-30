import React from 'react';
import { Link } from 'react-router-dom';

const User = (props) => {
    const { name, phonenumber, accountType} = props.users;
    return ( 
        <div className = "UserList" >
            <Link to = { "/userDetails" + "/" + name + "/" + phonenumber + "/" + accountType} > <b> Name: { name } </b></Link >
        </div>
    );
};

export default User;