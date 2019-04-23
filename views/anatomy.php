
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anatomy Articles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" media="screen" href="<?php echo base_url ('assets/css/anatomy.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container">
        <div class="row">
                <div class="col-md-8">
	
                        <!-- Title + Sort -->
                        <div class="title-area">
                            <div class="article-head">Articles on</div>
                            <h1> 
                                    Anatomy 
                            </h1>
                            <span class="change-specialty">Change</span>
                        </div>
                        <div class="topic-index-intro">
                        </div>
                        <div class="sort-select-wrap">
                            <span class="sort-header">Show articles :</span>
                            <div class="sort-select">
                                <span class="sort-link category">By Category</span>
                                <span class="sort-link-divide"></span>
                                <span class="sort-link alpha selected">Alphabetically</span>
                            </div>
                        </div>
                        <!-- /Title + Sort -->
                        <!-- Topics -->
                        <div class="topic-list sections">
                            <span class="topic-expand">Expand All</span>				
                            <div class="topic-section-wrap">                               
                                    <div class="topic-section">
                                        <div class="topic-head">Anatomy</div>
                                        <ul>                                           
                                                <li><a href="<?php echo base_url();?>medscape/ankle">Ankle Joint Anatomy</a></li>
                                                <li><a href="<?php echo base_url();?>medscape/ear">Ear Anatomy</a></li>
                                                <li><a href="<?php echo base_url();?>medscape/heart">Heart Anatomy</a></li>
                                        </ul>
                                    </div>                            
                            </div>				
                        </div>
                        <!-- /Topics -->
                        
                        <!-- Alpha -->
                        <div class="topic-list alpha active">
                            <div class="alpha-select-wrap">
                                <div data-alpha="ALL" class="alpha-select selected">All</div>
                                <div data-alpha="A" class="alpha-select">A</div>
                                <div data-alpha="B" class="alpha-select disabled">B</div>
                                <div data-alpha="C" class="alpha-select disabled">C</div>
                                <div data-alpha="D" class="alpha-select disabled">D</div>
                                <div data-alpha="E" class="alpha-select">E</div>
                                <div data-alpha="F" class="alpha-select disabled">F</div>
                                <div data-alpha="G" class="alpha-select disabled">G</div>
                                <div data-alpha="H" class="alpha-select">H</div>
                                <div data-alpha="I" class="alpha-select disabled">I</div>
                                <div data-alpha="J" class="alpha-select disabled">J</div>
                                <div data-alpha="K" class="alpha-select disabled">K</div>
                                <div data-alpha="L" class="alpha-select disabled">L</div>
                                <div data-alpha="M" class="alpha-select disabled">M</div>
                                <div data-alpha="N" class="alpha-select disabled">N</div>
                                <div data-alpha="O" class="alpha-select disabled">O</div>
                                <div data-alpha="P" class="alpha-select disabled">P</div>
                                <div data-alpha="Q" class="alpha-select disabled">Q</div>
                                <div data-alpha="R" class="alpha-select disabled">R</div>
                                <div data-alpha="S" class="alpha-select disabled">S</div>
                                <div data-alpha="T" class="alpha-select disabled">T</div>
                                <div data-alpha="U" class="alpha-select disabled">U</div>
                                <div data-alpha="V" class="alpha-select disabled">V</div>
                                <div data-alpha="W" class="alpha-select disabled">W</div>
                                <div data-alpha="X" class="alpha-select disabled">X</div>
                                <div data-alpha="Y" class="alpha-select disabled">Y</div>
                                <div data-alpha="Z" class="alpha-select disabled">Z</div>
                                <div data-alpha="0" class="alpha-select disabled">0-9</div>
                            </div>
            
                            <div class="topic-alpha-wrap">
                                <ul>
                                    <li class="alpha-item" data-alpha="A">
                                        <a href="<?php echo base_url();?>medscape/ankle">Ankle Joint Anatomy</a>
                                    </li>
                                    <li class="alpha-item" data-alpha="E">
                                        <a href="<?php echo base_url();?>medscape/ear">Ear Anatomy</a>
                                    </li>
                                    <li class="alpha-item" data-alpha="H">
                                        <a href="<?php echo base_url();?>medscape/heart">Heart Anatomy</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- /Alpha -->

                        <div class="back-to-top" style="display: none;">
                            <div class="arrow-up"></div>
                            <div class="back-to-top-text">Top</div>
                        </div>
                </div>
                <div class="col-md-4">
                    
                </div>
        </div>
    </div>
</body>
</html>
