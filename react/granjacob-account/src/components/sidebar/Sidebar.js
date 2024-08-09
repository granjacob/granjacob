import React, {useState, useEffect} from 'react';

const Sidebar = () => {
    return (


        <aside id="sidebar" className="sidebar">

            <ul className="sidebar-nav" id="sidebar-nav">
                <li className="nav-item">
                    <a className="nav-link " href="/users-profile">
                        <i className="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link " href="index.php?p=dashboard">
                        <i className="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li className="nav-item">
                    <a className="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                       href="index.php?p=#">
                        <i className="bi bi-menu-button-wide">
                        </i><span>Components</span>
                        <i className="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" className="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php?p=components-alerts">
                                <i className="bi bi-circle"></i><span>Alerts</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-accordion">
                                <i className="bi bi-circle"></i><span>Accordion</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-badges">
                                <i className="bi bi-circle"></i><span>Badges</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-breadcrumbs">
                                <i className="bi bi-circle"></i><span>Breadcrumbs</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-buttons">
                                <i className="bi bi-circle"></i><span>Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-cards">
                                <i className="bi bi-circle"></i><span>Cards</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-carousel">
                                <i className="bi bi-circle"></i><span>Carousel</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-list-group">
                                <i className="bi bi-circle"></i><span>List group</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-modal">
                                <i className="bi bi-circle"></i><span>Modal</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-tabs">
                                <i className="bi bi-circle"></i><span>Tabs</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-pagination">
                                <i className="bi bi-circle"></i><span>Pagination</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-progress">
                                <i className="bi bi-circle"></i><span>Progress</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-spinners">
                                <i className="bi bi-circle"></i><span>Spinners</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=components-tooltips">
                                <i className="bi bi-circle"></i><span>Tooltips</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                       href="index.php?p=#">
                        <i className="bi bi-journal-text"></i><span>Forms</span><i
                        className="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" className="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php?p=forms-elements">
                                <i className="bi bi-circle"></i><span>Form Elements</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=forms-layouts">
                                <i className="bi bi-circle"></i><span>Form Layouts</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=forms-editors">
                                <i className="bi bi-circle"></i><span>Form Editors</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=forms-validation">
                                <i className="bi bi-circle"></i><span>Form Validation</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                       href="index.php?p=#">
                        <i className="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        className="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" className="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php?p=tables-general">
                                <i className="bi bi-circle"></i><span>General Tables</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=tables-data">
                                <i className="bi bi-circle"></i><span>Data Tables</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                       href="index.php?p=#">
                        <i className="bi bi-bar-chart"></i><span>Charts</span><i
                        className="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav" className="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php?p=charts-chartjs">
                                <i className="bi bi-circle"></i><span>Chart.js</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=charts-apexcharts">
                                <i className="bi bi-circle"></i><span>ApexCharts</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=charts-echarts">
                                <i className="bi bi-circle"></i><span>ECharts</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                       href="index.php?p=#">
                        <i className="bi bi-gem"></i><span>Icons</span><i className="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" className="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="index.php?p=icons-bootstrap">
                                <i className="bi bi-circle"></i><span>Bootstrap Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=icons-remix">
                                <i className="bi bi-circle"></i><span>Remix Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?p=icons-boxicons">
                                <i className="bi bi-circle"></i><span>Boxicons</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li className="nav-heading">Pages</li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=users-profile">
                        <i className="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-faq">
                        <i className="bi bi-question-circle"></i>
                        <span>F.A.Q</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-contact">
                        <i className="bi bi-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-register">
                        <i className="bi bi-card-list"></i>
                        <span>Register</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-login">
                        <i className="bi bi-box-arrow-in-right"></i>
                        <span>Login</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-error-404">
                        <i className="bi bi-dash-circle"></i>
                        <span>Error 404</span>
                    </a>
                </li>

                <li className="nav-item">
                    <a className="nav-link collapsed" href="index.php?p=pages-blank">
                        <i className="bi bi-file-earmark"></i>
                        <span>Blank</span>
                    </a>
                </li>

            </ul>

        </aside>

    );
};

export default Sidebar;