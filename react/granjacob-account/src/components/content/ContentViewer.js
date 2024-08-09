import React, {useState, useEffect} from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import PageTitle from "./PageTitle";
import Home from "../Home";
import About from "./about/About";
import Contact from "./contact/Contact";
import CurrentRoute from "../CurrentRoute";
import UsersProfile from "./users-profile/UsersProfile";

const ContentViewer = () => {
    return (

        <main id="main" className="main">

            <PageTitle/>
            <Router>

                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="/users-profile" element={<UsersProfile />} />
                    <Route path="/about" element={<About />} />
                    <Route path="/contact" element={<Contact />} />
                </Routes>
            </Router>




        </main>

    );
};

export default ContentViewer;