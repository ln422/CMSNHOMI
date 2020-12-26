<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-8">
    <section class="parallax_window_home bright" style="background: url(https://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/02/parallax_home_bright.jpg) no-repeat center center;">
        <div class="container">
            <div class="main_title">
                <h3>How TravelGuide <strong>Works</strong></h3>
            </div>
            <div class="row features add_bottom_45">
               

                <div class="col-sm-4">

                    <div class="feat_2 btt">

                        <a href="#" class="bt_info"></a>

                        <h3>Find places</h3>

                        <p>

                            The most interesting place close to you. Attractions, Museums, Restaurant...
                        </p>

                    </div>

                </div>

                

                <div class="col-sm-4">

                    <div class="feat_1 btt">

                        <a href="#" class="bt_info"></a>

                        <h3>Get info&amp;tips</h3>

                        <p>

                            The most interesting place close to you. Attractions, Museums, Restaurant...
                        </p>

                    </div>

                </div>

                

                <div class="col-sm-4">

                    <div class="feat_3 btt">

                        <a href="#" class="bt_info"></a>

                        <h3>Read and listen</h3>

                        <p>

                            The most interesting place close to you. Attractions, Museums, Restaurant...
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </section>
</div>