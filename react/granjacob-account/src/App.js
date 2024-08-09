import React from 'react';
import {useEffect} from "react";

import Header from './components/header/Header.js';
import Sidebar from './components/sidebar/Sidebar';
import ContentViewer from './components/content/ContentViewer';


import Footer from "./components/footer/Footer";

import MainJs from "./assets/js/main";

function App() {


    return (
<>
        <Header/>
        <Sidebar/>
        <ContentViewer/>
        <Footer/>
</>

    );
}

export default App;