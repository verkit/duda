@extends('admin.layouts.base')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-3">Your bank account</h2>
            <a href="{{route('bank.create')}}" class="btn w-sm btn-primary">Add account</a>
        </div>
        <div class="padding">
            <div id="toolbar">
                <button id="trash" class="btn btn-icon btn-white i-con-h-a mr-1"><i
                        class="i-con i-con-trash text-muted"><i></i></i></button>
            </div>
            <table class="table table-theme v-middle" data-plugin="bootstrapTable" id="table" data-toolbar="#toolbar"
                data-search="true" data-search-align="left" data-show-columns="true" data-show-export="true"
                data-detail-view="false" data-mobile-responsive="true" data-pagination="true"
                data-page-list="[10, 25, 50, 100, ALL]">
                <thead>
                    <tr>
                        <th data-checkbox="true"></th>
                        <th data-sortable="true" data-field="id">ID</th>
                        <th data-sortable="true">Owner</th>
                        <th data-sortable="true">Project</th>
                        <th data-sortable="true">Tasks</th>
                        <th data-sortable="true">Finish</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" " data-id="2">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="2">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">2</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-primary-lt">
                                    <img src="../assets/img/a2.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Mike</a>

                            <div class="item-except text-muted h-1x">
                                <a href='#'>@James</a> Hey bro, I need to work on a new fashion website, Can you point
                                me to a good design website for free stock img?
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                10
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                4
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="3">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="3">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">3</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-info-lt">
                                    <img src="../assets/img/a3.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">William McCoy</a>

                            <div class="item-except text-muted h-1x">
                                Silence is likely the most important factor in providing focus and improving workflow
                                efficiently. Unfortunately it isn't always respected.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                10
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                50
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="7">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="7">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">7</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-primary-lt">
                                    <img src="../assets/img/a7.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Louis Little</a>

                            <div class="item-except text-muted h-1x">
                                I'm a kind of hipster when it comes to browsers, as I do not like stable releases. They
                                are pretty much boring haha.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                510
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                5
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="4">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="4">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">4</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-success-lt">
                                    <img src="../assets/img/a4.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Gorge Garcia</a>

                            <div class="item-except text-muted h-1x">
                                Highly scalable localization management service designed for translating software
                                products, such as apps, sites and games.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                20
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                7
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="6">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="6">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">6</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-danger-lt">
                                    <img src="../assets/img/a6.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Brittany Ryan</a>

                            <div class="item-except text-muted h-1x">
                                This Friday, invest a few hours contributing to the software you use and love.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                220
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                5
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="5">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="5">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">5</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-warning-lt">
                                    <img src="../assets/img/a5.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Scott Ortega</a>

                            <div class="item-except text-muted h-1x">
                                A light-weight, no-dependency, vanilla JavaScript engine to drive the user's focus
                                across the page
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                100
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                3
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="9">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="9">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">9</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-info-lt">
                                    <img src="../assets/img/a9.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Howard Morgan</a>

                            <div class="item-except text-muted h-1x">
                                What are you doing today? <a href='#'>@FashionDesign</a> Oh here, check out the new
                                trailer for <a href='#'>Man of Steel</a>
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                2310
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                20
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="15">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="15">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">15</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-success-lt">
                                    G
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Gary Woods</a>

                            <div class="item-except text-muted h-1x">
                                You don’t have to switch tools to review code, share input on projects, or open up the
                                conversation to the rest of your team.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                240
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                50
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="11">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="11">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">11</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-info-lt">
                                    K
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Kenneth Pierce</a>

                            <div class="item-except text-muted h-1x">
                                @DataAPI Implemented new API for transation data from client to server.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                240
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                50
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="8">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="8">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">8</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-success-lt">
                                    <img src="../assets/img/a8.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">John Keller</a>

                            <div class="item-except text-muted h-1x">
                                It's been a Javascript kind of day...
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                220
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                4
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="12">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="12">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">12</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-info-lt">
                                    D
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">David McCoy</a>

                            <div class="item-except text-muted h-1x">
                                Your teammates shouldn’t have to think too hard about what a thumbs up emoji means.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                14
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                20
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="1">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="1">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">1</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-primary-lt">
                                    <img src="../assets/img/a1.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Steven Owens</a>

                            <div class="item-except text-muted h-1x">
                                I'm working on a really amazing project right now, <a href='#'>@samsoe</a> said so, <a
                                    href='#'>Here is a little tease</a>
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                210
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                5
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="13">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="13">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">13</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-primary-lt">
                                    J
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Joe Ortiz</a>

                            <div class="item-except text-muted h-1x">
                                A well-timed app can complement your workflow and help your team accomplish more
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                14
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                20
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="14">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="14">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">14</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-warning-lt">
                                    L
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Lori Kelley</a>

                            <div class="item-except text-muted h-1x">
                                We’re building developer tools, too. We hope they help you work on projects of any size
                                and share ideas with your friends and coworkers
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                14
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                20
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=" " data-id="10">
                        <td>
                            <label class="ui-check m-0 ">
                                <input type="checkbox" name="id" value="10">
                                <i></i>
                            </label>
                        </td>
                        <td>
                            <small class="text-muted">10</small>
                        </td>
                        <td>
                            <a href="#">
                                <span class="w-32 avatar circle bg-warning-lt">
                                    <img src="../assets/img/a10.jpg" alt=".">
                                </span>
                            </a>
                        </td>
                        <td class="flex">
                            <a href="#" class="item-author ">Gerald Hansen</a>

                            <div class="item-except text-muted h-1x">
                                If you’re on the other side of a review, you can request reviews from your peers to get
                                the exact exceptback you need.
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                240
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                50
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href="#">
                                        See detail
                                    </a>
                                    <a class="dropdown-item">
                                        Download
                                    </a>
                                    <a class="dropdown-item">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        Delete item
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- ############ Main END-->
</div>
@endsection
