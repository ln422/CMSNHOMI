<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-13">
    <div class="container content1">
        <div class="row">
            <div class="col-md-6 word-left">
                <div class="main_title_left">

                    <h2>Excellent<br>
                    Travel Services Provider</h2>

                    <p>Ex graeco nostrud theophrastus nam, cum tibique reprimique ad. Mea omittam electram te, eu cum fastidii sapientem delicatissimi.</p>

                    <span><em></em></span>

                </div>
                <br>
                Ex has nihil liberavisse philosophia. Ne mazim quidam contentiones usu. Id nec
                <strong>causae periculis </strong>
                evertitur, stet menandri an pro, his argumentum appellantur eu. An laudem efficiendi has, utinam principes consequat id vel.
                <p></p>
                <p>Ex graeco nostrud theophrastus nam, cum tibique reprimique ad. Mea omittam electram te, eu cum fastidii sapientem delicatissimi. Sed cu eripuit veritus propriae. An eam choro saperet ullamcorper, eam <strong>saperet rationibus</strong> ut. Cu usu tation quaeque vocibus, alterum torquatos persequeris te ius.</p>
                <h3>Mission</h3>
                <p>Ex graeco nostrud theophrastus nam, cum tibique reprimique ad. Mea omittam electram te, eu cum fastidii sapientem delicatissimi. Sed cu eripuit veritus propriae. An eam choro saperet ullamcorper, eam <strong>saperet rationibus</strong> ut. Cu usu tation quaeque vocibus, alterum torquatos persequeris te ius.</p>
                <p></p>
            </div>
            <div class="col-md-6 img-right">
                <img src="images/mobile.png" width="316" height="647" alt="" class="img-responsive">
            </div>
        </div>
    </div>
    <div class="container content2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/team.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-7 word-right">

                    <div class="main_title_left">

                        <h3>Quality Team<br>
                        Authors and Reviewers</h3>

                        <p>Ex graeco nostrud theophrastus nam, cum tibique reprimique ad. Mea omittam electram te, eu cum fastidii sapientem delicatissimi.</p>

                        <span><em></em></span>

                    </div>

                    <br>
                        Ex has nihil liberavisse philosophia. Ne mazim quidam contentiones usu. Id nec <strong>causae periculis </strong>evertitur, stet menandri an pro, his argumentum appellantur eu. An laudem efficiendi has, utinam principes consequat id vel.<p></p>
                    <h4>Filosofy</h4>
                    <p>Ex graeco nostrud theophrastus nam, cum tibique reprimique ad. Mea omittam electram te, eu cum fastidii sapientem delicatissimi. Sed cu eripuit veritus propriae. An eam choro saperet ullamcorper, eam <strong>saperet rationibus</strong> ut. Cu usu tation quaeque vocibus, alterum torquatos persequeris te ius.</p>
                    <p>
                </p>
            </div>
        </div>
    </div>
</div>