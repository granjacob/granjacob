import React, { useState, useEffect } from 'react';

import NavNotifications from "./navs/NavNotifications";
import NavMessages from "./navs/NavMessages";
import NavProfile from "./navs/NavProfile";

const RightNavbar = () => {
    return (

        <nav className="header-nav ms-auto">
            <ul className="d-flex align-items-center">

                <li className="nav-item d-block d-lg-none">
                    <a className="nav-link nav-icon search-bar-toggle " href="#">
                        <i className="bi bi-search"></i>
                    </a>
                </li>

                <NavNotifications/>
                <NavMessages/>
                <NavProfile/>

            </ul>
        </nav>
    );
};


export default RightNavbar;