import React from 'react';
import { useLocation } from 'react-router-dom';

const CurrentRoute = () => {
    const location = useLocation();

    return (
        <div>
            <p>Current Route: {location.pathname}</p>
        </div>
    );
};

export default CurrentRoute;