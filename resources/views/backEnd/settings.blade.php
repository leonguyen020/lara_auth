@extends('backEnd.layout')

@section('headLinks')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        .nav-tabs-dropdown {
            display: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .nav-tabs-dropdown:before {
            content: "\e114";
            font-family: 'Glyphicons Halflings';
            position: absolute;
            right: 30px;
        }

        @media screen and (min-width: 769px) {
            #nav-tabs-wrapper {
                display: block!important;
            }
        }
        @media screen and (max-width: 768px) {
            .nav-tabs-dropdown {
                display: block;
            }
            #nav-tabs-wrapper {
                display: none;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                text-align: center;
            }
            .nav-tabs-horizontal {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
            .nav-tabs-horizontal  > li {
                float: none;
            }
            .nav-tabs-horizontal  > li + li {
                margin-left: 2px;
            }
            .nav-tabs-horizontal > li,
            .nav-tabs-horizontal > li > a {
                background: transparent;
                width: 100%;
            }
            .nav-tabs-horizontal  > li > a {
                border-radius: 4px;
            }
            .nav-tabs-horizontal  > li.active > a,
            .nav-tabs-horizontal  > li.active > a:hover,
            .nav-tabs-horizontal  > li.active > a:focus {
                color: #ffffff;
                background-color: #428bca;
            }
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        @include('backEnd.includes.breadcrumb')
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Settings</a>
                    <ul class="nav nav-tabs nav-pills nav-stacked well">
                        <li class="active"><a href="#vtab1" data-toggle="tab">General Settings</a></li>
                        <li><a href="#vtab2" data-toggle="tab">Tab 2</a></li>
                        <li><a href="#vtab3" data-toggle="tab">Tab 3</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                            <h3>Tab 1</h3>
                            <p>Place a link with the class <code>.nav-tabs-dropdown.btn.btn-block.btn-primary</code> above the tabs list and add an id of <code>#nav-tabs-wrapper</code> to the tabs list for the dropdown to work.
                                <pre>
                            <code class="language-html" data-lang="html">
                            <p><span><</span>a <span style="color: #4f9fcf">href=</span><span style="color: #d44950;">"#"</span> <span style="color: #4f9fcf">class=</span><span style="color: #d44950;">"nav-tabs-dropdown btn btn-block btn-primary"</span><span>></span>Tabs<span><span><</span>/<span>a></span></span><br/><span><span><</span>ul</span> <span style="color: #4f9fcf">id=</span><span style="color: #d44950;">"nav-tabs-wrapper"</span> <span style="color: #4f9fcf">class=</span><span style="color: #d44950;">"nav nav-tabs nav-pills nav-stacked wells"</span><span>>...</ul></span></p>
                            </code>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vtab2">
                            <h3>Tab 2</h3>
                            <p> Mauris imperdiet dignissim ante, in efficitur mauris elementum sed. Cras vulputate malesuada magna. Morbi tincidunt eros a dui cursus, vitae dignissim nulla scelerisque. Duis pharetra scelerisque mi vel luctus. Cras eu purus efficitur, blandit nisi id, fringilla nulla.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                            <h3>Tab 3</h3>
                            <p>Etiam id pharetra quam. Morbi tristique nunc vel sapien dapibus, sit amet imperdiet quam venenatis. Vestibulum et suscipit urna. Suspendisse volutpat quis est eu volutpat. Nulla non tortor venenatis turpis congue aliquet. Vivamus at elit vel massa elementum tempor sit amet sed odio. Nullam placerat, arcu sed ullamcorper ornare, erat erat placerat quam, in feugiat nulla purus in nunc. Maecenas vitae erat auctor, aliquam tellus et, vulputate eros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extendScripts')
    <script>
        $('.nav-tabs-dropdown').each(function(i, elm) {

            $(elm).text($(elm).next('ul').find('li.active a').text());

        });

        $('.nav-tabs-dropdown').on('click', function(e) {

            e.preventDefault();

            $(e.target).toggleClass('open').next('ul').slideToggle();

        });

        $('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

            e.preventDefault();

            $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

        });
    </script>
@endsection