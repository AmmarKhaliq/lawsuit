<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.28.3/apexcharts.min.css"
        integrity="sha512-Tv+8HvG00Few62pkPxSs1WVfPf9Hft4U1nMD6WxLxJzlY/SLhfUPFPP6rovEmo4zBgwxMsArU6EkF11fLKT8IQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">


        <div class="row my-4">
            <div class="col-12 col-md-4">
                <div class="bg-white h-100 rounded">
                    <div id="gained-chart"></div>
                    <div class="d-flex align-items-start px-3 pt-4">
                        <i class="fa bg-primary-light fa-2x rounded p-2 fa-briefcase" aria-hidden="true"></i>
                        <div class="flex-column ml-3">
                            <span class="text-secondary text-uppercase">New Cases</span>
                            <p class="lead font-weight-bolder">564</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="bg-white h-100 rounded">
                    <div id="gained-chart-two"></div>
                    <div class="d-flex align-items-start px-3 pt-4">
                        <i class="fa bg-primary-light fa-2x rounded p-2 fa-money" aria-hidden="true"></i>
                        <div class="flex-column ml-3">
                            <span class="text-secondary text-uppercase">total charges</span>
                            <p class="lead font-weight-bolder">$2456k</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="bg-white h-100 rounded">
                    <div id="gained-chart-three"></div>
                    <div class="d-flex align-items-start px-3 pt-4">
                        <i class="fa bg-primary-light fa-2x rounded p-2 fa-briefcase" aria-hidden="true"></i>
                        <div class="flex-column ml-3">
                            <span class="text-secondary text-uppercase">total Cases</span>
                            <p class="lead font-weight-bolder">65,299</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-12 col-md-8 col-xl-4">
                <a href="<?php echo base_url() . 'newcases'; ?>" class="text-decoration-none">
                    <button class="btn new-add-book">new case</button>
                </a>
                <a href="<?php echo base_url() . 'casesharing'; ?>" class="text-decoration-none">
                    <button class="btn new-add-book">case requests</button>
                </a>
            </div>



            <div class="col-12 col-md-6 col-xl-2 p-0">
                <div class="form-group mb-0">
                    <select class="form-control myn-select" id="sel1">
                        <option>All</option>
                        <option>AAAAAAAAAAAAAAAAAAAAA</option>
                        <option>BBBBBBBBBBBBBBB</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2 p-0">
                <div class="form-group mb-0">
                    <select class="form-control myn-select" id="sel1">
                        <option>Show Subset</option>
                        <option>AAAAAAAAAAAAAAAAAAAAA</option>
                        <option>BBBBBBBBBBBBBBB</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2 p-0">
                <div class="form-group mb-0">
                    <select class="form-control myn-select" id="sel1">
                        <option>By Alphabet</option>
                        <option>AAAAAAAAAAAAAAAAAAAAA</option>
                        <option>BBBBBBBBBBBBBBB</option>
                    </select>
                </div>
            </div>


        </div>


        <div class="table-start my-4 bg-white rounded p-4 shadow-sm">
            <section class="containr">
                <section class="container-section">
                    <table id="example1" class="display table-responsiv" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>Case Name</div>
                                </th>
                                <th>
                                    <div>Injury/Arrest</div>
                                </th>
                                <th>
                                    <div>Case#</div>
                                </th>
                                <th>
                                    <div>Next Court</div>
                                </th>
                                <th>
                                    <div>Paid Date</div>
                                </th>
                                <th>
                                    <div>Balance</div>
                                </th>
                                <th>
                                    <div>Client Type</div>
                                </th>
                                <th>
                                    <div>Status</div>
                                </th>
                                <th>
                                    <div>Type</div>
                                </th>
                                <th>
                                    <div> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php for($i=0; $i <= 30; $i++) { ?>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <p class="m-0 text-capitalize ml-2">Google Inc vs
                                            Samsung Inc.
                                            <?php echo $i++ ?>
                                        </p>
                                    </div>
                                </td>
                                <td>00/00/00</td>
                                <td>2019-C-
                                    <?php echo $i++ ?>
                                </td>
                                <td>00/00/00</td>
                                <td><span>$00.00</span> </td>
                                <td><span>$00.00</span> </td>
                                <td> <span>Defendant</span> </td>
                                <td>
                                    <div class="paid-unpaid">
                                        <span>Open</span>
                                    </div>
                                </td>
                                <td> <span>Criminal Law</span> </td>
                                <td> <i class="fa fa-share-square-o" aria-hidden="true"></i></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </section>
            </section>

        </div>

        <div class="d-flex my-5 justify-content-end">
            <a href="#/" class="text-decoration-none mr-3">
                <button class="btn new-add-book">Stop watch billing</button>
            </a>
            <a href="#/" class="text-decoration-none mr-3">
                <button class="btn new-add-book">Export list to excel</button>
            </a>
            <a href="#/" class="text-decoration-none mr-3">
                <button class="btn new-add-book">Print list</button>
            </a>
            <a href="#/" class="text-decoration-none mr-3">
                <button class="btn new-add-book">save form</button>
            </a>
            <a href="#/" class="text-decoration-none mr-3">
                <button class="btn new-add-book">email form</button>
            </a>
            <a href="#/" class="text-decoration-none">
                <button class="btn new-add-book">Print form</button>
            </a>
        </div>



    </div>
    <!--end of main-div-all-->
















    <?php include('includes/bottom_links.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        $(document).ready(function () {
            $('#example1').dataTable();
        });

        var $gainedChart = document.querySelector('#gained-chart');
        var gainedCharttwo = document.querySelector('#gained-chart-two');
        var gainedChartthree = document.querySelector('#gained-chart-three');



        var gainedChartOptions;
        var gainedChart;
        var gainedCharttwo;
        var gainedChartthree;

        gainedChartOptions = {
            chart: {
                height: 100,
                type: 'area',
                toolbar: {
                    show: false
                },
                sparkline: {
                    enabled: true
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2.5
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 0.9,
                    opacityFrom: 0.7,
                    opacityTo: 0.5,
                    stops: [0, 80, 100]
                }
            },
            series: [
                {
                    name: 'New Cases',
                    data: [28, 40, 36, 52, 38, 60, 55]
                }
            ],
            xaxis: {
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                }
            },
            yaxis: [
                {
                    y: 0,
                    offsetX: 0,
                    offsetY: 0,
                    padding: { left: 0, right: 0 }
                }
            ],
            tooltip: {
                x: { show: false }
            }
        };

        gainedChart = new ApexCharts($gainedChart, gainedChartOptions);
        gainedCharttwo = new ApexCharts(gainedCharttwo, gainedChartOptions);
        gainedChartthree = new ApexCharts(gainedChartthree, gainedChartOptions);
        gainedChart.render();
        gainedCharttwo.render();
        gainedChartthree.render();

    </script>

</body>

</html>