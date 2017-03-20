<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title> Admin</title>

</head>
<body class="bg_c sidebar fixed">

<div id="slide_wrapper">
    <div id="slide_panel" class="wrapper">
        <div id="slide_content">
            <span id="slide_close"><img src="<?php echo base_url();?>assets/images/blank.gif" alt=""
                                        class="round_x16_b"/></span>
            <div class="row cf">
                <div class="dp75 taj">
                    <h4 class="sepH_b"></h4>
                </div>
                <div class="dp25">
                    <div id="chart_k"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="top_bar">
    <div class="wrapper cf">
        <ul class="fl">
            <li class="sep">Welcome <strong><a
                    href="<?php echo site_url()?>"><?php echo $this->session->userdata('user_email');?></a></strong>
            </li>
            <li class="sep"><a href="<?php echo site_url($this->ezuri->logout());?>">Logout</a></li>
        </ul>
    </div>
</div>

</body>
</html>