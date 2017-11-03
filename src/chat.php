<?php
session_start();
    $email = $_SESSION['email'];
    $roomnum  = $_GET['roomnum'];
    $roomname = $_GET['roomname'];        
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>DASHGUM - Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <section id="container">
            <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.html" class="logo"><b>DASHGUM</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-tasks"></i>
                                <span class="badge bg-theme">4</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 4 pending tasks</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">DashGum Admin Panel</div>
                                            <div class="percent">40%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Database Update</div>
                                            <div class="percent">60%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Product Development</div>
                                            <div class="percent">80%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Payments Sent</div>
                                            <div class="percent">70%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">70% Complete (Important)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-theme">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                        <span class="subject">
                                    <span class="from">Zac Snider</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                        <span class="subject">
                                    <span class="from">Divya Manian</span>
                                        <span class="time">40 mins.</span>
                                        </span>
                                        <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                        <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                        <span class="time">2 hrs.</span>
                                        </span>
                                        <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                        <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                        <span class="time">4 hrs.</span>
                                        </span>
                                        <span class="message">
                                        Please, answer asap.
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="login.html">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
                  <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered"><?=$email?></h5>
                          
                    <li class="mt">
                        <a class="active" href="Dashboard.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
  
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Code</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-bar-chart"></i>
                            <span>Coding Convention</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="form_component.html">Rule Setting</a></li>
                            <li><a  href="advanced_form_components.html">Rule Docs</a></li>
                            <li><a  href="form_validation.html">Report from Sonar</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-file-code-o"></i>
                            <span>Code Review</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-users"></i>
                            <span>Account & Team</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="blank.html">Edit profile</a></li>
                            <li><a  href="login.html">Team setting</a></li>
                            <li><a  href="lock_screen.html">Message</a></li>
                            <li><a  href="lock_screen.html">Chat Room</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Agile Setting</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="dropzone.html">Issue</a></li>
                            <li><a  href="sprint-plan.html">Sprint Plan</a></li>
                            <li><a  href="todo_list.html">Calendar</a></li>
                        </ul>
                    </li>
					<li class="sub-menu">
			<a href="ManageProject.html">
				<i class="fa fa-desktop"></i>
				<span>ManageProject</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="lobby.html">
				<i class="fa fa-comments-o"></i>
				<span>Chat Room</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="Scheduler.html">
				<i class="fa fa-tasks"></i>
				<span>Scheduler</span>
			</a>
		</li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <!-- page start-->
                    <div class="chat-room mt">
                        <aside class="mid-side">
                            <div class="chat-room-head">
                                <h3>Chat Room:
                                    <?=$roomname?>
                                </h3>
                                <form action="#" class="pull-right position">
                                    <input type="text" placeholder="Search" class="form-control search-btn ">
                                </form>
                            </div>
                            
                            
                            <div id="message" style="height:500px;overflow:auto;">
                            </div>
                            <!--<footer>-->
                                <form>
                                        <input type="hidden" name="roomnum" id = "roomnum" value="<?=$roomnum?>">
                                        <input type="hidden" name="roomname" id = "roomname" value="<?=$roomname?>">
                                        <div class="chat-txt">
                                            <input placeholder="type your message here" type="text" class="form-control" name="chat" id="chat">
                                        </div>
                                        <div class="btn-group hidden-sm hidden-xs">
                                            <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                                            <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
                                        </div>

                                        <button type="submit" class="btn btn-theme" id="send" >Send</button>
                                </form>
                            <!--</footer>-->
                        </aside>
                        <aside class="right-side">
                            <div class="user-head">
                                <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
                                <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
                            </div>
                            <div class="invite-row">
                                <h4 class="pull-left">Team Members</h4>
                                <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
                            </div>
                            <ul class="chat-available-user">
                                <li>
                                    <a href="chat_room.html">
                                        <img class="img-circle" src="assets/img/friends/fr-02.jpg" width="32"> moon@gmail.com
                                        <span class="text-muted">1h:02m</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat_room.html">
                                        <img class="img-circle" src="assets/img/friends/fr-05.jpg" width="32"> dsa
                                        <span class="text-muted">1h:08m</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </aside>
                    </div>
                    <!-- page end-->
                </section>
                <! --/wrapper -->
            </section>
            <!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 - Alvarez.is
                    <a href="chat_room.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>

        <!--common script for all pages-->        

        <!--script for this page-->
        <script>
            
            //ajax_request("chat_room.php"); //0.5초마다 chat_room.php의 내용을 불러온다.
            
            $(document).ready(function() { //이 HTML도큐먼트가 로드되면 실행되는 함수
                //ajax_request("chat_room.php");
                $("#send").click(function() { //#send 의 클릭 이벤트 발생시                 
                    var form_data = { //POST로 보낼 formdata를 ajax형태로 생성해줌.
                        chat: $("#chat").val(),
                        roomnum : $('#roomnum').attr('value'),
                        roomname : $('#roomname').attr('value'),
                        is_ajax: 1
                    };
                    $.ajax({ //Jquery에서 지원하는 AJAX
                        type: "POST",
                        url: "chatSend.php",
                        data: form_data
                    });
                    ajax_request("chat_room.php");
                    document.getElementById('chat').value = '';
                    document.getElementById('chat').placeholder = 'type your message here';
                    return false;
                });
            });
            function ajax_request(url) //이 함수는 Jquery를 사용하지 않은 AJAX
            {
                var xhr = new XMLHttpRequest();
                var data = new FormData();
                $roomnum = $('#roomnum').attr('value');
                $roomname = $('#roomname').attr('value');
                data.append('roomnum', $roomnum);
                data.append('roomname', $roomname);

                xhr.open('post', url);

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            
                            $("#message").html(xhr.responseText);
                            $('#message').scrollTop($('#message').prop('scrollHeight'));
                        } else {
                            if (xhr.status != 0)
                                alert('Error: ' + xhr.status);
                        }
                    }
                }
                xhr.send(data)
                
                
            } //인터벌 500인 타이머 생성후 코드 반복 실행
             var timer = setInterval(function() { //인터벌 500인 타이머 생성후 코드 반복 실행                
                ajax_request("chat_room.php"); //0.5초마다 chat_room.php의 내용을 불러온다.
            }, 500);
            
            
            
            
        </script>

    </body>

    </html>
