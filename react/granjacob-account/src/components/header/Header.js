import React, {useState, useEffect} from 'react';

import RightNavbar from "./RightNavbar";

const Header = () => {
    return (

        <header id="header" className="header fixed-top d-flex align-items-center">

            <div className="d-flex align-items-center justify-content-between">
                <a href="?p=index" className="logo d-flex align-items-center">
                    <img src="http://granjacob.com/images/granjacob-com-logo.svg" width="250" alt="GRAN JACOB Logo"
                         className="navbar-logo"/>

                </a>
                <i className="bi bi-list toggle-sidebar-btn"></i>
            </div>

            <div className="search-bar">
                <form className="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword"/>
                    <button type="submit" title="Search">
                        <i className="bi bi-search"></i>
                    </button>
                </form>
            </div>

            <RightNavbar/>

        </header>
    );
};


export default Header;