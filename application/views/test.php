<h1 class="sepH_c">Accordion</h1>
<div class="mAccordion">
    <div class="micro">
        <h4><span class="head-inner">First Section</span></h4>
        <div class="sub_section">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla felis lorem. Quisque orci massa, fringilla eu ornare et, pellentesque a magna. Nulla facilisi. Vestibulum ligula lacus, interdum id rhoncus id, sagittis sed lorem. Duis mattis consectetur neque, nec condimentum nibh cursus eu. Nunc tincidunt consequat purus sit amet consequat. Sed euismod nisl a velit tristique hendrerit adipiscing neque dapibus. Donec hendrerit cursus pharetra. Aenean non enim dolor. In mollis elit ac velit mollis in gravida urna consequat. Vivamus nec consequat turpis.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla felis lorem. Quisque orci massa, fringilla eu ornare et, pellentesque a magna. Nulla facilisi. Vestibulum ligula lacus, interdum id rhoncus id, sagittis sed lorem. Duis mattis consectetur neque, nec condimentum nibh cursus eu. Nunc tincidunt consequat purus sit amet consequat. Sed euismod nisl a velit tristique hendrerit adipiscing neque dapibus. Donec hendrerit cursus pharetra. Aenean non enim dolor. In mollis elit ac velit mollis in gravida urna consequat. Vivamus nec consequat turpis.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla felis lorem. Quisque orci massa, fringilla eu ornare et, pellentesque a magna. Nulla facilisi. Vestibulum ligula lacus, interdum id rhoncus id, sagittis sed lorem. Duis mattis consectetur neque, nec condimentum nibh cursus eu. Nunc tincidunt consequat purus sit amet consequat. Sed euismod nisl a velit tristique hendrerit adipiscing neque dapibus. Donec hendrerit cursus pharetra. Aenean non enim dolor. In mollis elit ac velit mollis in gravida urna consequat. Vivamus nec consequat turpis.
        </div>
    </div>
    <div class="micro">
        <h4 class="bg_a"><span class="head-inner">Second Section <span class="small">(class="bg_a")</span></span></h4>
        <div class="sub_section">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla felis lorem. Quisque orci massa, fringilla eu ornare et, pellentesque a magna. Nulla facilisi. Vestibulum ligula lacus, interdum id rhoncus id, sagittis sed lorem. Duis mattis consectetur neque, nec condimentum nibh cursus eu. Nunc tincidunt consequat purus sit amet consequat. Sed euismod nisl a velit tristique hendrerit adipiscing neque dapibus. Donec hendrerit cursus pharetra. Aenean non enim dolor. In mollis elit ac velit mollis in gravida urna consequat. Vivamus nec consequat turpis.
            Morbi vitae lorem urna, at vehicula lorem. Suspendisse hendrerit semper turpis, eu bibendum nibh pellentesque nec. In eleifend lectus et nibh ultricies rutrum fringilla urna hendrerit. Maecenas vel magna vitae massa laoreet vestibulum ut ac nisi. Praesent tortor libero, vestibulum adipiscing suscipit sed, rhoncus scelerisque nisi. Nunc eu lorem tortor. Aliquam elementum magna quis massa fringilla elementum. Aenean fermentum mauris non orci facilisis euismod commodo tortor suscipit. Cras lobortis vulputate sollicitudin. Maecenas in diam sapien. Integer hendrerit tincidunt sapien, nec ultricies lorem ullamcorper eu. Donec pretium viverra dolor ut elementum. Praesent rutrum diam eget tortor pellentesque nec eleifend velit sodales. Donec condimentum bibendum ligula vel viverra. Donec volutpat, lorem sed porttitor ultricies, quam dui sagittis lectus, vitae volutpat velit lectus eu augue. Nulla vehicula mi ac dolor porttitor at consectetur tortor adipiscing.
        </div>
    </div>
    <div class="micro">
        <h4 class="bg_b"><span class="head-inner">Third Section <span class="small">(class="bg_b")</span></span></h4>
        <div class="sub_section">
            Morbi vitae lorem urna, at vehicula lorem. Suspendisse hendrerit semper turpis, eu bibendum nibh pellentesque nec. In eleifend lectus et nibh ultricies rutrum fringilla urna hendrerit. Maecenas vel magna vitae massa laoreet vestibulum ut ac nisi. Praesent tortor libero, vestibulum adipiscing suscipit sed, rhoncus scelerisque nisi. Nunc eu lorem tortor. Aliquam elementum magna quis massa fringilla elementum. Aenean fermentum mauris non orci facilisis euismod commodo tortor suscipit. Cras lobortis vulputate sollicitudin. Maecenas in diam sapien. Integer hendrerit tincidunt sapien, nec ultricies lorem ullamcorper eu. Donec pretium viverra dolor ut elementum. Praesent rutrum diam eget tortor pellentesque nec eleifend velit sodales. Donec condimentum bibendum ligula vel viverra. Donec volutpat, lorem sed porttitor ultricies, quam dui sagittis lectus, vitae volutpat velit lectus eu augue. Nulla vehicula mi ac dolor porttitor at consectetur tortor adipiscing.
        </div>
    </div>
    <div class="micro">
        <h4 class="bg_f"><span class="head-inner">Fourth Section <span class="small">(class="bg_f")</span></span></h4>
        <div class="sub_section">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla felis lorem. Quisque orci massa, fringilla eu ornare et, pellentesque a magna. Nulla facilisi. Vestibulum ligula lacus, interdum id rhoncus id, sagittis sed lorem. Duis mattis consectetur neque, nec condimentum nibh cursus eu. Nunc tincidunt consequat purus sit amet consequat. Sed euismod nisl a velit tristique hendrerit adipiscing neque dapibus. Donec hendrerit cursus pharetra. Aenean non enim dolor. In mollis elit ac velit mollis in gravida urna consequat. Vivamus nec consequat turpis.
        </div>
    </div>
</div>


<script type="text/javascript">
    head.js("js/jquery-1.6.2.min.js");
    head.js("lib/fusion-charts/FusionCharts.js");
    head.js("js/jquery.microaccordion.js");
    head.js("js/jquery.stickyPanel.js");
    head.js("js/xbreadcrumbs.js");
    head.js("js/lagu.js");

    head.ready(function(){
        lga_fusionCharts.chart_k();
        $(".mAccordion div.sub_section").each (function() {
            $(this).css("height", $(this).height());
        });
        $('.mAccordion').microAccordion({
            openSingle: true,
            closeFunction: function (obj) {
                obj.slideUp('fast');
            },
            toggleFunction: function (obj) {
                obj.slideToggle('fast');
            }
        });
    });
</script>