/**
 * Movable Admin Dashboard JavaScript
 * Core dashboard functionality including menu toggle, charts, and UI interactions
 */

'use strict';

// DOM Ready handler
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Dashboard
    Dashboard.init();
});

// Dashboard Module
const Dashboard = (function() {
    // Private variables
    let cardColors = {
        primary: '#696cff',
        secondary: '#8592a3',
        success: '#71dd37',
        info: '#03c3ec',
        warning: '#ffab00',
        danger: '#ff3e1d',
        dark: '#233446',
        black: '#000',
        white: '#fff',
        body: '#f4f5fb',
        headingColor: '#566a7f',
        axisColor: '#a1acb8',
        borderColor: '#eceef1'
    };

    let totalRevenueChartEl = null;
    let chartOptions = {};
    let totalRevenueChart = null;

    // Initialize all dashboard components
    function init() {
        initMenuToggle();
        initTooltips();
        initDropdowns();
        initCharts();
        initAnimations();
        initCardCollapse();
        initScrollTop();
    }

    // Menu toggle functionality
    function initMenuToggle() {
        const menuToggler = document.querySelector('.layout-menu-toggle');
        const layout = document.querySelector('.layout-wrapper');
        const menu = document.querySelector('.menu-vertical');
        const overlay = document.querySelector('.layout-overlay');

        if (menuToggler && layout && menu && overlay) {
            menuToggler.addEventListener('click', function() {
                layout.classList.toggle('layout-menu-expanded');
            });

            overlay.addEventListener('click', function() {
                layout.classList.remove('layout-menu-expanded');
            });

            // Collapse menu on window resize if needed
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1200 && layout.classList.contains('layout-menu-expanded')) {
                    layout.classList.remove('layout-menu-expanded');
                }
            });

            // Handle menu item active state
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(function(item) {
                const link = item.querySelector('.menu-link');
                if (link) {
                    link.addEventListener('click', function() {
                        menuItems.forEach(i => i.classList.remove('active'));
                        item.classList.add('active');
                    });
                }

                // Check if menu item should be active based on URL
                if (link && link.getAttribute('href') === window.location.pathname) {
                    menuItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');
                }
            });
        }
    }

    // Initialize Bootstrap tooltips
    function initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    // Initialize Bootstrap dropdowns
    function initDropdowns() {
        const dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
        dropdownTriggerList.map(function (dropdownTriggerEl) {
            return new bootstrap.Dropdown(dropdownTriggerEl);
        });
    }

    // Initialize dashboard charts
    function initCharts() {
        // Check if ApexCharts is available
        if (typeof ApexCharts === 'undefined') {
            console.warn('ApexCharts is not loaded. Charts will not be initialized.');
            return;
        }

        // Total Revenue Chart
        totalRevenueChartEl = document.querySelector('#totalRevenueChart');
        if (totalRevenueChartEl) {
            chartOptions = {
                series: [
                    {
                        name: 'Users',
                        data: [18, 30, 40, 35, 50, 55, 40, 60, 70, 55, 75, 80]
                    },
                    {
                        name: 'Claims',
                        data: [10, 15, 20, 25, 20, 30, 15, 25, 35, 45, 40, 50]
                    }
                ],
                chart: {
                    height: 300,
                    type: 'line',
                    toolbar: { show: false }
                },
                colors: [cardColors.primary, cardColors.info],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                legend: {
                    show: true,
                    position: 'top',
                    horizontalAlign: 'left'
                },
                grid: {
                    borderColor: cardColors.borderColor
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: cardColors.axisColor
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: cardColors.axisColor
                        }
                    }
                },
                tooltip: {
                    shared: true
                }
            };
            totalRevenueChart = new ApexCharts(totalRevenueChartEl, chartOptions);
            totalRevenueChart.render();
        }

        // User Growth Chart
        const userGrowthChartEl = document.querySelector('#userGrowthChart');
        if (userGrowthChartEl) {
            const userGrowthChart = new ApexCharts(userGrowthChartEl, {
                series: [{
                    name: 'Users',
                    data: [30, 48, 50, 68, 75, 90, 100, 116, 125, 150, 180, 210]
                }],
                chart: {
                    height: 200,
                    type: 'area',
                    toolbar: {
                        show: false
                    },
                    sparkline: {
                        enabled: true
                    }
                },
                colors: [cardColors.success],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 0.7,
                        opacityFrom: 0.5,
                        opacityTo: 0.2
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0
                    }
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    labels: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        show: false
                    }
                },
                tooltip: {
                    x: {
                        show: true
                    }
                }
            });
            userGrowthChart.render();
        }

        // Claims by Status Chart
        const claimsChartEl = document.querySelector('#claimsByStatusChart');
        if (claimsChartEl) {
            const claimsChart = new ApexCharts(claimsChartEl, {
                series: [40, 30, 25, 5],
                chart: {
                    height: 250,
                    type: 'donut'
                },
                labels: ['Pending', 'Resolved', 'In Progress', 'Rejected'],
                colors: [cardColors.warning, cardColors.success, cardColors.info, cardColors.danger],
                dataLabels: {
                    enabled: false
                },
                legend: {
                    show: true,
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total Claims',
                                    formatter: function(w) {
                                        return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                    }
                                }
                            }
                        }
                    }
                }
            });
            claimsChart.render();
        }
    }

    // Initialize animations
    function initAnimations() {
        // Add fade in animation to cards
        document.querySelectorAll('.card').forEach(function(card, index) {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animate__animated', 'animate__fadeInUp');
        });
    }

    // Initialize card collapse functionality
    function initCardCollapse() {
        document.querySelectorAll('[data-card-action="collapse"]').forEach(function(button) {
            button.addEventListener('click', function() {
                const card = button.closest('.card');
                const cardBody = card.querySelector('.card-body');
                const icon = button.querySelector('i');

                if (cardBody.style.display === 'none') {
                    cardBody.style.display = 'block';
                    icon.classList.remove('bx-plus');
                    icon.classList.add('bx-minus');
                    card.classList.remove('collapsed');
                } else {
                    cardBody.style.display = 'none';
                    icon.classList.remove('bx-minus');
                    icon.classList.add('bx-plus');
                    card.classList.add('collapsed');
                }
            });
        });
    }

    // Initialize scroll to top button
    function initScrollTop() {
        const scrollTopBtn = document.querySelector('.btn-scroll-top');
        if (scrollTopBtn) {
            window.addEventListener('scroll', function() {
                if (document.documentElement.scrollTop > 100) {
                    scrollTopBtn.classList.add('show');
                } else {
                    scrollTopBtn.classList.remove('show');
                }
            });

            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    // Public methods
    return {
        init: init,
        initCharts: initCharts,
        colors: cardColors
    };
})();

