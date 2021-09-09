@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30" >Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center"> 
                                <img src="img/icon/calender_icon.svg" alt="">
                                August 1, 2020 - August 31, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-8 ">
                    <div class="white_card mb_30 card_height_100">
                        <div class="white_card_header">
                            <div class="row align-items-center justify-content-between flex-wrap">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Stoke Details</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right d-flex justify-content-end">
                                    <select class="nice_Select2 max-width-220" >
                                        <option value="1">Show by month</option>
                                        <option value="1">Show by year</option>
                                        <option value="1">Show by day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="management_bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 ">
                    <div class="white_card card_height_100 mb_30 user_crm_wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head d-flex align-items-center justify-content-between" >
                                        <div class="thumb">
                                            <img src="img/crm/businessman.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm ">
                                    <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between" >
                                        <div class="thumb">
                                            <img src="img/crm/customer.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between" >
                                        <div class="thumb">
                                            <img src="img/crm/infographic.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_crm">
                                    <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between" >
                                        <div class="thumb">
                                            <img src="img/crm/sqr.svg" alt="">
                                        </div>
                                        <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                    </div>
                                    <div class="crm_body">
                                        <h4>2455</h4>
                                        <p>User Registrations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="crm_reports_bnner">
                            <div class="row justify-content-end ">
                                <div class="col-lg-6">
                                    <h4>Create CRM Reports</h4>
                                    <p>Outlines keep you and honest
                                        indulging honest.</p>
                                    <a href="#">Read More <i class="fas fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">New Users</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-4 mt_20">
                                    <select class="nice_Select2 wide" >
                                        <option value="1">Show by All</option>
                                        <option value="1">Show by A</option>
                                        <option value="1">Show by B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body ">
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Admin
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                            <div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
                                <div class="user_pils_thumb d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                    <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                </div>
                                <div class="user_info">
                                    Customer
                                </div>
                                <div class="action_btns d-flex">
                                    <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                    <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sales of the last week</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="chart-currently"></div>
                            <div class="monthly_plan_wraper">
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/icon2/7.svg" alt="">
                                        </div>
                                        <div>
                                            <h5>Most Sales</h5>
                                            <span>Authors with the best sales</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/icon2/6.svg" alt="">
                                        </div>
                                        <div>
                                            <h5>Total sales lead</h5>
                                            <span>40% increased on week-to-week reports</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_plan d-flex align-items-center justify-content-between">
                                    <div class="plan_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/icon2/5.svg" alt="">
                                        </div>
                                        <div>
                                            <h5>Average Bestseller</h5>
                                            <span>Pitstop Email Marketing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30 overflow_hidden">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Sales Details</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pb-0">
                            <div class="Sales_Details_plan">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="img/icon2/3.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5>$2,034</h5>
                                                    <span>Author Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="img/icon2/1.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5>$706</h5>
                                                    <span>Commision</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="img/icon2/4.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5>$49</h5>
                                                    <span>Average Bid</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_plan d-flex align-items-center justify-content-between">
                                            <div class="plan_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img src="img/icon2/2.svg" alt="">
                                                </div>
                                                <div>
                                                    <h5>$5.8M</h5>
                                                    <span>All Time Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chart_wrap overflow_hidden">
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="white_card card_height_100 mb_20 ">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">New Products</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product 1</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Discount</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Source</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_1.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_1">Google</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_2.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 2</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_2">Direct</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_3.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 3</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_1">Google</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_4.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 4</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_1">Refferal</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_5.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 5</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_1">20</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 6</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_5">Direct</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 6</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                                            <td class="f_s_12 f_w_400 color_text_6">60</td>
                                            <td class="f_s_12 f_w_400 text-right"><a href="#" class="text_color_5">Direct</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="white_card card_height_100  mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Visitors</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="world-map-markers" class="dashboard_w_map pb_20" ></div>
                            <div class="world_list_wraper">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6 class="f_s_14 f_w_400" >USA</h6>
                                                    <div id="bar4" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="81"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Australia</h6>
                                                    <div id="bar5" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="58"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Brazil</h6>
                                                    <div id="bar6" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="42"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Latvia</h6>
                                                    <div id="bar7" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="55"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="white_card card_height_100 mb_20 ">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Stoke Details</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body QA_section">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <table class="table lms_table_active2 p-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Market Price</th>
                                            <th scope="col">Selling Price</th>
                                            <th scope="col">Total Unite</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_1.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_2.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_3.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">20</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_4.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="color_text_6">210</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_5.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_1">210</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_5">200</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer d-flex align-items-center">
                                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt=""></div>
                                                    <span class="f_s_12 f_w_600 color_text_5" >Product 1</span>
                                                </div>
                                                
                                            </td>
                                            <td class="f_s_12 f_w_400 color_text_6">$564</td>
                                            <td class="f_s_12 f_w_400 color_text_6">$650</td>
                                            <td class="f_s_12 f_w_400 text-center"><a href="#" class="text_color_5">200</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Recent activity</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="Activity_timeline">
                                <ul>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell "></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell bell_lite"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="activity_bell bell_lite"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <h6>5 min ago</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Member request
                                        to mail.</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="thumb mb_30">
                                <img src="img/table.svg" alt="" class="img-fluid">
                            </div>
                            <div class="common_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="common_input mb_15">
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="nice_Select2 nice_Select_line wide" >
                                                <option value="1">Role</option>
                                                <option value="1">Role 1</option>
                                                <option value="1">Role2</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="create_report_btn mt_30">
                                                <a href="#" class="btn_1 radius_btn d-block text-center">Send the invitation link</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="main-title">
                                        <h3 class="m-0">Stoke Details</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <div class="serach_field-area theme_bg d-flex align-items-center">
                                                <div class="search_inner">
                                                    <form action="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search">
                                                        </div>
                                                        <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="nice_Select2 wide" >
                                                <option value="1">Show by All</option>
                                                <option value="1">Show by A</option>
                                                <option value="1">Show by B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body ">
                            <div class="row min_height_oveflow">
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb_30">
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Admin
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                    <div class="single_user_pil d-flex align-items-center justify-content-between">
                                        <div class="user_pils_thumb d-flex align-items-center">
                                            <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                            <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                                        </div>
                                        <div class="user_info">
                                            Customer
                                        </div>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- main content part end -->
@endsection