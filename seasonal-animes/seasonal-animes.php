<?php
/*
* Plugin Name: MAL Seasonal Animes
* Description: none
* Version: 1.1
* Author: PANYOR Solutions Ltd.
* Author URI: no
*/



include_once "myapi.php";

/* * {
  box-sizing: border-box;
}*/
/* Responsive columns */
/*
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.bor2{
    border: 1px black solid;
}*/

function get_seasonal(){
    echo '<div><style>


.col23{
    float: left;
    width: 25%;
    min-width: 350px;
    max-width: 25%;
}
.row23{
    background: transparent;
}

.row23:after{
    content: "";
    display: table;
    clear: both;
    background: transparent;
}


.card-main23 {
    background-color: rgba(251,255,251,0.61);
    border-radius: 8px;
    padding: 1em;
    
    width: 100%;
    display: table;
    clear: both;
    
    height: 430px;
    
    -webkit-box-shadow: 10px 10px 18px -5px rgba(97,97,97,1);
    -moz-box-shadow: 10px 10px 18px -5px rgba(97,97,97,1);
    box-shadow: 10px 10px 18px -5px rgba(97,97,97,1);
}

.card-main23 .meta{
    color: #141415;
}

.card-main23 .desc{
    font-size: 10pt;
    padding: 0.6em;
    font-style: italic;
    text-overflow: ellipsis;
    overflow: hidden;
    max-height: 300px;
}
.card-main23 .url{
    text-align: right;
    font-size: 9pt;
    margin-right: 2em;
}
.card-main23 .title{
    width: 100%;
    background-color: #4f5157;
    height: 3em;
    color: #dcddde;
    font-size: 12pt;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-parent{
    padding: 0.7em;
}

.airdate{
    font-size: 10pt;
    padding-bottom: 0.5em;
    color: #7112e2;
}

</style>';
    $result = get_seasonal_animes();

    $res = 0;
    echo '<div class="row23" style="max-width: 1500px">';
    foreach ($result->anime as $key=>$anime){
        if ($anime->type == "TV" && $anime->continuing == false){
            echo '<div class="col23">
                    <div class="card-parent">
                        <div class="card-main23">
                            <div class="title">
                                <div style="text-align: center;"><span>' . $anime->title . '</span></div>
                            </div>
                            <div style="margin-top: 1em;">
                                <div style="min-width: 50%; max-width: 50%; float: left;" class="meta">
                                    <div class="desc">' . $anime->synopsis . '</div>
                                    <div class="url"><a href="' . $anime->url . '" target="_blank">read more...</a></div>
                                </div>
                                <div style="min-width: 50%; max-width: 50%; float: left;"><div class="airdate">Airing: '. date('d/m/Y', strtotime($anime->airing_start)) .'</div><img src="' . $anime->image_url . '" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                  </div>';
            $res = $key;
        }
    }
    echo '</div></div>';

}

add_shortcode('get_seasonal','get_seasonal');



