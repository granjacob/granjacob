import React, {useState, useEffect} from 'react';

const PageTitle = () => {
    return (

        <main id="main" className="main">

            <div className="pagetitle">
                <h1>$Current page title</h1>
                <nav>
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><a href="?p=index">Home</a></li>
                        <li className="breadcrumb-item active">$Current page title</li>
                    </ol>
                </nav>
            </div>





        </main>

    );
};

export default PageTitle;