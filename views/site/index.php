<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4"></iframe>
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">ТОП PK</div>
                    <div class="panel-body">
                        <ul class="list-group" id="top_pk" >
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">ТОП PVP</div>
                    <div class="panel-body">
                        <ul class="list-group" id="top_pvp" >
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Замки</div>
                    <div class="panel-body">
                        <ul class="list-group" id="castle" >
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