// Dashboard functionality
document.addEventListener('DOMContentLoaded', function() {
    // Menu toggle functionality
    const menuToggle = document.querySelector('.layout-menu-toggle');
    const menu = document.querySelector('.layout-menu');
    const overlay = document.querySelector('.layout-overlay');
    
    if (menuToggle && menu && overlay) {
        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', () => {
            menu.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // Initialize perfect scrollbar
    const menuInner = document.querySelector('.menu-inner');
    if (menuInner) {
        new PerfectScrollbar(menuInner);
    }

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add animation classes to cards
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.classList.add('fade-in');
    });

    // Stats cards hover effect
    const statsCards = document.querySelectorAll('.stats-card');
    statsCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('slide-in');
        });
    });

    // Initialize dropdowns
    const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
    dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
    });

    // Search functionality
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('keyup', (e) => {
            if (e.key === 'Enter') {
                // Handle search
                const searchTerm = e.target.value;
                if (searchTerm.length > 0) {
                    // Implement search functionality
                    console.log('Searching for:', searchTerm);
                }
            }
        });
    }

    // Active menu item highlight
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        const link = item.querySelector('.menu-link');
        if (link && link.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });

    // Charts initialization (if any charts exist)
    if (typeof Chart !== 'undefined') {
        // Initialize your charts here
        const ctx = document.getElementById('myChart');
        if (ctx) {
            new Chart(ctx, {
                // Your chart configuration
            });
        }
    }

    // Toast notifications
    window.showToast = function(message, type = 'success') {
        const toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            const container = document.createElement('div');
            container.id = 'toast-container';
            container.style.position = 'fixed';
            container.style.top = '20px';
            container.style.right = '20px';
            container.style.zIndex = '1050';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `toast bg-${type} text-white`;
        toast.innerHTML = `
            <div class="toast-header bg-${type} text-white">
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                ${message}
            </div>
        `;

        toastContainer.appendChild(toast);
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();

        toast.addEventListener('hidden.bs.toast', () => {
            toast.remove();
        });
    }

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
});

// Theme functionality
const Theme = {
    init() {
        this.initThemeVariables();
        this.initThemePanel();
    },

    initThemeVariables() {
        const root = document.documentElement;
        const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (isDark) {
            root.style.setProperty('--background', '#2b2c40');
            root.style.setProperty('--body-bg', '#232333');
            root.style.setProperty('--text-color', '#a3a4cc');
        }
    },

    initThemePanel() {
        const themeToggle = document.querySelector('.theme-toggle');
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                document.body.classList.toggle('dark-theme');
                this.updateTheme(document.body.classList.contains('dark-theme'));
            });
        }
    },

    updateTheme(isDark) {
        const root = document.documentElement;
        if (isDark) {
            root.style.setProperty('--background', '#2b2c40');
            root.style.setProperty('--body-bg', '#232333');
            root.style.setProperty('--text-color', '#a3a4cc');
        } else {
            root.style.setProperty('--background', '#f5f5f9');
            root.style.setProperty('--body-bg', '#ffffff');
            root.style.setProperty('--text-color', '#697a8d');
        }
    }
};

// Initialize theme
Theme.init();
