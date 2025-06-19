<script id="sidebar-toggle-script">
    document.addEventListener('DOMContentLoaded', function() {
        const toggleSidebarBtn = document.getElementById('toggle-sidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('main');
        const idMakerText = document.querySelector('.id-maker-animated'); // << i-add ni

        toggleSidebarBtn.addEventListener('click', function() {
            if (sidebar.classList.contains('w-64')) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                mainContent.classList.remove('ml-64');
                mainContent.classList.add('ml-20');

                // Hide text in sidebar
                document.querySelectorAll('.sidebar-link span').forEach(span => {
                    span.classList.add('hidden');
                });

                // Hide ID Maker text
                if (idMakerText) idMakerText.classList.add('hidden');

            } else {
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                mainContent.classList.remove('ml-20');
                mainContent.classList.add('ml-64');
                document.querySelectorAll('.sidebar-link span').forEach(span => {
                    span.classList.remove('hidden');
                });
                if (idMakerText) idMakerText.classList.remove('hidden');
            }
        });
    });
</script>

    <script id="charts-init-script">
        document.addEventListener('DOMContentLoaded', function() {
            // Sales Chart
            const salesChart = echarts.init(document.getElementById('sales-chart'));
            const salesOption = {
                animation: false,
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                grid: {
                    top: 10,
                    right: 10,
                    bottom: 20,
                    left: 40
                },
                xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    axisLine: {
                        lineStyle: {
                            color: '#e5e7eb'
                        }
                    },
                    axisLabel: {
                        color: '#6b7280'
                    }
                },
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show: false
                    },
                    axisLabel: {
                        color: '#6b7280'
                    },
                    splitLine: {
                        lineStyle: {
                            color: '#f3f4f6'
                        }
                    }
                },
                series: [
                    {
                        name: 'Revenue',
                        type: 'line',
                        smooth: true,
                        symbol: 'none',
                        lineStyle: {
                            width: 3,
                            color: 'rgba(87, 181, 231, 1)'
                        },
                        areaStyle: {
                            color: {
                                type: 'linear',
                                x: 0,
                                y: 0,
                                x2: 0,
                                y2: 1,
                                colorStops: [{
                                    offset: 0, 
                                    color: 'rgba(87, 181, 231, 0.2)'
                                }, {
                                    offset: 1, 
                                    color: 'rgba(87, 181, 231, 0.01)'
                                }]
                            }
                        },
                        data: [12500, 15800, 14200, 16300, 18500, 17200, 19800]
                    },
                    {
                        name: 'Orders',
                        type: 'line',
                        smooth: true,
                        symbol: 'none',
                        lineStyle: {
                            width: 3,
                            color: 'rgba(141, 211, 199, 1)'
                        },
                        areaStyle: {
                            color: {
                                type: 'linear',
                                x: 0,
                                y: 0,
                                x2: 0,
                                y2: 1,
                                colorStops: [{
                                    offset: 0, 
                                    color: 'rgba(141, 211, 199, 0.2)'
                                }, {
                                    offset: 1, 
                                    color: 'rgba(141, 211, 199, 0.01)'
                                }]
                            }
                        },
                        data: [280, 350, 310, 420, 490, 450, 520]
                    }
                ]
            };
            salesChart.setOption(salesOption);

            // Traffic Chart
            const trafficChart = echarts.init(document.getElementById('traffic-chart'));
            const trafficOption = {
                animation: false,
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                legend: {
                    orient: 'vertical',
                    right: 10,
                    top: 'center',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                series: [
                    {
                        name: 'Traffic Source',
                        type: 'pie',
                        radius: ['45%', '70%'],
                        center: ['40%', '50%'],
                        avoidLabelOverlap: false,
                        itemStyle: {
                            borderRadius: 8,
                            borderColor: '#fff',
                            borderWidth: 2
                        },
                        label: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: false
                            }
                        },
                        labelLine: {
                            show: false
                        },
                        data: [
                            { value: 40, name: 'Organic Search', itemStyle: { color: 'rgba(87, 181, 231, 1)' } },
                            { value: 25, name: 'Direct', itemStyle: { color: 'rgba(141, 211, 199, 1)' } },
                            { value: 20, name: 'Social Media', itemStyle: { color: 'rgba(251, 191, 114, 1)' } },
                            { value: 15, name: 'Referral', itemStyle: { color: 'rgba(252, 141, 98, 1)' } }
                        ]
                    }
                ]
            };
            trafficChart.setOption(trafficOption);
            // Resize charts when window is resized
            window.addEventListener('resize', function() {
                salesChart.resize();
                trafficChart.resize();
            });
        });
    </script>

    <script id="form-controls-script">
        document.addEventListener('DOMContentLoaded', function() {
            // Custom checkbox functionality
            document.querySelectorAll('.custom-checkbox input').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const parentLabel = this.closest('.custom-checkbox');
                    const taskText = parentLabel.nextElementSibling.querySelector('p');
                    const statusText = parentLabel.nextElementSibling.querySelector('span');
                    const statusIcon = parentLabel.nextElementSibling.querySelector('.w-3.h-3 i');
                    
                    if (this.checked && taskText.textContent.includes('Schedule')) {
                        taskText.classList.add('line-through', 'text-gray-400');
                        statusText.textContent = 'Completed';
                        statusText.classList.remove('text-red-500', 'text-orange-500', 'text-gray-400');
                        statusText.classList.add('text-green-500');
                        statusIcon.classList.remove('ri-time-line');
                        statusIcon.classList.add('ri-check-line');
                        statusIcon.parentElement.classList.remove('text-red-500', 'text-orange-500', 'text-gray-400');
                        statusIcon.parentElement.classList.add('text-green-500');
                    }
                });
            });
        });
    </script>